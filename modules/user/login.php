<?php
//show_array($user);
$error = array();
if (isset($_POST['login'])) {
    if (empty($_POST['username'])) {
        $error['username'] = "không được để trống";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "tên tài khoản không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "không được để trống";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "mật khẩu không đúng định dạng";
        } else {
            $password = $_POST['password'];
        }
    }
    if (empty($error)) {
        if (check_login($username, $password)) {
            $_SESSION['login'] = array(
                'is_login' => TRUE,
                'user_login' => $username,
                //'user_id_login'=>
            );
            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + 3600,'/');
                //setcookie('password', $password, time() + 3600,'/');
            }
            redirect("?mod=home&view=main");
        } else {
            $error['login'] = "tên tài khoản hoặc mật khẩu không đúng";
        }
    }
}
?> 
<div id="content "class="wp-inner">
    <h1>Đăng nhập</h1>
    <div class="list-product">
        <form method="POST">
            <label>username</label>
            <input type="text" name="username" id="username" value="<?php if (isset($_COOKIE['username'])) {
    echo $_COOKIE['username'];
}?>"><br>
            <?php if (isset($error['username'])) { ?>
            <span class="notice"><?php echo $error['username']; ?></span>
                <?php
            }
            ?><br>
            <label>password</label>
            <input type="password" name="password" id="password"> <br>
            <?php
            if (isset($error['password'])) {?>
            <span class="notice"> <?php echo $error['password'];?></span>
           <?php }
           ?><br>
            <input type="checkbox" name="remember"> remember me<br>
            <input type="submit" name="login" value="login">  
            <?php
            if (isset($error['login'])) {?>
            <span class="notice"> <?php echo $error['login'];?></span>
           <?php }
           ?><br>
        </form>
    </div>
</div>

