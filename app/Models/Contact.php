<?php
class Contacts extends connectDb {
    private $id;
    private $file;
    private $name;
    private $email;
    private $message;
    private $telephone;
    private $addressIp;
    private $dateCreated;
    const table="contacts";

    function getId() {
        return $this->id;
    }
    function getFile() {
        return $this->file;
    }
    function getName() {
        return $this->name;
    }
    function getEmail() {
        return $this->email;
    }
    function getMessage() {
        return $this->message;
    }
    function getTelephone() {
        return $this->telephone;
    }
    function getAddressIp() {
        return $this->addressIp;
    }
    function getDateCreated() {
        return $this->dateCreated;
    }
    
    function setFile($file) {
        $this->file = $file;
    }
    function setName($name) {
        $this->name = $name;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function setMessage($message) {
        $this->message = $message;
    }
    function setTelephone($telephone) {
            $this->telephone = $telephone;
    }
    function setAddressIp($addressIp) {
            $this->addressIp = $addressIp;
    }
    function setDateCreated($dateCreated) {
            $this->dateCreated = $dateCreated;
    }
    //Metodo responsavel por cadastrar os dados do produto
    public  function created() {
        $pdo = parent::getDB();
        try {

            $cadastrar = $pdo->prepare("INSERT INTO contacts(name,email,telephone,message,dateCreated,addressIp) VALUES(?,?,?,?,?,?)");
            $cadastrar->bindParam(1, $this->name);
            $cadastrar->bindParam(2, $this->email);
            $cadastrar->bindParam(3, $this->telephone);
            $cadastrar->bindParam(4, $this->message);
            $cadastrar->bindParam(5, $this->dateCreated);
            $cadastrar->bindParam(6, $this->addressIp);
            $cadastrar->execute();
           
        } catch (PDOException $e) {
            echo $e->getMessage();
        } 
            
    }


//Metodo responsavel por listar os dados do produto    
public static function get(){
                
    $pdo = parent::getDB();
    try {
        $listar = $pdo->prepare("SELECT * FROM ".self::table);
        $listar->execute();

        if ($listar->rowCount() > 0):
            return $listar->fetchAll(PDO::FETCH_ASSOC);
        else:
            return false;
        endif;
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
    
   
}
?>