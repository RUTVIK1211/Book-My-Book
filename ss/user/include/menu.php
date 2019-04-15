    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-4">
            <div class="container">
                <a class="navbar-brand" href="index.php">Short Stories</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                      <li class="nav-item active">
                            <a class="nav-link" href="feedback.php">Feedback</a>
                        </li>
                      


                        <?php 
                    if(isset($_SESSION['username']))
                       {
                           ?>
  <li class="nav-item active">
                            <a class="nav-link" href="create.php">Create Story</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a>
                                <a class="dropdown-item" href=" profile.php">Profile</a>
                                <a class="dropdown-item" href="logout.php">Log out</a>
                            </div>
                        </li>
                        <?php
                       }else
                       {
                           ?>
                        <li class="nav-item active">
                            <a class="nav-link btn-primary p-2" href="login.php">Getting Started</a>
                        </li>
                        <?php
                       }
                    
                    ?>


                    </ul>
                </div>
            </div>
        </nav>

    </header>
