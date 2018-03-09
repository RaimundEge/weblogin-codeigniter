<div class="container">
    <h3 class="display-3">Demo Web Application: User List</h3>

    <div>
        <table class="table">
            <tr><th>Full Name</th><th>Username</th><th></th></tr>

            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><a href="<?php echo base_url('edit/') . $user['id']; ?>"<button type="button" class="btn btn-primary">Edit</button></a></td>
                    <td><a href="<?php echo base_url('delete/') . $user['id']; ?>"<button type="button" class="btn btn-primary">Delete</button></a></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>

</div>