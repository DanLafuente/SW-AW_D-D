<?php
class Usuario
{

    use MagicProperties;

    /* Declarations & Construct */
    public const ADMIN_ROLE = 1;
    public const USER_ROLE = 2;

    private $id;
    private $nombreUsuario;
    private $password;
    private $roles;

    private function __construct($nombreUsuario, $password, $roles = [], $id = null)
    {
        $this->id = $id;
        $this->nombreUsuario = $nombreUsuario;
        $this->password = $password;
        $this->roles = $roles;
    }

    /* General Logic */

    public static function crea($nombreUsuario, $password, $rol) {

        $user = new Usuario($nombreUsuario, self::hashPassword($password));
        $user->añadeRol($rol);
        return $user->guarda();
    }
    
    public static function login($nombreUsuario, $password) {

        $usuario = self::buscaUsuario($nombreUsuario);
        if ($usuario && $usuario->compruebaPassword($password)) {
            return self::cargaRoles($usuario);
        }
        return false;
    }

    private static function inserta($usuario)
    {
        $result = false;
        $conn = BD::getInstance()->getConexionBd();
        $query=sprintf("INSERT INTO Usuarios(nombreUsuario, password) VALUES ('%s', '%s')", $conn->real_escape_string($usuario->nombreUsuario), $conn->real_escape_string($usuario->password));
        if ( $conn->query($query) ) {
            $usuario->id = $conn->insert_id;
            $result = self::insertaRoles($usuario);
        } else {
            error_log("Error BD ({$conn->errno}): {$conn->error}");
        }
        return $result;
    }
    
    private static function actualiza($usuario) {
        $result = false;
        $conn = BD::getInstance()->getConexionBd();
        $query=sprintf("UPDATE Usuarios U SET nombreUsuario = '%s', password='%s' WHERE U.id=%d", $conn->real_escape_string($usuario->nombreUsuario), $conn->real_escape_string($usuario->password), $usuario->id);
        if ( $conn->query($query) ) {
            $result = self::borraRoles($usuario);
            if ($result) {
                $result = self::insertaRoles($usuario);
            }
        } else {
            error_log("Error BD ({$conn->errno}): {$conn->error}");
        }
        
        return $result;
    }
    /* Rol Logic */
    private static function cargaRoles($usuario) {

        $roles=[];
            
        $conn = BD::getInstance()->getConexionBd();
        $query = sprintf("SELECT RU.rol FROM RolesUsuario RU WHERE RU.usuario=%d"
            , $usuario->id
        );
        $rs = $conn->query($query);
        if ($rs) {
            $roles = $rs->fetch_all(MYSQLI_ASSOC);
            $rs->free();

            $usuario->roles = [];
            foreach($roles as $rol) {
                $usuario->roles[] = $rol['rol'];
            }
            return $usuario;

        } else {
            error_log("Error BD ({$conn->errno}): {$conn->error}");
        }
        return false;
    }
    private static function insertaRoles($usuario)
    {
        $conn = BD::getInstance()->getConexionBd();
        foreach($usuario->roles as $rol) {
            $query = sprintf("INSERT INTO RolesUsuario(usuario, rol) VALUES (%d, %d)", $usuario->id, $rol);
            if ( ! $conn->query($query) ) {
                error_log("Error BD ({$conn->errno}): {$conn->error}");
                return false;
            }
        }
        return $usuario;
    }
    private static function borraRoles($usuario) {
        $conn = BD::getInstance()->getConexionBd();
        $query = sprintf("DELETE FROM RolesUsuario RU WHERE RU.usuario = %d"
            , $usuario->id
        );
        if ( ! $conn->query($query) ) {
            error_log("Error BD ({$conn->errno}): {$conn->error}");
            return false;
        }
        return $usuario;
    }
    public function tieneRol($role) {
        if ($this->roles == null) {
            self::cargaRoles($this);
        }
        return array_search($role, $this->roles) !== false;
    }
    public function añadeRol($role) {
        $this->roles[] = $role;
    }

    /* Password Logic */
    private static function hashPassword($password) {//encriptado
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function compruebaPassword($password) {
        return password_verify($password, $this->password);
    }
    public function cambiaPassword($nuevoPassword) {
        $this->password = self::hashPassword($nuevoPassword);
    }
    
    /* Seekers Logic */
    public static function buscaUsuario($nombreUsuario) {

        $conn = BD::getInstance()->getConexionBd();
        $query = sprintf("SELECT * FROM Usuarios U WHERE U.nombreUsuario='%s'", $conn->real_escape_string($nombreUsuario));
        $rs = $conn->query($query);
        $result = false;
        if ($rs) {
            $fila = $rs->fetch_assoc();
            if ($fila) {
                $result = new Usuario($fila['nombreUsuario'], $fila['password'], $fila['nombre'], $fila['id']);
            }
            $rs->free();
        } else {
            error_log("Error BD ({$conn->errno}): {$conn->error}");
        }
        return $result;
    }
    public static function buscaPorId($idUsuario) {

        $conn = BD::getInstance()->getConexionBd();
        $query = sprintf("SELECT * FROM Usuarios WHERE id=%d", $idUsuario);
        $rs = $conn->query($query);
        $result = false;
        if ($rs) {
            $fila = $rs->fetch_assoc();
            if ($fila) {
                $result = new Usuario($fila['nombreUsuario'], $fila['password'], $fila['nombre'], $fila['id']);
            }
            $rs->free();
        } else {
            error_log("Error BD ({$conn->errno}): {$conn->error}");
        }
        return $result;
    }

    /* Save & Delated */
    public function guarda() {

        if ($this->id !== null) {
            return self::actualiza($this);
        }
        return self::inserta($this);
    }
    public function borrate() {

        if ($this->id !== null) {
            return self::borra($this);
        }
        return false;
    }

    private static function borra($usuario) {
        return self::borraPorId($usuario->id);
    }  
    private static function borraPorId($idUsuario) {

        if (!$idUsuario) {
            return false;
        } 
        /* Los roles se borran en cascada por la FK
         * $result = self::borraRoles($usuario) !== false;
         */
        $conn = BD::getInstance()->getConexionBd();
        $query = sprintf("DELETE FROM Usuarios U WHERE U.id = %d"
            , $idUsuario
        );
        if ( ! $conn->query($query) ) {
            error_log("Error BD ({$conn->errno}): {$conn->error}");
            return false;
        }
        return true;
    }
    

    /* Gets */
    public function getId() { return $this->id; }
    public function getNombreUsuario() { return $this->nombreUsuario; }
    public function getRoles() { return $this->roles; }
}



