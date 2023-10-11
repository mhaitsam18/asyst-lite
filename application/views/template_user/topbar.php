<!-- Header -->
<div class="header">
    <div class="menu-icon" onclick="openSidebar()">
        <span class="material-icons-outlined">menu</span>
    </div>
    <div class="header-left">
        <!-- <span class="material-icons-outlined">search</span> -->
    </div>
    <div class="header-right">
        <!-- <span class="material-icons-outlined">notifications</span> -->
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
        <!-- <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"> -->
        <!-- <span href="" >account_circle</span> Admin -->
    </div>
</div>
<!-- End Header -->