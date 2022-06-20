<?php
defined('BASEPATH') or exit('No direct script access allowed');
// print_r($com);
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Group</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Group</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label>Group Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Group Name" required>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Community</label>
                                        <select class="form-control" name="community_id" style="color:grey" required>
                                            <option selected value="">Choose Community ....</option>
                                            <?php foreach ($comm as $community) { ?>
                                                <option value="<?= $community['id'] ?>"><?= $community['title'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Social Media</label>
                                        <select class="form-control" name="social_id" style="color:grey" required>
                                            <option selected value="">Choose social Media ....</option>
                                            <?php foreach ($soc as $social) { ?>
                                                <option value="<?= $social['id'] ?>"><?= $social['name'] ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Enter Url</label>
                                        <input type="text" name="url" class="form-control" placeholder="Enter Url" required>

                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="4" name="description" placeholder="Enter Description" required></textarea>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Type</label>
                                        <select onchange="membership()" class="form-control"  name="type" id="type" style="color:grey" required>
                                            <option selected value="">Choose Type ....</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Free">Free</option>
                                            <!-- <option>Select Country First</option> -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10 " id="box" style="display:none">
                                        <label>Membership Fees</label>
                                        <input type="number" id="fees" name="fees" min="0" class="form-control" placeholder="Enter Amount" >
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control" placeholder="Enter Status" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD GROUP</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Added Group</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#Id</th>
                                        <th>Name</th>
                                        <th>Community</th>
                                        <th>Social Media</th>
                                        <th>URL</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Membership Fees</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($gr as $group) { ?>
                                        <tr>
                                            <td><strong><?= $group['id'] ?></strong></td>
                                            <td><?= $group['name'] ?></td>
                                            <td><?= $group['c_title'] ?></td>
                                            <td><?= $group['s_name'] ?></td>
                                            <td><?= $group['url'] ?></td>
                                            <td><?= $group['description'] ?></td>
                                            <td><?= $group['type'] ?></td>
                                            <td><?= $group['fees'] ?></td>
                                            <td><?= $group['status'] ?></td>
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
<script>
    function membership() {
        t = document.getElementById("type").value;
        // alert(t);
        if(t == 'Paid'){
            // document.getElementById("fees").value = 0;
            $("#box").show();
        }
        else{
            $("#box").hide();

        }
    }

    

</script>