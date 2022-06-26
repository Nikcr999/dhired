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
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- whatsapp -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Whatsapp</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label>Enter Whatsapp Url</label>
                                    <input type="text" name="w_url" class="form-control" placeholder="Enter Url" required>

                                </div>
                                <div class="form-group col-md-10">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4" name="w_description" placeholder="Enter Description" required></textarea>
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Select Type</label>
                                    <select onchange="w_membership()" class="form-control" name="w_type" id="w_type" style="color:grey" required>
                                        <option selected value="">Choose Type ....</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Free">Free</option>
                                        <!-- <option>Select Country First</option> -->
                                    </select>
                                </div>
                                <div class="form-group col-md-10 " id="w_box" style="display:none">
                                    <label>Membership Fees</label>
                                    <input type="number" id="w_fees" name="w_fees" min="0" class="form-control" placeholder="Enter Amount">
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Status</label>
                                    <input type="text" name="w_status" class="form-control" placeholder="Enter Status" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- facebook -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Facebook</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label>Enter Facebook Url</label>
                                    <input type="text" name="f_url" class="form-control" placeholder="Enter Url" required>

                                </div>
                                <div class="form-group col-md-10">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4" name="f_description" placeholder="Enter Description" required></textarea>
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Select Type</label>
                                    <select onchange="f_membership()" class="form-control" name="f_type" id="f_type" style="color:grey" required>
                                        <option selected value="">Choose Type ....</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Free">Free</option>
                                        <!-- <option>Select Country First</option> -->
                                    </select>
                                </div>
                                <div class="form-group col-md-10 " id="f_box" style="display:none">
                                    <label>Membership Fees</label>
                                    <input type="number" id="f_fees" name="f_fees" min="0" class="form-control" placeholder="Enter Amount">
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Status</label>
                                    <input type="text" name="f_status" class="form-control" placeholder="Enter Status" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Linkdin -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Linkdin</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label>Enter Linkdin Url</label>
                                    <input type="text" name="l_url" class="form-control" placeholder="Enter Url" required>

                                </div>
                                <div class="form-group col-md-10">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4" name="l_description" placeholder="Enter Description" required></textarea>
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Select Type</label>
                                    <select onchange="l_membership()" class="form-control" name="l_type" id="l_type" style="color:grey" required>
                                        <option selected value="">Choose Type ....</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Free">Free</option>
                                        <!-- <option>Select Country First</option> -->
                                    </select>
                                </div>
                                <div class="form-group col-md-10 " id="l_box" style="display:none">
                                    <label>Membership Fees</label>
                                    <input type="number" id="l_fees" name="l_fees" min="0" class="form-control" placeholder="Enter Amount">
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Status</label>
                                    <input type="text" name="l_status" class="form-control" placeholder="Enter Status" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Telegram -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Telegram</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label>Enter Telegram Url</label>
                                    <input type="text" name="t_url" class="form-control" placeholder="Enter Url" required>

                                </div>
                                <div class="form-group col-md-10">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4" name="t_description" placeholder="Enter Description" required></textarea>
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Select Type</label>
                                    <select onchange="t_membership()" class="form-control" name="t_type" id="t_type" style="color:grey" required>
                                        <option selected value="">Choose Type ....</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Free">Free</option>
                                        <!-- <option>Select Country First</option> -->
                                    </select>
                                </div>
                                <div class="form-group col-md-10 " id="t_box" style="display:none">
                                    <label>Membership Fees</label>
                                    <input type="number" id="t_fees" name="t_fees" min="0" class="form-control" placeholder="Enter Amount">
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Status</label>
                                    <input type="text" name="t_status" class="form-control" placeholder="Enter Status" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ADD GROUP</button>
        </form>
        <br>
        <br>
        <!-- Table -->
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
    function w_membership() {
        w = document.getElementById("w_type").value;
        // alert(t);
        if (w == 'Paid') {
            // document.getElementById("fees").value = 0;
            $("#w_box").show();
        } else {
            $("#w_box").hide();

        }
    }
    function f_membership() {
        f = document.getElementById("f_type").value;
        // alert(t);
        if (f == 'Paid') {
            // document.getElementById("fees").value = 0;
            $("#f_box").show();
        } else {
            $("#f_box").hide();

        }
    }
    function l_membership() {
        l = document.getElementById("l_type").value;
        // alert(t);
        if (l == 'Paid') {
            // document.getElementById("fees").value = 0;
            $("#l_box").show();
        } else {
            $("#l_box").hide();

        }
    }
    function t_membership() {
        t = document.getElementById("t_type").value;
        // alert(t);
        if (t == 'Paid') {
            // document.getElementById("fees").value = 0;
            $("#t_box").show();
        } else {
            $("#t_box").hide();

        }
    }
</script>