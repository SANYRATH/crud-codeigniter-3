<?php $this->load->view("auth/header") ?>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Welcome/register') ?>">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               

                <form class="form-signin" action="<?= base_url('Welcome/loginNow') ?>" method="post">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="User Email">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="User password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                </form>
            </div>
            <?php
            if ($this->session->flashdata('error')) { ?>
                <p class="text-success"> <?= $this->session->flashdata('error') ?> </p>
            <?php } ?>

        </div>
    </div>

    <?php $this->load->view("auth/footer") ?>