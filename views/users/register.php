<div class="card p-0">
    <div class="card-header">
        <h3 class="card-title">Register user</h3>
    </div>
    <div class="card-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>
