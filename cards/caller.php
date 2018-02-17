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
 $folder="../images/";
 $file_name="$name.png";
//echo $name;
//echo $cname;
//echo $email;
//echo $phn;
//echo $desig;
//echo $skills;
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
    <title>Business card</title>  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import "https://fonts.googleapis.com/css?family=Open+Sans|Roboto:300";
* {
  box-sizing: border-box;
}

body {
  background: #757575;
  overflow-x: hidden;
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
  padding: 30px;
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

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <!-- The front is based on of my SVG link hover effect http://codepen.io/Zeaklous/pen/kyGqm -->

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
  
    <script src="js/index.js"></script>

</body>
</html>
