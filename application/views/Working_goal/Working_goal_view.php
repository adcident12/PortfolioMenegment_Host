<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Add & Edit Working Goal</h4>
                </div>
                <div class="content">
                        <?php if(@$status == "edit"){?>

                        <form action="<?php echo site_url('Working_goal/edit/'.$Working_goal['Working_goal_id']);?>" method="post">

                        <?php }else{?>

                        <form action="<?php echo site_url('Working_goal/add_working_goal');?>" method="post">

                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Working Goal</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Working_goal_name" value="<?php echo @$Working_goal['Working_goal_name'];?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Working Goal</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Working Goals</h4>
                        <p class="category">detail to Work Goals</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Working Goal</th> 
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach($Working_goals as $row){?>      
                                <tr>
                                    <td><?php echo $row['Working_goal_name'];?></td>
                                    <td>
                                    <a href="<?php echo site_url('Working_goal/edit_form/'.$row['Working_goal_id']);?>" class="btn btn-warning">edit</a>
                                    <a href="<?php echo site_url('Working_goal/destroy/'.$row['Working_goal_id']);?>" class="btn btn-danger">delete</a>
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
