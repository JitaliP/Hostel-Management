<br/>
<br/>
<br/>
<!-- adding new photo section -->
<hr>
<div class="row">
  <div class="col-md-12" style="text-align: -webkit-center;">
    <h2>Add new photo</h2>
  </div>
</div>
<br>
<form action="index.php?page=g_action&action=ins" method="post" enctype="multipart/form-data">
<div class="row">
	<div class="col-3" style="margin-top:11px;text-align:right; ">
	<h2>Decide Name:-</h2>
	</div>
	<div class="col-2" style="margin-top:11px;text-align:left;">
	<input type="text" placeholder="Enter your First name*" style="height:35px" name="i_name" required>
	</div>
	<div class="col-3" style="margin-left:10px;margin-top:11px;">
  		<input type="file" name="photo" class="btn" required>
  	</div>
  	<div class="col-3" style=";margin-top:11px;">
    	<h2 style="text-align:right;"><button type="submit" class="btn btn-danger w-75">Add</button></h2>
  	</div>
    <!-- <h2><a href=""  onclick="$('#imgupload').trigger('click'); return false;" class="btn btn-danger" style="text-decoration: none;">Select Photos</a></h2> -->
</div>
<hr>
</form>
<!-- ends -->

<!-- Gallery section -->
<div class="row">
  <div class="col-md-12" style="text-align: -webkit-center;">
    <h2>Gallery</h2>
  </div>
</div>
<br>
<section id="facilities">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- dynamic gellery -->
			<?php 
				$select="SELECT * FROM `gallery`";
				$qry=mysqli_query($con,$select);
				if (mysqli_num_rows($qry)>0) {
					while ($row=mysqli_fetch_assoc($qry)) {
					 ?>		 
					<div class="box col-sm-4" style="max-height:200px; width:350px; margin-bottom: 60px;">
						<div class="imgbox" style="max-height:100%;width: 100%; align-items: center;">
							<a href="../web/images/gallery/<?php echo $row['g_name'];?>" data-lightbox="mygallery"><img src="../web/images/gallery/<?php echo $row['g_name'];?>"  
								class="gallery-item" alt="gallery">
							</a>
						</div>
						<div class="desc h-25">
							<div style="float: left; text-align:left;">
								<input type="text" readonly style="border:none; background-color: #74b9ff;" value="<?php echo $row['i_name'];?>">
							</div>
							<div style="float: right; text-align:right;"> &nbsp;&nbsp;
								<a href="index.php?page=g_action&action=remove&id=<?php echo $row['g_id']?>" style="text-decoration: none;color: #282152;">
									<i class="fa-solid fa-xmark" ></i>
								</a>
							</div>
							<!-- <div style="float: right; text-align:right;">
									<i class="fa-regular fa-pen-to-square"></i>	
								</div> -->
						</div>
					</div>
					<?php   
					}
				}
			?>
				<!-- ends -->
			</div>
		</div>
	</div>
</section>
<br>
<!-- ends -->