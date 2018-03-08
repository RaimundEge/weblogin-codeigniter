<div class="container">
    <h3 class="display-3">Welcome to the Demo Web Application:</h3>
    <p> <?php echo $message; ?> </p>
    <div>
    <?php
    if (!isset($_SESSION['user'])) {
    ?>
    To access our valuable content you need to <a href="login">
        <button><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Sign in</button>
    </a>
    <?php } else {  ?>
        You can proceed to our valuable  <a href="content">
        <button>content</button>
    </a>
    <?php } ?>
    </div>
</div>