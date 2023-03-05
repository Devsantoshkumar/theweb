<?php $this->view('admin-includes/header'); ?>
<?php $this->view('admin-includes/navigation'); ?>


<div class="container-fluid">
            <div class="row flex-nowrap">
              <!-- sidebar start -->
              <?php $this->view('admin-includes/sidebar'); ?>
              <!-- sidebar end -->
                <div class="col">
                <?php $this->view('admin-includes/topbar'); ?>


                   <div class="row p-4">
                    <div class="col d-flex justify-content-between align-items-center">
                      <span class="pageHeading fs-5">Update project</span>
                      <div class="actionBtns d-flex justify-content-center align-items-center">
                        <div class="pageDate d-flex justify-content-center align-items-center">
                          <input type="date" class="form-control shadow-none" name="date" id="date">
                        </div>
                        <a href="<?=ROOT ?>/projects" class="add text-decoration-none rounded d-flex justify-content-center align-items-center text-light mx-2"><span class="material-symbols-sharp">visibility</span></a>
                        <span class="add rounded d-flex justify-content-center align-items-center text-light mx-2"><span class="material-symbols-sharp">filter_list</span></span>
                      </div>
                    </div>
                  </div>


                  <div class="row d-flex justify-content-center pt-1">
                      <div class="col-10">
                      <?php 
                          if(count($errors)>0)
                          {
                            echo '<div class="alert rounded-0 alert-danger alert-dismissible fade show" role="alert">';
                                $i = 1;
                                foreach($errors as $error){
                                    echo "(".$i++.") ".$error."; ";
                                }
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                          }
                      ?>
                      </div>
                  </div>


                  <div class="row">
                    <div class="col">
                    <div class="card px-5 bg-transparent rounded-0 border-0">
                      <div class="card-body">
                        <div class="counting-data bg-white py-4 shadow-sm">
                        <div class="card-header border-0 bg-white text-muted h3 fw-bold text-center">Publish Project</div>
                          <div class="card-body px-5">
                              <form method="POST" enctype="multipart/form-data">
                              
                              <div class="input-group mb-5">
                                  <input type="text" name="title" class="form-control shadow-none" value="<?=$row[0]->title; ?>" placeholder="Project title">
                              </div>

                                <div class="input-group mb-5">
                                  <textarea name="description" class="form-control shadow-none" rows="5" placeholder="Description"><?=$row[0]->description; ?></textarea>
                                </div>

                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="cost" id="inlineRadio1" value="paid">
                                  <label class="form-check-label" for="inlineRadio1">Paid</label>
                                </div>
                                <div class="form-check form-check-inline pb-3">
                                  <input class="form-check-input" type="radio" name="cost" id="inlineRadio2" value="free">
                                  <label class="form-check-label" for="inlineRadio2">Free</label>
                                </div>

                                <div class="input-group mb-5">
                                    <input type="text" name="price" class="form-control shadow-none" value="<?=$row[0]->price; ?>" placeholder="Enter price for project">
                                </div>

                                <div class="input-group mb-5">
                                  <input type="text" name="meta_title" class="form-control shadow-none" value="<?=$row[0]->meta_title; ?>" placeholder="Meta title">
                                </div>

                                <div class="input-group mb-5">
                                  <textarea name="meta_description" class="form-control shadow-none" rows="5" placeholder="Meta Description"><?=$row[0]->meta_description; ?></textarea>
                                </div>
                                <?php 

                                  $category = new Projectcategory();
                                  $rows = $category->findAll();
                                  if($rows):
                                ?>
                                <select class="form-select shadow-none mb-5" name="category">
                                  <option selected>Select Category</option>
                                  <?php foreach($rows as $row): ?>
                                     <option value="<?=$row->projectcategorys_id ?>"><?=$row->category ?></option>
                                  <?php endforeach; ?>
                                </select>
                                <?php endif; ?>

                                <div class="input-group mb-5 d-flex justify-content-between align-items-center">
                                    <label for="file">Upload Image: </label>
                                    <input type="file" name="image" class="form-control ms-2 shadow-none">
                                </div>
                                
                                <div class="input-group mb-5 d-flex justify-content-between align-items-center">
                                    <label for="file">Upload File: </label>
                                    <input type="file" name="download_file" class="form-control ms-2 shadow-none">
                                </div>  
                              
                              <div class="input-group my-3">
                                  <button type="submit" class="add rounded border-0 d-flex justify-content-center align-items-center text-light px-4">Publish</button>
                              </div>
                              
                              </form>
                          </div>  
                        </div>
                      </div>
                  </div>
                    </div>
                  </div>

                </div>
            </div>
    </div>




<?php $this->view('admin-includes/footer'); ?>