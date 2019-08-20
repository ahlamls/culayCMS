<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModalTitle">Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="POST" >
  <div class="form-group">
    <label for="email">Alamat Email</label>
    <input type="email" class="form-control" name="emailx" id="email" placeholder="Email">
    </div>
  <div class="form-group">
    <label for="password">Kata Sandi</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>


<hr>
<p>Belum Punya akun? </p>
<button type="button" onclick="showRegister()" class="btn btn-success">Daftar</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Login</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="RegModal" tabindex="-1" role="dialog" aria-labelledby="RegModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="RegModalTitle">Daftar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="daftar.php" method="POST">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control"  name="username" id="username" aria-describedby="emailHelp" placeholder="Masukan Usernamel">
              </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat Email</label>
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

  <div class="form-group">
    <label for="password">Kata Sandi</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>


<hr>
<p>Sudah Punya akun? </p>
<button type="button" onclick="showLogin()" class="btn btn-success">Login</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Daftar</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="TopModal" tabindex="-1" role="dialog" aria-labelledby="TopModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TopModalTitle">Top Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <p>Untuk Top Up dan Withdrawal silahkan hubungi kontak berikut</p>
        <br>
        <p>WA : 0821-2722-3311 dan 0821-1559-7002</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


      </div>
    </div>
  </div>
</div>

<script>
function showLogin(){
  $('#RegModal').modal('hide')
  $('#LoginModal').modal('show')
}
function showRegister(){
$('#RegModal').modal('show')
$('#LoginModal').modal('hide')
}

</script>
