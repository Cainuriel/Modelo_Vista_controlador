<?PHP

class UsuarioModel extends ModeloBase {
    private $table;

    public function __construct($table)
    {
        $this->table = "usuarios";
        parent::__construct($table);

        
    }

    public function getUnUsuario($email) { # hemos anyadido un parametro
        $query = "SELECT * FROM usuarios WHERE email=$email";
        $usuario = $this->ejecutarSql($query);
        return $usuario;

    }

}



?>