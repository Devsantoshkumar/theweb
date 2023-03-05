<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>

<!-- home project section style start -->
<div class="container-fluid bg-light pb-5 position-relative">

    <div class="row searhProjectHeader">
            <div class="col-11 m-auto">
                <nav aria-label="breadcrumb" class="py-4 px-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white"><a href="#">Library</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Data</li>
                </ol>
                </nav>
            </div>
        </div>

            <div class="container position-absolute searchBarProjects">
                <div class="card shadow-sm border-0 p-3">
                    <form action="" class="d-flex justify-content-start">
                        <div class="input-group px-2 w-25">
                            <select name="" id="" class="form-control shadow-none" class="w-100">
                                <option value="">SELECT CATEGORY</option>
                                <option value="">HTML</option>
                                <option value="">CSS</option>
                                <option value="">JS</option>
                                <option value="">PHP</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control rounded-0 w-100 shadow-none p-2" placeholder="Search project..">
                        </div>
                        <div class="input-group w-25">
                            <button class="btn btn-primary rounded-0 w-100 text-center">Search</button>
                        </div>
                    </form>
                </div>
            </div>

        <div class="container py-5">
            <div class="row py-4">
                <h1 class="col h4 fw-bold text-dark lang_heading text-uppercase">Download Projects</h1>
            </div>
            <div class="row">
                 <div class="col">
                    <?php if($rows): ?>
                    <div class="course_card_group">
                        <?php foreach($rows as $row): ?>
                        <a href="<?=ROOT ?>/code/<?=$row->projects_id; ?>" class="card bg-white course_card p-3 rounded-3">
                            <img src="<?=ROOT ?>/uploads/<?=$row->image; ?>" class="card-img-top rounded-3" alt="...">
                            <div class="card-body pb-0">
                            <span class="time rounded-pill"><?=get_date($row->created_at); ?></span>
                            <h1 class="card-title text-dark pt-1 h6"><?=$row->title; ?></h1>
                            <div class="details py-2 d-flex justify-content-between align-items-center">
                                <section class="d-flex justify-content-center align-items-center">
                                    <span class="me-2 fs-6"><i class="fa fa-download"></i></span>
                                    <span class="me-2">2.5K</span>
                                </section>
                                <section class="price_details">
                                <span class="price py-1 px-3 fs-5 text-success rounded-pill">Free</span>
                                </section>
                            </div>
                            </div>
                        </a>
                      <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                 </div>
            </div>
        </div>
   </div>
<!-- home project section style end -->


<?php $this->view('includes/testimonial'); ?>

<?php $this->view('includes/footer'); ?>