<div class="container">
    <h3>update User Information</h3>
    <form method="POST" class="form-horizontal" action="edit">
        <div class="form-group">
            <label class="control-label col-sm-2" for="fullname">Full Name: </label>
            <div class="col-sm-10">
                <input id="fullname" type="text" name="fullname" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username: </label>
            <div class="col-sm-10">
                <input id="username" type="text" name="username" required
                       autocomplete="new-password"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password: </label>
            <div class="col-sm-10">
                <input id="password" type="password" name="password" required
                       autocomplete="new-password"/>
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

