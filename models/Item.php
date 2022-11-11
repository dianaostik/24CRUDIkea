<?php
include "./models/DB.php";


  class Item{
        public $id;
        public $name;
        public $category;
        public $price;
        public $about;

        public function __construct($id = null, $name = null, $category = null,
        $price = null, $about = null){
            $this->id = $id;
            $this->name = $name;
            $this->category = $category;
            $this->price = $price;
            $this->about = $about;
        }

        public static function all(){
            $items = [];
            $db = new DB();
            $query = "SELECT * FROM `ikea`";
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $items[] = new Item ($row['id'], $row['name'], $row['category'], $row['price'], $row['about'] );

                }
            $db->conn->close();
            return $items;
        }

        public static function create(){
            $db = new DB();
            $stmt = $db->conn->prepare("INSERT INTO `ikea`( `name`, `category`, `price`, `about`) VALUES (?,?,?,?)");
            $stmt->bind_param("ssds", $_POST['name'], $_POST['category'], $_POST['price'], $_POST['about']);
            $stmt->execute();

            $stmt->close();
            $db->conn->close();
            }

    public static function find($id){
            $item = new Item();
            $db = new DB();
            $query = "SELECT * FROM `ikea` where `id`=". $id;
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $item = new Item( $row['id'], $row['name'], $row['category'], $row['price'], $row['about']);
                }
            $db->conn->close();
            return $item;
        }

    public function update(){       
            $db = new DB();
            $stmt = $db->conn->prepare("UPDATE `ikea` SET `name`= ? ,`category`= ? ,`price`= ? ,`about`= ? WHERE `id` = ?");
            $stmt->bind_param("ssdsi", $_POST['name'], $_POST['category'], $_POST['price'], $_POST['about'], $_POST['id']);
            $stmt->execute();
    
            $stmt->close();
            $db->conn->close();
    }

    public static function destroy($id){
            $db = new DB();
            $stmt = $db->conn->prepare("DELETE FROM `ikea` WHERE `id` = ?");
            $stmt->bind_param("i", $_POST['id']);
            $stmt->execute();
    
            $stmt->close();
            $db->conn->close(); 
    }

    public static function getfilterParams(){
            $params = [];
            $db = new DB();
            $query = "SELECT DISTINCT `category` FROM `ikea`";
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $params [] = $row['category'];
                }
            $db->conn->close();
            return $params;
    }

    public static function filter(){
            $items = [];
            $db = new DB();
            $query = "SELECT * FROM `ikea`";
            $first = true;
            if ($_GET['filter'] != "") {
                $first = false;
                $query .= "WHERE `category` = '" . $_GET['filter'] . "' ";
            }
            

            if ($_GET['from'] != "") {
            $query .= (($first)? "WHERE" : "AND") . "`price` >= " . $_GET['from'] . " ";
                $first = false;
            }


            if ($_GET['to'] != "") {
                $query .= (($first)? "WHERE" : "AND") . "`price` <= " . $_GET['to'] . " ";
                $first = false;
         }


        switch ($_GET['sort']){
            case '1':
                $query .= "ORDER by `price`";
                break;
            case '2':
                $query .= "ORDER by `price` DESC";
                break;
            case '3':
                $query .= "ORDER by `name`";
                break;
            case '4':
                $query .= "ORDER by `price` DESC";
                break;
        }



            // echo $query;
            // die;
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $items[] = new Item ($row['id'], $row['name'], $row['category'], $row['price'], $row['about'] );

                }
            $db->conn->close();
            return $items;
    }

    public static function search(){
        $items = [];
        $db = new DB();
        $query = "SELECT * FROM `ikea` where `name` like \"%" . $_GET['search'] . "%\"";
        $result = $db->conn->query($query);

            while($row = $result->fetch_assoc()){
                $items[] = new Item ($row['id'], $row['name'], $row['category'], $row['price'], $row['about'] );

            }
        $db->conn->close();
        return $items;
    }

  }

?>