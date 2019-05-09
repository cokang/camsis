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
event.preventDefault();
jQuery.ajax({
success: function(res) {
// Show Entered Value
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
<form method="get" action="">
<input type="text" placeholder="Asset No">  
<input type="submit" value="Search" class="submit" onchange="javascript: submit()"/></center>
</form>
</div>

<!-- <div class="main">
<div id="content" style="text-align: center;">
<h2 style="text-align: center;" id="form_head">Search Asset</h2><br/>
<div id="form_input"> -->
<!-- <?php

// Form Open
echo form_open();

// Name Field
$data_name = array(
'name' => 'name',
'class' => 'input-form',
'placeholder' => 'Please Enter Asset No',
'id' => 'name'
);
echo form_input($data_name);
?>

<span id="form_button">
<?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
</span>
</div>
<?php
// Form Close
echo form_close(); ?> -->

<?php
// Display Result Using Ajax
echo "<div id='result' style='display: none; text-align: center;' class='m-div'>";
echo "<table class='table'><tr>";
echo "<td class='label_output'>Result</td></tr>";
echo "<tr><td></td><td class='label_output'>Asset No</td><td class='label_output'>:</td><td class='label_output'>XXXXX</td></tr>";
echo "<tr><td></td><td class='label_output'>Name</td><td class='label_output'>:</td><td class='label_output'>YYYYY</td></tr>";
echo "<tr><td></td><td class='label_output'>Location</td><td class='label_output'>:</td><td class='label_output'>ZZZZZ</td></tr>";
echo "</table>";
echo "</div>";
echo "</div>";
?>
</div>
</div>


</body>
</html>