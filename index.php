<?php
include('php/header.inc.php');
include('php/navBar.inc.php');?>

<div id="DIVID">
  <?php
  include('php/contenu.inc.php');
  ?>
  <?php
  include('php/footer.inc.php');
  ?>
</div>

<script type="text/javascript">
    function btnclick(_url){
        $.ajax({
            url : _url,
            type : 'post',
            success: function(data) {
             $('#DIVID').html(data);
            },
            error: function() {
             $('#DIVID').text('An error occurred');
            }
        });
    }
</script>