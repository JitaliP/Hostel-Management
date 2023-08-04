<?php 
    // selceting admission table from databse where admi_id=reg_id
    $query = "SELECT * FROM `admission` WHERE `admi_id` = '".$_REQUEST['id']."'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
?>

<div class="container rounded bg-white  mb-5" style="margin-top: 180px;">
    <div class="row" style="border: 1px dashed #dee2e6;">
        <div class="col-md-12 ">
            <div class="p-3 py-5">
                <div class="justify-content-between align-items-center mb-3">
                    <h4 style="text-align:center; border-bottom: 1px solid #dee2e6; padding-bottom: 10px;font-size:20px;"><b>COMPLAIN FORM</b></h4>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Name</label><input readonly type="text" class="form-control" id="name" value="<?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'] ?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Mobile Number</label><input readonly type="number" class="form-control" id="mob" value="<?php echo $row['M_no'] ?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Email ID</label><input readonly type="email" class="form-control" readonly id="email" value="<?php echo $row['email']?>"></div>
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">For What Reasion..?</label>
                            <select class="form-control" name="cat" id="complain" onchange="complain();">
                                <option selected disabled>SELECT REASION*</option>
                                <option>Holidays</option>
                                <option>Complaints</option>
                            </select>                                 
                        </div>
                    </div>
                    
                    <div class="col-6" id="complain1">
                        <div class="col-md-12"><label  style="margin-top:10px;margin-bottom:-10px">Write Subject...! </label><input  type="text" class="form-control" id="sub"  placeholder="Please write about your subject..!"></div>
                        <div class="col-md-12">
                            <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Describe In More Detail...!</label>
                            <textarea  class="form-control" style="height:200px" id="detail" placeholder="Explain in more detail"></textarea>
                        </div>
                    </div>
                    <div class="col-6" id="complain2">
                        <div class="col-md-12"><label style="margin-top:10px;margin-bottom:-10px">Write Subject...! </label><input  type="text" class="form-control" id="sub1"  placeholder="Please write about your subject..!"></div>
                        <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Going Home</label><input  type="date" class="form-control" onchange="checkDate();" id="date1" require></div>
                        <div class="col-md-6"><label  style="margin-top:10px;margin-bottom:-10px">Date For Returning From Home</label><input  type="date" class="form-control" onchange="checkDate2();" id="date2" require></div>
                        <div class="col-md-12">
                            <label style="margin-top:10px;margin-bottom:-10px;font-size:17px">Describe In More Detail...!</label>
                            <textarea  class="form-control" style="height:200px" id="detail1" placeholder="Explain in more detail"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="subbmit" onclick="submit();">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" id="msg"></div>