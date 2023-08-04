function add()
{
   
  var f = document.getElementById('floor').value;
  var r = document.getElementById('rmno').value;
  var b = document.getElementById('bed').value;
  var id = document.getElementById("stuid").value;
  $.ajax({
               url: '../web/maincontent/room_allocate.php',
                method:"POST",
               data:{'id':id,'f':f,'r':r,'b':b},
                success: function(response)
                {
                    
                    $('#p').empty();
                    $('#p').append(response);
                }
            });
}