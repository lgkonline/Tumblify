<?php

define("APP_VERSION", "1.0");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Tumblify</title>
		<link rel="icon" type="image/png" href="https://lib.lgkonline.com/favicon.png">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://lib.lgkonline.com/lgk-icons/style.css">
        <link rel="stylesheet" href="css/style.css">
	</head>

	<body>
        <main>
            <div class="container">
                <div id="wrapper">
                    <h1 id="logo">Tumblify</h1>

                    <form id="form">
                        <div class="input-group input-group-lg">
                            <input id="url" type="text" class="form-control" placeholder="URL of a Tumblr post">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </span>
                        </div>

                        <button id="submit-btn" type="submit" class="btn btn-primary btn-lg">
                            <span class="glyphicon glyphicon-play-circle"></span>
                            Go
                        </button>
                    </form>

                    <div>
                        <div class="pull-right">
                            <a href="http://blog.lgk.io" class="btn btn-default"><i class="icon-lgk"></i> Blog</a>
                            <a href="http://twitter.com/lgkonline" class="btn btn-default"><i class="icon-twitter"></i> @lgkonline</a>
                            <a href="http://youtube.com/lgktube" class="btn btn-default"><i class="icon-youtube"></i> /lgktube</a>
                        </div>

                        &copy; 2016 LGK. 
                        <a href="http://about.lgkonline.com/kontakt">Contact</a> - <a href="http://about.lgkonline.com/impressum">Impress</a>
                    </div>
                </div>
                
            </div>
        </main>

        <script src="js/main.js"></script>
	</body>
</html>