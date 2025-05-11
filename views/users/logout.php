<!-- Logout Form -->
<div class="container vh-calc d-flex flex-column align-items-center justify-content-center">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post"
          class="container col-lg-4 border shadow d-flex flex-column align-items-center py-4 px-4">
        <div class="d-flex justify-content-center">
            <span class="w-100">¿Estás seguro de que quieres cerrar la sesión?</span>
        </div>
        <div class="d-flex justify-content-end w-100">
            <div class="botones mt-3">
                <button type="submit" name="logout" value="true" class="btn btn-primary text-light">Cerrar sesión</button>
                <button type="button" id="back" class="btn btn-secondary">Volver</button>
            </div>
        </div>
    </form>
</div>
