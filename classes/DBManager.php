<?php

class DBManager
{

    const database='exam';
    const host='127.0.0.1';
    const user='root';
    const port=3306;
    const password='root';

    protected static $instance;

    public static function getInstance() {

        if(empty(self::$instance)) {

            try {
                self::$instance = new PDO("mysql:host=".self::host.';port='.self::port.';dbname='.self::database, self::user, self::password,[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);

            } catch(PDOException $error) {
                echo $error->getMessage();
            }

        }

        return self::$instance;
    }




}
