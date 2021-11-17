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


          if (isset($_POST['save_record'])) {
            $dataInput['nama'] = $_POST['nama'];
            $dataInput['gender'] = $_POST['gender'];
            $dataInput['harga'] = $_POST['harga'];
            $dataInput['link']  = $_POST['link'];

            $dataInput['img_file'] = $_FILES["gambar"]["name"];
            $dataInput['img_type']  = $_FILES["gambar"]["type"]; //file name "txt_file" 
            $dataInput['img_size']   = $_FILES["gambar"]["size"];
            $dataInput['img_name']  = $_FILES["gambar"]["tmp_name"];
            // $dataInput['gambar']  = $_POST['gambar'];

            if ($baju->tambahBaju($dataInput) > 0) {
          ?>
             <script>
               location.replace("./");
             </script>
         <?php
            }
          }
          ?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
           <!-- Content Header (Page header) -->
           <section class="content-header">
             <div class="container-fluid">
               <div class="row mb-2">
                 <div class="col-sm-6">
                   <h1 style="font-size: 2.5rem!important;">Tambah Data <?= $data['title'] ?></h1>
                 </div>
                 <div class="col-sm-6">
                   <ol class="breadcrumb mt-3 float-sm-right">
                     <li class="breadcrumb-item"><a href="./admin.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="./item.html">Item</a></li>
                     <li class="breadcrumb-item active">Add</li>
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
                 <input type="hidden" name="_token" value="LYknaDwTZe3aX6sS3RVW3aZJqDonnnExNS5rEZNv">
                 <div class="row">
                   <div class="col-md-5 border-right form-group">
                     <div class="p-3 pb-2">
                       <div class="d-flex justify-content-between align-items-center mb-3">
                         <h4 class="text-right">Details</h4>
                       </div>
                       <div class="row mt-2">
                         <div class="col-md-12">
                           <label class="labels">Nama Item</label><input type="text" class="form-control " placeholder="Nama" name="nama" required>
                           <div class="invalid-feedback">
                           </div>
                         </div>
                       </div>
                       <div class="row mt-3">
                         <div class="col-md-12"><label class="labels">Gender</label><select class="form-control " id="gender" name="gender" required>
                             <option value="" selected disabled hidden>Pilih</option>
                             <option value="laki-laki">Laki-laki</option>
                             <option value="perempuan">Perempuan</option>
                           </select>
                           <div class="invalid-feedback">
                           </div>
                         </div>
                       </div>
                       <div class="row mt-3">
                         <div class="col-md-12"><label class="labels">Link</label>
                           <input type="text" class="form-control " placeholder="Link" name="link" required>
                           <div class="invalid-feedback">
                           </div>
                         </div>
                       </div>
                       <div class="row mt-3">
                         <div class="col-md-12"><label class="labels">Price</label>
                           <input type="number" class="form-control " placeholder="Price" name="harga" maxlength="10" required>
                           <div class="invalid-feedback">
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="p-3 py-5">
                       <img src="./dist/img/product_img.jpg" alt="" srcset="" width="200px">
                       <div class="form-group">
                         <b>Item Photo</b><br />
                         <input type="file" class="form-control" name="gambar" required>
                         <div class="text-danger">
                         </div>
                       </div>
                       <div class="mt-5 text-center">
                         <button class="btn btn-primary profile-button" name="save_record" type="submit" value="save_record"><i class="far fa-save"></i> Add</button>
                       </div>

                     </div>

                   </div>
                 </div>
               </form>
             </div>
           </section>

         </div>
         <!-- /.content-wrapper -->
         <?php
          require_once "$root/app/views/admin/templates/footer.php";
          ?>