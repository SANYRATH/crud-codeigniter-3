<?php $this->load->view("employee/header") ?>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                               Danh sách nhân viên
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Danh sách nhân viên</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        

                        <a class="btn btn-primary" href="<?php echo base_url() . 'employee/create' ?>">Thêm nhân viên mới</a>

                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="datatable1" class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>

                                <?php if (!empty($employees)) {
                                    foreach ($employees as $employee) { ?>
                                        <tr>
                                            <td><?php echo $employee['user_id'] ?></td>
                                            <td><?php echo $employee['name'] ?></td>
                                            <td><?php echo $employee['email'] ?></td>
                                            <td>
                                                <a href="<?php echo base_url() . 'employee/edit/' . $employee['user_id'] ?>" class="btn btn-primary"> Edit</a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url() . 'employee/delete/' . $employee['user_id'] ?>" class="btn btn-danger"> delete</a>
                                            </td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="5"> không tìm thấy</td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <?php
                        if ($this->session->flashdata('success')) { ?>
                            <p class="text-success"> <?= $this->session->flashdata('success') ?> </p>
                        <?php } ?>

                    </div>
                </div>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


            </main>
        </div>
    </div>


    <?php $this->load->view("employee/footer") ?>