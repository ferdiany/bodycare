<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>LOGIN DOKTER</b></h1>
                  </div>
					
				<!--Menampilkan alert jika password atau login salah-->
				<?php if ($this->session->flashdata('logingagal')) : ?>
				<div class="row mt-3">
					<div class="ml-3">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('logingagal'); ?>.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
				<?php endif; ?>		
                
				<form method="post" action="<?php echo base_url('bodycare/logindokter');?>" class="user">
                    <div class="form-group">
                      <p><b>Email</b></p><input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <p><b>Password</b></p><input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>