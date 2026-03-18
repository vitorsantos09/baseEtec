<?php 
include __DIR__.'/includes/head.php';
?>
    <form action="insert-user.php" method="post">
        <div>    
            <label>Login:</label>
            <input type="text" name="login_txt" maxlenght="50">
     </div>
        <div class="password">
            <label>Senha</label>
            <input type="password" name="senha_txt" maxlenght="50">
     </div>
        <div>
            <label>Nome:</label>
            <input type="text" name="nome_txt" maxlenght="50">   
     </div>
     <div>
            <label>Telefone</label>
            <input type="tel" name="num_tel" maxlenght=20>
     </div>
     <div>
            <label>Email</label>
            <input type="email" name="email_txt" maxlenght=50>
     </div>
     <div>
            <label>Data de Nascimento</label>
            <input type="date" name="date_nasc">
     </div>
            <input type="submit" value="Cadastrar">
    </form>
    <?php include __DIR__."/includes/footer.php";?>