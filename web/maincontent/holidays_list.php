<br>
<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-12" style="text-align: -webkit-center;">
    <h2>Holidays Request List</h2>
  </div>
</div>

    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
                <input type="hidden" name="action" value="hi">
          <table class="table table-striped" id="myTable">
            <thead >
              <tr class="warning">
                <th style="text-align:center;">Sr. No.</th>
                <th style="text-align:center;">Application_Id</th>
                <th style="text-align:center;">Student_Id</th>
                <th style="text-align:center;">Name</th>
                <th style="text-align:center;">E-mail</th>
                <th style="text-align:center;">Phone No.</th>
                <th style="text-align:center;">Application Status</th>
                <th style="text-align:center;">Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i=1;
                    $select="SELECT * FROM `admission` INNER JOIN `complain` ON admission.email=complain.stu_email WHERE complain.status='pending'  AND complain.com_category='Holidays'";
                    $qry=mysqli_query($con,$select);
                    if (mysqli_num_rows($qry)>0) {
                      while($row=mysqli_fetch_assoc($qry))
                      {
                        // $select1="SELECT * FROM `admission` WHERE `email`='".$row['stu_email']."'";
                        // $qry1=mysqli_query($con,$select1);
                ?>
                  <tr>
                    <td style="text-align:center;" ><?php echo $i?></td>
                    <td style="text-align:center;" ><?php echo $row['c_id'];?></td>
                    <td style="text-align:center;"><?php echo $row['admi_id'];?></td>
                    <td style="text-align:center;"><?php echo $row['stu_name']?></td>
                    <td style="text-align:center;"><?php echo $row['stu_email'];?></td>
                    <td style="text-align:center;"><?php echo $row['stu_mo'];?></td>
                    <td style="text-align:center;"><?php echo $row['status'];?></td>
                    <td style="text-align:center;">
                      <a href="index.php?page=student_application&email=<?php echo $row['stu_email'];?>">
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
  