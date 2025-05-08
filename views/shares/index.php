<div>
    <?php if (isset($_SESSION['is_logged_in'])) : ?>
    <a href="<?php echo ROOT_PATH;?>shares/add" class="btn btn-success btn-share mb-2">Share Something!</a>
    <?php endif; ?>
    <?php foreach($viewmodel as $item) : ?>
        <div class="card mt-4">
            <div class="card-body">
                <h3><?php echo $item['title']; ?></h3>
                <small>
                    <?php echo $item['create_date']; ?>
                </small>
                <br>
                <p><?php echo $item['body']; ?></p>
                <br>
                <a href="<?php echo $item['link']; ?>" class="btn btn-outline-dark" target="_blank">Go To Website</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    