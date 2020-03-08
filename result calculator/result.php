<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RESULT CHECKER</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="calc_new.css" rel="stylesheet">
<link href="result.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.validation.min.js"></script>
<script>
$(document).ready(function()
{
   $("#Form1").submit(function(event)
   {
      var isValid = $.validate.form(this);
      return isValid;
   });
   $("#Editbox1").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE IN 1ST SEM MARKS'
   });
   $("#Editbox2").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE IN 3RD SEM MARKS'
   });
   $("#Editbox3").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE IN 5TH SEM MARKS'
   });
   $("#Editbox4").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE IN 2ND SEM MARKS'
   });
   $("#Editbox5").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE IN 4TH SEM MARKS'
   });
   $("#Editbox6").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE IN 6TH SEM MARKS'
   });
   $("#Form2").submit(function(event)
   {
      var isValid = $.validate.form(this);
      return isValid;
   });
   $("#Editbox9").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE'
   });
   $("#Editbox11").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE'
   });
   $("#Editbox12").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE'
   });
   $("#Editbox7").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE'
   });
   $("#Editbox10").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE'
   });
   $("#Editbox8").validate(
   {
      required: true,
      bootstrap: true,
      type: 'number',
      expr_min: '',
      expr_max: '',
      value_min: '',
      value_max: '',
      length_min: '3',
      length_max: '3',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FF0000',
      color_border: '#808080',
      nohint: false,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'ENTER VALID VALUE'
   });
});
</script>
</head>
<body>
    
    <?php 
 
 $sem1 = $_POST['sem1'];
 $sem2 = $_POST['sem2'];
 $sem3 = $_POST['sem3'];
 $sem4 = $_POST['sem4'];
 $sem5 = $_POST['sem5'];
 $sem6 = $_POST['sem6'];
 $hidden = $_POST['hidden'];
 ?>
    <?php function sem1to5($sem1, $sem2, $sem3, $sem4, $sem5)
{
	echo "$sem1+$sem2+$sem3+$sem4+$sem5";
}

function tillfifth($sem1, $sem2, $sem3, $sem4, $sem5)
{
	$tillfifth = $sem1+$sem2+$sem3+$sem4+$sem5;
	echo "$tillfifth";
}

function fourty($sem1, $sem2, $sem3, $sem4, $sem5)
{
    $tillfifth = $sem1+$sem2+$sem3+$sem4+$sem5;
	$fourty = ($tillfifth*0.4);
	echo "$fourty";
}

function fourtypsix($sem1, $sem2, $sem3, $sem4, $sem5, $sem6)
{
    $tillfifth =  $sem1+$sem2+$sem3+$sem4+$sem5;
    $fourty = ($tillfifth*0.4);
	$total = $fourty+$sem6;
	echo "$total";
}

function percentage($sem1, $sem2, $sem3, $sem4, $sem5, $sem6)
{
    $tillfifth = $sem1+$sem2+$sem3+$sem4+$sem5;
    $fourty = ($tillfifth*0.4);
    $total = $fourty+$sem6;
	$percentage = ($total/2250)*100;$percentage = substr($percentage, 0, 5);
 	echo "$percentage"."%";
}

function cgpa($sem1, $sem2, $sem3, $sem4, $sem5, $sem6, $hidden)
{
    $tillfifth = $sem1+$sem2+$sem3+$sem4+$sem5;
    $fourty = ($tillfifth*0.4);
    $total = $fourty+$sem6;
	$percentage = ($total/2250)*100;
    $cgpa = $percentage+$hidden;
	$cgpa = substr($cgpa, 0, 5); echo "$cgpa";
}
?>
    
