<?php require APPROOT . './views/admin/inc/header.php' ?>
    <div class="wrapper">
        <?php require APPROOT . './views/admin/inc/navbar.php' ?>

        <?php require APPROOT . './views/admin/inc/sidebar.php' ?>
        <div class="content-wrapper" style="min-height: 1203.6px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>About</h1>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1"></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ol>
                            <button type="button" class="btn btn-secondary pull-right" data-toggle="modal" data-target="#modal-secondary">
                                Add About
                            </button>

                        </div>
                    </div>
                    <!-- /.modal -->
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">About</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="soritng_asc">
                                                        ID
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                        Date of Birth
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                        Email
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                        Phone
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                        Residence
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                        Address
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                        About
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $count = 1; foreach ($data['about'] as $about): ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><?php echo $count++ ?></td>
                                                        <td><?php echo $about->fname. ' ' . $about->lname ?></td>
                                                        <td><?php echo $about->dob ?></td>
                                                        <td><?php echo $about->email ?></td>
                                                        <td><?php echo $about->phone ?></td>
                                                        <td><?php echo $about->residence ?></td>
                                                        <td><?php echo $about->address ?></td>
                                                        <td><?php echo $about->about ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>

    <!--Modal -->
    <div class="modal fade" id="modal-secondary">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h4 class="modal-title">About</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="<?php echo URLROOT ?>/pages/about" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-2 col-form-label">First Name<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="text" name="fname" class="form-control <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['fname'] ?>" placeholder="First Name">
                                    <span class="invalid-feedback"><?php echo $data['fname_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-2 col-form-label">Last Name<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="text" name="lname" class="form-control <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['lname'] ?>" placeholder="Last Name">
                                    <span class="invalid-feedback"><?php echo $data['lname_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dob" class="col-sm-2 col-form-label">Date of birth<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="date" name="dob" class="form-control <?php echo (!empty($data['dob_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['dob'] ?>">
                                    <span class="invalid-feedback"><?php echo $data['dob_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['email'] ?>" placeholder="Email">
                                    <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Phone No<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="number" name="phone" class="form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['phone'] ?>" placeholder="Phone">
                                    <span class="invalid-feedback"><?php echo $data['phone_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="residence" class="col-sm-2 col-form-label">Residence<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <textarea name="residence" class="form-control <?php echo (!empty($data['residence_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['residence'] ?>" placeholder="Residence"></textarea>
                                    <span class="invalid-feedback"><?php echo $data['residence_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <textarea name="address" class="form-control <?php echo (!empty($data['address_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['address'] ?>" placeholder="Address"></textarea>
                                    <span class="invalid-feedback"><?php echo $data['address_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="about" class="col-sm-2 col-form-label">About<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <textarea name="about" class="form-control <?php echo (!empty($data['about_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['about'] ?>" placeholder="About"></textarea>
                                    <span class="invalid-feedback"><?php echo $data['about_err'] ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <input type="submit" value="Save" class="btn btn-outline-light">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php require APPROOT . './views/admin/inc/footer.php' ?>