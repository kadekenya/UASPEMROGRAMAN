<?php include("header.php")?>

<form method="POST" action="fungsi.php?insert" class='form'>
    <div class="field">
        <span class="label"> Nama Produk </span>
        <input name="nama_produk">
    </div>
   <div class="field">
        <span class="label"> Harga </span> 
        <input name="harga">
    </div>
    <div class="field">
        <span class="label"> Deskripsi </span> 
        <textarea name="deskripsi" rows="10"></textarea>
    </div>
    <button>Simpan</button>
</from>
<?php include("footer.php")?>