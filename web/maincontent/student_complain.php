<?php 
    // selceting admission table from databse where admi_id=reg_id
    $query = "SELECT * FROM `complain` WHERE `stu_email` = '".$_REQUEST['email']."'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result)>0) {

    while($row = mysqli_fetch_array($result))
    { 
        if($row['status']=='pending' && $row['com_category']=="Complaints")
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
                        </div>
                <div class="mt-5 col-6 text-right">
                    <a href="index.php?page=application_qry&action=approve&id=<?php echo $row['c_id']?>" class="btn btn-primary">Approve</a>
                </div> 
                <div class="mt-5 col-6 text-left">
                    <a href="index.php?page=application_qry&action=deny&id=<?php echo $row['c_id']?>" class="btn btn-danger">Deny</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
} 
    }
}
?>
