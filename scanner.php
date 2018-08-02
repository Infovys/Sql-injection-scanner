<?php
error_reporting(0);
ini_set('max_execution_time', 1500);
$text = '';
Start();

function Start() {
    
        $site = $_REQUEST['site'];
        $cmd = trim($site);       
        full($cmd);
            
     
}






function full($site) {

    print "[-] Start SQL Injection Scan\n";
    sql($site, 1);
}






function sql($site = '', $full = '0') {
    $sql_error = array(
        'You have an error in your SQL',
        'Division by zero in',
        'supplied argument is not a valid MySQL result resource in',
        'Call to a member function',
        'Microsoft JET Database','ODBC Microsoft Access Driver',
        'Microsoft OLE DB Provider for SQL Server',
        'Unclosed quotation mark',
        'Microsoft OLE DB Provider for Oracle',
        '[Macromedia][SQLServer JDBC Driver][SQLServer]Incorrect',
        'Incorrect syntax near'
    );
         $site = $_REQUEST['site'];
        $request = parse_url($site);
        $text .=  "[-] URL : $request[host]\n";
        $text .=  "[-] Path: $request[path]\n";
        $text .=  "[-] Try connect to host\n";
        $url = "".$request['scheme']."://".$request['host']."".$request['path']."";
        if(con_host($url))
        {
            print "[-] Connect to host successful\n";
            print Get_Info($url);
            print "[-] Finding link on the website\n";
            print "[+] Found link : ".count(find_link($url))."\n";
            print "[-] Finding vulnerable...\n";
            if(is_array(find_link($url)))
            {
            foreach(find_link($url) as $link) {
                $file = explode("/", $request['path']);
                $request['path'] = preg_replace("/".$file[count($file)-1]."/", "", $request['path']);
                if(!preg_match("/$request[host]/", $link)) { $link = "http://$request[host]/$request[path]$link"; }
                $link = preg_replace("/=(.+)/", "=1'", $link);
                foreach($sql_error as $error) {
                    if(preg_match("/$error/", con_host($link))) {
                        $text .=  "[+] SQL Injection vulnerable : $link\n";
                        $save[] = $link;
                    }
                }
            }
            $text .=  "[+] Done\n";
            echo $text;
            die;
    }

     $text .=  "[+] Done\n";
      echo $text;
    die;

  }
  }
  






function con_host($host) {
    $ch = curl_init($host);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_REFERER, "http://google.com");
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
    $pg = curl_exec($ch);
    if($pg){
        return $pg;
    } else {
        return false;
    }
}

function find_link($site) {
    if($text = con_host($site)) {
    $find = "/href=[\"']?([^\"']+)?[\"']?/i";
    preg_match_all($find, $text, $links);
    
    foreach($links[1] as $link) {
        $a[] = $link;
    }
    return $a;
 }
}

function Get_Info($site) {
    if($info = con_host($site)) {
        preg_match("/Content-Type:(.+)/", $info, $type);
        preg_match("/Server:(.+)/", $info, $server);
        print "[-] $type[0]\n";
        print "[-] $server[0]\n";
        $ip = parse_url($site);
        print "[-] IP: ".gethostbyname($ip['host'])."\n";
    }
}
  



?>
