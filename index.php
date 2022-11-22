<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <title>Nombre de la clinica</title>
    </head>
    <body>
        <header>
            <nav>
                <?php
                    include("header.html");
                ?>
            </nav>
        </header>
        <!--Carrousel Section-->
        <section>
            <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img src="images/main-carrousel-images/first-banner.png" alt="carouselImage1" title="carouselImage1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/main-carrousel-images/second-banner.png" alt="carouselImage2" title="carouselImage2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/main-carrousel-images/third-banner.png" alt="carouselImage3" title="carouselImage3" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/main-carrousel-images/fourth-banner.png" alt="carouselImage4" title="carouselImage4" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--Features section-->
        <section id="features">
            <h2 class="text-center">¿Por qué elegir consultorio dental Alma Temblador?</h2>
            <div class="row">
                <div class="feature-box col-lg-3 text-center">
                    <span class="bi bi-check2 fa-4x feature-icons"></span>
                    <h3>Consultorios Agradables</h3>
                    <p>Contamos con espacios acondicionados de tal manera que tu visita sea una experiencia agradable</p>
                </div>
                
                <div class="feature-box col-lg-3 text-center">
                    <span class="bi bi-person-check-fill fa-4x feature-icons"></span>
                    <h3>Equipo Amigable</h3>
                    <p>El personal adecuado para cualquier tratamiento</p>
                </div>
                
                <div class="feature-box col-lg-3 text-center">
                    <span class="bi bi-shield-fill-check fa-4x feature-icons"></span>
                    <h3>Instrumentos de calidad</h3>
                    <p>
                        Para asegurarnos de tu salud, contamos con la mejor gama de 
                        instrumentos y calidad en farmacos
                    </p>  
                </div>
                <div class="feature-box col-lg-3 text-center fawesome">
                    <span class="fa-solid fa-tooth fa-4x feature-icons "></span>
                    <h3>Odontologia Avanzada</h3>
                    <p>
                        Creamos soluciones gracia al uso de tecnicas avanzados minimamente
                        invasivos
                    </p>  
                </div>
                <button type="button" class="btn btn-outline-info btn-reserve">Reserva una cita</button>
            </div>
        </section>
        <!--Tratamientos-->
        <section id="Card-carrousel-section">
            
        </section>

        <!--Iframe section-->
        <section id="location">

        </section>
        <footer>
            <?php
                include("footer.html");
            ?>
        </footer>
        <script src="https://kit.fontawesome.com/9a5b41a4b1.js" crossorigin="anonymous"></script>
    </body>
</html>