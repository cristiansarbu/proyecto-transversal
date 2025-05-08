<div class="card p-0">
    <div class="card-header">
        <h3 class="card-title">Share Something!</h3>
    </div>
    <div class="card-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <div class="mb-3">
                <label for="">Share Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Link</label>
                <input type="text" name="link" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            <a href="<?php echo ROOT_PATH;?>shares" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>