<div class="container">
  This is the User admin page, welcome!
<br>
<form method="post" action="<?php echo URL;?>user/create">
  <label>Login</label><input type="text" name="login" /><br>
  <label>Password</label><input type="text" name="password" /><br>
  <label>Role</label><select name="role">
      <option value="user">User</option>
      <option value="admin">Admin</option>
    </select><br>
  <label></label><input type="submit" /><br>
</form>

<hr>
<br>
  <?php
    foreach($this->userList as $key => $value) {
      echo '<div class="row">';
      echo '<div class="col-sm-1" style="text-align:right;">';
      echo $value['id'];
      echo '</div>';
      echo '<div class="col-sm-1">';
      echo $value['login'];
      echo '</div>';
      echo '<div class="col-sm-1" style="text-align:left;">';
      echo $value['role'];
      echo '</div>';
      echo '<div class="col-sm-1" style="text-align:left;">';
      echo '<a href="'.URL.'user/delete/'.$value['id'].'">Delete</a>';
      echo '</div>';
      echo '<div class="col-sm-1" style="text-align:left;">';
      echo '<a href="'.URL.'user/edit/'.$value['id'].'">Edit</a>';
      echo '</div>';
      echo '</div>';
    }
  ?>
</div>
