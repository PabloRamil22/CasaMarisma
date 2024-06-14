<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Casa da Marisma</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index">Casa da Marisma</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre_nosotros">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="hero">
        <h1>Bienvenidos a la casa de la Marisma</h1>
    </div>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Sobre Nosotros</h2>
                    <p>La casa de la marisma es el lugar perfecto para desconectar y disfrutar de la naturaleza. Ubicada
                        en un entorno privilegiado, ofrecemos todas las comodidades para que su estancia sea
                        inolvidable.</p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/casa1.jpg" class="img-fluid" alt="Casa Rural">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nuestros Servicios</h2>
                    <p>Ofrecemos una amplia gama de servicios para hacer de su estancia una experiencia única.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://example.com/servicio1.jpg" class="card-img-top" alt="Servicio 1">
                        <div class="card-body">
                            <h5 class="card-title">La Portela</h5>
                            <p class="card-text">Disfruta de nuestra piscina privada en un entorno natural.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://example.com/servicio2.jpg" class="card-img-top" alt="Servicio 2">
                        <div class="card-body">
                            <h5 class="card-title">Barbacoa</h5>
                            <p class="card-text">Zona de barbacoa para disfrutar de comidas al aire libre.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://example.com/servicio3.jpg" class="card-img-top" alt="Servicio 3">
                        <div class="card-body">
                            <h5 class="card-title">Senderismo</h5>
                            <p class="card-text">Rutas de senderismo para explorar la belleza natural de la región.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/casa1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/casa3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contacto</h2>
                    <p>Contáctenos para más información o para hacer una reserva.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="send_email.php" method="post">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Tu Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Tu Correo Electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tu Mensaje" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-lpiTsRF0vK5y6C1i8ze7yBxtEwlcJoJWJHrWe6XBPC5MgC10RzEjv89DkdPdJjs" crossorigin="anonymous">
    </script>
</body>

</html>