<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
    <?php
    error_reporting(0);
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
                        <h1>Message Requests</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Message Requests</li>
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
                                    <div class="col-sm-12 float-left">
                                        <h4><strong class="card-title">Message Requests</strong></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <div class="row">
                                        <thead>
                                            <tr>
                                                <th>Contact Us ID</th>
                                                <th>Contact Email</th>
                                                <th>Contact Subject</th>
                                                <th>Contact Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php foreach($contact as $list) ?>
                                                <td><?php echo $list->id_contact ?></td>
                                                <td><?php echo $list->email ?></td>
                                                <td><?php echo $list->subject_contact ?></td>
                                                <td><?php echo $list->isi ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(). 'contactus/replied/'.$list->id_contact ?>">
                                                        <button type="button" class="btn btn-outline-success">
                                                            <i class="fa fa-thumbs-up"></i>
                                                            &nbsp; Replied
                                                        </button>
                                                    </a>
                                                    <a href="<?php echo base_url(). 'contactus/replied/'.$list->id_contact ?>"></a>
                                                    <button type="button" class="btn btn-outline-danger">
                                                      <i class="fa fa-thumbs-down"></i>&nbsp; Decline</button>
                                                </td>
                                                <?php ?>
                                            </tr>
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
