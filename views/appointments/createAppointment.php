<!-- Crear Cita Form -->
<div class="container vh-calc d-flex flex-column align-items-center justify-content-center">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"
          class="container col-lg-6 border shadow d-flex flex-column align-items-center py-5 px-6">
        <div class="intro d-flex justify-content-start w-100">
            <h4>Crear cita</h4>
        </div>
        <div class="campos container px-0 mt-2">
            <div class="row mb-3 justify-content-between">
                <div class="col mb-3 mb-md-0">
                    <div class="inputNombre d-flex flex-column">
                        <label for="inputNombre">Paciente</label>
                        <input type="text" name="dni" id="inputDni" placeholder="DNI"
                               class="px-2 border-form-control rounded mt-2 py-2">
                    </div>
                </div>
                <div class="col">
                    <div class="inputDni d-flex flex-column">
                        <label for="inputDni">Motivo</label>
                        <input type="text" name="motivo" id="inputDni" placeholder="Motivo"
                               class="px-2 border-form-control rounded mt-2 py-2">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="inputFecha d-flex flex-column">
                        <label for="inputFechaHora">Fecha y hora de consulta</label>
                        <input type="datetime-local" name="fechahora" id="inputFechaHora"
                               class="border-form-control text-secondary mt-2 py-2 px-3 rounded">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col col-6">
                    <div class="inputEmail d-flex flex-column">
                        <label for="inputEmail">Estado</label>
                        <input type="txet" name="estado" id="inputEmail" placeholder="Estado"
                               class="px-2 border-form-control rounded mt-2 py-2">
                    </div>
                </div>
            </div>
        </div>
        <div
            class="container siguiente d-flex justify-content-center justify-content-md-end align-items-end mt-5 gap-3 p-0">
            <button type="submit" name="submit" class="btn btn-primary text-light">Confirmar</button>
            <button type="button" id="back5" class="btn btn-outline-secondary">Cancelar</button>
        </div>
    </form>
</div>