<div class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">

             <a class="navbar-brand" href="#">Parkiran</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="<?php if(isset($home)){echo "$home";} ?>">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="<?php if(isset($dashboard)){echo "$dashboard";} ?>">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="<?php if(isset($parkiran)){echo "$parkiran";} ?>">
                        <a class="nav-link" href="index.php">Parkiran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            </div>
          </nav>
        </div>
    </div>
</div>
</div>