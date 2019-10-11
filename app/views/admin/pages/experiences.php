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
                <h1>Experiences</h1>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1"></label>
                  </div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Experiences</li>
                </ol>
                <button type="button" class="btn btn-secondary pull-right" data-toggle="modal" data-target="#modal-secondary">
                   Add Experiences
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
                  <h3 class="card-title">Experinces</h3>
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
                            Title
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                            Company
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                            Description
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                            DOJ
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                            DOL
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $count = 1; foreach ($data['experiences'] as $experience): ?>
                        <tr role="row" class="odd">
                          <td class="sorting_1"><?php echo $count++ ?></td>
                          <td><?php echo $experience->title ?></td>
                          <td><?php echo $experience->company ?></td>
                          <td><?php echo $experience->description ?></td>
                          <td><?php echo $experience->doj ?></td>
                          <td><?php echo $experience->dol ?></td>
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
        <div class="modal-dialog">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h4 class="modal-title">Experiences</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <form action="<?php echo URLROOT ?>/pages/experiences" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Title<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['title'] ?>" placeholder="Title">
                                    <span class="invalid-feedback"><?php echo $data['title_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company" class="col-sm-2 col-form-label">Company<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="text" name="company" class="form-control <?php echo (!empty($data['company_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['company'] ?>" placeholder="Company">
                                    <span class="invalid-feedback"><?php echo $data['company_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label">Description<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control <?php echo (!empty($data['description_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['description'] ?>" placeholder="Description"></textarea>
                                    <span class="invalid-feedback"><?php echo $data['description_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="doj" class="col-sm-2 col-form-label">Date of Join<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="date" name="doj" class="form-control <?php echo (!empty($data['doj_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['doj'] ?>">
                                    <span class="invalid-feedback"><?php echo $data['doj_err'] ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dol" class="col-sm-2 col-form-label">Date of Leave<sup>*</sup></label>
                                <div class="col-sm-10">
                                    <input type="date" name="dol" class="form-control <?php echo (!empty($data['dol_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['dol'] ?>">
                                    <span class="invalid-feedback"><?php echo $data['dol_err'] ?></span>
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