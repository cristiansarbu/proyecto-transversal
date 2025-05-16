<!-- Mensaje de confirmación -->
<div class="container vh-calc d-flex flex-column align-items-center justify-content-center">
    <form action="" method="get"
          class="container col-lg-4 border shadow d-flex flex-column align-items-center p-5 rounded">
            <span class="w-100 mb-3">Su solicitud de cita ha sido tramitada correctamente. El médico se pondrá en
                contacto con usted en breve para confirmar su cita.</span>
        <span>
                En caso de dudas adicionales, cambios o cancelaciones contacte con el médico por correo electrónico
                o teléfono.
            </span>
        <div class="d-flex justify-content-end w-100">
            <div class="botones mt-3">
                <a href="<?php echo ROOT_URL . 'appointments/patientAppointments' ?>">
                    <button type="button" class="btn btn-primary text-light">Siguiente</button>
                </a>
            </div>
        </div>
    </form>
</div>