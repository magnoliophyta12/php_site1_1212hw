<h3>Log in Form</h3>
<?php
if(!isset($_POST['logbtn']))
{
    ?>
    <form action="index.php?page=5" method="post">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" name="login" required>
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control" name="pass" required>
        </div>
        <button type="submit" class="btn btn-primary" name="logbtn">Log in</button>
    </form>
    <?php
}
else
{
    if(login($_POST['login'],$_POST['pass']))
    {
        echo "<h3/><span style='color:green;'>
              You logged in!</span><h3/>";
    }
}
?>
