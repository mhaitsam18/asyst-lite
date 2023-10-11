<!-- Sidebar -->
<aside id="sidebar">
  <div class="sidebar-title">
    <div class="sidebar-brand">
      <!-- <span class="material-icons-outlined" img="">inventory </span> ODE 4 App List -->
      <img src="<?= base_url('images/logo_asyst2.png') ?>" class="material-icons-outlined" /></span> ODE 4 App
    </div>
    <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
  </div>

  <ul class="sidebar-list">
    <li class="sidebar-list-itemin">
      <a href="<?= base_url('admin') ?>">
        <p><i class="material-icons-outlined">house</i>Dashboard</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('admin/profile') ?>">
        <p><i class="material-icons-outlined">account_circle</i>Profile</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('admin/application_list') ?>">
        <p><i class="material-icons-outlined">format_list_bulleted</i>Application List</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('admin/inventory_list') ?>">
        <p><i class="material-icons-outlined">featured_play_list</i>Inventory List</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('management/User') ?>">
        <p><i class="material-icons-outlined">person_add_alt</i>Management User</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('management/Menu') ?>">
        <p><i class="material-icons-outlined">person_add_alt</i>Management Menu</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('management/Role') ?>">
        <p><i class="material-icons-outlined">person_add_alt</i>Management Role</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('management/Knowledge') ?>">
        <p><i class="material-icons-outlined">person_add_alt</i>Management Knowledge</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('management/Application') ?>">
        <p><i class="material-icons-outlined">person_add_alt</i>Management Application</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('admin/management_team') ?>">
        <p><i class="material-icons-outlined">groups</i>Management Team</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('auth/logout'); ?>">
        <p><i class="material-icons-outlined">logout</i>Log Out</p>
      </a>
    </li>
  </ul>
</aside>

<!-- End Sidebar -->