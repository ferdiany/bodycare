<h3 style="text-align: center; padding-top: 10px;">Daftar Dokter</h3>
<div class="row">
<?php foreach($data_dokter as $d){?>
	<div class="col-md-4 mt-4 mb-3">
		<div class="card border-dark">
			<img class="card-img-top" src="<?php echo base_url();?>asset/foto/<?php echo $d->foto_dokter?>" alt="Dokter <?php echo $d->nama_dokter ?>" height="350">
			<div class="card-body">
				<h5 class="card-title"><?php echo $d->nama_dokter ?></h5>
				<p class="card-text">
					<h5>Email: </h5><?php echo $d->email_dokter ?><br>
					<h5>Spesialis: </h5><?php echo $d->spesialis ?>
				</p>
			<a href="<?php echo base_url();?>user/chat_dokter/<?php echo $d->email_dokter?>" class="btn btn-info btn-block">Hubungi Dokter</a>
			</div>
		</div>
	</div>
<?php }?>
</div>