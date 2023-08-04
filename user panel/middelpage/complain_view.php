<?php 
    
    // pagination for page 1
    $sel= "SELECT * FROM `complain` WHERE `stu_email` = '".$_REQUEST['email']."'";
    $q=mysqli_query($con,$sel);
    $row1=mysqli_fetch_assoc($q);
    $record=mysqli_num_rows($q);
$record_per_page=1;
$start=0;
if(isset($_GET['start']))
{
    $start=$_GET['start'];
    $start--;
    $start=$start+$record_per_page;
}
$per_page=$record;


    // selceting admission table from databse where admi_id=reg_id
    echo $query = "SELECT * FROM `complain` WHERE `stu_email` = '".$_REQUEST['email']."' Limit $start,1";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result)>0) {

    while($row = mysqli_fetch_array($result))
    { 

        // ----------------------------------if status pending and category is holidays--------------------------------------------------

        if($row['status']=='pending' && $row['com_category']=="Holidays")
        {
?>
<br>
<br>
<br>
<br>
<div class="container rounded bg-white  mb-5" style="margin-top: 50px;">
    <div class="row" style="border: 1px dashed #dee2e6;">
        <div class="col-md-12 ">
            <div class="p-3 py-5">
                <div class="col-md-12 justify-content-between align-items-center mb-1">
                    <p style="text-align:center;font-size:20px;"><b>COMPLAIN FORM</b>
                </div>
                <div class="col-md-12" style="text-align:center; border-bottom: 1px solid #dee2e6;">    
                    <small>Application Number:- </small><strong><?php echo $row['c_id']?></strong>
                    </p>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Name</label><input readonly type="text" class="form-control" id="name" value="<?php echo $row['stu_name']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Mobile Number</label><input readonly type="number" class="form-control" id="mob" value="<?php echo $row['stu_mo'] ?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Email ID</label><input readonly type="email" class="form-control" readonly id="email" value="<?php echo $row['stu_email']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">For What Reasion..?</label>
                            <input type="text" class="form-control" readonly value="<?php echo $row['com_category'];?>">                                 
                        </div>
                    </div>
                        <div class="col-6">
                            <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Writed Subject...! </label><input  type="text" readonly class="form-control" value="<?php echo $row['sub'];?>"></div>
                            <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Going Home</label><input  type="date" readonly class="form-control" value="<?php echo $row['going_h']?>"></div>
                            <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Returning From Home</label><input readonly  type="date" class="form-control" value="<?php echo $row['coming_h']?>"></div>
                            <div class="col-md-12">
                                <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Described In More Detail...!</label>
                                <input readonly type="text" class="form-control" value="<?php echo $row['detail']?>">
                            </div>
                            <div class="col-md-12 pt-5"><button class="btn btn-warning w-100" disabled>Pending!!</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        }
        // ----------------------------------if status approved and category is holidays--------------------------------------------------
        elseif($row['status']=='approved' && $row['com_category']=="Holidays")
        {
?>
<br>
<br>
<br>
<br>
<div class="container rounded bg-white  mb-5" style="margin-top: 50px;">
    <div class="row" style="border: 1px dashed #dee2e6;">
        <div class="col-md-12 ">
            <div class="p-3 py-5">
                <div class="col-md-12 justify-content-between align-items-center mb-1">
                    <p style="text-align:center;font-size:20px;"><b>COMPLAIN FORM</b>
                </div>
                <div class="col-md-12" style="text-align:center; border-bottom: 1px solid #dee2e6;">    
                    <small>Application Number:- </small><strong><?php echo $row['c_id']?></strong>
                    </p>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Name</label><input readonly type="text" class="form-control" id="name" value="<?php echo $row['stu_name']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Mobile Number</label><input readonly type="number" class="form-control" id="mob" value="<?php echo $row['stu_mo'] ?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Email ID</label><input readonly type="email" class="form-control" readonly id="email" value="<?php echo $row['stu_email']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">For What Reasion..?</label>
                            <input type="text" class="form-control" readonly value="<?php echo $row['com_category'];?>">                                 
                        </div>
                    </div>
                        <div class="col-6">
                            <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Writed Subject...! </label><input  type="text" readonly class="form-control" value="<?php echo $row['sub'];?>"></div>
                            <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Going Home</label><input  type="date" readonly class="form-control" value="<?php echo $row['going_h']?>"></div>
                            <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Returning From Home</label><input readonly  type="date" class="form-control" value="<?php echo $row['coming_h']?>"></div>
                            <div class="col-md-12">
                                <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Described In More Detail...!</label>
                                <input readonly type="text" class="form-control" value="<?php echo $row['detail']?>">
                            </div>
                        <div class="col-md-12 pt-5"><button class="btn btn-success w-100" disabled>Approved!!</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        }
        // ----------------------------------if status rejected and category is holidays--------------------------------------------------

        elseif($row['status']=='rejected' && $row['com_category']=="Holidays")
        {
?>
<br>
<br>
<br>
<br>
<div class="container rounded bg-white  mb-5" style="margin-top: 50px;">
    <div class="row" style="border: 1px dashed #dee2e6;">
        <div class="col-md-12 ">
            <div class="p-3 py-5">
                <div class="col-md-12 justify-content-between align-items-center mb-1">
                    <p style="text-align:center;font-size:20px;"><b>COMPLAIN FORM</b>
                </div>
                <div class="col-md-12" style="text-align:center; border-bottom: 1px solid #dee2e6;">    
                    <small>Application Number:- </small><strong><?php echo $row['c_id']?></strong>
                    </p>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Name</label><input readonly type="text" class="form-control" id="name" value="<?php echo $row['stu_name']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Mobile Number</label><input readonly type="number" class="form-control" id="mob" value="<?php echo $row['stu_mo'] ?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Email ID</label><input readonly type="email" class="form-control" readonly id="email" value="<?php echo $row['stu_email']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">For What Reasion..?</label>
                            <input type="text" class="form-control" readonly value="<?php echo $row['com_category'];?>">                                 
                        </div>
                    </div>
                        <div class="col-6">
                            <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Writed Subject...! </label><input  type="text" readonly class="form-control" value="<?php echo $row['sub'];?>"></div>
                            <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Going Home</label><input  type="date" readonly class="form-control" value="<?php echo $row['going_h']?>"></div>
                            <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Returning From Home</label><input readonly  type="date" class="form-control" value="<?php echo $row['coming_h']?>"></div>
                            <div class="col-md-12">
                                <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Described In More Detail...!</label>
                                <input readonly type="text" class="form-control" value="<?php echo $row['detail']?>">
                            </div>
                        <div class="col-md-12 pt-5"><button class="btn btn-danger w-100" disabled>Rejected!!</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        }
        // ----------------------------------if status pending and category is Complaints--------------------------------------------------
        elseif($row['status']=='pending' && $row['com_category']=="Complaints")
        {
            ?>
            <br>
            <div class="container rounded bg-white  mb-5" style="margin-top: 50px;">
                <div class="row" style="border: 1px dashed #dee2e6;">
                    <div class="col-md-12 ">
                        <div class="p-3 py-5">
                            <div class="col-md-12 justify-content-between align-items-center mb-1">
                                <p style="text-align:center;font-size:20px;"><b>COMPLAIN FORM</b>
                            </div>
                            <div class="col-md-12" style="text-align:center; border-bottom: 1px solid #dee2e6;">    
                                <small>Application Number:- </small><strong><?php echo $row['c_id']?></strong>
                                </p>
                            </div>
                            <div class="row mt-1">
                                <div class="col-6">
                                    
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Name</label><input readonly type="text" class="form-control" id="name" value="<?php echo $row['stu_name']?>"></div>
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Mobile Number</label><input readonly type="number" class="form-control" id="mob" value="<?php echo $row['stu_mo'] ?>"></div>
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Email ID</label><input readonly type="email" class="form-control" readonly id="email" value="<?php echo $row['stu_email']?>"></div>
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">For What Reasion..?</label>
                                        <input type="text" class="form-control" readonly value="<?php echo $row['com_category'];?>">                                 
                                    </div>
                                </div>
                                    <div class="col-6">
                                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Writed Subject...! </label><input  type="text" readonly class="form-control" value="<?php echo $row['sub'];?>"></div>
                                        <div class="col-md-12">
                                            <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Described In More Detail...!</label>
                                            <input readonly type="text" class="form-control" value="<?php echo $row['detail']?>">
                                        </div>
                                        <div class="col-md-12 pt-5"><button class="btn btn-warning w-100" disabled>Pending!!</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } 
        // ----------------------------------if status approved and category is Complaints--------------------------------------------------
        elseif($row['status']=='approved' && $row['com_category']=="Complaints")
        {
            ?>
            <br>
            <div class="container rounded bg-white  mb-5" style="margin-top: 50px;">
                <div class="row" style="border: 1px dashed #dee2e6;">
                    <div class="col-md-12 ">
                        <div class="p-3 py-5">
                            <div class="col-md-12 justify-content-between align-items-center mb-1">
                                <p style="text-align:center;font-size:20px;"><b>COMPLAIN FORM</b>
                            </div>
                            <div class="col-md-12" style="text-align:center; border-bottom: 1px solid #dee2e6;">    
                                <small>Application Number:- </small><strong><?php echo $row['c_id']?></strong>
                                </p>
                            </div>
                            <div class="row mt-1">
                                <div class="col-6">
                                    
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Name</label><input readonly type="text" class="form-control" id="name" value="<?php echo $row['stu_name']?>"></div>
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Mobile Number</label><input readonly type="number" class="form-control" id="mob" value="<?php echo $row['stu_mo'] ?>"></div>
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Email ID</label><input readonly type="email" class="form-control" readonly id="email" value="<?php echo $row['stu_email']?>"></div>
                                    <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">For What Reasion..?</label>
                                        <input type="text" class="form-control" readonly value="<?php echo $row['com_category'];?>">                                 
                                    </div>
                                </div>
                                    <div class="col-6">
                                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Writed Subject...! </label><input  type="text" readonly class="form-control" value="<?php echo $row['sub'];?>"></div>
                                        <div class="col-md-12">
                                            <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Described In More Detail...!</label>
                                            <input readonly type="text" class="form-control" value="<?php echo $row['detail']?>">
                                        </div>
                                        <div class="col-md-12 pt-5"><button class="btn btn-success w-100" disabled>Approved!!</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        // ----------------------------------if status rejected and category is Complaints--------------------------------------------------
        elseif($row['status']=='rejected' && $row['com_category']=="Complaints")
        {
?>
<br>
<br>
<br>
<br>
<div class="container rounded bg-white  mb-5" style="margin-top: 50px;">
    <div class="row" style="border: 1px dashed #dee2e6;">
        <div class="col-md-12 ">
            <div class="p-3 py-5">
                <div class="col-md-12 justify-content-between align-items-center mb-1">
                    <p style="text-align:center;font-size:20px;"><b>COMPLAIN FORM</b>
                </div>
                <div class="col-md-12" style="text-align:center; border-bottom: 1px solid #dee2e6;">    
                    <small>Application Number:- </small><strong><?php echo $row['c_id']?></strong>
                    </p>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Name</label><input readonly type="text" class="form-control" id="name" value="<?php echo $row['stu_name']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Mobile Number</label><input readonly type="number" class="form-control" id="mob" value="<?php echo $row['stu_mo'] ?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Email ID</label><input readonly type="email" class="form-control" readonly id="email" value="<?php echo $row['stu_email']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">For What Reasion..?</label>
                            <input type="text" class="form-control" readonly value="<?php echo $row['com_category'];?>">                                 
                        </div>
                    </div>
                        <div class="col-6">
                            <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Writed Subject...! </label><input  type="text" readonly class="form-control" value="<?php echo $row['sub'];?>"></div>
                            <div class="col-md-12">
                                <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Described In More Detail...!</label>
                                <input readonly type="text" class="form-control" value="<?php echo $row['detail']?>">
                            </div>
                        <div class="col-md-12 pt-5"><button class="btn btn-danger w-100" disabled>Rejected!!</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
        } 
    }
    ?>
    <div class="col-md-12" style="text-align:center;">
    <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li  class="page-item"><a class="page-link" href="index.php?page=complain_view&email=<?php echo $_REQUEST['email']?>">Main page</a></li>
      <?php 
      if($row1['stu_email']==$_REQUEST['email'])
      {
      for($i=1;$i<$per_page;$i++)
      {
          ?>
    <li class="page-item"><a class="page-link" href="index.php?page=complain_view&email=<?php echo $_REQUEST['email']?>&start=<?php echo $i?>"><?php echo $i;?></a></li>
    <?php
      }
    }
      ?>
  </ul>
</nav>
    </div>
    <?php
}
?>
