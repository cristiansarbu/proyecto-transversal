<!-- Search Bar -->
<form action="" method="get" class="container d-flex flex-column flex-md-row gap-3 mb-7 mt-7 p-5 border rounded">
    <div class="container input-group flex-grow-1">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="currentColor"
            class="bi bi-search search-icon" viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
        </svg> -->
        <input type="text" name="" id="" class="form-control rounded-pill ps-5" placeholder="Buscar por nombre">
    </div>
    <div class="container">
        <div class="dropdown">
            <a class="btn border-form-control rounded-pill dropdown-toggle p-2 px-5" href="#" role="button"
               id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Especialidad
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Médico de familia</a></li>
                <li><a class="dropdown-item" href="#">Enfermería</a></li>
                <li><a class="dropdown-item" href="#">Pediatría</a></li>
                <li><a class="dropdown-item" href="#">Otorrinolaringología</a></li>
            </ul>
        </div>
    </div>
    <button type="button" class="btn btn-secondary rounded px-5">Buscar</button>
</form>

<div class="container d-flex flex-column gap-5 mb-7">
    <!-- Cards with Doctors -->
    <?php foreach ($viewmodel[0] as $medico) { ?>
        <div class="container doctor-card border d-flex flex-column p-4 rounded">
            <div class="nombre-especialidad d-flex flex-column flex-md-row gap-1 gap-md-5 align-items-center mb-2">
                <h2 class="m-0">Dr. <?php echo $medico['nombre'] ?></h2>
                <div class="badge rounded-pill border text-dark fs-6">
                    <span class="align-middle"><?php echo $medico['especialidad'] ?></span>
                </div>
            </div>
            <div class="datos-importantes d-flex flex-column flex-md-row gap-2 gap-md-5">
                <div class="consulta d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                         class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    <p class="m-0">Consulta <?php echo $medico['consulta'] ?></p>
                </div>
                <div class="email d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                         class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                        <path
                            d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg>
                    <p class="m-0"><?php echo $medico['correo'] ?></p>
                </div>
                <div class="phone d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                         class="bi bi-telephone d-flex" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <p class="m-0"><?php echo $medico['telefono'] ?></p>
                </div>
            </div>
            <div class="citas-disponibles mt-3 fw-bold align-items-center">
                <span>Citas disponibles:</span>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="horas-citas d-flex flex-column flex-md-row gap-2 mt-1">
                        <div
                            class="badge rounded-pill bg-light border text-secondary fs-8 d-inline-flex align-items-center justify-content-start">
                            <span class="align-middle">Hoy 12:30</span>
                        </div>
                        <div
                            class="badge rounded-pill bg-light border text-secondary fs-8 d-inline-flex align-items-center justify-content-start">
                            <span class="align-middle">Mañana 09:30</span>
                        </div>
                        <div
                            class="badge rounded-pill bg-light border text-secondary fs-8 d-inline-flex align-items-center justify-content-start">
                            <span class="align-middle">Mañana 14:00</span>
                        </div>
                        <div
                            class="badge rounded-pill bg-light border text-secondary fs-8 d-inline-flex align-items-center justify-content-start">
                            <span class="align-middle">Mañana 14:30</span>
                        </div>
                    </div>
                    <div class="d-flex botones gap-3 mt-4 mt-md-0">
                        <a href="/html/general/solicitarcita.html">
                            <button type="button" class="btn text-dark btn-outline-secondary fl">Ver
                                disponibilidad</button>
                        </a>
                        <!-- De momento mandar a la página para crear formulario -> Funcionamiento normal será enviar al usuario a registrarse para luego poder solicitar una cita -->
                        <a href="<?php echo ROOT_URL . 'contactForms/create/' . $medico['id_usuario'] ?>">
                            <button type="button" class="btn btn-dark text-light">Solicitar cita</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

<!-- Pagination -->
<!-- Hecho utilizando la query parameter "page" con índice 0 (+1 para no mostrar al usuario índice 0) -->
<nav aria-label="Page navigation example" class="d-flex justify-content-center mb-7">
    <ul class="pagination">
        <?php if ($_GET['page'] == 0) { ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=0' ?>">
                    <span>&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=0' ?>">1</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=1' ?>">2</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=2' ?>">3</a></li>
            <li class="page-item">
                <a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=1' ?>">
                    <span>&raquo;</span>
                </a>
            </li>
        <?php } else { ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=' . ($_GET['page'] - 1) ?>">
                    <span>&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=' . ($_GET['page'] - 1) ?>"><?php echo ($_GET['page']) ?></a></li>
            <li class="page-item active"><a class="page-link" href="<?php echo ROOT_URL . 'doctors?page=' . ($_GET['page']) ?>"><?php echo ($_GET['page'] + 1) ?></a></li>
            <li class="page-item"><a class="page-link" href="<?php echo $_GET['page'] != $viewmodel[1] - 1 ? ROOT_URL . 'doctors?page=' . ($_GET['page'] + 1) : ROOT_URL . 'doctors?page=' . $_GET['page'] ?>"><?php echo $_GET['page'] != $viewmodel[1] - 1 ? ($_GET['page'] + 2) : '-' ?></a></li>
            <li class="page-item">
                <a class="page-link" href="<?php echo $_GET['page'] != $viewmodel[1] - 1 ? ROOT_URL . 'doctors?page=' . ($_GET['page'] + 1) : ROOT_URL . 'doctors?page=' . $_GET['page']?>">
                    <span>&raquo;</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>