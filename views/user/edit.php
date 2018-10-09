<div class="container">
  This is the User edit page, welcome!
<br>

<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user['id'];?>">
  <label>Login</label><input type="text" name="login" value="<?php echo $this->user['login'];?>" /><br>
  <label>Password</label><input type="text" name="password" /><br>
  <label>Role</label><select name="role">
    <option value="user" <?php if($this->user['role'] == 'user') echo 'selected'; ?>>User</option>
    <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
    </select><br>
  <label></label><input type="submit" /><br>
</form>

</div>
