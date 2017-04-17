<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<section class="content-header">
    <h1>
        Info
        <small>Data Diri</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Info</a></li>
        <li class="active">Data Diri</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="modal_pribadi" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Data Pribadi</h4>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
        </div>
      </div>

      <div class="modal fade" id="modal_kantor" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Data Kantor</h4>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
        </div>
      </div>
      
      <div class="modal fade" id="modal_lain" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Data Lain-lain</h4>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Data Pribadi</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">No KTP : </label>
              <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="" disabled>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir : </label>
              <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="" disabled>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir : </label>
              <div class="col-sm-5">
                <div class="input-group date" style="width: 73.5%">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat Rumah : </label>
              <div class="col-sm-9">
                <textarea class="form-control" rows="3" placeholder="" disabled></textarea>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nomor Handphone : </label>
              <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="" disabled>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nomor Handphone : (Alternatif) </label>
              <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="" disabled>
              </div>
            </div>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="form-group">  
              <div class="col-sm-1 pull-right">
                      <a href="<?php echo base_url('dosen/editpribadi'); ?>"
                      <button type="submit" class="btn btn-primary pull-right">
                        <i class="fa fa-edit"></i> Edit </a>
                      </button>
              </div>
            </div>
          </div><!-- /. box-footer -->
        </form>          
    </div><!-- /.box -->

    <!-- Default box -->
    <div class="box">
        <div class="box box-default collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Kantor</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
	        <form class="form-horizontal">    
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Nama : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Gelar Depan : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Gelar Belakang : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Alamat Kantor : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">No Telepon : </label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Fax : </label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Email : </label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
	            <div class="box-body">
	            	<div class="form-group">
                        <label class="col-sm-2 control-label">Email(Alternatif) : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
	            </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">NIP : </label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">NIDN : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <div class="form-group">  
                  <div class="col-sm-1 pull-right">
                      <a href="<?php echo base_url('dosen/editkantor'); ?>"
                      <button type="submit" class="btn btn-primary pull-right">
                        <i class="fa fa-edit"></i> Edit </a>
                      </button>
                  </div>
                </div>
              </div><!-- /. box-footer -->
	        </form>
        </div>
    </div><!-- /.box -->

    <!-- Default box -->
    <div class="box">
        <div class="box box-default collapsed-box">    
            <div class="box-header with-border">
                <h3 class="box-title">Lain-lain</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Scopus ID : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">LinkedIn : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Interest Subject: </label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" placeholder="" disabled></textarea>
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-body">
                <div class="form-group">
                        <label class="col-sm-2 control-label">Scholar : </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  placeholder="" disabled>
                        </div>
                    </div>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <div class="form-group">  
                  <div class="col-sm-1 pull-right">
                      <a href="<?php echo base_url('dosen/editlain'); ?>"
                      <button type="submit" class="btn btn-primary pull-right">
                        <i class="fa fa-edit"></i> Edit </a>
                      </button>
              </div>
                </div>
              </div><!-- /. box-footer -->
            </form>
        </div>
    </div><!-- /.box -->
</section><!-- /.content -->
</html>