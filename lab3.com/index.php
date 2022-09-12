<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>LABORATORIO #3</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="logo.png" class="img-fluid" alt="..."> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Catalogo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorías </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Sala</a></li>
                        <li><a class="dropdown-item" href="#">Habitación</a></li>
                        <li><a class="dropdown-item" href="#">Comedor</a></li>
                        <li><a class="dropdown-item" href="#">Niños</a></li>
                        <li><a class="dropdown-item" href="#">Baños</a></li>
                        <li><a class="dropdown-item" href="#">Cocina</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Texto Buscado" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>



<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slide3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<div class="container-sm">
<div class="row">

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card-body text-black">
            <center> 
            <img src="top.png" class="img-fluid" alt="..." width="150px">
            <h3 class="card-title">Nosotros</h3>
            </center>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <center>
            <button  button style="background-color: green"; type="button" class="btn btn-primary">Ver Detalle</button>
            </center>
            
        </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card-body text-black">
            <center> 
            <img src="top.png" class="img-fluid" alt="..." width="150px">
            <h3 class="card-title">Nuestra misión</h3>
            </center>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <center>
            <button  button style="background-color: green"; type="button" class="btn btn-primary">Ver Detalle</button>
            </center>        
        </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card-body text-black">
            <center> 
            <img src="top.png" class="img-fluid" alt="..." width="150px">
            <h3 class="card-title">Nuestra Visión</h3>
            </center>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <center>
            <button  button style="background-color: green"; type="button" class="btn btn-primary">Ver Detalle</button>
            </center>
        </div>
</div>

</div>
</div>

<div>
<center>
<h1 class="tex-center"class="card-title">Catalogo</h1>
</center>
</div>
  

<div class="row">

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
<div class="card" style="width: 18rem;">
    <img src="producto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h4>10.50</h4>
    </div>
    <hr> </hr>
    <div>
        <center> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Ver</i></button>
            <button  type="button" class="btn btn-dark"><i style="color:white" class="btn bi-eye">Comprar</i></button>
        </div>
        </center>
    </div>
</div>
</div>


</div>


</div>
<ul class="nav justify-content-top  ">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Todos los derechos reservados - 2022</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Contactanos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Siguenos en las redes sociales</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" aria-current="page" href="#">Desabilitado</a>
    </li>
</ul>
<div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>