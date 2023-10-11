<!-- Main -->
<main class="main-container">
    <div class="container2" id="blur">
        <div class="main-title">
            <p class="font-weight-bold">MANAGEMENT APPLICATION</p>
        </div>
        <?= $this->session->flashdata('message'); ?>

        <!-- <div class="btn_mgtuser" id="blur">
    <button onclick="toggle()" type="button">Add New</button>
  </div> -->
        <div class="add">
            <!-- <input href="#" onclick="toggle()" type="submit" value="Add New"> -->
        </div>

        <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Add new Application</span></a>
        <br>
        <br>
        <br>
        <br>

        <div class="box">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Application ID</td>
                        <td>Application Name</td>
                        <td>Status</td>
                        <td>Created By</td>
                        <td>Created Date</td>
                        <td>Updated By</td>
                        <td>Updated Date</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($applications as $application) : ?>
                        <tr>
                            <td><?= $application->applicationid ?></td>
                            <td><?= $application->applicationname ?></td>
                            <td>
                                <?php if ($application->active == 1) : ?>
                                    Active
                                <?php else : ?>
                                    Deactive
                                <?php endif; ?>
                            </td>
                            <td><?= $application->createdby ?></td>
                            <td><?= date('j F Y H:i:s', strtotime($application->createddate));  ?></td>
                            <td><?= $application->updateby ?></td>
                            <td><?= date('j F Y H:i:s', strtotime($application->updatedate));  ?></td>
                            <td class="edit">
                                <a href="<?= base_url('management/application/delete/' . $application->applicationid) ?>" class="material-icons-outlined text-red">delete_outline</a>
                                <a href="#" class="material-icons-outlined text-green update" data-toggle="modal" data-target="#edit" data-applicationid="<?= $application->applicationid ?>" data-applicationname="<?= $application->applicationname ?>" data-active="<?= $application->active ?>">edit_note</a>
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
                        <span class="details2 mb-3" style="margin-bottom: 100px;">Add New application</span>
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
                <h5 class="modal-title" id="addModalLabel">Add application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('management/application') ?>" method="post">
                <input type="hidden" name="aksi" value="add">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="applicationid">Application ID</label>
                        <input type="text" class="form-control" id="applicationid" name="applicationid">
                        <?= form_error('applicationid', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="applicationname">application Name</label>
                        <input type="text" class="form-control" id="applicationname" name="applicationname">
                        <?= form_error('applicationname', '<small class="text-danger pl-3">', '</small>'); ?>
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
                <h1 class="modal-title fs-5" id="editLabel">Edit application</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('management/application') ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="aksi" value="update">
                    <input type="hidden" name="old_applicationname" id="old_applicationname">
                    <!-- <input type="hidden" name="applicationid" id="applicationid"> -->
                    <div class="form-group">
                        <label for="applicationid">Application ID</label>
                        <input type="text" class="form-control" id="applicationid" name="applicationid">
                        <?= form_error('applicationid', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="applicationname">Application Name</label>
                        <input type="text" class="form-control" id="applicationname" name="applicationname">
                        <?= form_error('applicationname', '<small class="text-danger pl-3">', '</small>'); ?>
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
        var applicationid = $(this).data('applicationid');
        $(".modal-body  #applicationid").val(applicationid);

        var applicationname = $(this).data('applicationname');
        $(".modal-body  #applicationname").val(applicationname);
        $(".modal-body  #old_applicationname").val(applicationname);

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