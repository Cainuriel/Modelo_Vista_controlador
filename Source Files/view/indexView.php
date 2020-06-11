<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    < <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>

    
    <title>Modelo Vista Controlador</title>
</head>
<body>

    <form action="<?php echo $helper->url("usuarios","crear");?>" method="post" class="col-lg-5"> 
    <h3>Nuevo usuario</h3>
    <hr/>
    Nombre: <input type="text" name="nombre" id="nombre_form" class="form-control">
    Email: <input type="email" name="email" id="email_form" class="form-control">
    Password: <input type="password" name="password" id="pass_form" class="form-control">
    <input type="submit" value="value" class="btn btn-success">
</form>

<div class="col-lg-7">
            <h3>Usuarios</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                <?php echo $user->id; ?> -
                <?php echo $user->nombre; ?> -
                <?php echo $user->email; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>

    
</body>
</html>