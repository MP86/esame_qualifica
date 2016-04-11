<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	@yield('seo')
	
	<meta name="author" content="Pensiero Relax di Pretolani Matteo e Andrea Bilotto - by MP86">
	
	<link rel="icon" href="../img/favicon.ico">

    <title>Gym-University</title>
    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="../css/tema.css" rel="stylesheet">
    
    <!-- Social CSS -->
    <link href="../css/social.css" rel="stylesheet">
    
    
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" 
	rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" 
	rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
</head>

<body>

				
				

    <div class="brand">Gym-University</div>
    <div id="title" class="address-bar">La palestra per gli universitari,
    <br> e anche i non! </div>

    
	

@yield('content')

		
	    
		<div class="col-lg-12 text-center">
			<a href="#title" class="btn btn-primary btn-lg btn-block">Torna al sù</a>
		</div>

		<br>
		<br>
		<br>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <br>
                <br>
                	<img alt="Marchio reggistrato" src="../img/MP.png">
                    <p>Copyright &copy; - MP86 - 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Latest compiled and minified JavaScript -->
	<script
		 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
		 integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		 crossorigin="anonymous">
	</script>

    <!-- Script to Activate the Carousel -->
    <script>
		    $('.carousel').carousel({
		        interval: 5000 //changes the speed
		    })
    </script>
    
    
    
</body>

</html>
    