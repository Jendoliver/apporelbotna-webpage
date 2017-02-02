<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="css/jQuery/jquery-3.1.1.min.js" type="text/javascript"></script>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="css/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <title>Apporelbotna Solutions</title>
</head>
<body>
    <!-- TO DO: KNUT -->
    <div class="container-fluid">
        <div class="row"> <!-- Imagen -->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <header></header>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row"> <!-- Título sección -->
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Apporelbotna Solutions</h1>
            </div>
            <div class="col-md-4"></div>
        </div>
        
        
        <div class="row"> <!-- UN PUTO CAROUSEL PORQ ESTA FINO JODER CLARO Q SI -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/ale.jpg" alt="Wapaaa">
                    </div>

                    <div class="item">
                        <img src="img/mia.jpg" alt="MMmmMmmm">
                    </div>

                    <div class="item">
                        <img src="img/unpocofino.jpg" alt="Tol kardamomo">
                    </div>
                    
                    <div class="item">
                        <img src="img/alexisyonki.jpg" alt="Ostia putaaaaaaaaaa">
                    </div>

                    <div class="item">
                        <img src="img/taixes.jpg" alt="Joder esa universidad ha servido de algo">
                    </div>
                    
                    <div class="item">
                        <img src="img/1.jpg" alt="556554">
                    </div>
                    
                    <div class="item">
                        <img src="img/margot.JPG" alt="waraaa">
                    </div>
                       <div class="item">
                        <img src="img/5.jpg" alt="waraaa">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
        
        <div class="row"><br><br></div>
        <div class="row"> <!-- una caja un poco fina con su formulario ahi -->
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="panel panel-default"> <!-- Buscar alumne en concret -->
                    <div class="panel-heading"><h3>Buscar alumne</h3></div>
                    <div class="main-container panel-body">
                        <form action="../back_end/selector.php" method="POST"> <!-- Formulari de cerca -->
    		                <div class="modal-body">
    				    		<div id="div-login-msg">
                                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-login-msg">Selecciona el tipus de cerca:</span>
                                </div>
    				    		<label class="radio-inline"><input type="radio" name="tipo" value="nom" onclick="nom()" required>Per Nom</label>
    				    		<label class="radio-inline"><input type="radio" name="tipo" value="email" onclick="email()" required>Per Email</label>
    				    		<label class="radio-inline"><input type="radio" name="tipo" value="dni" onclick="dni()" required>Per DNI</label>
    				    		<label class="radio-inline"><input type="radio" name="tipo" value="tel" onclick="tel()" required>Per Telèfon</label><br><br>
    				    		<input class="form-control" type="text">
    				    		<div id="datainput"></div>
            		    	</div>
    				        <div class="modal-footer">
                                <div>
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Cerca</button>
                                </div>
    				        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        
        <div class="container"> <!-- UNAS PUTAS BARRAS DE PROGRESO JODER Q FINAS TIO OSTIA PUTA -->
            <h2>Animated Progress Bar</h2>
            <p>The .active class animates the progress bar:</p> 
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                </div>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
                Free Space
            </div>
            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%">
                Warning
            </div>
            <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
                Danger
            </div>
        </div>
    </div>
</body>
</html>