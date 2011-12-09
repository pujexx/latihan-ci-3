<?php if (!empty($berita)): ?>
<?php foreach ($berita as $brt) : ?>

<h1><?php echo $brt["judul"];?></h1>
<p><?php echo $brt["tanggal"];?></p>
<hr>
<p><?php echo $brt["isi"];?></p>

<?php endforeach; ?>
<?php endif; ?>