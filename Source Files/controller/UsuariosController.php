<?php

# has tenido que anaydir el atributo usuarios al objeto usuarios

class UsuariosController extends ControladorBase {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $usuario = new Usuario("usuarios");

        $allusers=$usuario->getAll();

        $this->view("index", array(
            "allusers"=>$allusers,
            "Hola"=> "Bienvenido al Framework casero"

        ));
    }

    public function crear() {

        if(isset($_GET['nombre'])) {
            $usuario = new Usuario("usuarios");
            $nombre = $_POST['nombre'];
           $email = $_POST['email'];
           $password = sha1($_POST['password']);

           $usuario->setNombre($nombre);
           $usuario->setEmail($email);
           $usuario->setPassword($password);

           $save = $usuario->save();

        }

        $this->redirect('Usuarios', 'index');
    }

    public function borrar()  {
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];

            $usuario = new Usuario("usuarios");
            $usuario->deleteByid($id);

            $this->redirect();

        }
    }

}

?>