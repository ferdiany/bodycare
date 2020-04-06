<div class="container mt-3">
<?php foreach($data_pasien as $d){?>
  <h2 style="padding-top: 10px;">Chat <?php echo $d->nama_member?></h2><br>
  <div class="media border p-3">
    <img src="<?php echo base_url('asset/user.jpg') ?>" alt="John Doe" class="mr-3 mb-3" style="width:60px;">
    <div class="media-body">
      <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
      <p>Selamat Siang Dok</p>   
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="media border p-3">
    <div class="media-body chat-pasien">
      <h4>Dr. <?php echo $d->nama_member?> <small><i>Posted on February 19, 2016</i></small></h4>
      <p>Selamat Siang John Doe</p>      
    </div>
    <img src="<?php echo base_url('asset/dokter.jpg') ?>" alt="John Doe" class="ml-3 mb-3" style="width:60px;">
  </div>
</div><div class="container mt-3">
  <div class="media border p-3">
    <div class="media-body chat-pasien">
      <h4>Dr. <?php echo $d->nama_member?></h4>
		<h6><small><i>Posted on February 19, 2016</i></small></h6>
      <p>Gimana Kabarnya?</p>      
    </div>
    <img src="<?php echo base_url('asset/dokter.jpg') ?>" alt="John Doe" class="ml-3 mb-3" style="width:60px;">
  </div>
</div>
<div class="form-group mt-3">
      <textarea class="form-control" rows="3" placeholder="Masukkan pertanyaan / konsultasi"></textarea>
    </div>
    <button type="submit" class="btn btn-primary kirim-chat">Kirim</button>
<?php }?>
</div>