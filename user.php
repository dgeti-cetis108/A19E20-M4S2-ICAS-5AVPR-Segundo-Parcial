<?php
class User {
    private $id;
    private $name;
    private $password;
    private $email;
    private $firstname;
    private $lastname;
    private $remember_token;
    private $status;
    private $last_login;

    // TODO: metodos para iniciar sesión, validar existencia de usuarios, editar usuarios, crear nuevos usuarios, eliminar usuarios
    // CRUD: Create Read Update Delete
    public static function Login($username, $password) {
        $query = sprintf("select id,name,email,firstname,lastname from users where (name='%s' or email='%s') and password='%s'", $username, $username, $password);
        $cnn = new mysqli('127.0.0.1','vespertino','123','cetisphpv',3306);

        if ($cnn->connect_error) {
            die("Error al conectar a la base de datos");
        } else {
            // echo "Conexión correcta a la base de datos";
            $rst = $cnn->query($query);
            // TODO: validar resultado de consulta
        }
    }
}

User::Login('bidkar','123');