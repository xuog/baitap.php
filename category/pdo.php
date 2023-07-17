<?php
abstract class Connection {
    protected $host;
    protected $db;
    protected $username;
    protected $password;
    protected $connection;

    public function __construct($host, $db, $username, $username) 
    {
    $this->db=$db;
    $this->host = 'localhost';
    $this->username = 'root';
    $this->password = '';
    $this->connection = $this->connect();
    }

    public function connect() {
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->username, $this->password);

            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function prepareSQL($sql) {
        return $this->connection->prepare($sql);
}
}
class CategoryConnection extends Connection {
    public function all() {
        $sql = "SELECT * FROM categories";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create($data) {
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }

    public function delete($data) {
        $sql = "DELETE FROM categories where id = :id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }

    public function update($data) {
        $sql = "UPDATE categories SET name= :name WHERE id = :id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }

    public function select($data) {
        $sql = "SELECT * FROM categories WHERE id = $data";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
   
