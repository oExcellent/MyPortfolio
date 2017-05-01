<?php 
//set my title
$title = 'Max Walters Stack Developer';
//set header

/*
 * include start structure
 */

?>

<?php if(isset($_POST['name'])){
	$name = htmlentities($_POST['name']);
	 
}

if(isset($_POST['email'])){
	
	
	$userEmail = htmlentities($_POST['email']);
	$headers = 'From: max@devmw.com' . "\r\n" .
			'Reply-To: '.$userEmail. "\r\n".
			 ' ' . $name . ' said ';
}

if(isset($_POST['Subject'])){
	$subject = htmlentities($_POST['Subject']);
}

if(isset($_POST['Body'])){
	$message = htmlentities($_POST['Body']);
}


$errors = 0;
?>


<!doctype html>
<html lang="en">
<head>

    <title><?php echo $title; ?></title>

    <meta charset="UTF-8">
    <meta name="desription" content="A page where we search a database for a invoice and we can add and modify invoices">
    <meta name="keyword" content="Sql, Php, hw">
    <meta name="author" content="Max Walters">
    
	<link rel="icon" href="MaxWaltersPortfolio/Assets/MWFAVICON.JPG">
    <link rel="stylesheet" type="text/css" href="MaxWaltersPortfolio/Styles/style1.css">

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
    background-image: url("MaxWaltersPortfolio/Assets/web-design-2038872.jpg");
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
	
	



h1{
color:#14bceb;
}



/*
css form stuff
*/



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
	bottom:0px;
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



.myFooter .footer-right{
	float: right;
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



/*
css form stuff
*/

.contactFormArea {
	opacity: 0.9;
	margin-left: auto;
	margin-right: auto;
	max-width: 500px;
	background: #fafafa;
	padding: 20px 30px 20px 30px;
	font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #14bceb;
	text-shadow: 1px 1px 1px #444;
	border: none;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	text-align:center;
}
.contactFormArea h1 {
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom: 1px solid #444;
    margin: -10px -30px 30px -30px;
}
.contactFormArea h1>span {
    display: block;
    font-size: 11px;
}
.contactFormArea label {
    display: block;
    margin: 0px 0px 5px;
}
.contactFormArea label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    font-weight: bold;
}
 .contactFormArea input[type="text"],.contactFormArea input[type="email"],textarea, .contactFormArea select {
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



.contactFormArea select {
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

.contactFormArea .button {
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

.contactFormArea .button:hover {
    color: #333;
    background-color: #EBEBEB;
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

.Success, .Warning{
text-align: center;

}

.Button1:hover {
   background-color: rgba(255, 0, 0, 0.0);
    color: #14bceb;
    border: 2px solid white; 
font-size:20px;
cursor:pointer;


}
.Button1 {
   background-color: rgba(255, 0, 0, 0.0);
    color: #f1780e;
    border: 2px solid #f1780e; 
font-size:20px;
cursor:pointer;


}

#Centerpiece{
    text-align:center;
    opacity:0.8;
   
    background-color:white;
    margin-top: 300px;
    height:160px;
}
#myName{
color:light grey;

}


hr.line {
    margin-top: 1px;
    margin-bottom: 1px;
     width: 10%;
}

#work{
width:100%;
background-color:#292c2f;
text-align: center;
 background-size: 100% 100% ;
 opacity:0.9;
background-image: url("MaxWaltersPortfolio/Assets/sky-690293_1920.jpg");
}

#aboutDiv{
width:100%;
color: #ab5454;
text-align: center;
 opacity:0.9;
background-size: 100% 100% ;
background-color:#292c2f;
}

#contact{
width:100%;
background-color:#fafafa;
padding-top:5%;
 opacity:0.9;

}

#titleM{
color: #ab5454;
}
#titleW{
color:#14bceb;
}
.demo{
height:150px; 
width:250px;
}
br.myClass 
{display: none}

#err, #suc{
text-align:center;
}
#More{
text-align:center;
 opacity:0.9;
background-image: url("MaxWaltersPortfolio/Assets/sky-690293_1920.jpg");
}

#subtitle{
color:#f1780e
font-size:15px;
}
    </style>
</head>

<body>
<header id = "ht">
    
</header>


<main>



  <div id="Centerpiece">
  <h1 id="myName" ><span style="color: #f1780e">M</span>AX <span style="color: #f1780e">W</span>ALTERS</h1>
 <hr class="line" >
  <p id="subtitle"><b>COMPUTER PROGRAMMER & FULL STACK WEB DEVELOPER</b></p>
  <button onclick="window.location.href='MaxWaltersPortfolio/Pages/myWork.php'" class="Button1">WORK</button>
  <button onclick="window.location.href='MaxWaltersPortfolio/Pages/about.php'" class="Button1">ABOUT</button>
  <button onclick="window.location.href='MaxWaltersPortfolio/Pages/contact.php'" class="Button1">CONTACT</button>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="work">
<br>
<p style ="color:white">RESUME - MY ONLINE RESUME.</p>
<a href = "http://devmw.com/MaxWaltersPortfolio/resume/Index.php" target="_blank"> 
<img alt="link to resume" class="demo" src="MaxWaltersPortfolio/Assets/resume.png">
</a><br>


