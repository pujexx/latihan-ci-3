<?php echo form_open("berita/index");?>
<p>Judul</p>
<p><?php echo form_input("judul");?></p>
<p>Isi</p>
<p><?php  echo form_textarea("isi");?></p>
<p><?php echo form_submit("simpan","Simpan");?></p>
<?php echo form_close();?>