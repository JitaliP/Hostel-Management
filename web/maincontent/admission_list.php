<br>
<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-12" style="text-align: -webkit-center;">
    <h2>Admission List</h2>
  </div>
</div>

    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
                <input type="hidden" name="action" value="hi">
          <table class="table table-striped" id="myTable">
            <thead >
              <tr class="warning">
                <th style="text-align:center;">Sr. No.</th>
                <th style="text-align:center;">Admission_Id</th>
                <th style="text-align:center;">Name</th>
                <th style="text-align:center;">E-mail</th>
                <th style="text-align:center;">Phone No.</th>
                <th style="text-align:center;">Status</th>
                <!-- <th>Action</th> -->
                <th style="text-align:center;">Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i=1;

                    $select="SELECT * FROM `admission` WHERE `status`='pending'";
                    $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) {
                      while($row=mysqli_fetch_assoc($qry))
                      {
                ?>
                  <tr>
                    <td style="text-align:center;" ><?php echo $i?></td>
                    <td style="text-align:center;" name="ad_id"><?php echo $d=$row['admi_id'];?></td>
                    <td style="text-align:center;"><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];?></td>
                    <td style="text-align:center;"><?php echo $row['email'];?></td>
                    <td style="text-align:center;"><?php echo $row['M_no'];?></td>
                    <td style="text-align:center;"><?php echo $row['status'];?></td>
                    <td style="text-align:center;">
                      <a href="index.php?page=student_list&id=<?php echo $d;?>">
                        <i class="fa fa-eye" style="font-size:32px;color:#999;margin: auto; color: black;" ></i>
                      </a>
                    </td>
                  </tr> 
                    <?php 
                      $i++;
                    }
                  }
                  
                    ?>
                          
            </tbody>
          </table>
        </div>
  </div>
  