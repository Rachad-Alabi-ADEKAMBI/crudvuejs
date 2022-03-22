<?php
    $conn = new mysqli("localhost", "root", "", "crudvue");
    if($conn->connect_error){
        die("Connection failed");
    }

    $result = array('error =>false');
    $action = "";

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }

    if($action == 'read'){
        $sql = $conn->query("SELECT * FROM users");
        $users = array();
        while($row = $sql->fetch_assoc()){
            array_push($users, $row);
        }

        $result['users'] = $users;
    }

    if($action == 'create'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = $conn->query('INSERT INTO users (name, email, phone) 
            values ("$name", "$email", "$phone")');
       
        if($sql){
            $result['message'] = "User added successfully";
        }

        else{
            $result['error'] = true;
            $result ['message'] = "failed to add user!";
        }
    }


    if($action == 'update'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = $conn->query("UPDATE users set name = 
            '$name', phone = '$phone', email = '$email'
            WHERE id = '$id'");
       
        if($sql){
            $result['message'] = "User added successfully";
        }

        else{
            $result['error'] = true;
            $result ['message'] = "failed to edit user!";
        }
    }


    if($action == 'delete'){
        $id = $_POST['id'];
        $sql = $conn->query("DELETE  FROM users 
            WHERE id = '$id'");
       
        if($sql){
            $result['message'] = "User deleted successfully";
        }

        else{
            $result['error'] = true;
            $result ['message'] = "failed to delete user!";
        }
    }

  //  $conn->closeCursor();
    echo json_encode($result);
?>