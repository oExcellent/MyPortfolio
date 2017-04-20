<!doctype html>
<html lang="en">
<head>

    <title><?php echo $title; ?></title>

    <meta charset="UTF-8">
    <meta name="desription" content="A page where we search a database for a invoice and we can add and modify invoices">
    <meta name="keyword" content="Sql, Php, developer,grest prices, best, web, developer,low cost, fast, work,quality">
    <meta name="author" content="Max Walters">
    
	<link rel="icon" href="../Assets/MWFAVICON.JPG">
    <link rel="stylesheet" type="text/css" href="../Styles/style1.css">

    <style>
    #ht{
    color: #14bceb;
    text-align: center;
    }
    body{
    	margin-bottom: 1px;
    	margin-top: 1px;
    	margin-left: 1px;
    	margin-right: 1px;
    margin: 0px;
    color:#14bceb;
    background-color: #14bceb;
    text-shadow: 0 0 5px black;
    background-image: url("../Assets/web-design-2038872.jpg");
    background-position: center;
    background-repeat: no-repeat;
     background-attachment: fixed;
    background-size: cover;
    font-family: "Bitstream Vera Sans Mono",Monaco,"Lucida Console",monospace, "Impact", Charcoal, sans-serif ;
  font-style: normal;
  font-weight: 400;
  src: local('Droid Serif'), local('DroidSerif'), url(http://fonts.gstatic.com/s/droidserif/v6/0AKsP294HTD-nvJgucYTaIgp9Q8gbYrhqGlRav_IXfk.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
	}
	
	body, html {
    height: 100%;
	}
	
	.bg { 
    /* The image used */
    
    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    
	}
	
	 #SearchForDiv {
	 padding-left:40%;
    display: inline-block;
    text-align: center;
    }
    
 
    

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #292c2f;
    opacity: 0.9;
}

li {
    /*display: inline;*/
    float: left;
    border-right: 1px solid #bbb;
}

li a {
    display: block;
    color: #14bceb;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #14bceb;
}

li:last-child {
    border-right: none;
}


h1{
color:#14bceb;
}



/*
css form stuff
*/

.myFormArea {
	opacity: 0.9;
	margin-left: auto;
	margin-right: auto;
	max-width: 500px;
	background: #292c2f;
	padding: 20px 30px 20px 30px;
	font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #14bceb;
	text-shadow: 1px 1px 1px #444;
	border: none;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
}
.myFormArea h1 {
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom: 1px solid #444;
    margin: -10px -30px 30px -30px;
}
.myFormArea h1>span {
    display: block;
    font-size: 11px;
}
.myFormArea label {
    display: block;
    margin: 0px 0px 5px;
}
.myFormArea label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    font-weight: bold;
}
 .myFormArea input[type="text"],.myFormArea input[type="email"],textarea, .myFormArea select {
	border: none;
	color: black;
	height: 25px;
	line-height:15px;
	margin-bottom: 16px;
	margin-right: 6px;
	margin-top: 2px;
	outline: 0 none;
	padding: 5px 0px 5px 5px;
	width: 70%;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	background: #DFDFDF;
}
.active input[type="text"]{
	border: none;
	color: #14bceb;
	height: 25px;
	line-height:15px;
	margin-bottom: 16px;
	margin-right: 6px;
	margin-top: 2px;
	outline: 0 none;
	padding: 1px 0px 1px 1px;
	width: 50%;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	background: #DFDFDF;
}



.myFormArea select {
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
	color: #525252;
	line-height: 25px;
}

.myFormArea .button {
	background: #14bceb;
	border: none;
	padding: 10px 25px 10px 25px;
	color: #585858;
	border-radius: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	text-shadow: 1px 1px 1px #14bceb;
	font-weight: bold;
	box-shadow: 1px 1px 1px #14bceb;
	-webkit-box-shadow:1px 1px 1px #3D3D3D;
	-moz-box-shadow:1px 1px 1px #14bceb;
	width:360px;height:48px;margin-left:102px;border-top:none;;
	
}