<h2  id="titleW">SOME OF MY WORK.</h2>
GITHUB - MY REMOTE GITHUB REPOSITORY.
<br>
<a href = "https://github.com/oExcellent" target="_blank"> 
<img alt="link to demo" class="demo" src="MaxWaltersPortfolio/Assets/GitHub-Logo.png">
</a><br>
<p style ="color:black">GET IT DONE - A WEBSITE TO DISCOURAGE PROCRASTINATION.</p>
<a href = "http://devmw.com/MaxWaltersPortfolio/GetItDone/Pages/Index.php" target="_blank"> 
<img alt="link to demo" class="demo" src="MaxWaltersPortfolio/Assets/GIDP2.png">
</a><br>



<br><br>


<br><br><br>

</div>

<div id="aboutDiv">


<div id="bg"><br><br>
<h1 id="titleM">MY STORY</h1>
<img id="myImage" src="MaxWaltersPortfolio/Assets/Max.png" alt="Picture of Max.">


<p id="meetMax">My passion for computer programming began at the age<br> 
 of 15 on the first windows flip phone. I was able to locate the hex <br>
 codes to change the color of the specific attributes of the device. <br>
I was so enthused by this I began studying and practicing HTML and CSS. and of course, <br>
I was one of those guys with a really unique myspace page. Initially, <br>
I was convinced that web development and programming was too fun that <br>
it could not possibly be a serious career, so I pursued a medical degree. <br>
I left that path to seek employment due to low drive and passion for it. <br>
A few years later I found that computer science was an extremely important. <br>
degree and it is indeed serious I immedietly quit my dead end job to persue the  <br>
degree of my dreams, graduated, and get to work in the feild I am absolutly crazy about.</p>

<br>

</div>
</div>



<div id="contact">
<div id="ff">



<form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class = "contactFormArea">


<h1>Contact Max 
<span id="contactForm">Please fill all the texts in the fields.</span>
    </h1>
<label  for="name">
            <span <?php if( isset($_POST['SendEmail']) && empty($_POST['name'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
            }else{
            	echo 'class = "plain"';
            }
	?> >Your name :</span>





<input class="tb" type="text"  id="name" name="name" <?php if($errors >= 1 || isset($_POST['SendEmail'])){

echo 'value = "' . $name . '"'; 
 				
}?>>
</label>


<label for="email">

        <span 
        
<?php if( isset($_POST['SendEmail']) && empty($_POST['email'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
}else{
	echo 'class = "plain"';
}?> 
	>Your email :</span>


<input class="tb" type="email"  id="email" name="email" <?php if($errors >= 1 || isset($_POST['SendEmail'])){

echo 'value = "' . $userEmail . '"';
 				
}?>>
</label>



<label for="Subject">

        <span <?php if( isset($_POST['SendEmail']) && empty($_POST['Subject'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
        }else{
        	echo 'class = "plain"';
        }?> >Subject :</span>



<input class="tb" type="text"  id="Subject" name="Subject" <?php if($errors >= 1 || isset($_POST['SendEmail'])){

echo 'value = "' . $subject . '"';
 				
}?>>
</label>


<label for="Body">

       <span <?php if( isset($_POST['SendEmail']) && empty($_POST['Body'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
       }else{
       	echo 'class = "plain"';
       }?>>Message :</span>


<textarea class="tb" name="Body" id="Body" placeholder="Hi Max.." style="height:200px"><?php  if($errors >= 1 || isset($_POST['SendEmail'])){

echo  $message ;
 				
}?></textarea>

</label>

<br>
<input class="button"  type="submit" name="SendEmail" value="Send" id="SendEmail" >
</form>



<?php 
$adminEmail = 'max@devmw.com';

/*
 * 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/'
 */

if (isset($_POST['SendEmail']) && $errors == 0){
	mail('max@devmw.com','Devmw Email Received from ' . $name ,'UEmail: '.$userEmail. '. Their email read, ' . $subject . ' ' . $message);
	mail($userEmail,'Email Received, Thank you!' ,'Your email read, ' . $message . '. please dont reply to this email, Max Will contact you shorty');
	echo '<p id="suc" class="Success">Email sent, you should recieve confirmation shortly!</p>';
	echo '<script>window.location = "#contactForm";</script>';
	

}

elseif(isset($_POST['SendEmail']) && $errors >= 1){
	echo '<p id="err" class="error">Email not sent, please review errors</p>';
	echo '<script>window.location = "#contactForm";</script>';
}




?>
<br><br><br>
</div>


</div>
<!-- 
<div id="More">
I create beautiful and responsive websites<br>
using HTML / CSS / JavaScript / PHP.<br>
I also know Java / C# / C++  / SQL / MySQL. 

 -->
</div>

</main>

		<div class="clear"></div>




<footer class="myFooter">

			<div class="footer-left">

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="MaxWaltersPortfolio/Pages/myWork.php">Work</a>
					·
					<a href="#ht"> <img src="MaxWaltersPortfolio/Assets/top.png" alt ="back 2 top image" height = "10" width= "10"></a>
					·
					 <a href="MaxWaltersPortfolio/Pages/contact.php">Contact Form</a>
					·
					 <a href="MaxWaltersPortfolio/Pages/about.php">About</a>
					 
				</p>

				<p class="myOrganaizationName">DevMW &copy; 2017</p>

			</div>

			<div class="footer-right">


				<a href="mailto:Max@devmw.com">Email Max</a>


	
	</div>


		</footer>
</body>