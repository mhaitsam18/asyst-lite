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
    <!-- <?php
          // $role_id = $this->session->userdata('role_id');
          // $queryMenu = "SELECT `user_menu`.`id`, `menu`
          //                         FROM `user_menu` JOIN `user_access_menu`
          //                         ON `user_menu`.`id` = `user_access_menu`.`menu_id`
          //                         WHERE `user_access_menu`.`role_id` = $role_id
          //                         ORDER BY `user_access_menu`.`menu_id` ASC
          //                         ";
          // $menu = $this->db->query($queryMenu)->result_array();
          ?> -->

    <li class="sidebar-list-itemin">
      <a href="<?= base_url('user') ?>">
        <p><i class="material-icons-outlined">house</i>Dashboard</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('user/profile') ?>">
        <p><i class="material-icons-outlined">account_circle</i>Profile</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('user/application_list') ?>">
        <p><i class="material-icons-outlined">format_list_bulleted</i>Application List</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('user/inventory_list') ?>">
        <p><i class="material-icons-outlined">featured_play_list</i>Inventory List</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('user/certificate_ssl') ?>">
        <p><i class="material-icons-outlined">redeem</i>Certificate SSL/License Expiration</p>
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="<?= base_url('user/knowledge_management') ?>">
        <p><i class="material-icons-outlined">folder</i>Knowledge Management</p>
      </a>
    </li>
    <!-- <li class="sidebar-list-item">
            <a href="<?= base_url('user/management_menu') ?>">
                <p><i class="material-icons-outlined">folder</i>Management Menu</p>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="<?= base_url('user/management_user') ?>">
                <p><i class="material-icons-outlined">group</i>Management User</p>
            </a>
          </li> -->
    <li class="sidebar-list-item">
      <a href="<?= base_url('auth/logout') ?>">
        <p><i class="material-icons-outlined">logout</i>Log out</p>
      </a>
    </li>
  </ul>
</aside>

<!-- End Sidebar -->