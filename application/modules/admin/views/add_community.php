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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Community</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Community</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="4" name="description" placeholder="Enter Description" required></textarea>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Country</label>
                                        <select onchange="fetch_state_for_community()" class="form-control default-select" name="country_id" id="country" required>
                                            <option selected disabled value="">Choose Country ....</option>
                                            <?php foreach ($c as $country) { ?>
                                                <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select State</label>
                                        <select id="state"   onchange="fetch_city_for_community()" class="form-control" name="state_id" style="color:grey" required>
                                            <option selected value="">Choose State ....</option>
                                            <option>Select Country First</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select City</label>
                                        <select id="city" class="form-control" name="city_id" style="color:grey" required>
                                            <option selected value="">Choose city ....</option>
                                            <option>Select State First</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Interest</label>
                                        <select onchange="fetch_category_for_community()" class="form-control default-select" name="interest_id" id="interest" required>
                                            <option selected disabled value="">Choose Interest ....</option>
                                            <?php foreach ($i as $interest) { ?>
                                                <option value="<?= $interest['id'] ?>"><?= $interest['title'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Category</label>
                                        <select onchange="fetch_subcategory_for_community()" class="form-control " name="category_id" id="category" required>
                                            <option selected  value="">Choose Category ....</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Subcategory</label>
                                        <select class="form-control " name="subcategory_id" id="subcategory" required>
                                            <option selected  value="">Choose Subcategory ....</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD Community</button>
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
                        <h4 class="card-title"> Added Community</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Interest</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($com as $community) { ?>
                                        <tr>
                                        <td><strong><?= $community['id'] ?></strong></td>
                                        <td><?= $community['com_title'] ?></td>
                                        <td><?= $community['description'] ?></td>
                                        <td><?= $community['c_name'] ?></td>
                                        <td><?= $community['s_name'] ?></td>
                                        <td><?= $community['ci_name'] ?></td>
                                        <td><?= $community['i_title'] ?></td>
                                        <td><?= $community['cat_title'] ?></td>
                                        <td><?= $community['subcat_title'] ?></td>
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
    function fetch_state_for_community() {
        cid = document.getElementById("country").value;
        // alert(cid);
        var request = $.ajax({
            url: "<?= base_url('admin/fetch_state') ?>",
            type: "POST",
            data: {
                country_id: cid
            },
            dataType: "html"
        });
        request.done(function(msg) {
            // alert(msg);
            $("#state").html(msg);
            fetch_city_for_community();
        });
    }
    function fetch_city_for_community() {
        sid = document.getElementById("state").value;
        // alert(cid);
        var request = $.ajax({
            url: "<?= base_url('admin/fetch_city') ?>",
            type: "POST",
            data: {
                state_id: sid
            },
            dataType: "html"
        });
        request.done(function(msg) {
            // alert(msg);
            $("#city").html(msg);
        });
    }
    function fetch_category_for_community() {
        iid = document.getElementById("interest").value;
        // alert(iid);
        var request = $.ajax({
            url: "<?= base_url('admin/fetch_category') ?>",
            type: "POST",
            data: {
                interest_id: iid
            },
            dataType: "html"
        });
        request.done(function(msg) {
            // alert(msg);
            $("#category").html(msg);
            fetch_subcategory_for_community();
        });
    }
    function fetch_subcategory_for_community() {
        cid = document.getElementById("category").value;
        // alert(cid);
        var request = $.ajax({
            url: "<?= base_url('admin/fetch_subcategory') ?>",
            type: "POST",
            data: {
                category_id: cid
            },
            dataType: "html"
        });
        request.done(function(msg) {
            // alert(msg);
            $("#subcategory").html(msg);
        });
    }
</script>