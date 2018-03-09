<div class="container">
    <h3>Update User Information for: <?php echo $user['username']; ?></h3>
    <form method="POST" class="form-horizontal" action="<?php echo base_url('edit/' . $user['id']); ?>">
        <div class="form-group">
            <label class="control-label col-sm-2" for="fullname">Full Name: </label>
            <div class="col-sm-10">
                <input id="fullname" type="text" name="fullname" required value="<?php echo $user['fullname']; ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password: </label>
            <div class="col-sm-10">
                <input id="password" type="password" name="password" required/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit">
                    Update
                </button>
            </div>
        </div>

        <p> <?php echo $message; ?> </p>
    </form>
</div>

