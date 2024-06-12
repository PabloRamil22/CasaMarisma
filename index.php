<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Casa da Marisma</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index">Casa da Marisma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <img src="https://example.com/sobre-nosotros.jpg" class="img-fluid" alt="Casa Rural">
                    <!-- Reemplaza con tu URL de imagen -->
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
                        <!-- Reemplaza con tu URL de imagen -->
                        <div class="card-body">
                            <h5 class="card-title">La Portela</h5>
                            <p class="card-text">Disfruta de nuestra piscina privada en un entorno natural.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://example.com/servicio2.jpg" class="card-img-top" alt="Servicio 2">
                        <!-- Reemplaza con tu URL de imagen -->
                        <div class="card-body">
                            <h5 class="card-title">Barbacoa</h5>
                            <p class="card-text">Zona de barbacoa para disfrutar de comidas al aire libre.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://example.com/servicio3.jpg" class="card-img-top" alt="Servicio 3">
                        <!-- Reemplaza con tu URL de imagen -->
                        <div class="card-body">
                            <h5 class="card-title">Senderismo</h5>
                            <p class="card-text">Rutas de senderismo para explorar la belleza natural de la región.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Galería</h2>
                    <p>Explore nuestra galería de fotos y descubra la belleza de Casa Rural El Paraíso.</p>
                </div>
            </div>
            <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://example.com/galeria1.jpg" class="d-block w-100" alt="Galería 1">
                        <!-- Reemplaza con tu URL de imagen -->
                    </div>
                    <div class="carousel-item">
                        <img src="https://example.com/galeria2.jpg" class="d-block w-100" alt="Galería 2">
                        <!-- Reemplaza con tu URL de imagen -->
                    </div>
                    <div class="carousel-item">
                        <img src="https://example.com/galeria3.jpg" class="d-block w-100" alt="Galería 3">
                        <!-- Reemplaza con tu URL de imagen -->
                    </div>
                    <!-- Añadir más items de carrusel según sea necesario -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

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
                            <input type="text" class="form-control" id="name" name="name" placeholder="Tu Nombre"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Tu Correo Electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tu Mensaje"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>

</html>
