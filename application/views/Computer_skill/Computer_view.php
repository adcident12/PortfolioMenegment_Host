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

                        <form action="<?php echo site_url('Computer/edit/'.@$ComCat['Computer_skill_id']);?>" method="post">

                    <?php }else{?>

                        <form action="<?php echo site_url('Computer/add_computer');?>" method="post">

                    <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Computer skill name</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Computer_skill_name" value="<?php echo @$ComCat['Computer_skill_name'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="sel1">Catarogy skill name</label>
                                    <select class="form-control" id="sel1" name="Catarogy_skill_name">
                                        <?php if(@$status == "edit"){?>
                                        <option value="<?php echo @$ComCat['Catarogy_skill_Catarogy_skill_id'];?>" ><?php echo @$ComCat['Catarogy_skill_name'];?></option>
                                        <?php foreach(@$Catarogys as $Catarogy){?>
                                        <option value="<?php echo @$Catarogy['Catarogy_skill_id'];?>" ><?php echo @$Catarogy['Catarogy_skill_name'];?></option>
                                        <?php } ?>

                                        <?php } else {?>

                                        <?php foreach(@$Catarogys as $Catarogy){?>
                                        <option value="<?php echo @$Catarogy['Catarogy_skill_id'];?>" ><?php echo @$Catarogy['Catarogy_skill_name'];?></option>

                                        <?php } ?>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Computer Skill</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Computer Skill</h4>
                        <p class="category">detail to computer skill</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Computer skill name</th> 
                                <th>Catarogy skill name</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach(@$Computers as $row){?>      
                                <tr>
                                    <td><?php echo $row['Computer_skill_name'];?></td>
                                    <td><?php echo $row['Catarogy_skill_name'];?></td>
                                    <td>
                                    <a href="<?php echo site_url('Computer/edit_form/'.$row['Computer_skill_id']);?>" class="btn btn-warning">edit</a>
                                    <a href="<?php echo site_url('Computer/destroy/'.$row['Computer_skill_id']);?>" class="btn btn-danger">delete</a>
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
