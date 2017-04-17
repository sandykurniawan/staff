<!-- Content Header (Page header) -->
<section class="content-header">
        <?php echo $this->session->flashdata('pesan') ?>
    <div>
    <h1>
        <!-- Daftar User -->
        <small></small>
    </h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">User</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"> Daftar user</h3>
        </div>
        <div class="box-body">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add new user</button>
            <br/>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <?php $this->load->view('admin/add_user'); ?>  
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <table id="user1" class="table table-bordered table-hover col-xs-pull-right">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; 
                    foreach($data as $d){ ?>
                    <tr>
                        <td> <?php echo $i ?></td>
                        <td><?php echo $d['name'] ?></td>
                        <td><?php echo $d['username'] ?></td>
                        <td> 
                            <a  href="<?php echo base_url()."admin/edit/".$d['username']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-edit"></i>  Edit</a> 
                            <a onclick="return confirmDelete()" href="<?php echo base_url()."admin/delete/".$d['username']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>  Delete</a>
                        </td>
                    </tr>
                    <?php 
                    $i = $i+1; } ?>
                </tbody>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
    <script type="text/javascript">
        function confirmDelete(){
            conf = confirm("Anda Yakin Akan Menghapus Data ?");
            if (conf == true) 
                return true;
            else 
                return false;
        }
    </script>
</section><!-- /.content -->
