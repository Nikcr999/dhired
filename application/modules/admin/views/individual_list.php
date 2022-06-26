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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Individual List</a></li>
            </ol>
        </div>
        
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Individual List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Interest</th>
                                        <!-- <th>Company</th>
                                        <th>Designation</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($in as $individual) { ?>
                                        <tr>
                                            <td><strong><?= $individual['id'] ?></strong></td>
                                            <td><?= $individual['r_name'] ?></td>
                                            <td><?= $individual['email'] ?></td>
                                            <td><?= $individual['mobile'] ?></td>
                                            <td><?= $individual['c_name'] ?></td>
                                            <td><?= $individual['s_name'] ?></td>
                                            <td><?= $individual['ci_name'] ?></td>
                                            <td><?= $individual['i_name'] ?></td>
                                            <!-- <td><?= $individual['company_name'] ?></td>
                                            <td><?= $individual['designation'] ?></td> -->
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