  <br>
  <br>
  <br>
  <br>
  <br>
<div class="row">
  <div class="col-md-12" style="text-align: -webkit-center;">
    <h2>Admin List</h2>
  </div>
</div>  
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr class="warning">
                <th>Sr. No.</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone No.</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i=1;
                    $select="SELECT * FROM `admin`";
                    $qry=mysqli_query($con,$select);
                    while($row=mysqli_fetch_assoc($qry))
                    {
              
                ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['password'];?></td>
                    
                    <td>
                      <a name="update" href="registration.php?action=update&id=<?php echo $row['id'];?>" class=" btn-info btn">Edit</a>
                      <a name="delete" href="regqry.php?action=delete&id=<?php echo $row['id'];?>" class="btn-danger btn">Delete</a>
                    </td>
                  </tr>
                    <?php $i++; } ?>
                          
            </tbody>
          </table>
        </div>
  </div>
  <!---728x90--->  