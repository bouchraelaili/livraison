<?php
class Database
{
    private $pdo;
    // connection avec base donne

    public function connect()
    {
        $pdo = new PDO('mysql:dbname=livraison;host=localhost', 'root', '1234');
        // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}
