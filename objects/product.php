<?php 
class Product {
    // подключение к базе данных и таблице 'products' 
    private $conn;
    private $table_name = "products";

    // свойства объекта 
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;
    public $category_name;
    public $created;

    // конструктор для соединения с базой данных 
    public function __construct($db){
        $this->conn = $db;
    }

    function read(){

        // выбираем все записи 
        $query = "SELECT
                    c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        categories c
                            ON p.category_id = c.id
                ORDER BY
                    p.created DESC";
    
        // подготовка запроса 
        $stmt = $this->conn->prepare($query);
    
        // выполняем запрос 
        $stmt->execute();
    
        return $stmt;
    }
}
?>