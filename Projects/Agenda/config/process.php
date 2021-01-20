<?php

    session_status();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    if(!empty($data)){ //MODIFICAÇÕES NO BANCO

        if($data["type"] === "create"){ //CRIAR CONTATO

            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, obeservations) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try{

                $stmt->execute();
                $_SESSION["msg"] = "CONTATO CRIADO COM SUCESSO";                
        
            } catch(PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Error: $error"; 
            }

        }

        //REDIRECT HOME
        header("Location:" . $BASE_URL . "../index.php");

    }else{ //SELEÇÃO DE DADOS

        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
    
        if(!empty($id)){
    
            $query = "SELECT * FROM contacts WHERE id = :id";
    
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
    
            $stmt->execute();
    
            $contact = $stmt->fetch();
    
        }else{
            $contacts = [];
    
            $query = "SELECT * FROM contacts";
    
            $stmt = $conn->prepare($query);
    
            $stmt->execute();
    
            $contacts = $stmt->fetchAll();
        }
    
        

    }

    //FECHAR CONEXÃO
    $conn = null;