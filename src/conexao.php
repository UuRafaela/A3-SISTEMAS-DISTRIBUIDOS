<?php
class Conexao {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "public";
    private $conn;

    function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        } else {
            echo "";
        }
    }

    public function executarConsulta($sql) {
        $result = $this->conn->query($sql);
        return $result;
    }

    public function fecharConexao() {
        $this->conn->close();
    }
}
?>