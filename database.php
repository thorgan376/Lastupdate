<?php
const SERVER_NAME = "localhost";
const DB_USERNAME = "root";
const DB_PASSWORD = ""; 

class product {
    private $connection;
    public function __construct(){
        $connectionString = "mysql:host=".SERVER_NAME;
        $this->connection = new PDO($connectionString, DB_USERNAME, DB_PASSWORD);
        $sql = "USE eproject;";
        $this->connection->exec($sql);
    }
    public function productsearch($productid){
        $sql = "SELECT PRODUCT_NAME AS productn, PRODUCTIMG AS producti, para1 AS p1, 
        para2 AS p2, para3 AS p3, para4 AS p4, para5 AS p5, price AS price, infomation AS info FROM product".
               " WHERE PRODUCT_ID = :productid";                    
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':productid', $productid);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetch();
        return array("productname" => $result["productn"], 
                     "productimg" => $result["producti"],"para1" => $result["p1"], "para2" => $result["p2"],"para3" => $result["p3"], 
                     "para4" => $result["p4"], "para5" => $result["p5"], "price" => $result["price"], "infomation" => $result["info"]); 
    }
    public function searchbox($search){
        $sql = "SELECT PRODUCT_NAME AS productn, PRODUCTIMG AS producti,
                       price AS price, para5 AS p5, PRODUCT_ID AS id FROM product";
        $stmt = $this->connection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arrsearchlength = strlen($search);
        $index = 0;
        for($i=0;$i<8;$i++){
            $productsearcharr[$i][0] = "";
            $productsearcharr[$i][1] = "";
            $productsearcharr[$i][2] = "";
            $productsearcharr[$i][3] = "";
            $productsearcharr[$i][4] = "";
        }
        foreach($result as $row){
        $productnamesearch = str_split($row["productn"], $arrsearchlength);
        if(strcasecmp($productnamesearch[0],$search)==0){
            $productsearcharr[$index][0] = $row["productn"];
            $productsearcharr[$index][1] = $row["producti"];
            $productsearcharr[$index][2] = $row["price"];
            $productsearcharr[$index][3] = $row["id"];
            $productsearcharr[$index][4] = $row["p5"];
            $index++;
        }
        }
        return array("numberofsearch" => $index,"productsearcharr" => $productsearcharr);
    }
}
    ?>