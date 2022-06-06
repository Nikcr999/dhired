<?php
defined('BASEPATH') or exit('No direct script access allowed');
// print_r($ci);
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add City</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add City</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label>Select Country</label>
                                        <select onchange="fetch_state()" class="form-control default-select" name="country_id" id="country" required>
                                            <option selected disabled value="">Choose Country ....</option>
                                            <?php foreach ($c as $country) { ?>
                                                <option value="<?=$country['id']?>"><?=$country['name']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10"  >
                                        <label>Select State</label>
                                        <select id="state" class="form-control" name="state_id"  style="color:grey" required>
                                            <option selected  value="" >Choose State ....</option>
                                            <option>Select Country First</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>City Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter City Name" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD City</button>
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
                        <h4 class="card-title">Added City</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#ID</th>
                                        <th>Country Name</th>
                                        <th>State Name</th>
                                        <th>City Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ci as $city) { ?>
                                        <tr>
                                            <td><strong><?= $city['id'] ?></strong></td>
                                            <td><?= $city['c_name'] ?></td>
                                            <td><?= $city['s_name'] ?></td>
                                            <td><?= $city['ci_name'] ?></td>
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
<script>
    function fetch_state() {
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
        });
    }
</script>