<div class="container">
    <h3>Please Log In</h3>
    <form method="POST" class="form-horizontal" action="login">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username: </label>
            <div class="col-sm-10">
                <input id="username" type="text" name="username" required"
                       autofocus="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password: </label>
            <div class="col-sm-10">
                <input id="password" type="password" name="password" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit">
                    Login
                </button>
            </div>
        </div>
        <p>
            <small>(Hint: try username student with password student)</small>
        </p>
        <p> <?php echo $message; ?> </p>
    </form>
</div>

