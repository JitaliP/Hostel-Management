<br>
<br>
<br>
<br>
<br>
<style type="text/css">
label{
    text-align: center;
    font-size: 20px;
    color:#8b5c7e;
    text-transform: uppercase;
    padding-bottom: 10px;
  }
.rounded{
  width: 25%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
</style>
    <div class="row">
      <div class="col-md-12" style="text-align:center;">
        <label>Select Floor :-</label>
        <select class="rounded" id="floor">
            <option selected disabled>Select Floor*</option>
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
      </div>
    </div>
    <br>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
                <input type="hidden" name="action" value="hi">
          <table class="table table-striped" id="myTable">
            <thead >
              <tr class="warning">
                <th style="text-align:center;">Room No.</th>
                <th style="text-align:center;">Bed 1.</th>
                <th style="text-align:center;">Bed 2.</th>
                <th style="text-align:center;">Bed 3.</th>
                <th style="text-align:center;">Bed 4.</th>
                <th style="text-align:center;">Room Status.</th>
              </tr>
            </thead>
            <tbody id="rm">
              <!-- content coming from ajax -->
            </tbody>
          </table>
        </div>
  </div>
  <script type="text/javascript">
  $('#floor').change(function(){  
          
            var floor=$('#floor').val();
            $.ajax({
               url: '../web/js/room_overview.php',
                method:"POST",
               data:{id:floor},
                success: function(response)
                {
                    console.log(response);
                    $('#rm').empty();
                    $('#rm').append(response);
                }
            });
        });

  </script>
  