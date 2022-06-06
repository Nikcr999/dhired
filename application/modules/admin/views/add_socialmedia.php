<?php
defined('BASEPATH') or exit('No direct script access allowed');
// print_r($c);
// exit();
?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Social Media</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Social Media</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="compose-content">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group col-md-10">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Icon</label>
                                        <input type="file" name="icon" placeholder="Upload Icon" class="dropify" required>
                                    </div>
                                    <div class="form-group col-md-10 ">
                                        <label>Status</label>
                                        <input name="status" type="text" class="form-control" placeholder="Enter Status" required/>
                                    </div>
                                    <button type="submit" class="btn btn-primary">ADD Social Media</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Added Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#ID</th>
                                        <th>Icon</th>
                                        <th>Name</th>
                                      
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($soc as $social) { ?>
                                        <tr>
                                            <td><strong><?= $social['id'] ?></strong></td>
                                            <td><img src="<?= base_url() ?>/admin_assets/social/<?= $social['icon'] ?>" width="70" alt="logo"></td>
                                            <td><?= $social['name'] ?></td>
                                            <td><?= $social['status'] ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->