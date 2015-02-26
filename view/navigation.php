<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");

    if(!authenticateUser()){
        //send a header to the actual web browser
        header("Location: " . $path . "index.php");
        die();
    }
?>
<body class="loginb">
    <header>
        <video autoplay loop muted class="bgvideo" id="vid">
        <source src="video/happy.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-inverse" id="navb">
             <a href='index.html'>Home</a>
                <a href='projects.html'>Projects</a>
                <a href='technology.html'>Technology</a>
                <a href='more.html'>More</a>
                <a href='other.html'>Other</a>
                <a href='login.php'>Login</a>
                <a href='login.php'>Logout</a> 
                <a href='login.php'>Sign up</a> 
        </nav>
<nav>
   <h1 class="blog">Blog</h1>

    <ul>
        <li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li> 
    </ul>
</nav>
    </header>
</body>