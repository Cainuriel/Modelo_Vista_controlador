<?php 

class Usuario extends EntidadBase {
    
    private $id, $nombre, $email, $password;

    public function __construct($table)
    {
        $table = "usuarios";
        parent::__construct($table);

        
    }
    # getters

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getpassword() {
        return $this->password;
    }

       # setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function save() {
        $query = "INSERT INTO usuarios(id, nombre, email, password) "
        ."VALUES(NULL,"
        ."'".$this->nombre."'."
        ."'".$this->email."'."
        ."'".$this->password."'."
        .");"
        ;

        $save = $this->db()->query($query);
        
        return $save;
    }


}

?>