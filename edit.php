<?php 
include("header.php");
$select = $koneksi->query("select*from tb_penjualan where id={$_GET['id']}");
$tb_penjualan = mysqli_fetch_assoc($select);
?>

<form method="POST" action="fungsi.php?update" class='form'>
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="field">
        <span class="label"> Nama Produk </span>
        <input name="nama_produk" value="<?php echo $tb_penjualan['nama_produk'] ?>">
    </div>
   <div class="field">
        <span class="label"> Harga </span> 
        <input name="harga" value="<?php echo $tb_penjualan['harga'] ?>">
    </div>
    <div class="field">
        <span class="label"> Deskripsi </span> 
        <textarea name="deskripsi" rows="10"> <?php echo $tb_penjualan['deskripsi'] ?></textarea>
    </div>
    <button>Simpan</button>
</from>
<?php include("footer.php")?>