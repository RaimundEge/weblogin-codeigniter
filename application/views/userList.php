<div class="container">
    <h3 class="display-3">Welcome to the Demo Web Application:</h3>

    <div>
        <h4><?php echo $page; ?></h4>

        <table class="table">
            <tr><th>Full Name</th><th>Username</th><th>Password</th><th></th></tr>

            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><a href="pages/edit/<?php echo $user['id']; ?>"<button type="button" class="btn btn-primary">Edit</button></a></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>

</div>