<div id="container">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:43px;"><strong>CALCULATE YOUR FINAL SBTE RESULT</strong></span></div>
<div id="wb_Form1">
<form name="Form1" method="post" action="result.php" enctype="multipart/form-data" id="Form1">
<input type="submit" id="Button1" name="" value="CALCULATE" autofocus>
<input type="reset" id="Button2" name="" value="RESET">
<div id="wb_Text2">
<p style="font-size:27px;line-height:30px;font-weight:bold;color:#000000;"><span style="text-decoration:underline;">You Entered:</span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">1st Semester:&nbsp; <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php echo "$sem1";?> </span><span style="color:#FF0000;">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </span>2nd Semester: <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php echo"$sem2";?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">3rd Semester: <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php echo"$sem3";?></span>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 4th Semester: <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php echo"$sem4";?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">5th Semester: <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php echo"$sem5";?></span>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 6th Semester: <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php echo"$sem6";?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">Adding 1st to 5th Sem marks </p>
<p style="font-size:20px;line-height:22.5px;font-weight:bold;color:#000000;"><span style="font-size:16px;line-height:18px;"><?php sem1to5($sem1, $sem2, $sem3, $sem4, $sem5);?> =&gt; </span><span style="color:#008000;"><?php tillfifth($sem1, $sem2, $sem3, $sem4, $sem5);?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">Getting 40% of <?php tillfifth($sem1, $sem2, $sem3, $sem4, $sem5);?> =&gt; <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php fourty($sem1, $sem2, $sem3, $sem4, $sem5);?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">Your Total Marks is (40% + 6th Sem) =&gt; <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php fourtypsix($sem1, $sem2, $sem3, $sem4, $sem5, $sem6);?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">Your Percentage is =&gt; <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php percentage($sem1, $sem2, $sem3, $sem4, $sem5, $sem6);?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">Your CGPA is =&gt; <span style="font-size:20px;line-height:22.5px;color:#008000;"><?php cgpa($sem1, $sem2, $sem3, $sem4, $sem5, $sem6, $hidden);?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">&nbsp;</p></div>
<div id="wb_Editbox1">
    
    <input type="hidden" name="hidden" value="5">
    
<input type="text" id="Editbox1" name="sem1" value="" maxlength="3" tabindex="1" autocomplete="off" spellcheck="false" placeholder="ENTER 1ST SEM MARKS">
<div class="invalid-feedback">ENTER VALID VALUE IN 1ST SEM MARKS</div></div>
<div id="wb_Editbox6">
<input type="text" id="Editbox6" name="sem6" value="" maxlength="3" tabindex="6" autocomplete="off" spellcheck="false" placeholder="ENTER 6TH SEM MARKS">
<div class="invalid-feedback">ENTER VALID VALUE IN 6TH SEM MARKS</div></div>
<div id="wb_Editbox2">
<input type="text" id="Editbox2" name="sem3" value="" maxlength="3" tabindex="3" autocomplete="off" spellcheck="false" placeholder="ENTER 3RD SEM MARKS">
<div class="invalid-feedback">ENTER VALID VALUE IN 3RD SEM MARKS</div></div>
<div id="wb_Editbox3">
<input type="text" id="Editbox3" name="sem5" value="" maxlength="3" tabindex="5" autocomplete="off" spellcheck="false" placeholder="ENTER 5TH SEM MARKS">
<div class="invalid-feedback">ENTER VALID VALUE IN 5TH SEM MARKS</div></div>
<div id="wb_Editbox4">
<input type="text" id="Editbox4" name="sem2" value="" maxlength="3" tabindex="2" autocomplete="off" spellcheck="false" placeholder="ENTER 2ND SEM MARKS">
<div class="invalid-feedback">ENTER VALID VALUE IN 2ND SEM MARKS</div></div>
<div id="wb_Editbox5">
<input type="text" id="Editbox5" name="sem4" value="" maxlength="3" tabindex="4" autocomplete="off" spellcheck="false" placeholder="ENTER 4TH SEM MAKS">
<div class="invalid-feedback">ENTER VALID VALUE IN 4TH SEM MARKS</div></div>
</form>
</div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>CALCULATE YOUR FINAL SBTE RESULT</strong></span></div>
<div id="wb_Form2">
<form name="Form1" method="post" action="result.php" enctype="multipart/form-data" id="Form2">
<input type="submit" id="Button3" name="" value="CALCULATE" autofocus>
<input type="reset" id="Button4" name="" value="RESET">
<div id="wb_Text4">
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">&nbsp; <span style="text-decoration:underline;">You Entered:</span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">&nbsp;&nbsp;&nbsp; 1st Semester:&nbsp; <span style="color:#008000;"><?php echo"$sem1";?></span><span style="color:#FF0000;">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </span>2nd Semester: <span style="color:#008000;"><?php echo"$sem2";?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">&nbsp;&nbsp;&nbsp; 3rd Semester: <span style="color:#008000;"><?php echo"$sem3";?></span>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 4th Semester: <span style="color:#008000;"><?php echo"$sem4";?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">&nbsp;&nbsp;&nbsp; 5th Semester: <span style="color:#008000;"><?php echo"$sem5";?></span>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 6th Semester: <span style="color:#008000;"><?php echo"$sem6";?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">&nbsp; Adding 1st to 5th Sem Marks </p>
<p style="font-size:19px;line-height:21px;font-weight:bold;color:#000000;"><span style="font-size:16px;line-height:18px;">&nbsp; <?php sem1to5($sem1, $sem2, $sem3, $sem4, $sem5);?> ==========&gt; </span><span style="font-size:24px;line-height:27.5px;color:#008000;"><?php tillfifth($sem1, $sem2, $sem3, $sem4, $sem5);?></span></p>
<p style="font-size:8px;line-height:9px;font-weight:bold;">&nbsp;</p>
<p style="font-size:19px;line-height:21px;font-weight:bold;color:#000000;"><span style="font-size:16px;line-height:18px;">&nbsp; Getting 40% of <?php tillfifth($sem1, $sem2, $sem3, $sem4, $sem5);?> ==========&gt; </span><span style="font-size:24px;line-height:27.5px;color:#008000;"><?php fourty($sem1, $sem2, $sem3, $sem4, $sem5);?></span></p>
<p style="font-size:8px;line-height:9px;font-weight:bold;">&nbsp;</p>
<p style="font-size:19px;line-height:21px;font-weight:bold;color:#000000;"><span style="font-size:16px;line-height:18px;">&nbsp; Your Total Marks (40%+6th Sem) =&gt;</span><span style="color:#008000;">&nbsp;</span><span style="font-size:24px;line-height:27.5px;color:#008000;"><?php fourtypsix($sem1, $sem2, $sem3, $sem4, $sem5, $sem6);?></span></p>
<p style="font-size:8px;line-height:9px;font-weight:bold;">&nbsp;</p>
<p style="font-size:19px;line-height:21px;font-weight:bold;color:#000000;"><span style="font-size:16px;line-height:18px;">&nbsp; Your Percentage is ==========&gt; </span><span style="color:#008000;">&nbsp;</span><span style="font-size:24px;line-height:27.5px;color:#008000;"><?php percentage($sem1, $sem2, $sem3, $sem4, $sem5, $sem6);?></span></p>
<p style="font-size:8px;line-height:9px;font-weight:bold;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;font-weight:bold;color:#000000;">&nbsp; Your CGPA is ================&gt; <span style="font-size:19px;line-height:21px;color:#008000;">&nbsp;</span><span style="font-size:24px;line-height:27.5px;color:#008000;"><?php cgpa($sem1, $sem2, $sem3, $sem4, $sem5, $sem6, $hidden);?></span></p>
<p style="font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</p></div>
<div id="wb_Editbox7">
    
    <input type="hidden" name="hidden" value="5">
    
