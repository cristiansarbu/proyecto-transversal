<!-- Hero -->
<section id="hero" class="container d-flex vh-calc justify-content-center align-items-center col-lg-6">
    <div class="d-flex align-items-center text-center text-sm-start">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-around">
            <div class="d-flex flex-column d-md-block align-items-center">
                <h1 class="fw-bolder">Tu centro de salud de confianza...</h1>
                <p>Cuidamos de ti ofreciendo el mejor personal del sector y tecnología de vanguardia.</p>
                <a href="<?php echo isset($_SESSION['is_logged_in']) ? ROOT_URL . '/doctors' : 'users/login' ?>">
                    <button type="button" class="btn btn-primary me-3">📅 Reservar cita</button>
                </a>
                <a href="#showcase">
                    <button type="button" class="btn btn-dark">Más información</button>
                </a>
            </div>
            <img class="img-fluid w-50 d-sm-block rounded" src="<?php echo ROOT_PATH; ?>assets/img/close-up-medical-team-ready-work.jpg"
                 alt="">
        </div>
    </div>
</section>

<!-- Card de showcase con servicios ofrecidos -->
<section id="showcase" class="card container mt-5">
    <div class="card-body d-flex flex-column pb-5">
        <div class="container text-center col-lg-5 pb-2">
            <h2>Nuestros servicios</h2>
            <p>El personal de nuestro centro tiene como objetivo principal la atención socio-sanitaria de las
                personas
                así como la prevención de enfermedades y la promoción de hábitos saludables.</p>
        </div>
        <div class="row mb-4">
            <div class="col col-12 col-md-6 mb-4 mb-md-0">
                <div class="card d-flex flex-row p-3 align-items-center gap-4">
                    <div class="icono w-10 d-none d-md-inline">
                        <img src="<?php echo ROOT_PATH; ?>assets/img/icons/stetho.png" alt="" class="img-fluid">
                    </div>
                    <div class="info">
                        <h3>Médico de familia</h3>
                        <p>Nuestro equipo de médicos de familia ofrecen una excelente atención primaria.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card d-flex flex-row p-3 align-items-center gap-4">
                    <div class="icono w-10 d-none d-md-inline">
                        <img src="<?php echo ROOT_PATH; ?>assets/img/icons/teddy-bear.png" alt="" class="img-fluid">
                    </div>
                    <div class="info">
                        <h3>Pediatría</h3>
                        <p>Equipo de pediatras especializado en brindar lo mejor para los más pequeños.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-md-6 mb-4 mb-md-0">
                <div class="card d-flex flex-row p-3 align-items-center gap-4">
                    <div class="icono w-10 d-none d-md-inline">
                        <img src="<?php echo ROOT_PATH; ?>assets/img/icons/syringe.png" alt="" class="img-fluid">
                    </div>
                    <div class="info">
                        <h3>Enfermería</h3>
                        <p>Profesionales especializados en administrar medicación, extracción de muestras...</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card d-flex flex-row p-3 align-items-center gap-4">
                    <div class="icono w-10 d-none d-md-inline">
                        <img src="<?php echo ROOT_PATH; ?>assets/img/icons/ear.png" alt="" class="img-fluid">
                    </div>
                    <div class="info">
                        <h3>Otorrinolaringología</h3>
                        <p>Prevención, diagnóstico y tratamiento de enfermedades del oído o vías respiratorias.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cards con reseñas -->
<section id="reviews" class="container d-flex flex-column align-items-center py-15 px-5 mt-5">
    <h2 class="mb-7">Nuestros pacientes</h2>
    <div class="d-flex flex-column gap-5 flex-lg-row gap-lg-0 justify-content-between">
        <div class="card col-lg-3 p-3 bg-dark text-light">
            <div class="card-body">
                <p>"Una de las mejores experiencias que he tenido en un centro de salud. Profesionales 10/10.
                    Recomiendo
                    este centro de salud a cualquier persona que busque médicos que verdaderamente se preocupan por
                    ti."
                </p>
                <h3>Laura Hernández</h3>
                <p>Paciente</p>
            </div>
        </div>
        <div class="card col-lg-3 p-3 bg-secondary text-light">
            <div class="card-body">
                <p>"La verdad es que la tecnología me ha sorprendido. No puedo estar más contento con logrosalud."
                </p>
                <h3>Cristian Sarbu</h3>
                <p>Paciente</p>
            </div>
        </div>
        <div class="card col-lg-3 p-3 bg-dark text-light">
            <div class="card-body">
                <p>"Desde el primer día me atendieron médicos que te tratan con respeto y te brindan una atención
                    primaria que no puedes encontrar en otros sitios."</p>
                <h3>Pepe Rodríguez Sobrón</h3>
                <p>Paciente</p>
            </div>
        </div>
    </div>
</section>
