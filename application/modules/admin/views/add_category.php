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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Category</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="compose-content">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group col-md-10">
                                        <label>Select Interest</label>
                                        <select class="form-control default-select" name="interest_id" required>
                                            <option selected disabled value="">Choose Interest ....</option>
                                            <?php foreach ($i as $interest) { ?>
                                                <option value="<?= $interest['id'] ?>"><?= $interest['title'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Logo</label>
                                        <input type="file" name="logo" placeholder="Upload Logo" class="dropify">
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Description</label>
                                        <textarea class="summernote" name="description" placeholder="Enter Description"></textarea>
                                    </div>
                                    <div class="form-group col-md-10 ">
                                        <label>Status</label>
                                        <input name="status" type="text" class="form-control" placeholder="Enter Status" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">ADD Category</button>
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
                                        <th>Interest Name</th>
                                        <th>Logo</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($c as $category) { ?>
                                        <tr>
                                            <td><strong><?= $category['id'] ?></strong></td>
                                            <td><?= $category['i_title'] ?></td>
                                            <td><img src="<?= base_url() ?>/admin_assets/interest_logo/<?= $interest['logo'] ?>" width="70" alt="logo"></td>
                                            <td><?= $category['cat_title'] ?></td>
                                            <td><?= $category['description'] ?></td>
                                            <td><?= $category['status'] ?></td>
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