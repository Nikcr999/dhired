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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Country</a></li>
            </ol>
        </div>
       
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Country</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label>Country Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Country Name" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD Country</button>
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
                        <h4 class="card-title"> Added Country</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#Id</th>
                                        <th>Country Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($c as $index => $country) {?>
                                    <tr>
                                        <td><strong><?=$country['id']?></strong></td>
                                        <td><?=$country['name']?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-success shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php  } ?>
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