<div class="container">
    <h2>Create user</h2>
    <form method="post" class="form-horizontal" action="<?php echo URL;?>/user/create">
        <div class="form-group">
            <label class="control-label col-sm-2">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter username" name="username" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-10">          
                <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Role:</label>
            <div class="col-sm-10">          
                <select name="role">
                    <option value="default">Default</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>

<hr />
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody>
    <?php 
        foreach($this->userList as $key => $value) {
    ?>
            <tr>
                <td> <?php echo $value['id']; ?> </td>
                <td> <?php echo $value['username']; ?> </td>
                <td> <?php echo $value['role']; ?> </td>
                <td>
                    <a href="<?php echo URL ?>/user/edit/<?php echo $value['id'] ?>" title="">Edit</a>
                    <a class="del" href="<?php echo URL ?>/user/delete/<?php echo $value['id'] ?>" title="">Delete</a>
                </td>
            </tr>

    <?php } ?>
        </tbody>
    </table>
</div>

