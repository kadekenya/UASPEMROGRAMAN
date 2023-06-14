<?php
    if(isset($_GET["insert"])) {
        insert();
    } else if(isset($_GET["update"])){
        update();
    } else if(isset($_GET["delete"])){
        delete();
    }


    function insert() {
        require("connection.php");
        $insert = $koneksi->query("insert into tb_penjualan set nama_produk='{$_POST['nama_produk']}', harga='{$_POST['harga']}', deskripsi='{$_POST['deskripsi']}'");
        if($insert === true){
            echo "insert berhasil";
        } else {
            echo "insert gagal";
        }

        header("location: index.php");
    }


    function update() {
        require("connection.php");
        $insert = $koneksi->query("update tb_penjualan set nama_produk='{$_POST['nama_produk']}', harga='{$_POST['harga']}', deskripsi='{$_POST['deskripsi']}' where id={$_POST['id']}");
        if($insert === true){
            echo "update berhasil";
        } else {
            echo "update gagal";
        }

        header("location: index.php");
    }

    function delete() {
        require("connection.php");
        $insert = $koneksi->query("delete from tb_penjualan where id={$_GET['id']}");
        if($insert === true){
            echo "delete berhasil";
        } else {
            echo "delete gagal";
        }

        header("location: index.php");
    }
?>