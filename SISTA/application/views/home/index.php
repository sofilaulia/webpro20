  <!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="login-form" action="index.html">
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input id="emaillogin" type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input id="pwlogin" type="password" class="form-control" placeholder=" " name="Password" required="">
						</div>
						<div class="right-w3l">
							<button type="submit" class="btn btn-primary">
                Login
              </button>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<button href="#" class="btn btn-link" data-toggle="modal" data-target="#exampleModal2">
								Register Now</button>
						</p>
					</form>
				</div>
			</div>
		</div>
  </div>
  <!-- -->
  
  <!-- modal register -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="form-group">
							<label class="col-form-label">Nama</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<button type="submit" class="btn btn-danger">
                Register
              </button>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
  <!--banner start -->
  <div class="banner-main">
    <div class="container">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="titlepage-h1">
              <h1 class="bnner_title">Welcome To<br>
                <span style="color: #10b5fa">SISTA</span></h1>
              <p class="long_text">Program dari mahasiswa STT NF</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="titlepage-h1">
              <h1 class="bnner_title">Welcome To<br>
                <span style="color: #10b5fa">STT NF</span></h1>
              <p class="long_text">Sekolah Tinggi Terpadu Nurul Fikri</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="titlepage-h1">
              <h1 class="bnner_title">Welcome To<br>
                <span style="color: #10b5fa">Web Programming</span></h1>
              <p class="long_text">Situs Belajar Web Design</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!--banner end -->
  <!--services start -->
  <div class="services_main">
    <div class="container">
      <div class="creative_taital">
        <h1 class="creative_text">Sistem Informasi Seminar Tugas Akhir - SISTA</h1>
        <p style="color: #050000;" class="text-center"><strong>SISTA</strong> 
          adalah karya ilmiah yang disusun oleh mahasiswa setiap program studi berdasarkan hasil penelitian suatu masalah yang dilakukan secara seksama dengan bimbingan dosen pembimbing. Tugas akhir merupakan salah satu persyaratan kelulusan mahasiswa. 
					disusun
					dalam jangka waktu satu semester, dibawah bimbingan seorang
					dosen pembimbing dan dapat dibantu seorang pembantu
					pembimbing. Dosen pembimbing disini berperan sebagai
					fasilitator, pengarah, dan yang menentukan ide pelaksanaan
					Tugas Akhir. Tim dosen penguji mengadakan penilaian dalam
					hal tata tulis laporan, materi bidang keilmuan, sikap dalam
					mempertahankan ide dan presentasi tugas akhir.</p>
      </div>


  <!--touch_section start -->

  <div class="touch_section">
    <div class="container">
      <h1 class="touch_text">Tuliskan Komentar Anda!</h1>
    </div>
  </div>

  <div class="lets_touch_main">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="input_main">
            <div class="container">
              <form action="/action_page.php">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Nama" name="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Email" name="Email">
                </div>
                <form action="/action_page.php">
                  <div class="form-group">
                    <textarea class="massage-bt" placeholder="Tulis Pesan" rows="5" id="comment" name="text"></textarea>
                  </div>
                </form>
              </form>
            </div>
            <div class="send_btn">
              <button type="button" class="main_bt"><a href="#">Kirim</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-12">
              <p class="lorem_text">Komentar anda akan sangat membantu dalam penangan cepat dari layanan kami, 
                untuk membantu demi pengingkatan yang lebih baik
              dan penyediaan layanan yang lebih bervariasi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--touch_section end -->