<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
  $root = $root . '\cc_admin';
}
$data['page'] =
  array(
    "item",
    "baju"
  );

require_once "$root/app/views/admin/templates/header.php";
require_once "$root/app/views/admin/templates/sidebar.php";

require_once "$root/app/models/Baju.php";

$baju = new Baju();
$data['items'] = $baju->getAllBaju();

?><div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="font-size: 2.5rem!important;">Item</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb mt-3 float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Item</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Baju</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Kode Item</th>
              <th>Nama Item</th>
              <th>Harga</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($data['items'] as $e) {
            ?>
              <tr>
                <td>
                  <?php
                  if ($e['gender'] == 'laki-laki') {
                    echo sprintf('BM%03d', $e['id']);
                  } else {
                    echo sprintf('BW%03d', $e['id']);
                  }
                  ?>
                </td>
                <td>
                  <?= $e['nama'] ?>
                </td>
                <td>
                  Rp <?= number_format($e['harga'], 2, ',', '.') ?>
                </td>
                <td>
                  <?= $e['gender'] ?>
                </td>
                <td>
                  <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/baju/edit?id=<?php
                                                                                              if ($e['gender'] == 'laki-laki') {
                                                                                                echo sprintf('BM%03d', $e['id']);
                                                                                              } else {
                                                                                                echo sprintf('BW%03d', $e['id']);
                                                                                              }
                                                                                              ?>"><i class="far fa-edit"></i>
                    Edit</a>
                  <a class=" btn btn-danger" href="./delete.php?id=<?php
                                                                    if ($e['gender'] == 'laki-laki') {
                                                                      echo sprintf('BM%03d', $e['id']);
                                                                    } else {
                                                                      echo sprintf('BW%03d', $e['id']);
                                                                    }
                                                                    ?>"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
              </tr>

            <?php
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Kode Item</th>
              <th>Nama Item</th>
              <th>Harga</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
        <a class="btn btn-primary" href="<?= base_url ?>/admin/item/baju/create"><i class="fas fa-user-plus"></i> Tambah
          Data</a>
      </div>

    </div>
    <!-- /.card -->
  </section>

</div>
<?php
require_once "$root/app/views/admin/templates/footer.php";
?>