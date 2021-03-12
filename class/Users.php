<?php

    require_once "Database.php";

    class User extends Database{

        public function createAccount($username, $password){
            $sql = "INSERT INTO accounts(username, password) VALUES('$username', '$password')";

            $result = $this->conn->query($sql);

            if(!$result){
                die("CANNOT ADD ACCOUNTS: " . $this->conn->error);
            }else{
                return true;
            }
        }

        public function createUser($first_name, $last_name, $address, $email){
            $user_account_id = $this->conn->insert_id;
            $sql = "INSERT INTO users(first_name, last_name, address, email, account_id) VALUES('$first_name', '$last_name', '$address', '$email', '$user_account_id')";

            $result = $this->conn->query($sql);

            if($result){
                header("Location: ../views/login.php");
            }else{
                die("CANNOT ADD USER: " . $this->conn->error);
            }

        }

        public function login($username, $password){
            
            $sql = "SELECT * FROM accounts INNER JOIN users ON accounts.account_id = users.account_id WHERE username = '$username'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();

                if(password_verify($password, $row['password'])){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];
                    $_SESSION['status'] = $row['account_status'];
                
                    header("Location: ../views/index.php");
                }else{
                    return "Invaid Password";
                }
            }else{
                return "Invaid Username";
            }

        }

        
    }

?>