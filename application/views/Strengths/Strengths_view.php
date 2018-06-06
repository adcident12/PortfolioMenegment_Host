<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Add & Edit Strengths</h4>
                </div>
                <div class="content">
                        <?php if(@$status == "edit"){?>

                        <form action="<?php echo site_url('Strengths/edit/'.@$Strength['Strengths_id']);?>" method="post">

                        <?php }else{?>

                        <form action="<?php echo site_url('Strengths/add_strength');?>" method="post">

                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Strengths</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Strengths_name" value="<?php echo @$Strength['Strengths_name'];?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Strengths</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Strengths</h4>
                        <p class="category">detail to Strengths</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Strengths name</th> 
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach($Strengths as $row){?>    
                                <tr>
                                    <td><?php echo $row['Strengths_name'];?></td>
                                    <td>
                                    <a href="<?php echo site_url('Strengths/edit_form/'.$row['Strengths_id']);?>" class="btn btn-warning">edit</a>
                                    <a href="<?php echo site_url('Strengths/destroy/'.$row['Strengths_id']);?>" class="btn btn-danger">delete</a>
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
