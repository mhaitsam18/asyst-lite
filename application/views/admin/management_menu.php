<!-- Main -->
<main class="main-container">
    <div class="container2" id="blur">
        <div class="main-title">
            <p class="font-weight-bold">MANAGEMENT MENU</p>
        </div>
        <?= $this->session->flashdata('message'); ?>

        <!-- <div class="btn_mgtuser" id="blur">
    <button onclick="toggle()" type="button">Add New</button>
  </div> -->
        <div class="add">
            <!-- <input href="#" onclick="toggle()" type="submit" value="Add New"> -->
        </div>

        <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Add new Menu</span></a>
        <br>
        <br>
        <br>
        <br>

        <div class="box">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Menu Name</td>
                        <td>Status</td>
                        <td>Created By</td>
                        <td>Created Date</td>
                        <td>Updated By</td>
                        <td>Updated Date</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($menus as $menu) : ?>
                        <tr>
                            <td><?= $menu->menuname ?></td>
                            <td>
                                <?php if ($menu->active == 1) : ?>
                                    Active
                                <?php else : ?>
                                    Deactive
                                <?php endif; ?>
                            </td>
                            <td><?= $menu->createdby ?></td>
                            <td><?= date('j F Y H:i:s', strtotime($menu->createdate));  ?></td>
                            <td><?= $menu->updateby ?></td>
                            <td><?= date('j F Y H:i:s', strtotime($menu->updatedate));  ?></td>
                            <td class="edit">
                                <a href="<?= base_url('management/menu/delete/' . $menu->menuid) ?>" class="material-icons-outlined text-red">delete_outline</a>
                                <a href="#" class="material-icons-outlined text-green update" data-toggle="modal" data-target="#edit" data-menuid="<?= $menu->menuid ?>" data-menuname="<?= $menu->menuname ?>" data-active="<?= $menu->active ?>">edit_note</a>
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
                        <span class="details2 mb-3" style="margin-bottom: 100px;">Add New Menu</span>
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
                <h5 class="modal-title" id="addModalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('management/menu') ?>" method="post">
                <input type="hidden" name="aksi" value="add">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="menuname">Menu Name</label>
                        <input type="text" class="form-control" id="menuname" name="menuname">
                        <?= form_error('menuname', '<small class="text-danger pl-3">', '</small>'); ?>
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
                <h1 class="modal-title fs-5" id="editLabel">Edit Menu</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('management/menu') ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="aksi" value="update">
                    <input type="hidden" name="old_menuname" id="old_menuname">
                    <input type="hidden" name="menuid" id="menuid">
                    <div class="form-group">
                        <label for="menuname">Menu Name</label>
                        <input type="text" class="form-control" id="menuname" name="menuname">
                        <?= form_error('menuname', '<small class="text-danger pl-3">', '</small>'); ?>
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
        var menuid = $(this).data('menuid');
        $(".modal-body  #menuid").val(menuid);

        var menuname = $(this).data('menuname');
        $(".modal-body  #menuname").val(menuname);
        $(".modal-body  #old_menuname").val(menuname);

        var active = $(this).data('active');
        // $(".modal-body  #active").val(active);
        if (active === 1) {
            $(".modal-body #edit_active").prop("checked", true);
        } else {
            $(".modal-body #edit_active").prop("checked", false);
        }

        // As pointed out in comments, 
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
</script>