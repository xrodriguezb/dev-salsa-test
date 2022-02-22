<?php

require 'DBManager.php';

class User
{
    public $username;
    public $email;
    public $password;
    public $id;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    function __construct()
    {

    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    function create()
    {
        $stmt = DBManager::getInstance()->prepare("INSERT INTO users (username, email,password) VALUES (:username, :email,:password)");
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        if (!$stmt->execute()) {
            throw new PDOException('There was an error when creating a new user');
        }
        $this->setId(DBManager::getInstance()->lastInsertId());
        return TRUE;
    }

    function updatePassword(){
        $stmt = DBManager::getInstance()->prepare("UPDATE users SET password=:password WHERE id=:id LIMIT 1");
        $stmt->bindParam(':password',$this->password);
        $stmt->bindParam(':id',$this->id);
        if (!$stmt->execute()) {
            throw new PDOException('There was an error when updating user info');
        }
        return TRUE;
    }

    function loginByCode(){
        $stmt = DBManager::getInstance()->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
        $stmt->bindParam(':email',$this->email);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        if (!$stmt->execute()) {
            throw new PDOException('There was an error when finding user info');
        }
        while ($obj = $stmt->fetch()){
           $this->setId($obj->id);
           $this->setUsername($obj->username);
           $this->setPassword(md5($obj->password));
           $this->setEmail($obj->email);

        }
        return $this;
    }

    function login(){
        $stmt = DBManager::getInstance()->prepare("SELECT * FROM users WHERE username=:username AND password=:password LIMIT 1");
        $stmt->bindParam(':username',$this->username);
        $stmt->bindParam(':password',$this->password);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        if (!$stmt->execute()) {
            throw new PDOException('There was an error when finding user info');
        }
        while ($obj = $stmt->fetch()){
            $this->setId($obj->id);
            $this->setUsername($obj->username);
            $this->setPassword(md5($obj->password));
            $this->setEmail($obj->email);

        }
        return $this;
    }

    function toArray()
    {
        return get_object_vars($this);
    }

}