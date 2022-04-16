
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="#">NaKer</a>
      <div class="navbar-nav">

      <a class="nav-link mx-4" aria-current="page" href="#"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger">4</span>
        </a> 
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= $data['user']['name']; ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>profile/admin">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>admin/insert">Tambah data</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth/logOut" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>

<div class="container" style="margin-top: 100px;">
    <h3>Profil Admin</h3>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="row" style="background-color: #F2F2F2; padding-left: 30px; padding-top: 30px; padding-bottom: 30px;">
                <div class="col-md-11" >
                    <a href="<?= BASEURL ?>profile" class="mb-5" style="text-decoration: none;">Info Profile</a>
                </div>

                <div class="col-md-11 mt-4">
                    <a href="#" style="text-decoration: none;">ubah password</a>
                </div>

                <div class="col-md-11 mt-4">
                    <a href="<?= BASEURL ?>admin" style="text-decoration: none;">Kembali</a>
                </div>
            </div>
            
            
            
        </div>

        <div class="col-md-6 justify-content-center offset-md-1">

            <label for="nama" class="form-label">Nama:</label>
            <input class="form-control" type="text" aria-label="Disabled input example" disabled id="nama" value="<?= $data['user']['name']; ?>">
            
            <label for="email" class="form-label mt-4">Email:</label>
            <input class="form-control" type="text" aria-label="Disabled input example" disabled id="email" value="<?= $data['user']['email']; ?>">
            
           

        </div>
    </div>
</div>