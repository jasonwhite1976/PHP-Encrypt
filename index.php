<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>web2market task</title>     

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    

<!-- Font Awesome CDN -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS for this page -->
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
<div class="container">
    <div class="wrapper">
        <nav>
            <div>
                <h2>PHP Encrypt Decrypt Demo</h2>
                <hr>
                <div id="locked">
                    <i class="fa fa-lock fa-2x"></i>
                    <p>https secure site</p>
                </div>
                <div id="unlocked">
                    <i class="fa fa-unlock-alt fa-2x"></i>
                    <p>http site - unsecure</p>
                </div>
                <hr>
            </div> 
        	<ul>
        		<li><a href="#">Menu Item 1</a></li>
        		<li><a href="#">Menu Item 2</a></li>
        		<li><a href="#">Menu Item 3</a></li>
        		<li><a href="#">Menu Item 4</a></li>
        		<li><a href="#">Menu Item 5</a></li>
        	</ul>
        </nav>
        <main>
            <br>
                <div> 
                    <p>Random 10 digit number</p>
                    <?php include'random.php';?>
                    <br>
                    <hr>
                    <p>Hashed version</p>
                    <?php include'hash.php';?>
                    <br>
                    <hr>
                    <a href="hash.php">Link to hashed version</a>
                    <hr>
                    <?php include'encrypt.php';?>
                </div>
        </main>
        <footer>
            <p> &copy; <script>document.write(new Date().getFullYear())</script> <p>
        </footer>
   </div>
</div>

<script>
window.onload = padlock;
function padlock() {
    if (window.location.protocol == "https:") {
        document.getElementById("locked").setAttribute('style','display:block');
        document.getElementById("unlocked").setAttribute('style','display:none');
    } else {
        document.getElementById("locked").setAttribute('style','display:none');
        document.getElementById("unlocked").setAttribute('style','display:block');
    }
}
</script>

</body>
</html>
