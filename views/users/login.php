<!-- Login Form -->
<div class="container vh-calc d-flex flex-column align-items-center justify-content-center">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post"
          class="container col-lg-4 border shadow d-flex flex-column align-items-center py-4 px-4">
        <h5>Iniciar sesión</h5>

        <input type="text" class="form-control mt-2 mb-3" name="username" placeholder="Usuario">
        <input type="password" class="form-control mb-4" name="password" placeholder="Contraseña">

        <button type="submit" class="btn btn-primary text-light w-100" name="submit">Log in</button>

        <?php if (isset($_SESSION['error_login'])) { ?>
            <!-- Warning alert para login fallido -->
            <div class="alert alert-danger d-flex align-items-center mt-3 gap-3" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                     class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
                <div>
                    Error. Verifica tus credenciales y inténtalo de nuevo.
                </div>
            </div>
        <?php } unset($_SESSION['error_login']) ?>
    </form>
</div>
