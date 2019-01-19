<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="assets/images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <?php
              include "koneksi.php";

              $sql = "SELECT nama_lengkap, level FROM user WHERE id=?";
              $stmt = mysqli_prepare($kon, $sql);
              mysqli_stmt_bind_param($stmt, 'i', $_SESSION['user_id']);
              mysqli_stmt_execute($stmt);

              if (!$stmt) {
                die("Statment Problem: ". mysqli_errno($kon));
              }

              $result = mysqli_stmt_get_result($stmt);
              $data = mysqli_fetch_array($result);

            ?>
            <p class="profile-name"><?php echo $data['nama_lengkap'] ?></p>
            <div>
              <small class="designation text-muted"><?php echo $data['level'] ?></small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
        <a class="btn btn-success btn-block" href="index.php?page=add_barang">Barang
          <i class="mdi mdi-plus"></i>
        </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/home">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <?php
      if ($_SESSION['level'] == 'admin') {
    ?>
    <li class="nav-item">
      <a class="nav-link" href="index.php?units">
        <i class="menu-icon mdi mdi-file-document-box"></i>
        <span class="menu-title">Unit</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/users">
        <i class="menu-icon mdi mdi-account-outline"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>
    <?php
      }
    ?>
    <li class="nav-item">
      <a class="nav-link" href="/barang">
        <i class="menu-icon mdi mdi-file-document-box"></i>
        <span class="menu-title">Barang</span>
      </a>
    </li>
  </ul>
</nav>