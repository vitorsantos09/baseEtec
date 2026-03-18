<?php include __DIR__.'/includes/head.php';?>
<form class="form" action="login.php" method="post">
    <label>Login:</label>
    <input type="text" name="txt_login" maxlenght="50" required>
    <label>Senha:</label>
    <input type="password" name="txt_password" maxlenght="50" required>
    <input class="submit" type="submit" value="Login">
</form>
<div class="novo-cad"><a href="form-usuario.php">Criar conta</a></div>
<?php include __DIR__.'/includes/footer.php';?>