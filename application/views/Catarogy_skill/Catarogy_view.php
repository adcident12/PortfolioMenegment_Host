<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Add & Edit Catarogy Skill</h4>
                </div>
                <div class="content">
                    <?php if(@$status == "edit"){?>

                        <form action="<?php echo site_url('Catarogy/edit/'.$Catarogy['Catarogy_skill_id']);?>" method="post">

                    <?php }else{?>

                        <form action="<?php echo site_url('Catarogy/add_catarogy');?>" method="post">

                    <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Catarogy skill name</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Catarogy_skill_name" value="<?php echo @$Catarogy['Catarogy_skill_name'];?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Catarogy Skill</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Catarogy Skill</h4>
                        <p class="category">detail to catarogy skill</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Catarogy skill name</th>
                                
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach($Catarogys as $row){?>    
                                <tr>
                                    <td><?php echo $row['Catarogy_skill_name']; ?></td>
                                    <td>
                                    <a href="<?php echo site_url('Catarogy/edit_form/'.$row['Catarogy_skill_id']);?>" class="btn btn-warning">edit</a>
                                    <a href="<?php echo site_url('Catarogy/destroy/'.$row['Catarogy_skill_id']);?>" class="btn btn-danger">delete</a>
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
