<div class="container">
    <h2>Update user</h2>
    <form method="post" class="form-horizontal" action="<?php echo URL;?>/user/update/<?php echo $this->user['id']; ?>">
        <div class="form-group">
            <label class="control-label col-sm-2">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $this->user['username'] ?>" name="username" required>
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
                	<option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                	<option value="owner" <?php if($this->user['role'] == 'owner') echo 'selected'; ?>>Owner</option>
                	<option value="default" <?php if($this->user['role'] == 'default') echo 'selected'; ?>>default</option>
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