.myFormArea .button:hover {
    color: #333;
    background-color: #EBEBEB;
}


.myFooter{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	font: bold 16px sans-serif;
	text-align: left;

	padding: 20px 60px;
	margin-top: 80px;
	overflow: hidden;
	opacity: 0.9;
	position:relative;
	bottom:0%;
}

/* Footer left */

.myFooter .footer-left{
	float: left;
}

.myFooter .footer-links{
	color:  #ffffff;
	margin: 0 0 10px;
	padding: 0;
}

.myFooter .footer-links a, .footer-right a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.myFooter .myOrganaizationName{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}


/* Footer right */

.myFooter .footer-right{
	float: right;
}

/* The search form */

.myFooter form{
	position: relative;
}

.myFooter form input{
	display: block;
	border-radius: 3px;
	box-sizing: border-box;
	background-color:  #1f2022;
	box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;

	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #d1d2d2;

	width: 500px;
	padding: 18px 50px 18px 18px;
}

.myFooter form input:focus{
	outline: none;
}

/* Changing the placeholder color */

.myFooter form input::-webkit-input-placeholder {
	color:  #5c666b;
}

.myFooter form input::-moz-placeholder {
	opacity: 1;
	color:  #5c666b;
}

.myFooter form input:-ms-input-placeholder{
	color:  #5c666b;
}

/* The magnify glass icon */

.myFooter form i{
	width: 18px;
	height: 18px;
	position: absolute;
	top: 16px;
	right: 18px;

	color: #d1d2d2;
	font-size: 18px;
}


@media (max-width: 1000px) {

	.myFooter form input{
		width: 300px;
	}

}

@media (max-width: 800px) {

	.myFooter{
		padding: 30px;
		text-align: center;
		font: bold 14px sans-serif;
	}

	.myFooter .myOrganaizationName{
		margin-top: 10px;
		font-size: 12px;
	}

	.myFooter .footer-left,
	.myFooter .footer-right{
		float: none;
		max-width: 300px;
		margin: 0 auto;
	}

	.myFooter .footer-left{
		margin-bottom: 20px;
	}

	.myFooter form input{
		width: 100%;
	}

}

.plain{
color: #14bceb;
}

.error{
color: red;
text-shadow: 1px 1px 1px black;
	font-weight: bold;
}

.Warning{
color: yellow;
}

.Success{
color: green;
}

.Success, Warning{
text-align: center;
padding-left:30%;
}


.Button1 {
   background-color: rgba(255, 0, 0, 0.0);
    color: #f1780e;
    border: 2px solid #f1780e; 
font-size:20px;

}



#Centerpiece{
    padding-top:10%;
    text-align:center;
    
}

#myName{
color:white;
}

#myImage{
opacity: 0.9;
padding-left:35%;
}

#bg{
color:white;
width:60%;
position:relative;
left:20%;
    font-size: 140%;

}

#meetMax{
color:#ab5454;
text-shadow: 0 0 35px black;

text-align:center;

}

* {
    margin: 0;
}

main {
    min-height: 100%;
    height: auto !important; /* This line and the next line are not necessary unless you need IE6 support */
    height: 100%;
    margin: 0 auto -155px; /* the bottom margin is the negative value of the footer's height */
}
footer, .push {
    height: 90px; /* .push must be the same height as .footer */
    
}

#temp{
 position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}
footer{

text-align: center;
padding-top: 100%;
}

#loading{
height:70px;
width: 120px;
}
#err, #suc{
text-align:center;
}

.about{
font-family: "Monospaced";
color:white;

}

.demo{
length:150px; 
width:250px;
}
    </style>


</head>

<body>



<main>

<nav id = "ht">

<ul>
  <li><a href="../../index.php">HOME</a></li>
  <li><a href="myWork.php">WORK</a></li>
  <li><a href="about.php">ABOUT</a></li>
  
  
  <li style="float:right"><a href="contact.php">CONTACT</a>
</li>
</ul>

</nav>
<header >
    <?php if (!empty($header)){ echo '<h1 id="ht">' . $header . '</h1>'; }?>
</header>