<?php
if($_REQUEST['action']=="approve")
{
    // update status from pending to approved on database
    $update="UPDATE `complain` SET `status`='approved' WHERE `c_id`='".$_REQUEST['id']."'";
    $qry=mysqli_query($con,$update);
    if($qry)
    {
        echo "<script>alert('Application Approved Successfully');</script>";
        echo "<script>window.location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Application Approved Failed');</script>";
        echo "<script>window.location='index.php';</script>";
    }

}
elseif($_REQUEST['action']=="deny")
{
    // update status from pending to rejected on database
    $update="UPDATE `complain` SET `status`='rejected' WHERE `c_id`='".$_REQUEST['id']."'";
    $qry=mysqli_query($con,$update);
    if($qry)
    {
        echo "<script>alert('Application Rejected Successfully');</script>";
        echo "<script>window.location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Application Rejected Failed');</script>";
        echo "<script>window.location='index.php';</script>";
    }
}
?>