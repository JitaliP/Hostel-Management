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
  <div class="col-md-12" style="text-align: -webkit-center;">
    <h2>Reports</h2>
  </div>
</div>
<br>
<div class="row">
      <div class="col-md-12" style="text-align:center;">
        <label>Select Report :-</label>
        <select class="rounded" id="report" required data-parsley-required-message="Please select Gender*">
            <option selected disabled>Select Report*</option>
            <option>Addmission Report</option>
            <option>Fee Report</option>
            <option>Students Hoilidays Report</option>
            <option>Students Complain Report</option>
            <option>Room Report</option>
        </select>
      </div>
</div>
</div>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding" id="rm">
                <!-- conteint comming from ajax -->
        </div>
</div>
<script type="text/javascript">
  $('#report').change(function(){  
          
            var report=$('#report').val();
            $.ajax({
               url: '../web/maincontent/report_action.php',
                method:"POST",
               data:{id:report},
                success: function(response)
                {
                    console.log(response);
                    $('#rm').empty();
                    $('#rm').append(response);
                }
            });
        });
</script>