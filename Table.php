<?php
    include("response.php");
    $newObj = new Product();
    $prd = $newObj->getProduct();
 ?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://kit.fontawesome.com/7b384a2072.js"></script>
	<style type="text/css">
	
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
	background-image: url("prdct2.jpg");
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

/*h1 {
	padding: 40px;
	background-color: #185875;
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
  margin: 0px !important;
}
*/

table {
	height: 50%;
	width: 50%;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	 border-collapse: collapse;
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px blue;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: LightSeaGreen;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}
.container-contact100-form-btn {
	text-align: center;
  width: 10%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 20px;
  margin-left: auto;
  margin-right: auto;
}

.contact100-form-btn {
  width: 10%;
  height: 50px;
  border-radius: 25px;
  background: #846add;
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;
  margin-left: auto;
  margin-right: auto;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact100-form-btn:hover {
  background: #333333;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

@import url("https://fonts.googleapis.com/css?family=Montserrat:100");
h1 {
  padding: 0;
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}

.app {
  background: #0a0a0a;
  height: 100vh;
  width: 100%;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: linear-gradient(rgba(10, 10, 10, 0.6), rgba(0, 0, 0, 0.9)), repeating-linear-gradient(0, transparent, transparent 2px, black 3px, black 3px), url("https://images.unsplash.com/photo-1506399558188-acca6f8cbf41?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=7118759521e3184778a3b5e010e202c6");
  background-size: cover;
  background-position: center;
  z-index: 1;
}

.wrapper {
  text-align: center;
}

.sub {
  color: #64dcdc;
  letter-spacing: 1em;
}

.glitch {
  position: relative;
  color: white;
  font-size: 4em;
  letter-spacing: .5em;
  animation: glitch-skew 1s infinite linear alternate-reverse;
}
.glitch::before {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  left: 2px;
  text-shadow: -2px 0 #ff00c1;
  clip: rect(44px, 450px, 56px, 0);
  animation: glitch-anim 5s infinite linear alternate-reverse;
}
.glitch::after {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  left: -2px;
  text-shadow: -2px 0 #00fff9, 2px 2px #ff00c1;
  animation: glitch-anim2 1s infinite linear alternate-reverse;
}

@keyframes glitch-anim {
  0% {
    clip: rect(56px, 9999px, 35px, 0);
    transform: skew(0.89deg);
  }
  5% {
    clip: rect(58px, 9999px, 76px, 0);
    transform: skew(0.83deg);
  }
  10% {
    clip: rect(45px, 9999px, 78px, 0);
    transform: skew(0.66deg);
  }
  15% {
    clip: rect(54px, 9999px, 5px, 0);
    transform: skew(0.42deg);
  }
  20% {
    clip: rect(33px, 9999px, 55px, 0);
    transform: skew(0.34deg);
  }
  25% {
    clip: rect(99px, 9999px, 31px, 0);
    transform: skew(0.56deg);
  }
  30% {
    clip: rect(54px, 9999px, 34px, 0);
    transform: skew(0.23deg);
  }
  35% {
    clip: rect(34px, 9999px, 88px, 0);
    transform: skew(0.8deg);
  }
  40% {
    clip: rect(54px, 9999px, 82px, 0);
    transform: skew(0.89deg);
  }
  45% {
    clip: rect(3px, 9999px, 97px, 0);
    transform: skew(0.89deg);
  }
  50% {
    clip: rect(50px, 9999px, 30px, 0);
    transform: skew(0.44deg);
  }
  55% {
    clip: rect(55px, 9999px, 34px, 0);
    transform: skew(0.04deg);
  }
  60% {
    clip: rect(60px, 9999px, 51px, 0);
    transform: skew(0.39deg);
  }
  65% {
    clip: rect(87px, 9999px, 31px, 0);
    transform: skew(0.83deg);
  }
  70% {
    clip: rect(2px, 9999px, 7px, 0);
    transform: skew(0.22deg);
  }
  75% {
    clip: rect(74px, 9999px, 10px, 0);
    transform: skew(0.37deg);
  }
  80% {
    clip: rect(46px, 9999px, 49px, 0);
    transform: skew(0.96deg);
  }
  85% {
    clip: rect(70px, 9999px, 73px, 0);
    transform: skew(0.78deg);
  }
  90% {
    clip: rect(18px, 9999px, 39px, 0);
    transform: skew(0.55deg);
  }
  95% {
    clip: rect(9px, 9999px, 90px, 0);
    transform: skew(0.19deg);
  }
  100% {
    clip: rect(30px, 9999px, 6px, 0);
    transform: skew(0.82deg);
  }
}
@keyframes glitch-anim2 {
  0% {
    clip: rect(96px, 9999px, 45px, 0);
    transform: skew(0.96deg);
  }
  5% {
    clip: rect(25px, 9999px, 70px, 0);
    transform: skew(0.73deg);
  }
  10% {
    clip: rect(14px, 9999px, 59px, 0);
    transform: skew(0.44deg);
  }
  15% {
    clip: rect(1px, 9999px, 56px, 0);
    transform: skew(0.78deg);
  }
  20% {
    clip: rect(22px, 9999px, 91px, 0);
    transform: skew(0.76deg);
  }
  25% {
    clip: rect(92px, 9999px, 65px, 0);
    transform: skew(0.92deg);
  }
  30% {
    clip: rect(25px, 9999px, 3px, 0);
    transform: skew(0.24deg);
  }
  35% {
    clip: rect(63px, 9999px, 17px, 0);
    transform: skew(0.8deg);
  }
  40% {
    clip: rect(69px, 9999px, 20px, 0);
    transform: skew(0.32deg);
  }
  45% {
    clip: rect(78px, 9999px, 63px, 0);
    transform: skew(0.73deg);
  }
  50% {
    clip: rect(46px, 9999px, 76px, 0);
    transform: skew(0.97deg);
  }
  55% {
    clip: rect(89px, 9999px, 71px, 0);
    transform: skew(0.64deg);
  }
  60% {
    clip: rect(41px, 9999px, 17px, 0);
    transform: skew(0.59deg);
  }
  65% {
    clip: rect(100px, 9999px, 96px, 0);
    transform: skew(0.11deg);
  }
  70% {
    clip: rect(82px, 9999px, 32px, 0);
    transform: skew(0.23deg);
  }
  75% {
    clip: rect(57px, 9999px, 11px, 0);
    transform: skew(0.72deg);
  }
  80% {
    clip: rect(66px, 9999px, 95px, 0);
    transform: skew(0.17deg);
  }
  85% {
    clip: rect(89px, 9999px, 44px, 0);
    transform: skew(0.69deg);
  }
  90% {
    clip: rect(7px, 9999px, 34px, 0);
    transform: skew(0.93deg);
  }
  95% {
    clip: rect(80px, 9999px, 71px, 0);
    transform: skew(0.66deg);
  }
  100% {
    clip: rect(93px, 9999px, 31px, 0);
    transform: skew(0.54deg);
  }
}
@keyframes glitch-skew {
  0% {
    transform: skew(-4deg);
  }
  10% {
    transform: skew(1deg);
  }
  20% {
    transform: skew(2deg);
  }
  30% {
    transform: skew(5deg);
  }
  40% {
    transform: skew(0deg);
  }
  50% {
    transform: skew(4deg);
  }
  60% {
    transform: skew(-3deg);
  }
  70% {
    transform: skew(1deg);
  }
  80% {
    transform: skew(-4deg);
  }
  90% {
    transform: skew(4deg);
  }
  100% {
    transform: skew(5deg);
  }
}

</style>
</head>
<body>
  <div class="app" style="background-image: url('h51.jpg'); height: 130px; max-width:100%;">
  <div class="wrapper">
    <h1 class="glitch" data-text="
Product">Product</h1>
    <span class="sub"><br>Company</span>
  </div>
</div>

<br> <br> <br> <br> <br>
<table class="container" id="prdct">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Cost</th>
      <th>Update</th>
      <th>Delete</th>
		</tr>
	</thead>
	<tbody>
    <?php foreach($prd as $key => $pr) :?>
		<tr>
			<td><?php echo $pr['Name'] ?></td>
			<td><?php echo $pr['Description'] ?></td>
			<td><?php echo $pr['Cost'] ?></td>
      <td><form>
<input class="contact100-form-btn" type="button" value="U" onclick="window.location.href='updt.html'" />
</form> </td>
      <td><form>
<input class="contact100-form-btn" type="button" value="D"/>
</form> </td>
		</tr>

    <?php endforeach;?>
	</tbody>
</table>
<br> <br> <br>

<form>
<input class="contact100-form-btn" type="button" value="Insert" onclick="window.location.href='updt.html'" />
</form> 


<br><br>
</body>
</html>