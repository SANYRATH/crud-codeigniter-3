<?php $this->load->view("auth/header") ?>

<body>
    
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

                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button style="margin-right:20px;" type="submit" class="btn btn-primary">Sign in</button>
                        <a class="btn btn-primary" href="<?php echo base_url().'welcome/indexRegister'?>">Register</a>
                    </div>

                </form>
            </div>
            <?php
            if ($this->session->flashdata('error')) { ?>
                <p class="text-success"> <?= $this->session->flashdata('error') ?> </p>
            <?php } ?>

        </div>
    </div>

    <?php $this->load->view("auth/footer") ?>