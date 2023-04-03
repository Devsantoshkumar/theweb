<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>


    <div class="container-fluid details_Header">
        <div class="row">
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

    
    <?php if($row): ?>
    <div class="container projectWrapper bg-white rounded shadow-sm p-4">
    <div class="card border-0">
        <div class="card border-0 rounded-0 mb-3">
        <div class="row g-0">
            <div class="col-md-6">
            <img src="<?=ROOT ?>/uploads/<?=$row[0]->image; ?>" class="img-fluid border" alt="...">
            </div>
            <div class="col-md-6 py-md-0 py-4">
            <div class="card-body border mx-4">
                <h1 class="card-title h5 fw-bold"><?=$row[0]->title; ?></h1>
                <p class="card-text"><small class="text-muted"><?=get_date($row[0]->created_at); ?></small></p>
                <div class="card-text d-flex justify-content-start">
                <div class="likes d-flex align-items-center border p-3"><span class="material-symbols-sharp">favorite</span><span class="px-2">2548</span></div>
                <div class="downloads d-flex align-items-center border p-3"><span class="material-symbols-sharp">download</span><span class="px-2">5875</span></div>
                </div>
                <p class="card-text py-3"><?=$row[0]->description; ?></p>
                <a href="<?=ROOT ?>/download/<?=$row[0]->download_file; ?>" class="downloadBtn d-block p-3 text-center fs-4 fw-bold text-white shadow-sm rounded">Download</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="card border-0">
        <div class="card border-0 rounded-0 mb-3">
        <div class="row g-0">
            <div class="col-md-6 order-md-first order-last my-md-0 my-4 p-3 bg-light">
              
            <h6>Comments:</h6>

            <form method="POST" class="form my-3">
                <div class="input-group">
                    <textarea name="comment" class="form-control shadow-none" placeholder="comment..."></textarea>
                </div>
                <div class="input-group d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-sm btn-primary my-2">Publish</button>
                </div>
            </form>

            <div class="card rounded-0 comments">
            <div class="card-body">
                <h6 class="card-title fw-bold">Santosh Kumar <small class="text-muted px-3">3 mins ago</small></h6>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-body border-top ms-5 px-0">
                <h6 class="card-title fw-bold">Admin <small class="text-muted px-3">36 mins ago</small></h6>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
            
            </div>
            <div class="col-md-6">
            <div class="card-body border mx-4">
                <h1 class="card-title h6 fw-bold">Features:</h1>
                <table class="table">
                    <tr>
                        <th>Published:</th>
                        <td>12/05/2023</td>
                    </tr>
                    <tr>
                        <th>Technologies:</th>
                        <td>HTML, CSS, JS, PHP, MYSQL</td>
                    </tr>
                    <tr>
                        <th>Author:</th>
                        <td>Santosh Kumar</td>
                    </tr>
                    <tr>
                    </tr>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

<?php endif; ?>

</div>

<?php $this->view('includes/footer'); ?>