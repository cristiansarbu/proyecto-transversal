<!-- Menú principal admin -->
<div class="container mt-7 mb-15 d-flex flex-column col-lg-9">
    <div class="container d-flex justify-content-between col-lg-9 mb-4">
        <h5>Bienvenido, admin!</h5>
        <h5><?php echo date("d/m/Y") ?></h5>
    </div>
    <!-- Cards con información sobre BD -->
    <div class="container d-flex justify-content-between gap-3 col-lg-9">
        <div class="card p-3 rounded bg-primary text-white">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-center me-5">
                    <h6 class="fw-light">Médicos</h6>
                    <h4><?php echo $viewmodel["medicos"] ?></h4>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                     class="bi bi-hospital" viewBox="0 0 16 16">
                    <path
                        d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z" />
                    <path
                        d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z" />
                </svg>
            </div>
        </div>
        <div class="card p-3 rounded bg-warning text-white">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-center me-5">
                    <h6 class="fw-light">Pacientes</h6>
                    <h4><?php echo $viewmodel["pacientes"] ?></h4>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                     class="bi bi-person" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg>
            </div>
        </div>
        <div class="card p-3 rounded bg-success text-white">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-center me-5">
                    <h6 class="fw-light">Citas</h6>
                    <h4><?php echo $viewmodel["citas"] ?></h4>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                     class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path
                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                </svg>
            </div>
        </div>
        <div class="card p-3 rounded bg-danger text-white">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-center me-5">
                    <h6 class="fw-light">Formularios de contacto</h6>
                    <h4><?php echo $viewmodel["formularios"] ?></h4>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                     class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7" />
                    <path
                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                    <path
                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Acciones -->
    <div class="container col-lg-9 mt-5">
        <h5>Acciones</h5>
        <div class="container p-0">
            <a href="<?php echo ROOT_URL . 'admin/registerDoctor' ?>"><button type="button" class="btn btn-primary me-1">Añadir médico</button></a>
        </div>
    </div>

</div>
