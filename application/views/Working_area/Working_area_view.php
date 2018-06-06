<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Add & Edit Working Area</h4>
                </div>
                <div class="content">
                        <?php if(@$status == "edit"){?>

                        <form action="<?php echo site_url('Working_area/edit/'.@$Working_area['Working_area_id']);?>" method="post">

                        <?php }else{?>

                        <form action="<?php echo site_url('Working_area/add_working_area');?>" method="post">

                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Working Area</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Working_area_name" value="<?php echo @$Working_area['Working_area_name'];?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Working Area</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Working Area</h4>
                        <p class="category">detail to Work Area</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Working Area</th> 
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach(@$Working_areas as $row){?>       
                                <tr>
                                    <td><?php echo @$row['Working_area_name'];?></td>
                                    <td>
                                    <a href="<?php echo site_url('Working_area/edit_form/'.@$row['Working_area_id']);?>" class="btn btn-warning">edit</a>
                                    <a href="<?php echo site_url('Working_area/destroy/'.@$row['Working_area_id']);?>" class="btn btn-danger">delete</a>
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
