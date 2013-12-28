<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$("#cerceve").hide().fadeIn(500);
	$(".show").hide();
	$(".close").click(function(){
		$("#cerceve").hide(500);
		$(".show").fadeIn(500);
	});
	$(".show").click(function(){
		$("#cerceve").fadeIn(500);
		$(".show").hide(500);
	});
});
$(function() {
    $.support.placeholder = false;
    test = document.createElement('input');
    if('placeholder' in test) $.support.placeholder = true;
    });

    // Placeholder for IE
    $(function () {
        if(!$.support.placeholder) { 

            var active = document.activeElement;
            $(':text, textarea,:password').focus(function () {
                if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
                    $(this).val('').removeClass('hasPlaceholder');
                }
            }).blur(function () {
                if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
                    $(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
                }
            });
            $(':text, textarea,:password').blur();
            $(active).focus();
            $('form').submit(function () {
                $(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
            });
        }  

    });
</script>
</head>
<body >
<div style="position:absolute; left:0px; top:0px;width=100%">
<table width=1300 height=30>
      <td align="left"   bgcolor="429c30"> <font size=8 face="Garamond" font color="white" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyClinic</td>
	 	 
 </table>
 </div>
<div style="position:absolute; lef:200px; top:250px;">
<img src="images/hospital-mangement1.jpg" width=400 height=300 align="left">
</div>
 
 <div style="position:absolute; right:120px; top:300px;">
<div class="show"></div>
<div class="formbody">
<form action="log.php" method="post">
<input type="text" name="username" placeholder="Username" class="text" style="background:url(images/username.png) no-repeat;" />
<input type="password" name="password" placeholder="Password" class="text" style="background:url(images/password.png) no-repeat;" />
<input type="submit" value="Sign In" class="submit" style="background:url(images/login.png) no-repeat;" />
</form>
</div>
</div>
<div style="position:absolute; left:0px; bottom:0px; ">
<table height=25px width=1280px;>
          <td  bgcolor="#2A2C2E" align="center" > </td>
	

</table>
</div>
<div style="position:absolute; left:0px; bottom:0px;width=100%">
<table width=1300 height=30>
      <td align="Right"   bgcolor="429c30"> <font size=4 face="Garamond" font color="white" >Powered By NoWhereElse</td>
	 	 
 </table>
 
 <div>
</form>
</body>
</html>