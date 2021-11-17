             <?php
              $root = realpath($_SERVER["DOCUMENT_ROOT"]);
              if (strpos($root, 'htdocs') !== false) {
                $root = $root . '\cc_admin';
              }
              $data['title'] = "Baju";
              $data['page'] =
                array(
                  "item",
                  "baju"
                );

              require_once "$root/app/views/admin/templates/header.php";
              require_once "$root/app/views/admin/templates/sidebar.php";
              require_once "$root/app/models/Baju.php";

              $baju = new Baju();

              $cari['identifier'] = substr($_GET['id'], 0, 2);
              $id = substr($_GET['id'], 2, 3);
              $cari['id'] = (int) $id;

              $data['items'] = $baju->getBajuById($cari);
              if ($cari['identifier'] == 'BM') {
                $data['items']['gender'] = 'Laki-laki';
              } else {
                $data['items']['gender'] = 'Perempuan';
              }


              if (isset($_POST['save_record'])) {
                $dataInput['id'] = $_POST['id'];
                $dataInput['nama'] = $_POST['nama'];
                $dataInput['gender'] = strtolower($_POST['gender']);
                $dataInput['gender_old'] = strtolower($_POST['gender_old']);
                $dataInput['harga'] = $_POST['harga'];
                $dataInput['link']  = $_POST['link'];
                $dataInput['identifier'] = substr($_GET['id'], 0, 2);

                if ($_FILES["gambar"]["name"] != '') {

                  $dataInput['img_file'] = $_FILES["gambar"]["name"];
                  $dataInput['img_type']  = $_FILES["gambar"]["type"]; //file name "txt_file" 
                  $dataInput['img_size']   = $_FILES["gambar"]["size"];
                  $dataInput['img_name']  = $_FILES["gambar"]["tmp_name"];
                  echo "MENGGIMPUT" . $dataInput['img_name'];
                }
                // $dataInput['gambar']  = $_POST['gambar'];

                if ($baju->updateDataBaju($dataInput) > 0) {
              ?>
                 <script>
                   location.replace("./");
                 </script>
             <?php
                }
              }
              ?>
             <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <section class="content-header">
                 <div class="container-fluid">
                   <div class="row mb-2">
                     <div class="col-sm-6">
                       <h1 style="font-size: 2.5rem!important;">Edit Item</h1>
                     </div>
                     <div class="col-sm-6">
                       <ol class="breadcrumb mt-3 float-sm-right">
                         <li class="breadcrumb-item"><a href="./admin.html">Home</a></li>
                         <li class="breadcrumb-item"><a href="./item.html">Item</a></li>
                         <li class="breadcrumb-item active">Edit</li>
                       </ol>
                     </div>
                   </div>
                 </div>
                 <!-- /.container-fluid -->
               </section>

               <!-- Main content -->
               <section class="content">

                 <div class="card p-4">
                   <form method="POST" enctype="multipart/form-data" action="">
                     <div class="row">
                       <div class="col-md-5 border-right form-group">
                         <div class="p-3 pb-2">
                           <div class="d-flex justify-content-between align-items-center mb-3">
                             <h4 class="text-right">Details</h4>
                           </div>
                           <div class="row mt-2">
                             <div class="col-md-12"><label class="labels">ID</label><input type="text" class="form-control " placeholder="ID Number" value="<?= sprintf($cari['identifier'] . '%03d', $data['items']['id'])  ?>" name="id_prod" maxlength="10" readonly>
                               <input type="hidden" class="form-control " placeholder="ID Number" value="<?= $data['items']['id'] ?>" name="id" maxlength="10" readonly>
                               <div class="invalid-feedback">
                               </div>
                             </div>
                             <div class="col-md-12">
                               <label class="labels">Nama Item</label><input type="text" class="form-control " placeholder="Nama" value="<?= $data['items']['nama'] ?> " name="nama">
                               <div class="invalid-feedback">
                               </div>
                             </div>
                           </div>
                           <div class="row mt-3">
                             <input type="hidden" class="form-control " value="<?= $data['items']['gender'] ?>" name="gender_old" readonly>
                             <div class="col-md-12"><label class="labels">Gender</label><select class="form-control " id="gender" name="gender" required>
                                 <option value="<?= $data['items']['gender'] ?>" selected hidden><?= $data['items']['gender'] ?> </option>
                                 <option value="laki-laki">Laki-laki</option>
                                 <option value="perempuan">Perempuan</option>
                               </select>
                               <div class="invalid-feedback">
                               </div>
                             </div>
                           </div>
                           <div class="row mt-3">
                             <div class="col-md-12"><label class="labels">Link</label>
                               <input type="text" class="form-control " placeholder="Link" name="link" value="<?= $data['items']['link'] ?>" required>
                               <div class="invalid-feedback">
                               </div>
                             </div>
                           </div>
                           <div class="row mt-3">
                             <div class="col-md-12"><label class="labels">Price (Rp)</label>
                               <input type="number" class="form-control " placeholder="Price" name="harga" maxlength="10" value="<?= $data['items']['harga'] ?>" required>
                               <div class="invalid-feedback">
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="p-3 py-5">
                           <img src="<?= base_url ?>/uploads/<?= $data['items']['gambar'] ?>" alt="" srcset="" width="200px">
                           <div class="form-group">
                             <b>Edit Item Photo</b><br />
                             <input type="file" class="form-control" name="gambar">
                             <div class="text-danger">
                             </div>
                           </div>
                           <div class="mt-5 text-center">
                             <button class="btn btn-success profile-button" name="save_record" type="submit" value="save_record"><i class="far fa-save"></i> Save</button>
                           </div>

                         </div>

                       </div>
                     </div>
                   </form>
                 </div>
               </section>

             </div>
             <?php
              require_once "$root/app/views/admin/templates/footer.php";
              ?>