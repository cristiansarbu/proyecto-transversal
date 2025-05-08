<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php use classes\Messages;

        echo ROOT_PATH; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
    <title>Shareboard</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" aria-hidden="true"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Shareboard</span>
            </a>

            <ul class="nav nav-pills">
                <?php if (isset($_SESSION['is_logged_in']) && isset($_SESSION['USER_DATA']['name'])) :?>
                    <li class="nav-item"><a href="<?php echo ROOT_URL; ?>" class="nav-link" aria-current="page">Welcome <?php echo $_SESSION['USER_DATA']['name']; ?></a></li>
                    <li class="nav-item"><a href="<?php echo ROOT_URL; ?>shares" class="nav-link" aria-current="page">Shares</a></li>
                    <li class="nav-item"><a href="<?php echo ROOT_URL; ?>users/logout" class="nav-link" aria-current="page">Logout</a></li>
                <?php else : ?>
                    <li class="nav-item"><a href="<?php echo ROOT_URL; ?>" class="nav-link" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="<?php echo ROOT_URL; ?>users/login" class="nav-link" aria-current="page">Login</a></li>
                    <li class="nav-item"><a href="<?php echo ROOT_URL; ?>users/register" class="nav-link" aria-current="page">Register</a></li>
                <?php endif; ?>
            </ul>
        </header>
    </div>

    <div class="container">
        <div class="row">
                <?php Messages::display() ?>
                <?php require($view); ?>
        </div>
    </div>
</body>
</html>