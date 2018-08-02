<div class="container">
  <h2>Sub Domain List</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Subdomain Name</th>
      </tr>
    </thead>
    <tbody>
      <?php if(!empty($domain)){?>
      <?php foreach($domain as $domain){?>
      <tr>
        
        <?php $domn = ltrim($domain['domain_name']);
          $url = "http://".$domn."";
          $new = str_replace(' ', '%20',$url);

        ?>
        <td><a href="<?php echo $new;?>"><?php echo $domn;?></a></td>
      </tr>
      <?php }}?>
    </tbody>
  </table>
</div>