<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
        body
    {
background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  -webkit-transition: background-color 150ms ease-out !important;
  transition: background-color 150ms ease-out !important;

        overflow: hidden;
    }
    body.day-background {
  background: #FFDB88;
}
#container1
    {
        font-family: "Poiret One","Arial",sans-serif;
    }
input
    {
        font-family: 'Raleway', sans-serif;
        border-top:0px;
        border-right: 0px;
        border-left: 0px;
        border-bottom: 0px;
        padding: 5px 5px 5px 5px;
        color:#222;
        background: none;
    }
#gradient
{
  width: 100%;
  height: 3px;
  padding: 0px;
  margin: 0px;
    border: none;
    border-radius: 4px 4px 4px 4px;
}
#gradient1
{
  width: 100%;
  height: 3px;
  padding: 0px;
  margin: 0px;
    border: none;
    border-radius: 4px 4px 4px 4px;
}
#gradient2
{
  width: 100%;
  height: 3px;
  padding: 0px;
  margin: 0px;
    border: none;
    border-radius: 4px 4px 4px 4px;
}
#gradient3
{
  width: 100%;
  height: 3px;
  padding: 0px;
  margin: 0px;
    border: none;
    border-radius: 4px 4px 4px 4px;
}
#gradient4
{
  width: 100%;
  height: 3px;
  padding: 0px;
  margin: 0px;
    border: none;
    border-radius: 4px 4px 4px 4px;
}
    #gradient5
{
  width: 100%;
  height: 3px;
  padding: 0px;
  margin: 0px;
    border: none;
    border-radius: 4px 4px 4px 4px;
}
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom:  none;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: rgba(34,34,34,0.9);
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 150%;
    left: 50%;
    margin-left: -60px;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #222 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
input:focus
    {
        outline:none;
        font-size: 24px;
    }




button {
	border:2px solid black;
	background: transparent;
	color: #222;
	padding: 10px;
	font-size: 18px;
	border-radius: 5px;
	position: relative;
	box-sizing: border-box;
	transition: all 500ms ease; 
      font-family: "Poiret One","Arial",sans-serif;
}
    button:before {
	content:'';
	position: absolute;
	top: 0px;
	left: 0px;
	width: 0px;
	height: 40px;
        color:white;
	background: rgba(0,0,0,0.5);
	border-radius: 5px;
	transition: all 2s ease;

} 
    button:hover:before {
	width: 100%;
}
    button:hover{
    cursor:pointer;
    }
    </style>
    
    <script>
        var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
    $('#gradient1').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
    $('#gradient2').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
    $('#gradient3').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
    $('#gradient4').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
    $('#gradient5').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);
    </script>
</head>
<body>

  <div id="loader-wrapper">
  <div id="loader"></div>
  
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  
</div>

<div id="content">
    <form method="post" action="show.php">
    <div id="container1">
        <h1 align="center"><b>VQR - CARD</b></h1>
        <h5 align="center" style="margin-top: -25px;"><b>Build Your Visiting QR code</b></h5>
         <h5 align="center"><hr style="margin-top: -20px;"></h5>
    
    <div>
   
    <input class="" type="text" placeholder="Enter Name" name="name">
    <hr id="gradient"><br>
    <input class="" type="text" placeholder="Company Name" name="cname">
    <hr id="gradient1"><br>
    <input class="" type="text" placeholder="Enter Email" name="email">
    <hr id="gradient2"><br>
        <input class="" type="text" placeholder="Enter Contact No." name="phn">
    <hr id="gradient3"><br>
         <input class="" type="text" placeholder="Enter Designation" name="desig">
    <hr id="gradient4"><br>
        <div class="tooltip">
        <input class="" type="text" placeholder="Enter Skills" name="skills">
            <span class="tooltiptext"><p style="font-family: monospace">Use ; between Skills</p></span>
        </div>
    <hr id="gradient5" ><br>
    </div>
        <center><button align="center" type="submit" name="give"><b>Generate Visiting Card</b></button></center>
</div>
    </form>
<br><br><br><br><br><br>
    <div class="footer" align="center" style="font-family:'Poiret One','Arial',sans-serif; "><b>Developed by Amit Singh Sansoya with <i class="fa fa-heart"></i></b></div>    
    <br><br><br></div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>