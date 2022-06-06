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
                                        <select onchange="fetch_category()" class="form-control default-select" name="interest_id" id="interest" required>
                                            <option selected disabled value="">Choose Interest ....</option>
                                            <?php foreach ($i as $interest) { ?>
                                                <option value="<?= $interest['id'] ?>"><?= $interest['title'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Select Category</label>
                                        <select class="form-control " name="category_id" id="category" required>
                                            <option selected  value="">Choose Interest ....</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Description</label>
                                        <textarea class="summernote" name="description" placeholder="Enter Description"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">ADD Subcategory</button>
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
                        <h4 class="card-title">Added SubCategory</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#ID</th>
                                        <th>Interest Name</th>
                                        <th>Category Name</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sub as $subcategory) { ?>
                                        <tr>
                                            <td><strong><?= $subcategory['id'] ?></strong></td>
                                            <td><?= $subcategory['i_title'] ?></td>
                                            <td><?= $subcategory['cat_title'] ?></td>
                                            <td><?= $subcategory['subcat_title'] ?></td>
                                            <td><?= $subcategory['description'] ?></td>
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
    function fetch_category() {
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
        });
    }
</script>