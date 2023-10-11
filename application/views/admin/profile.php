<!-- Begin Page Content -->
<main class="main-container">
    <?= $this->session->flashdata('message'); ?>
    <div class="main-title">
        <p class="font-weight-bold">PROFILE</p>
    </div>
    <div class="charts-card">
        <div class="content">
            <form action="<?= base_url('admin/profile') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="old_email" value="<?= $user['email'] ?>">
                <input type="hidden" name="userid" value="<?= $user['userid'] ?>">
                <input type="hidden" name="aksi" value="profile">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">EMAIL</span>
                        <input type="email" name="email" placeholder="Enter Your Full Name" value="<?= $user['email'] ?>" required>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-box">
                        <span class="details">NAME</span>
                        <input type="text" name="name" placeholder="Enter Your Full Name" value="<?= $user['name'] ?>" required>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-box">
                        <span class="details">TEAM</span>
                        <select id="teamid" name="teamid">
                            <option value="" selected disabled>Select team</option>
                            <?php foreach ($teams as $team) : ?>
                                <option value="<?= $team->teamid ?>" <?= ($user['teamid'] == $team->teamid) ? 'selected' : '' ?>><?= $team->teamdescription ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('teamid', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-box">
                        <span class="details">ROLE</span>
                        <select id="roleid" name="roleid">
                            <option value="" selected disabled>Select Role</option>
                            <?php foreach ($roles as $role) : ?>
                                <option value="<?= $role->roleid ?>" <?= ($user['roleid'] == $role->roleid) ? 'selected' : '' ?>><?= $role->rolename ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('roleid', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-box">
                        <span class="details">Photo Profile</span>
                        <input type="file" name="image">
                        <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="button_prf">
                    <!-- <input type="button" value="Cancel" style="background-color: #FBAEAE; margin-left: 542px"> -->
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>

    <div class="main-title">
        <p class="font-weight-bold">CHANGE PASSWORD</p>
    </div>
    <div class="charts-card">
        <div class="content">
            <form action="<?= base_url('admin/profile') ?>" method="post">
                <input type="hidden" name="userid" value="<?= $user['userid'] ?>">
                <input type="hidden" name="aksi" value="password">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">CURRENT PASSWORD</span>
                        <input type="password" name="password" required>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-box">
                        <span class="details">NEW PASSWORD</span>
                        <input type="password" name="password1" required>
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-box">
                        <span class="details">CONFIRM PASSWORD</span>
                        <input type="password" name="password2" required>
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="button_prf">
                    <!-- <input type="button" value="Cancel" style="background-color: #FBAEAE; margin-left: 542px"> -->
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</main>
<style>
    select {
        height: 45px;
        width: 92%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
    }
</style>