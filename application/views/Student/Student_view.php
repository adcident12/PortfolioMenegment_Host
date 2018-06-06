<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <?php if($this->session->flashdata('status') != ""){
						echo $this->session->flashdata('status');
					}?>
                    <h4 class="title">Add & Edit Student</h4>
                </div>
                <div class="content">
                    
                    <form action="<?php echo site_url('Student/replace_student');?>" method="post">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                            <label for="sel1">Student Prefix</label>
                                <select class="form-control" id="sel1" name="Student_Prefix">
                                    <?php if(@$Student == ""){?>
                                    <option value="นาย" >นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>

                                    <?php }else{ ?>
                                        <?php if(@$Student['Student_Prefix'] == "นาย"){?>
                                    <option value="<?php echo @$Student['Student_Prefix'];?>" <?php if(@$Student['Student_Prefix'] == 'นาย') echo "selected";?>><?php echo @$Student['Student_Prefix'];?></option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                    
                                        <?php }else if(@$Student['Student_Prefix'] == "นาง"){ ?>
                                    <option value="นาย">นาย</option>
                                    <option value="<?php echo @$Student['Student_Prefix'];?>" <?php if(@$Student['Student_Prefix'] == 'นาง') echo "selected";?>><?php echo @$Student['Student_Prefix'];?></option>
                                    <option value="นางสาว">นางสาว</option>

                                        <?php }else if(@$Student['Student_Prefix'] == "นางสาว"){?>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="<?php echo @$Student['Student_Prefix'];?>" <?php if(@$Student['Student_Prefix'] == 'นางสาว') echo "selected";?>><?php echo @$Student['Student_Prefix'];?></option>
                                        <?php } ?>

                                   <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Student Name Th</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="Student_Name_Th" value="<?php echo @$Student['Student_Name_Th'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Lname Th</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="Student_Lname_Th" value="<?php echo @$Student['Student_Lname_Th'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Name Eng</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="Student_Name_Eng" value="<?php echo @$Student['Student_Name_Eng'];?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Lname Eng</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="Student_Lname_Eng" value="<?php echo @$Student['Student_Lname_Eng'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" class="form-control" placeholder="กรุณากรอก" name="Birthday" value="<?php echo @$Student['Birthday'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Faculty Name</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="Faculty_Name" value="<?php echo @$Student['Faculty_Name'];?>">
                            </div>
                        </div> 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Branch Name</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="Branch_Name" value="<?php echo @$Student['Branch_Name'];?>">
                            </div>
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>GPAX</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="GPAX" value="<?php echo @$Student['GPAX'];?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="Degree" value="<?php echo @$Student['Degree'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="sel2">Status Name</label>
                                <select class="form-control" id="sel2" name="Status_Name">
                                    <?php if(@$Student == ""){?>
                                    <option value="กำลังศึกษา" >กำลังศึกษา</option>
                                    <option value="สำเร็จการศึกษา">สำเร็จการศึกษา</option>

                                    <?php }else{?>

                                        <?php if(@$Student['Status_Name'] == "กำลังศึกษา"){?>
                                    <option value="<?php echo @$Student['Status_Name'];?>" <?php if(@$Student['Status_Name'] == "กำลังศึกษา") echo "selected";?>><?php echo @$Student['Status_Name'];?></option>
                                    <option value="สำเร็จการศึกษา">สำเร็จการศึกษา</option>

                                        <?php }else if(@$Student['Status_Name'] == "สำเร็จการศึกษา"){?>
                                    <option value="กำลังศึกษา">กำลังศึกษา</option>
                                    <option value="<?php echo @$Student['Status_Name'];?>" <?php if(@$Student['Status_Name'] == "สำเร็จการศึกษา") echo "selected";?>><?php echo @$Student['Status_Name'];?></option>
                                        <?php } ?>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student telephone</label>
                                <input type="phone" class="form-control" placeholder="กรุณากรอก" name="Student_tel" value="<?php echo @$Student['Student_tel'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student email</label>
                                <input type="email" class="form-control" placeholder="กรุณากรอก" name="Student_email" value="<?php echo @$Student['Student_email'];?>">
                            </div>
                        </div>     
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>University Th</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="University_Th" value="<?php echo @$Student['University_Th'];?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>University En</label>
                                <input type="text" class="form-control" placeholder="กรุณากรอก" name="University_En" value="<?php echo @$Student['University_En'];?>">
                            </div>
                        </div>     
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">Save Student</button>
                        <div class="clearfix"></div>
                    </form>
                    
                </div>
            </div>
                        
        </div>

        <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Student</h4>
                        <p class="category">detail to Student</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                                <th>STUDENT NAME TH</th>
                                <th>STUDENT LNAME TH</th>
                                <th>STUDENT TELEPHONE</th>
                                <th>Create Time</th>
                            </thead>
                            <tbody>
                                <?php foreach(@$Student_detail as $row){?>
                                <tr>
                                    <td><?php echo $row['Student_Prefix']."".$row['Student_Name_Th'];?></td>
                                    <td><?php echo $row['Student_Lname_Th'];?></td>
                                    <td><?php echo $row['Student_tel'];?></td>
                                    <td><?php echo $row['Create_time'];?></td>
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
