<?php
    require_once(__DIR__ . "/../model/config.php");
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
<h1>Sign Up</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
   
    <div id="un">
        <label for="email" id="email">Email: </label>
        <input type="text" name="email"/>
    </div>
    
    <div id="un">
        <label for="username" id="u">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div id="un">
        <label for="password" id="psw">Password: </label>
        <input type="password" name="password"/>
    </div>
        
    <div id="un">
            <button type="submit" id="sumbutton" >Submit</button>
        </div>

</form>
    </header>
</body>
