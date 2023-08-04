<script type="text/javascript" language="javascript" src="..\web\js\ck.js"></script>
<?php
  error_reporting(0);
  if (@$_REQUEST['id']=="")
  {
    $action="insert";
  }
  else
  {
    $action="update";
    
  }
  ?>
<br>
<style type="text/css">
  button[type="button"] {
    padding: 12px 38px;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: #f0bcb4;
    color: white;
    border: none;
    outline: none;
    display: table;
    cursor: pointer;
    margin: 45px auto 31px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
</style>
<div class="w3layouts-main" style="width:100%;">
<form method="post" enctype="multipart/form-data" >
      <input type="hidden" name="action" value="<?php echo $action; ?>">
      <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];  ?>">
      <br>
<div class="row">
  <div class="col-md-12" style="text-align: -webkit-left;">
    <h2>Allocate Room</h2>
  </div>
</div>
<br>
<br>
<!-- Student details start... -->
<?php
  $select="SELECT * FROM `admission` WHERE `admi_id`='".$_REQUEST['id']."'";
  $qry=mysqli_query($con,$select);
  $row=mysqli_fetch_assoc($qry);
?>
<div class="row">
  <div class="col-md-2" style="text-align:left;">
      <label>Register Number:-</label>
  </div>
  <div class="col-md-10" style="text-align:left;">
            <label><?php echo $row['admi_id']?><input type="hidden" id="stuid" value="<?php echo $row['admi_id'];?>" name=""></label>
  </div>
  <div class="col-md-2" style="text-align:left;">
      <label>Student Name:-</label>
  </div>
  <div class="col-md-10" style="text-align:left;">
            <label><?php echo $row['fname']." ".$row['mname']." ".$row['lname']?></label>
  </div>
</div>
<br>
<br>
    <div class="row"> 
      <div class="col-md-4 col-sm-4 col-xs-4" style="text-align: -webkit-center;">
                      <label><small>Floor *</small></label>
                      <select class="form-control w-75" name="floor"  id="floor">
                            <option disabled selected >Select Floor*</option>
                            <?php 
                            $select_floor="SELECT * FROM `r_floor`";
                            $floor_qry=mysqli_query($con,$select_floor);
                                          while ($floor_asoc=mysqli_fetch_array($floor_qry)) 
                                          {
                                            ?>
                                            <option value="<?php echo $floor_asoc['floor_id']; ?>"><?php echo $floor_asoc['floor_title']; ?></option> 
                                  <?php
                                          }
                                  ?>
                      </select>
                      <div class="validation"></div>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-4" style="text-align: -webkit-center;">
                      <label ><small>Room_no *</small></label>
                       <select class="form-control w-75" name="rmno"  id="rmno" >
                            <option value="" disabled selected>Select room*</option>
                            <?php 
                            $select_room="SELECT * FROM `room_m`";
                            $qry2=mysqli_query($con,$select_room);
                                          while ($room_asoc=mysqli_fetch_assoc($qry2)) 
                                          {
                                            ?><option value="<?php echo $room_asoc['room_id']?>"><?php echo $room_asoc['room_no'];?></option> 
                                  <?php
                                          }
                                  ?>
                        </select>
                     
      </div>

      <div class="col-md-4 col-sm-4 col-xs-4" style="text-align: -webkit-center;">
                      <label><small>Bed_no * </small></label>
                      <select class="form-control w-75" name="bed"  id="bed">
                            <option value="" disabled selected>Select bed*</option>
                            <?php 
                              $select_bed="SELECT * FROM `bed_m`";
                              $bed_qry=mysqli_query($con,$select_bed);
                                  if(mysqli_num_rows($bed_qry) > 0 )
                                  {
                                          while ($bed_asoc=mysqli_fetch_assoc($bed_qry)) 
                                          {
                                            ?><option value="<?php echo $bed_asoc['bed_id']; ?>"><?php echo $bed_asoc['bed_no'];?></option> 
                                  <?php
                                          }
                                  }
                                  ?>
                        </select>
      </div>


    </div>
        <div class="clearfix"></div>
        <!-- <button type="button" onclick="ck();">Check</button> -->
        <button type="button" onclick="add();">Allocate Room</button>
        <p id="p"></p>
    </form>
</div>

<script type="text/javascript" language="javascript">
  $('#rmno').empty();
  $('#bed').empty();
  $('#floor').change(function(){  
          
            var floor=$('#floor').val();
            $.ajax({
               url: '../web/js/csd.php',
                method:"POST",
               data:{id:floor},
                success: function(response)
                {
                    console.log(response);
                    $('#rmno').empty();
                    $('#rmno').append(response);
                    // $('#bed').empty();
                }
            });
        });
    
    $('#rmno').change(function(){  
          
            var rmno=$('#rmno').val();
            $.ajax({
               url: '../web/js/csd2.php',
                method:"POST",
               data:{id:rmno},
                success: function(response)
                {
                    console.log(response);
                    $('#bed').empty();
                    $('#bed').append(response);
                }
            });
        });
</script>
  <!---728x90--->  