<!-- Main -->
<main class="main-container">
    <div class="container2" id="blur">
        <div class="main-title">
            <p class="font-weight-bold">MANAGEMENT KNOWLEDGE</p>
        </div>
        <?= $this->session->flashdata('message'); ?>

        <!-- <div class="btn_mgtuser" id="blur">
    <button onclick="toggle()" type="button">Add New</button>
  </div> -->
        <div class="add">
            <!-- <input href="#" onclick="toggle()" type="submit" value="Add New"> -->
        </div>

        <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Add new Knowledge</span></a>
        <br>
        <br>
        <br>
        <br>

        <div class="box">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Application Name</td>
                        <td>Version</td>
                        <td>Docs</td>
                        <td>Notes</td>
                        <td>Created By</td>
                        <td>Created Date</td>
                        <td>Updated By</td>
                        <td>Updated Date</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($knowledges as $knowledge) : ?>
                        <tr>
                            <td><?= $knowledge->applicationname ?></td>
                            <td><?= $knowledge->version ?></td>
                            <td><?= $knowledge->docs ?></td>
                            <td><?= $knowledge->notes ?></td>
                            <td><?= $knowledge->createdby ?></td>
                            <td><?= date('j F Y H:i:s', strtotime($knowledge->createddate));  ?></td>
                            <td><?= $knowledge->updateby ?></td>
                            <td><?= date('j F Y H:i:s', strtotime($knowledge->updatedate));  ?></td>
                            <td class="edit">
                                <a href="<?= base_url('management/knowledge/delete/' . $knowledge->knowledgeid) ?>" class="material-icons-outlined text-red">delete_outline</a>
                                <a href="#" class="material-icons-outlined text-green update" data-toggle="modal" data-target="#edit" data-knowledgeid="<?= $knowledge->knowledgeid ?>" data-applicationid="<?= $knowledge->applicationid ?>" data-version="<?= $knowledge->version ?>" data-docs="<?= $knowledge->docs ?>" data-notes="<?= $knowledge->notes ?>">edit_note</a>
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
                        <span class="details2 mb-3" style="margin-bottom: 100px;">Add New knowledge</span>
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
                <h5 class="modal-title" id="addModalLabel">Add knowledge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('management/knowledge') ?>" method="post">
                <input type="hidden" name="aksi" value="add">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="applicationid">Application</label>
                        <select class="form-control" id="applicationid" name="applicationid">
                            <option value="" selected disabled>Select application</option>
                            <?php foreach ($applications as $application) : ?>
                                <option value="<?= $application->applicationid ?>"><?= $application->applicationname ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('applicationid', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="version">Version</label>
                        <input type="text" class="form-control" id="version" name="version">
                        <?= form_error('version', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="docs">Docs</label>
                        <input type="text" class="form-control" id="docs" name="docs">
                        <?= form_error('docs', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <input type="text" class="form-control" id="notes" name="notes">
                        <?= form_error('notes', '<small class="text-danger pl-3">', '</small>'); ?>
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
                <h1 class="modal-title fs-5" id="editLabel">Edit knowledge</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('management/knowledge') ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="aksi" value="update">
                    <!-- <input type="hidden" name="old_version" id="old_version"> -->
                    <input type="hidden" name="knowledgeid" id="knowledgeid">
                    <div class="form-group">
                        <label for="applicationid">Application</label>
                        <select class="form-control" id="applicationid" name="applicationid">
                            <option value="" selected disabled>Select application</option>
                            <?php foreach ($applications as $application) : ?>
                                <option value="<?= $application->applicationid ?>"><?= $application->applicationname ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('applicationid', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="version">Version</label>
                        <input type="text" class="form-control" id="version" name="version">
                        <?= form_error('version', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="docs">Docs</label>
                        <input type="text" class="form-control" id="docs" name="docs">
                        <?= form_error('docs', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <input type="text" class="form-control" id="notes" name="notes">
                        <?= form_error('notes', '<small class="text-danger pl-3">', '</small>'); ?>
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
        var knowledgeid = $(this).data('knowledgeid');
        $(".modal-body  #knowledgeid").val(knowledgeid);

        var applicationid = $(this).data('applicationid');
        $(".modal-body  #applicationid").val(applicationid);

        var version = $(this).data('version');
        $(".modal-body  #version").val(version);
        // $(".modal-body  #old_version").val(version);

        var docs = $(this).data('docs');
        $(".modal-body  #docs").val(docs);

        var notes = $(this).data('notes');
        $(".modal-body  #notes").val(notes);

        // As pointed out in comments, 
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
</script>