<?php include('../accounts/auth/auth_include.php');?>
<html>
    <head>
        <title>RapidWiki</title>
        <meta name="description" content="Open-source wiki software without JavaScript." />
        <?php include('../templates/meta.php');?>
    </head>
    <body>
        <?php include('../templates/header-big.php');?>

        <div id="content-wrapper">
            <h1>TO-DO: this will be the hardcoded main page.</h1>

            <?php if( !empty($user) ): ?>

		        <br>Welcome <?= $user['email']; ?> 
		        <br><br>You are successfully logged in!
		        <br><br>
		        <a href="logout.php">Logout?</a>

	        <?php else: ?>

		        <h1>Please Login or Register</h1>
		        <a href="login.php">Login</a> or
		        <a href="register.php">Register</a>

            <?php endif; ?>
        </div>

        <?php include('../templates/footer.php');?>
    </body>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        #content-wrapper {
            padding: 0.7rem;
        }
    </style>
</html>