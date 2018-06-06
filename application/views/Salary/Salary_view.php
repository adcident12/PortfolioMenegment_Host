<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Add & Edit Salary</h4>
                </div>
                <div class="content">
                        <form action="<?php echo site_url('Salary/replace_salary');?>" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอก" name="Salary_name" value="<?php echo @$Salary['Salary_name'];?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Save Salary</button>
                            <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Salary</h4>
                        <p class="category">detail to Salary</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>Salary</th> 
                                <th>Create time</th>
                            </thead>
                            <tbody>
                                <?php foreach(@$Salarys as $row){?>      
                                <tr>
                                    <td><?php echo $row['Salary_name']; ?></td>
                                    <td><?php echo $row['Create_time']; ?></td>
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
