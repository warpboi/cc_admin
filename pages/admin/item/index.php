<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
  $root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/views/admin/templates/header.php";
require_once "$root/app/views/admin/templates/sidebar.php";
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
        <h3 class="card-title">Table Item</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Kode Item</th>
              <th>Nama Item</th>
              <th>Kategori</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Coba cari
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
            <tr>
              <td>
                TS001
              </td>
              <td>
                Sweater 1.0 Japan 01 Black
              </td>
              <td>
                Lorem
              </td>
              <td>
                Man
              </td>
              <td>
                <a class="btn btn-secondary" href="<?= base_url; ?>/admin/item/edit"><i class="far fa-edit"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete1">
                  <i class="fas fa-trash-alt"></i> Hapus
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Kode Item</th>
              <th>Nama Item</th>
              <th>Kategori</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
        <a class="btn btn-primary" href="/admin/dosen/add"><i class="fas fa-user-plus"></i> Tambah
          Data</a>
      </div>

    </div>
    <!-- /.card -->
  </section>

</div>
<?php
require_once "$root/app/views/admin/templates/footer.php";
?>