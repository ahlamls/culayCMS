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
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kata Sandi</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kata Sandi</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
