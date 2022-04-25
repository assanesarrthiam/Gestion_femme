<?php
class DataBaseHelper
{
    public static $host = "localhost";
    public static $dbname = "gestion";
    public static $username = "root";
    public static $password = "";
    public static function getConnexion()
    {
           //On établit la connexion
        try 
        {
          $conn = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname,self::$username,self::$password);
          $sql = "INSERT INTO region (	id, nomRegion, superficie)
          VALUES ('00', 'pout', '90')";
          $conn->exec($sql);
          echo "New record created successfully"; 
        } catch (PDOException $e) { 
          echo 'erreur de connexion a la base de donne'.$e->getMessage();

        }   
        return $conn;
      }
}