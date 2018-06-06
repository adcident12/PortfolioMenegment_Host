<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Add & Edit Works</h4>
                </div>
                <div class="content">
                        <?php if(@$status == "edit"){?>

                        <form action="<?php echo site_url('Work/edit/'.$Work['Work_id']);?>" method="post">

                        <?php }else{?>

                        <form action="<?php echo site_url('Work/add_work');?>" method="post">

                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Work</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Work_name" value="<?php echo @$Work['Work_name'];?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Work</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Works</h4>
                        <p class="category">detail to Work</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Work name</th> 
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach($Works as $row){?>    
                                <tr>
                                    <td><?php echo $row['Work_name'];?></td>
                                    <td>
                                    <a href="<?php echo site_url('Work/edit_form/'.$row['Work_id']);?>" class="btn btn-warning">edit</a>
                                    <a href="<?php echo site_url('Work/destroy/'.$row['Work_id']);?>" class="btn btn-danger">delete</a>
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
