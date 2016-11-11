<!DOCTYPE html>
<html>
<head>
    <title> Faça o Login! </title>
</head>
<body>
    <form action="<?php echo $view['router']->path('index') ?>" method="post">
        <label>Nome</label>
        <input type="text" name="nome">

        <label>Senha</label>
        <input type="password" name="senha">
        
        <input type="submit" name="enviar">
    </form>
</body>
</html>