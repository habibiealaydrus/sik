<?php
    $terpilih=$edituser['leveluser'];
    switch ($terpilih) 
        {
        case 'admin':
            echo '<option value="admin" placeholder="admin">Admin</option>;
                 <option>user</option>';
            break;
        case 'user':
            echo '<option value="user" placeholder="user">User</option>
                  <option>admin</option>';
            break;
        default:
            echo '<option value="admin">Admin</option>
                 <option value="user">User</option>';
            break;
        }
?>