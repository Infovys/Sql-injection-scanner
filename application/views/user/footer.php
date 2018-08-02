
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/paperscript" src="<?php echo base_url();?>assets/js/metaball.js" data-paper-canvas="infobg"></script>
<script src="<?php echo base_url().'assets/js/validate/jquery.validate.min.js'; ?>"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>

<script>
        $("#website_scan").validate({
            rules: {
                site: {
                    url: true,
                    minlength: 10
                },
            },
        messages: {
                
                site: "Please Enter a Valid URL ",

            },
            submitHandler: function(form) {
            $(this).children('input[type=submit]').prop('disabled', true);
             $(form).hide();
            $('#loader').show();
             $('#domain').show();
            var domain = $('#domain-text').val();
            $('#domain').text(domain);
          $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
           success: function(data)
{
    if(data!='')
    {   
        $('#search_result').empty();
        $('#message').empty();
        $('#search_result').html('<pre>'+data+'</pre>');
        $('#website_scan').show();
        $('#loader').hide();
        $('#domain').hide();
    }
    else 
    {    
        $('#search_result').empty();
          $('#message').empty();
        $('#search_result').append('<div class="alert alert-info"><strong>No Sub Doamins</strong>&nbsp;We could not find any subdomains related to this domain. You  will get  subdomain list  of this domain soon !</div>');
        $('#website_scan').show();
        $('#loader').hide();
        $('#domain').hide();
    }
 
},
error: function(data){
$("#error").html(data);
}           
});
    }
        });
    </script>
   


</body>
</html>
