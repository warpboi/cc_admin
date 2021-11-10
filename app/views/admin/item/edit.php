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
              <form method="POST" enctype="multipart/form-data" action="./item.html">
                <input type="hidden" name="_token" value="LYknaDwTZe3aX6sS3RVW3aZJqDonnnExNS5rEZNv">
                <div class="row">
                  <div class="col-md-5 border-right form-group">
                    <div class="p-3 pb-2">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Details</h4>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">ID</label><input type="text" class="form-control " placeholder="ID Number" value="TS001" name="id" maxlength="10" readonly>
                          <div class="invalid-feedback">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label class="labels">Nama Item</label><input type="text" class="form-control " placeholder="Nama" value="Sweater 1.0 Japan 01 Black " name="name">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Kategori</label><input type="text" class="form-control " value="Pontianak" placeholder="" name="birthplace">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                        <div class="col-md-6"><label class="labels">Gender</label><select class="form-control " id="gender" name="gender">
                            <option value="" selected>Male</option>
                            <option value="1">Female</option>
                            <option value="2">Unisex</option>
                          </select>
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Price</label>
                          <input type="text" class="form-control " placeholder="Price" value="690000" name="id" maxlength="10">
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
                        <b>Edit Item Photo</b><br />
                        <input type="file" class="form-control" name="foto_dos">
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