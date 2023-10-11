<!-- Main -->
<main class="main-container">
  <div class="container2" id="blur">
    <div class="main-title">
      <p class="font-weight-bold">MANAGEMENT USER</p>
    </div>
    <?= $this->session->flashdata('message'); ?>

    <!-- <div class="btn_mgtuser" id="blur">
    <button onclick="toggle()" type="button">Add New</button>
  </div> -->
    <div class="add">
      <!-- <input href="#" onclick="toggle()" type="submit" value="Add New"> -->
    </div>

    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Add new User</span></a>
    <br>
    <br>
    <br>
    <br>

    <div class="box">
      <table width="100%">
        <thead>
          <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Image</td>
            <td>Team</td>
            <td>Role</td>
            <td>Status</td>
            <td>Created By</td>
            <td>Created Date</td>
            <td>Updated By</td>
            <td>Updated Date</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $row) : ?>
            <tr>
              <td><?= $row->name ?></td>
              <td><?= $row->email ?></td>
              <td><img src="<?= base_url('assets/img/profile/' . $row->image) ?>" class="img-thumbnail w-50"></td>
              <td><?= $row->teamdescription ?></td>
              <td><?= $row->rolename ?></td>
              <td>
                <?php if ($row->active == 1) : ?>
                  Active
                <?php else : ?>
                  Deactive
                <?php endif; ?>
              </td>
              <td><?= $row->createdby ?></td>
              <td><?= date('j F Y H:i:s', strtotime($row->createddate));  ?></td>
              <td><?= $row->updateby ?></td>
              <td><?= date('j F Y H:i:s', strtotime($row->updatedate));  ?></td>
              <td class="edit">
                <a href="<?= base_url('management/user/delete/' . $row->userid) ?>" class="material-icons-outlined text-red">delete_outline</a>
                <a href="#" class="material-icons-outlined text-green update" data-toggle="modal" data-target="#edit" data-userid="<?= $row->userid ?>" data-name="<?= $row->name ?>" data-email="<?= $row->email ?>" data-image="<?= $row->image ?>" data-teamid="<?= $row->teamid ?>" data-roleid="<?= $row->roleid ?>" data-active="<?= $row->active ?>">edit_note</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <form>
    <div id="popup">

      <div class="content">
        <form action="#">
          <div class="user-details1">
            <span class="details2 mb-3" style="margin-bottom: 100px;">Add New user</span>
            <br>
            <br>
            <div class="input-box">
              <span class="details">Name</span>
              <input type="text" placeholder="Enter your fullname" required>
            </div>
            <div class="button">
              <input href="#" type="submit" value="Save">
            </div>
        </form>
      </div>
    </div>
  </form>
</main>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('management/user') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="aksi" value="add">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="teamid">Team</label>
            <select class="form-control" id="teamid" name="teamid">
              <option value="" selected disabled>Select Team</option>
              <?php foreach ($teams as $team) : ?>
                <option value="<?= $team->teamid ?>"><?= $team->teamdescription ?></option>
              <?php endforeach; ?>
            </select>
            <?= form_error('teamid', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="roleid">Role</label>
            <select class="form-control" id="roleid" name="roleid">
              <option value="" selected disabled>Select Role</option>
              <?php foreach ($roles as $role) : ?>
                <option value="<?= $role->roleid ?>"><?= $role->rolename ?></option>
              <?php endforeach; ?>
            </select>
            <?= form_error('roleid', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="row">
            <div class="form-group col">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" name="password1">
              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control" id="password2" name="password2">
              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="active" value="1" id="active">
            <label class="form-check-label" for="active">Active</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editLabel">Edit user</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('management/user') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="aksi" value="update">
          <input type="hidden" name="old_email" id="old_email" value="">
          <input type="hidden" name="userid" id="userid" value="">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group">
            <div class="col-sm-4 m-1">
              <img src="" class="img-thumbnail img-preview">
            </div>
            <label for="image">Gambar</label>
            <input type="file" class="form-control img-input" name="image" onchange="previewImg()" id="image">
          </div>
          <div class="row">
            <div class="form-group col">
              <label for="teamid">Team</label>
              <select class="form-control" id="teamid" name="teamid">
                <option value="" selected disabled>Select Team</option>
                <?php foreach ($teams as $team) : ?>
                  <option value="<?= $team->teamid ?>"><?= $team->teamdescription ?></option>
                <?php endforeach; ?>
              </select>
              <?= form_error('teamid', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col">
              <label for="roleid">Role</label>
              <select class="form-control" id="roleid" name="roleid">
                <option value="" selected disabled>Select Role</option>
                <?php foreach ($roles as $role) : ?>
                  <option value="<?= $role->roleid ?>"><?= $role->rolename ?></option>
                <?php endforeach; ?>
              </select>
              <?= form_error('roleid', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" name="password1">
              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control" id="password2" name="password2">
              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="active" value="1" id="edit_active">
            <label class="form-check-label" for="edit_active">Active</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
  function previewImg() {
    const image = document.querySelector('.img-input');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>


<script type="text/javascript">
  function toggle() {
    var blur = document.getElementById('blur');
    blur.classList.toggle('active')
    var popup = document.getElementById('popup');
    popup.classList.toggle('active')
  }
</script>


<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script>
  $(document).on("click", ".update", function() {
    var userid = $(this).data('userid');
    $(".modal-body  #userid").val(userid);

    var name = $(this).data('name');
    $(".modal-body  #name").val(name);


    var teamid = $(this).data('teamid');
    $(".modal-body  #teamid").val(teamid);

    var roleid = $(this).data('roleid');
    $(".modal-body  #roleid").val(roleid);

    var email = $(this).data('email');
    $(".modal-body  #email").val(email);
    $(".modal-body  #old_email").val(email);

    var active = $(this).data('active');
    // $(".modal-body  #active").val(active);
    if (active === 1) {
      $(".modal-body #edit_active").prop("checked", true);
    } else {
      $(".modal-body #edit_active").prop("checked", false);
    }

    var image = $(this).data('image');
    $(".img-preview").attr('src', '<?= base_url('assets/img/profile/') ?>' + image);

    // As pointed out in comments, 
    // it is unnecessary to have to manually call the modal.
    // $('#addBookDialog').modal('show');
  });
</script>