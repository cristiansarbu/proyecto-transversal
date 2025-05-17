<?php if ($_SESSION['register_form_step'] == 1) { ?>

    <!-- Register Form -->
    <div class="container vh-calc d-flex flex-column align-items-center justify-content-center mb-5 mb-md-0">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post"
              class="container col-lg-6 border shadow d-flex flex-column align-items-center py-5 px-6">
            <div class="intro">
                <h4>Formulario de registro</h4>
                <p>Rellena los siguientes campos para proceder con el registro en nuestro sistema:</p>
            </div>
            <div class="campos container px-0 mt-2">
                <div class="row mb-3 g-3">
                    <div class="col">
                        <div class="inputNombre d-flex flex-column">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" name="name" id="inputNombre" placeholder="Nombre"
                                   class="px-2 border-form-control rounded mt-2 py-2" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputDni d-flex flex-column">
                            <label for="inputDni">DNI</label>
                            <input type="text" name="dni" id="inputDni" placeholder="DNI"
                                   class="px-2 border-form-control rounded mt-2 py-2" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 g-3">
                    <div class="col">
                        <div class="inputEmail d-flex flex-column">
                            <label for="inputEmail">Correo</label>
                            <input type="email" name="email" id="inputEmail" placeholder="Correo"
                                   class="px-2 border-form-control rounded mt-2 py-2" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputTelefono d-flex flex-column">
                            <label for="inputTelefono">Teléfono</label>
                            <input type="text" name="phone" id="inputTelefono" placeholder="Teléfono"
                                   class="px-2 border-form-control rounded mt-2 py-2" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="inputFecha d-flex flex-column">
                            <label for="inputFecha">Fecha de nacimiento</label>
                            <input type="date" name="date" id="inputFecha"
                                   class="border-form-control text-secondary mt-2 py-2 px-3 rounded" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container siguiente d-flex justify-content-center justify-content-md-end align-items-end mt-5">
                <button type="submit" class="btn btn-primary text-light" name="submit1">Siguiente</button>
            </div>

            <?php if (isset($_SESSION['error_signup_1'])) { ?>
                <!-- Warning alert para register fallido -->
                <div class="alert alert-danger d-flex align-items-center mt-3 gap-3 w-100" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                         class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                    <div>
                        Error. Rellena todos los campos del formulario.
                    </div>
                </div>
            <?php } unset($_SESSION['error_signup_1']) ?>

            <?php if (isset($_SESSION['error_signup_1_email'])) { ?>
                <!-- Warning alert para register fallido -->
                <div class="alert alert-danger d-flex align-items-center mt-3 gap-3 w-100" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                         class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                    <div>
                        Error. Ya existe una cuenta con este correo.
                    </div>
                </div>
            <?php } unset($_SESSION['error_signup_1_email']) ?>

            <?php if (isset($_SESSION['error_signup_1_dni'])) { ?>
                <!-- Warning alert para register fallido -->
                <div class="alert alert-danger d-flex align-items-center mt-3 gap-3 w-100" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                         class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                    <div>
                        Error. Ya existe una cuenta con este DNI. Contacta con el equipo de soporte.
                    </div>
                </div>
            <?php } unset($_SESSION['error_signup_1_dni']) ?>
        </form>
    </div>

<?php } else if ($_SESSION['register_form_step'] == 2) { ?>

    <!-- Register Form for Log In Credentials -->
    <div class="container vh-calc d-flex flex-column align-items-center justify-content-center mb-5 mb-md-0">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post"
              class="container col-lg-6 border shadow d-flex flex-column align-items-center py-5 p-5 px-lg-8 ">
            <div class="intro container d-flex justify-content-start p-0">
                <div>
                    <h4>Formulario de registro</h4>
                    <p>Introduce tus credenciales de usuario:</p>
                </div>
            </div>
            <div class="campos container px-0 mt-2">
                <div class="row mb-3 justify-content-between">
                    <div class="col">
                        <div class="inputUsuario d-flex flex-column">
                            <label for="inputUsuari">Usuario</label>
                            <input type="text" name="username" id="inputUsuario" placeholder="Nombre de usuario"
                                   class="px-2 border-form-control rounded mt-2 py-2" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-2 justify-content-between">
                    <div class="col">
                        <div class="inputContrasena d-flex flex-column">
                            <label for="inputContrasena">Contraseña</label>
                            <input type="password" name="password" id="inputContrasena" placeholder="Contraseña"
                                   class="px-2 border-form-control rounded mt-2 py-2" required>
                            <p class="text-secondary fs-8 mt-2">Debe tener al menos 5 carácteres, incluyendo mayúsculas,
                                minúsculas y números.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-between">
                    <div class="col">
                        <!-- <div class="inputTerminos d-flex">
                            <input type="checkbox" name="" id="inputTerminos">
                            <label for="inputTerminos" class="ms-2 form-check-input">He leído y acepto la Política de
                                Privacidad.</label>
                        </div> -->
                        <div class="inputTerminos form-check">
                            <input type="checkbox" name="politicapriv" value="accepted" id="inputTerminos" class="form-check-input" required>
                            <label for="inputTerminos" class="form-check-label">He leído y acepto la Política de
                                Privacidad.</label>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    class="container siguiente d-flex justify-content-center justify-content-md-end align-items-end mt-4 p-0">
            <button type="submit" name="submit2" class="btn btn-primary text-light w-100">Registrar</button>
            </div>

            <?php if (isset($_SESSION['error_signup_2'])) { ?>
                <!-- Warning alert para register fallido -->
                <div class="alert alert-danger d-flex align-items-center mt-3 gap-3 w-100" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                         class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                    <div>
                        Error. Rellena todos los campos del formulario.
                    </div>
                </div>
            <?php } unset($_SESSION['error_signup_2']) ?>

            <?php if (isset($_SESSION['error_signup_2_usuario'])) { ?>
                <!-- Warning alert para register fallido -->
                <div class="alert alert-danger d-flex align-items-center mt-3 gap-3 w-100" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                         class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                    <div>
                        Error. Este usuario ya está en uso. Utiliza un nombre de usuario diferente.
                    </div>
                </div>
            <?php } unset($_SESSION['error_signup_2_usuario']) ?>
        </form>
    </div>

<?php }?>
