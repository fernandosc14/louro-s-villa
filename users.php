<?php

class user
{    
    private $conexao;
    public $msgErro = "";
    
    public function conectar($nome,$host,$usuario,$senha)
    {
        global $conexao;
        try{
            $conexao = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        } 
    }

    public function registo($pnome,$unome,$email,$password)
    {
        global $conexao;

        $sql = $conexao->prepare("SELECT id_users from users where email= :e");
        $sql->bindValue(":e",$email);  
        $sql->execute();

        if($sql->rowCount() > 0)
        {
            return false;    
        }
        else 
        {
            $sql = $conexao->prepare("insert into users (pnome, unome, email, pass) values (:n, :a, :e, :p)");
            $sql->bindValue(":n",$pnome); 
            $sql->bindValue(":a",$unome); 
            $sql->bindValue(":e",$email); 
            $sql->bindValue(":p",md5($password));  
            $sql->execute();
            return true; 
        }
    }


    public function login($email,$password)
    {
        global $conexao;

        $sql = $conexao->prepare("SELECT id_users from users where email= :e and pass= :p");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":p",md5($password));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
            if( empty(session_id()) && !headers_sent()){
                session_start();
            }
            $_SESSION['id_users'] = $dado['id_users'];  
            return true;      
        }
        else
        {
            return false;        
        }
    }
}
?>