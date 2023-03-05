<!-- Header start -->
<nav class="navbar shadow-sm sticky-top navbar-expand-lg tw-navigation py-2">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="<?=ROOT ?>">TheWeb</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark fs-6" href="<?=ROOT ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark fs-6" href="<?=ROOT ?>/source">Source</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark fs-6" href="<?=ROOT ?>/comming">Collage Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark fs-6" href="<?=ROOT ?>/comming">Internship Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark fs-6" href="<?=ROOT ?>/comming">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark fs-6" href="<?=ROOT ?>/comming">Courses</a>
        </li>
        </ul>

        
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
           <?php 
             if(Auth::loggedIn()){
                echo '<a href="'.ROOT.'/logout" id="tw-user" class="fw-bold px-3 text-dark">'.Auth::user('firstname').'</a>';
             }else{
                echo '<a class="nav-link fw-bold button" href="'.ROOT.'/signup">Signup</a>';
             }
           
           ?>
        </li>
        </ul>

    </div>
  </div>
</nav>

<!-- Header end -->