<?php $this->load->view("auth/header") ?>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <form method="post" autocomplete="off" action="<?= base_url('Welcome/register') ?>">
                    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name </label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="user name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="User Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="User password">
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button style="margin-right:20px;" type="submit" class="btn btn-primary">Register Now</button>
                        <a class="btn btn-primary" href="<?php echo base_url() . 'welcome/index' ?>">Login</a>
                    </div>
                </form>
            </div>
            <?php
            if ($this->session->flashdata('success')) { ?>
                <p class="text-success"> <?= $this->session->flashdata('success') ?> </p>
            <?php } ?>

        </div>
    </div>
</body>
<?php $this->load->view("auth/footer") ?>