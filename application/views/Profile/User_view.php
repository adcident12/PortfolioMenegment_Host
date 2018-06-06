<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Edit Profile</h4>
                </div>
                <div class="content">
                    <?php if(@$status == "edit"){?>

                        <form action="<?php echo site_url('Staff/edit/'.$Staff['Staff_id']);?>" method="post">

                    <?php }else{?>

                        <form action="<?php echo site_url('Staff/add_staff');?>" method="post">

                    <?php } ?>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Staff email</label>
                                    <input type="email" class="form-control" placeholder="กรุณากรอก" name="Staff_email" value="<?php echo @$Staff['Staff_email'];?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Staff password</label>
                                    <input type="password" class="form-control" placeholder="กรุณากรอก" name="Staff_password" value="<?php echo @$Staff['Staff_password'];?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Staff department</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Staff_department" value="<?php echo @$Staff['Staff_department'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Staff firstname</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Staff_name" value="<?php echo @$Staff['Staff_name'];?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Staff lastname</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Staff_lastname" value="<?php echo @$Staff['Staff_lastname'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Staff telephone</label>
                                    <input type="phone" class="form-control" placeholder="กรุณากรอก" name="Staff_tel" value="<?php echo @$Staff['Staff_tel'];?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Staff status</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Staff_status" value="<?php echo @$Staff['Staff_status'];?>">
                                </div>
                            </div>     
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Staff address</label>
                                    <textarea rows="5" class="form-control" placeholder="กรุณากรอก" name="Staff_addr"><?php echo @$Staff['Staff_addr'];?></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Profile</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Staff</h4>
                        <p class="category">detail to staff</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Staff email</th>
                                <th>Staff password</th>
                                <th>Staff name</th>
                                <th>Staff lastname</th>
                                <th>Staff telaphone</th>
                                <th>Staff department</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach($Staffs as $row){?>
                                <tr>
                                    <td><?php echo $row['Staff_email'];?></td>
                                    <td><?php echo $row['Staff_password'];?></td>
                                    <td><?php echo $row['Staff_name'];?></td>
                                    <td><?php echo $row['Staff_lastname'];?></td>
                                    <td><?php echo $row['Staff_tel'];?></td>
                                    <td><?php echo $row['Staff_department'];?></td>
                                    <td>
                                    <a href="<?php echo site_url('Staff/edit_form/'.$row['Staff_id']);?>" class="btn btn-warning">edit</a>
                                    <a href="<?php echo site_url('Staff/destroy/'.$row['Staff_id']);?>" class="btn btn-danger">delete</a>
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
