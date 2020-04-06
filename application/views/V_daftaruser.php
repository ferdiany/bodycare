<h3 style="text-align: center; padding-top: 10px;">Daftar User</h3>
<div class="row">
<?php $no=1; foreach($data_user as $d){?>
	<div class="col-md-4 mt-4 mb-3">
		<div class="card border-dark">
			<img class="card-img-top" src="<?php echo base_url('asset/koceng.jpeg')?>" alt="Dokter <?php echo $d->nama_member ?>" height="350">
			<div class="card-body">
				<h5 class="card-title"><?php echo $d->nama_member ?></h5>
				<p class="card-text">
					<h5>Email: </h5><?php echo $d->email_member ?><br>
					<h5>Alamat: </h5><?php echo $d->alamat ?>
				</p>
				<a href="<?php echo base_url();?>dokter/chat_pasien/<?php echo $d->email_member?>" class="btn btn-info btn-block">Hubungi User</a>
			</div>
		</div>
	</div>
<?php }?>
</div>