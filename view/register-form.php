<?php
    require_once(__DIR__ . "/../model/config.php");
    ?>
<body class="loginb">
    <header>
    <video autoplay loop muted class="bgvideo" id="vid">
        <source src="video/happy.mp4" type="video/mp4">
    </video>
<h1>Sign Up</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
   
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email"/>
    </div>
    
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
        
        <div>
            <button type="submit">Submit</button>
        </div>

</form>
    </header>
</body>
