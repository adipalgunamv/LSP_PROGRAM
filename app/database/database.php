<?php

namespace App\Database;

include "app/environment.php";

use App\Environment;

use mysqli;

//Pewarisan
class database extends Environment
{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "anggota";

    public $con;
    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        !$this->con ?? die('Koneksi gagal: ' . $this->con->connect_error);
    }
    function tampil_data()

    //Menampilkan Data dari Database
    {
        $data = "select * from t_anggota";
        $save = $this->con->query($data);
        return $save->fetch_all(MYSQLI_BOTH);
    }

    //Menginput data ke database
    function input($nama, $nomor, $alamat, $email)
    {
        $SQL = "INSERT INTO t_anggota (nama, alamat, nomor, email) 
        VALUES('$nama', '$alamat', '$nomor', '$email')";
        $submit = $this->con->prepare($SQL);
        $submit->execute();
    }


    // METHOD EDIT
    //DELETE
    function delete($id)
    {
        $SQL = "DELETE FROM t_anggota WHERE id=$id";
        $submit = $this->con->query($SQL);
    }
    //UPDATE
    function update($nama, $nomor, $alamat, $email, $id)
    {
        $SQL = "UPDATE t_anggota SET  nama='$nama', alamat='$alamat', nomor='$nomor',  email='$email' WHERE id=$id";
        $submit = $this->con->query($SQL);
    }

    //MENAMPILKAN DATA PADA EDIT

    function tampil_edit($id)

    {
        $data = "SELECT * FROM t_anggota WHERE id=$id";
        $save = $this->con->query($data);
        return $save->fetch_assoc();
    }
}
