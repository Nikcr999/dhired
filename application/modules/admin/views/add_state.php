<?php
defined('BASEPATH') or exit('No direct script access allowed');
// print_r($s);
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add State</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add State</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label>Select Country</label>
                                        <select class="form-control default-select" name="country_id" required>
                                            <option selected disabled value="">Choose Country ....</option>
                                            <?php foreach ($c as $index => $country) { ?>
                                                <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>State Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter State Name" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD State</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Added States</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#ID</th>
                                        <th>Country Name</th>
                                        <th>State Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  foreach ($s as $index => $state) { ?>
                                        <tr>
                                            <td><strong><?= $state['id'] ?></strong></td>
                                            <td><?= $state['c_name'] ?></td>
                                            <td><?= $state['s_name'] ?></td>
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