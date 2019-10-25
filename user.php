<?php
class User {
    public $id;
    public $name;
    public $password;
    public $email;
    public $firstname;
    public $lastname;
    public $remember_token;
    public $status;
    public $last_login;

    // TODO: metodos para iniciar sesión, validar existencia de usuarios, editar usuarios, crear nuevos usuarios, eliminar usuarios
    // CRUD: Create Read Update Delete
    public static function Login($username, $password) {
        $sql = sprintf("select id,name,email,firstname,lastname from users where (name='%s' or email='%s') and password='%s'", $username, $username, $password);
        $cnn = new mysqli('127.0.0.1','vespertino','123','cetisphpv',3306);

        if ($cnn->connect_error) {
            die("Error al conectar a la base de datos");
        } else {
            // echo "Conexión correcta a la base de datos";
            $rst = $cnn->query($sql);
            // validar resultado de consulta
            if (!$rst) {
                die("Error al ejecutar la consulta: $sql");
            } else {
                // Evaluar el resultado
                if ($rst->num_rows == 1) {
                    // inicio de sesion correcto
                    // obtener los datos del resultado $rst
                    $row = $rst->fetch_assoc();
                    // crear un nuevo usuario para pasar los datos
                    $usuario = new User();
                    $usuario->id = $row['id'];
                    $usuario->name = $row['name'];
                    $usuario->email = $row['email'];
                    $usuario->firstname = $row['firstname'];
                    $usuario->lastname = $row['lastname'];

                    // regresar el usuario
                    return $usuario;
                } else {
                    // inicio de sesion incorrecto
                    return false;
                }
            }
        }
    }
}

// $inicio = User::Login('bidkar','321');
// var_dump($inicio);