<?php 
if(isset($_POST['give']))
{
 include('phpqrcode/qrlib.php'); 
 $name=$_POST['name'];
 $cname=$_POST['cname'];
 $email=$_POST['email'];
 $phn=$_POST['phn'];
 $desig=$_POST['desig'];
 $skills=$_POST['skills'];
 $folder="images/";
 $file_name="$name.png";
//echo $name;
//echo $cname;
//echo $email;
//echo $phn;
//echo $desig;
//echo $skills;
$text1='';
echo $text1;
$text=(string)$name."\n";
$text.=(string)$cname."\n";
$text.=(string)$email."\n";
$text.=(string)$phn."\n";
$text.=(string)$desig."\n";
$text.=(string)$skills."\n";;
//echo $text;
 $file_name=$folder.$file_name;
 QRcode::png($text,$file_name);
}
?>
<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/index.js" type="text/javascript"></script>
<style>
    body
    {
         font-family: "Poiret One","Arial",sans-serif;
        background: #136a8a;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #267871, #136a8a);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #267871, #136a8a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
overflow:hidden;
    }
.card1 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
}

.card1:hover {
    box-shadow: 5px 5x 5px 5px rgba(0,0,0,0.9);
}

img {
    border-radius: 5px 5px 5px 5px;
}

.container1 {
    padding: 2px 16px;
    color:white;
}
    .container{
        margin-top: 100px;
        
    }
.container {
  perspective: 800px;
  /* Styling */
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  text-transform: uppercase;
  letter-spacing: 4px;
  /* Center it */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.card {
  /* Styling */
  width: 700px;
  height: 400px;
  background: #141414;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  /* Card flipping effects */
  transform-style: preserve-3d;
  transition: 0.6s;
}

.side {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  /* Fix Chrome rendering bug */
  transform: rotate(0deg) translateZ(1px);
}

/* Flip the card on hover */
.container:hover .card,
.back {
  transform: rotateY(-180deg) translateZ(1px);
}

/* Front styling */
.front {
  /* Center the name + outline (almost) */
  line-height: 390px;
  /* Height - some (because visual center is a little higher than actual center) */
  text-align: center;
}

.logo {
  outline: 1px solid #19F6E8;
  display: inline-block;
  padding: 15px 40px;
  text-transform: uppercase;
  font-family: 'Roboto', sans-serif;
  font-size: 1.4em;
  font-weight: normal;
  line-height: 32px;
  letter-spacing: 8px;
}

/* Back styling */
.back {
  background: #15CCC0;
  padding: 5px;
}

.name {
  color: #3B3B3B;
  margin-bottom: 0;
}

p {
  margin: 0.8em 0;
}

.info {
  position: absolute;
  bottom: 30px;
  left: 30px;
  color: #3b3b3b;
}

.property {
  color: #fff;
}

/* Make semi-responsive */
@media (max-width: 700px) {
  .card {
    transform: scale(0.5);
  }

  .container:hover .card {
    transform: scale(0.5) rotateY(-180deg) translateZ(1px);
  }
}

    .container
    {
        margin-top: 100px;
    }
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
  <div id="loader-wrapper">
  <div id="loader"></div>
  
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  
</div>
    <div id="content">
    <center><h2 align="center"><u>Your Card</u></h2></center>
    <center>
<div class="card1">
  <?php echo "<img src='images/$name.png' alt='Avatar' style='width:50%'>"; ?>
  <div class="container1">
    <h4><b><?php echo $name; ?></b></h4> 
    <p><?php echo $cname; ?></p> 
  </div>
        </div></center>
    <center>
     <div class="container">
  <div class="card">
    
    <div class="front side">
      <h1 class="logo"><?php echo $name;?></h1>
    </div>
    
    <div class="back side">
      <h3 class="name"><?php echo $name;?></h3>
      <div><? echo $desig;?></div>      
      <div class="info">
        <p><span class="property">Email: </span><?php echo $email;?></p>
        <p><span class="property">Phone: </span><?php echo $phn;?></p>
        <p><span class="property">Company: </span><?php echo $cname;?></p>
      </div>
    </div>
    
  </div>
</div>
    </center>
    <script src="js/index8.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index7.js"></script>
<div class="footer" align="center" style="font-family:'Poiret One','Arial',sans-serif; "><b>Developed by Amit Singh Sansoya with <i class="fa fa-heart"></i></b></div>    
    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script src="js/index.js" type="text/javascript"></script>
    </body>
</html>