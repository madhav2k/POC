<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

	body{
		/*
		You can remove these four options

		*/
		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;


		height:100%;
		width:100%;
		margin:0px;
		padding-left:0px;
		text-align:left;
	}

	.form_widget_amount_slider{
		border-top:1px solid #9d9c99;
		border-left:1px solid #9d9c99;
		border-bottom:1px solid #eee;
		border-right:1px solid #eee;
		background-color:#f0ede0;
		height:3px;
		position:absolute;
		bottom:0px;
		width:200px;


	}

	</style>

<script src="dhtmlgoodies_slider.js"></script>
<script src="color_functions.js"></script>

	<script type="text/javascript">


	/* Not a part of the script */

	function setColorByHSB()
	{
		var formObj = document.forms[0];
		var hue = formObj.hue.value.replace(/[^\d]/,'');
		var saturation = formObj.saturation.value.replace(/[^\d]/,'');
		var brightness = formObj.brightness.value.replace(/[^\d]/,'');
		if(hue/1>360)hue=360;
		if(hue==360)hue=0;
		if(saturation/1>100)saturation=100;
		if(brightness/1>100)brightness=100;

		var rgb = toRgb(hue,saturation/100,brightness/100);
		document.getElementById('colorPreview').style.backgroundColor = rgb;
		document.getElementById('colorCode1').innerHTML = rgb;
	}

	function setColorByRGB()
	{
		var formObj = document.forms[0];
		var r = formObj.r.value.replace(/[^\d]/,'');
		var g = formObj.g.value.replace(/[^\d]/,'');
		var b = formObj.b.value.replace(/[^\d]/,'');
		if(r/1>255)r=255;
		if(g/1>255)g=255;
		if(b/1>255)b=255;
		r = baseConverter(r,10,16) + '';
		g = baseConverter(g,10,16) + '';
		b = baseConverter(b,10,16) + '';
		if(r.length==1)r = '0' + r;
		if(g.length==1)g = '0' + g;
		if(b.length==1)b = '0' + b;

		document.getElementById('colorPreview2').style.backgroundColor = '#' + r + g + b;
		document.getElementById('colorCode2').innerHTML = '#' + r + g + b;

	}
	</script>




</head>
<body>


<form>
	<table>
		<tr>
			<td colspan="4"><b>Example 1</td>
		</tr>
		<tr>
			<td width="100">Hue:</td>
			<td id="slider_target"></td>
			<td><input type="text" name="hue" size="3" value="5" onchange="setColorByHSB()"></td>
			<td><sup>o</sup></td>
			<td rowspan="3" id="colorPreview" width="100" style="text-align:center;border:1px solid #000"><span id="colorCode1" style="padding:2px;font-size:11px;line-height:60px;vertical-align:middle;background-color:#FFF;border:1px solid #000"></span></td>
		</tr>
		<tr>
			<td width="100">Saturation:</td>
			<td id="slider_target2"></td>
			<td><input type="text" name="saturation" size="3" value="55" onchange="setColorByHSB()"></td>
			<td>%</td>
		</tr>
		<tr>
			<td width="100">Brightness:</td>
			<td id="slider_target3"></td>
			<td><input type="text" name="brightness" size="3" value="55" onchange="setColorByHSB()"></td>
			<td width="10">%</td>
		</tr>
	</table>

	<table>
		<tr>
			<td colspan="4"><b>Example 2</td>
		</tr>
		<tr>
			<td width="100">Red:</td>
			<td id="slider_target4"></td>
			<td><input type="text" name="r" size="3" value="5" onchange="setColorByRGB()"></td>
			<td width="10">&nbsp;</td>
			<td rowspan="3" id="colorPreview2" width="100" style="text-align:center;border:1px solid #000"><span id="colorCode2" style="padding:2px;font-size:11px;line-height:60px;vertical-align:middle;background-color:#FFF;border:1px solid #000"></span></td>
		</tr>
		<tr>
			<td width="100">Green:</td>
			<td id="slider_target5"></td>
			<td><input type="text" name="g" size="3" value="55" onchange="setColorByRGB()"></td>
			<td width="10">&nbsp;</td>

		</tr>
		<tr>
			<td width="100">Blue:</td>
			<td id="slider_target6"></td>
			<td><input type="text" name="b" size="3" value="55" onchange="setColorByRGB()"></td>
			<td width="10">&nbsp;</td>

		</tr>
	</table>

</form>

<script type="text/javascript">
// Javascript for example 1
form_widget_amount_slider('slider_target',document.forms[0].hue,200,0,360,"setColorByHSB()");
form_widget_amount_slider('slider_target2',document.forms[0].saturation,200,0,100,"setColorByHSB()");
form_widget_amount_slider('slider_target3',document.forms[0].brightness,200,0,100,"setColorByHSB()");

// Javascript for example 2
form_widget_amount_slider('slider_target4',document.forms[0].r,200,0,255,"setColorByRGB()");
form_widget_amount_slider('slider_target5',document.forms[0].g,200,0,255,"setColorByRGB()");
form_widget_amount_slider('slider_target6',document.forms[0].b,200,0,255,"setColorByRGB()");


setColorByRGB();
setColorByHSB();

</script>

</body>

</html>