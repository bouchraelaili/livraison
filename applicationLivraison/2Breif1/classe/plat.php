<?php

require_once 'database.php';
class Plat
{
    private $id;

    public function insert($nom, $image, $prix, $description)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->exec('INSERT INTO repas SET nom="' . $nom . '",image="' . $image . '",prix="' . $prix . '",descp="' . $description . '" ');
    }

    public function select()
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM repas');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}