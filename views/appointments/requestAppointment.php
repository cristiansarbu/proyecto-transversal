<!-- Main Cards -->
<div class="container d-flex flex-column flex-lg-row justify-content-between gap-5 mb-5 mt-5">
    <!-- Card for Doctor -->
    <div class="container doctor d-flex flex-column justify-content-center">
        <div class="container border d-flex flex-column justify-content-center align-items-center py-15">
            <h1><?php echo $viewmodel[0]['nombre'] ?></h1>
            <h4 class="mb-4"><?php echo $viewmodel[0]['especialidad'] ?></h4>
            <div class="info d-flex flex-column gap-2">
                <div class="ubicacion d-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                         class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    <p class="m-0">Consulta <?php echo $viewmodel[0]['consulta'] ?></p>
                </div>
                <div class="email d-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                         class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                        <path
                            d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg>
                    <p class="m-0"><?php echo $viewmodel[0]['correo'] ?></p>
                </div>
                <div class="telefono d-flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                         class="bi bi-telephone d-flex" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <p class="m-0"><?php echo $viewmodel[0]['telefono'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Card con fechas para citas -->
    <div class="container citas border d-flex flex-column align-items-center justify-content-center py-5 gap-5">
        <div class="container seleccion-fecha px-8 d-flex justify-content-center align-items-center">
            <div class="container d-flex flex-column align-items-center justify-content-center p-0">
                <div class="p-0">
                    <label for="fecha" class="text-start">Fecha</label>
                </div>
                <div class="p-0">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <!-- Al cambiar la fecha, el formulario automáticamente se envía por post con javascript para mostrar horas disponibles -->
                        <input type="date" name="fecha" id="fecha"
                               class="border-form-control text-secondary mt-2 py-1 px-3 rounded" value="<?php echo $_POST['fecha'] ?? '' ?>" onchange="this.form.submit();">
                    </form>
                </div>
            </div>
        </div>
        <?php if (isset($_POST['fecha'])) { ?>
            <div class="horas-disponibles container px-8">
                <div class="row mb-3 gap-3 gap-md-0">
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge <?php echo in_array("09:00", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?> border fs-6 px-4p5 py-2">09:00</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("09:30", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">09:30</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("10:00", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">10:00</span>
                    </div>
                </div>
                <div class="row mb-3 gap-3 gap-md-0">
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("10:30", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">10:30</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("11:00", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">11:00</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("11:30", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">11:30</span>
                    </div>
                </div>
                <div class="row mb-3 gap-3 gap-md-0">
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("12:00", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">12:00</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("12:30", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">12:30</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("13:00", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">13:00</span>
                    </div>
                </div>
                <div class="row mb-3 gap-3 gap-md-0">
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("13:30", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">13:30</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("14:00", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">14:00</span>
                    </div>
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("14:30", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">14:30</span>
                    </div>
                </div>
                <div class="row mb-3 gap-3 gap-md-0">
                    <div class="col gx-0 gx-md-5 gx-lg-4">
                        <span class="badge border <?php echo in_array("15:00", $viewmodel[1]) ? 'bg-secondary text-light' : 'bg-light text-secondary' ?>  fs-6 px-4p5 py-2">15:00</span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="container boton d-flex justify-content-center col-7">
            <a href="<?php echo isset($_SESSION['is_logged_in']) ? ROOT_URL . 'contactForms/create/' . $viewmodel[0]['id_usuario'] : ROOT_URL . 'users/login' ?>">
                <button type="button" class="btn btn-dark text-light w-100">Solicitar cita</button>
            </a>
        </div>
    </div>
</div>