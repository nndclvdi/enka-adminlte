<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enka Jamu | Dashboard</title>

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="index.php?page=dashboard" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Enka Jamu
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?page=data-pelanggan" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-produk" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Produk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=data-user" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Data User</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link text-red">
          <i class="nav-icon fas fa-power-off"></i>
          <p>
            Logout
          </p>
        </a>
      </li>


    </ul>
  </nav>