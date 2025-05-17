<!-- Editar Cita Form -->
<div class="container vh-calc d-flex flex-column align-items-center justify-content-center">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"
          class="container col-lg-8 border shadow d-flex flex-column align-items-center py-5 px-4 py-lg-5 px-lg-6 px-md-6">
        <div class="intro d-flex justify-content-start w-100">
            <h4>Editar cita</h4>
        </div>
        <div class="campos container px-0 mt-2">
            <div class="row mb-3 justify-content-between">
                <div class="col">
                    <div class="inputNombre d-flex flex-column">
                        <label for="inputNombre">Paciente</label>
                        <input type="text" name="" id="inputNombre" placeholder="Nombre"
                               class="px-2 border-form-control rounded mt-2 py-2" disabled value="<?php echo $viewmodel[0][0]['nombre'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="inputDni d-flex flex-column mt-3 mt-md-0">
                        <label for="inputDni">Motivo</label>
                        <input type="text" name="motivo" id="inputDni" placeholder="Motivo"
                               class="px-2 border-form-control rounded mt-2 py-2"
                               value="<?php echo $viewmodel[0][0]['motivo'] ?>">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="inputFecha d-flex flex-column">
                        <label for="inputFechaHora">Fecha y hora de consulta</label>
                        <input type="datetime-local" name="fecha" id="inputFechaHora"
                               class="border-form-control text-secondary mt-2 py-2 px-3 rounded"
                               value="<?php echo $viewmodel[0][0]['fecha'] ?>">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col col-6">
                    <div class="inputEmail d-flex flex-column">
                        <label for="inputEmail">Estado</label>
                        <input type="text" name="estado" id="inputEmail" placeholder="Correo"
                               class="px-2 border-form-control rounded mt-2 py-2" value="<?php echo $viewmodel[0][0]['estado'] ?>">
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($_SESSION['error_appointments_update'])) { ?>
            <!-- Warning alert para register fallido -->
            <div class="alert alert-danger d-flex align-items-center mt-3 gap-3 w-100" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                     class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
                <div>
                    Error. No se ha podido actualizar la cita. Inténtalo más tarde.
                </div>
            </div>
        <?php } unset($_SESSION['error_appointments_update']) ?>

        <div
            class="container siguiente d-flex justify-content-center align-items-center justify-content-md-end align-items-md-end mt-5 gap-3 px-0">
            <button type="submit" name="submit" class="btn btn-primary text-light">Confirmar</button>
            <button type="button" id="back4" class="btn btn-outline-secondary">Cancelar</button>
        </div>
    </form>
</div>
