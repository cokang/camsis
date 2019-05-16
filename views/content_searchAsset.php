<html>
<head>
<meta name="viewport" content= "width=device-width, user-scalable=no">
<style type="text/css">
  .label_output{
    font-size: 15px;
    font-weight: bold;
  }

  .table{
    margin-left: 40%;

  }
  @media only screen and (max-width: 600px) {

     .table{
    margin-left: 15%;

}
}
</style>
<script type="text/javascript">

// Ajax post
$(document).ready(function() {
$(".submit").click(function(event) {
jQuery("div#result").hide();	
event.preventDefault();
jQuery.ajax({
type: "POST",
url: "<?=base_url('index.php/ajax/ajax_searchReport');?>",
data: "searchquestion="+$('#serch').val(),
//dataType: "json",
success: function(res) {
 $('#live_data').html(res);
jQuery("div#result").show(res);
}
});
});
});
</script>
</head>
<body>
<div id="Instruction" class="pr-printer">
    <div class="header-pr">Search Asset</div>
    <button type="cancel" class="btn-button btn-primary-button" onclick="window.history.back();">CANCEL</button>
</div>
<div class="menu" style="position:relative;">
<?php include 'content_headprint.php';?>
<div id="Instruction" >
<center><!-- View List :  -->
<form method="" action="" >
<input type="text" placeholder="Asset No" id="serch">  
<input type="submit" class="submit"  onchange="javascript: submit()"/></center>
</form>
</div>



<?php
// Display Result Using Ajax
echo "<div id='result' style='display: none; text-align: center;' class='m-div'>";
echo "<table class='table'><tr>";
echo "<td class='label_output'>Result</td></tr>";
echo " <tbody id='live_data'>
		</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>
</div>
</div>


</body>
</html>