<input type="text" id="Editbox7" name="sem1" value="" maxlength="3" tabindex="1" autocomplete="off" spellcheck="false" placeholder="1ST SEM">
<div class="invalid-feedback">ENTER VALID VALUE</div></div>
<div id="wb_Editbox9">
<input type="text" id="Editbox9" name="sem3" value="" maxlength="3" tabindex="3" autocomplete="off" spellcheck="false" placeholder="3RD SEM">
<div class="invalid-feedback">ENTER VALID VALUE</div></div>
<div id="wb_Editbox12">
<input type="text" id="Editbox12" name="sem4" value="" maxlength="3" tabindex="4" autocomplete="off" spellcheck="false" placeholder="4TH SEM">
<div class="invalid-feedback">ENTER VALID VALUE</div></div>
<div id="wb_Editbox10">
<input type="text" id="Editbox10" name="sem5" value="" maxlength="3" tabindex="5" autocomplete="off" spellcheck="false" placeholder="5TH SEM">
<div class="invalid-feedback">ENTER VALID VALUE</div></div>
<div id="wb_Editbox11">
<input type="text" id="Editbox11" name="sem2" value="" maxlength="3" tabindex="2" autocomplete="off" spellcheck="false" placeholder="2ND SEM">
<div class="invalid-feedback">ENTER VALID VALUE</div></div>
<div id="wb_Text5">
<span style="color:#000000;font-family:Arial;font-size:20px;"><strong><u>ENTER YOUR MARKS BELOW:</u></strong></span></div>
<div id="wb_Editbox8">
<input type="text" id="Editbox8" name="sem6" value="" maxlength="3" tabindex="6" autocomplete="off" spellcheck="false" placeholder="6TH SEM">
<div class="invalid-feedback">ENTER VALID VALUE</div></div>
</form>
</div>
</div>
</body>
</html>