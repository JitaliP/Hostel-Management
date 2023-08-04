<?php
include "../database/dbconnect.php";
@$name=$_REQUEST['name'];
@$email=$_REQUEST['email'];
@$mobile=$_REQUEST['phone'];
@$cat=$_REQUEST['complain'];
@$sub=$_REQUEST['sub'];
@$sub1=$_REQUEST['sub1'];
@$detail=$_REQUEST['detail'];
@$detail1=$_REQUEST['detail1'];
@$date1=$_REQUEST['date1'];
@$date2=$_REQUEST['date2'];

if($_REQUEST['complain']=='Holidays')
{
    $insert= "INSERT INTO `complain`(`stu_name`, `stu_mo`, `stu_email`, `com_category`, `sub`, `detail`, `going_h`, `coming_h`,`status`) 
            VALUES ('$name','$mobile','$email','$cat','$sub1','$detail1','$date1','$date2','pending')";
    $qry=mysqli_query($con,$insert);
    if($qry)
    {
       
                echo  '<div class="alert alert-success alert-dismissible show" role="alert" style="font-size:18px">
                            Your Request For <strong style="text-transform: uppercase;">'.$cat.'</strong> Has Been Sent Successfully!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <a href="http://localhost/llh/User%20penal/index.php"><span aria-hidden="true">&#10004;</span></a>
                            </button>
                        </div>';
    }
    else
    {
        echo "not inserted";
    }
}
elseif($_REQUEST['complain']=='Complaints')
{
    $insert="INSERT INTO `complain`( `stu_name`,`stu_mo`,`stu_email`,`com_category`,`sub`,`detail`,`status`) VALUES('$name','$mobile','$email','$cat','$sub','$detail','pending')";
    $qry=mysqli_query($con,$insert);
    if($qry)
    {
       echo  '
                        <div class="alert alert-success alert-dismissible show" role="alert" style="font-size:18px">
                            Your Request For <strong style="text-transform: uppercase;">'.$cat.'</strong> Has Been Sent Successfully!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <a href="http://localhost/llh/User%20penal/index.php"><span aria-hidden="true">&#10004;</span></a>
                            </button>
                        </div>';
       
    }
    else
    {
        echo "not inserted";
    }
}
else{
    echo  '
                        <div class="alert alert-success alert-dismissible show" role="alert" style="font-size:18px">
                            Please select <strong style="text-transform: uppercase;">Reasion</strong> For Sending Requests!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <a href="http://localhost/llh/User%20penal/index.php"><span aria-hidden="true">&#10004;</span></a>
                            </button>
                        </div>';
}
?>
