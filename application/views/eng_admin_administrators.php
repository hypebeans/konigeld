<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
    <?php 
    if($this->session->userdata("id") == "") {
        redirect('english_home');
    }
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Königeld Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Administrators</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Administrators</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
          <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-10 float-left">
                                        <h4><strong class="card-title">Administrator Table</strong></h4>
                                    </div>
                                    <div class="col-sm-2 text-right float-right">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <div class="row">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($admin as $list) { ?>
                                            <tr>
                                                <td><?php echo $list->fname_admin." ".$list->lname_admin ?></td>
                                                <td><?php echo $list->email_admin ?></td>
                                                <td><?php echo $list->hp_admin ?></td>
                                                <td><?php echo $list->alamat_admin ?></td>
                                                <td>Active</td>
                                                <td id="buttons">
                                                    <div class="col-sm-4 offset-sm-1">
                                                        <a href="<?php echo base_url(). 'admin_table_admin_edit' ?>">
                                                        <button type="button" class="btn btn-outline-success">Edit</button>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-4 offset-sm-1">
                                                        <a href="<?php echo base_url(). 'namametod/delete' ?>">
                                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                                        </a>
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
            </div><!-- .animated -->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
</body>

</html>
