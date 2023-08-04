<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<body>
  
  <style type="text/css">
    label small{
        font-family: "Open Sans", sans-serif;
        font-size:90%;
        font-weight:400;
    }
    form{
        font-family: "Open Sans", sans-serif;
    }
    .row{
        margin-left:0;
        margin-right:0;
    }
     .row>.col, .row>[class*=col-] {
        padding-right: 5px;
        padding-left: 5px;
    }
    .otp_page{
        background-color:white;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        z-index:10000;
        border:5px solid black;
        display:none;
        overflow:auto;
        padding:10px;
        text-align:center;
    }
    fieldset 
  {
    border: 1px solid #ddd !important;
    margin: 0;
    min-width: 0;
    padding: 10px;       
    position: relative;
    border-radius:4px;
    background-color:#f5f5f5;
    padding-left:10px!important;
  } 
  
    legend
    {
      font-size:14px;
      font-weight:bold;
      margin-bottom: 0px; 
      width: 35%; 
      border: 1px solid #ddd;
      border-radius: 4px; 
      padding: 5px 5px 5px 10px; 
      background-color: #ffffff;
    }
    label span{
      color:red;
    }
    .secborder{
      background-color:white;
      padding: 7px;
      margin-bottom:40px;
      border: 1px solid #b8b1b1;
      border-radius: 3px !important;
      transition:background-color 1s, border-color 1s;
    }
    .secborder:hover{
      background-color:white;
      transition:background-color 0.5s, border-color 0.5s;
      border-color:green;
    }
    .more-btn{
          border-radius: 19px;
    margin-top: -108px;
      padding:0.300rem 0.75rem !important;
    }
    .inner-legend{
        display: inline-block;
        /* border: 1px solid #cfc2c2; */
        border-radius: 5px;
        padding: 3px 3px;
        background-color: #29597b;
        color: white;
        margin-bottom: -13px;
        margin-left: 20px;
        font-size:12px;
    }
    .remove_exam, .remove_company{
        border-radius: 19px;
        margin-top: -108px;
        padding: 0.300rem 0.75rem !important;
        float:right;
    }
    .overlay{
        background-color:white;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        z-index:1000;
        border:5px solid black;
        display:none;
        overflow:auto;
        padding:10px;
    }
    .still_edit{
        background-color: #7d560e;
        border: none;
        color: white;
        padding: 1px 24px;
        border-radius: 5px;
        box-shadow: 2px 2px #fa7d77;
        cursor:pointer;
    }
    .still_edit:hover{
        background-color:orange;
    }
    .confirm_submit{
        background-color: #497b39;
        border: none;
        color: white;
        padding: 1px 24px;
        border-radius: 5px;
        box-shadow: 2px 2px #63dd4c;
        cursor:pointer;
    }
    .confirm_submit:hover{
        background-color:#6fd34f;
    }
    .preview_tables{
        width:95%;
        margin:auto;
        background-color: white;
        font-size: 15px;
        font-weight: 900;
        border-radius: 5px;
        box-shadow: 0px 1px 4px black;
    }
    .preview_tables td,.preview_tables th{
        padding: 5px;
        font-size: 16px;
        font-weight: 900;
        letter-spacing: 0.5px;
    }
    .form{
        margin-top:40px;
    }
    .validation{
        color:red;
    }
  </style>
  <div class="container-fluid">

        <!-- <div class="section-header"> -->
          <!-- <h3>Register Yourself</h3> -->
        <!-- </div> -->

        <div class="row wow fadeInUp">
          
          <div class="col-lg-12">

            <div class="form">
               
                             
              <form  action="https://www.sspkm.org/hostel/student/register/create" method="post" role="form" enctype="multipart/form-data" class="contactForm">
                <fieldset>
                <input type="hidden" name="confirm_submit" value="false" />
                <input type="hidden" name="confirm_otp" value="false" />
                <input type="hidden" name="csrf_test_name" value="da99bbfe2517c752f3f68489657c97b3">        
                  <legend style="color:#ff4c4c;">BOYS Onetime Hostel Registration Form   </legend>
                  <div class="row">
                      <div class="inner-legend" style="font-size: 14px;">BASIC DETAILS</div>
                  </div>
                  <!--<div class="row secborder">-->
                  <!--    <div class="form-group col-lg-3">-->
                  <!--        <label>STUDENT TYPE:</label><br>-->
                  <!--        <label style="margin-left: 24%;">-->
                  <!--            NEW:-->
                  <!--            <input type="radio" name="student_type" value="new"  />-->
                  <!--        </label>-->
                  <!--        <label>-->
                  <!--            OLD:-->
                  <!--            <input type="radio" name="student_type" value="old" checked />-->
                  <!--        </label>-->
                  <!--    </div>-->
                  <!--    <div class="form-group col-lg-3 deposit_no" >-->
                  <!--        <label>Deposit No.<span>*</span></label>-->
                  <!--        <input type="text" name="deposit_no" class="form-control" placeholder="Only for OLD Students" required />-->
                  <!--    </div>-->
                  <!--    <div class="form-group col-lg-3 deposit_no">-->
                  <!--        <label>Unit No. <span>*</span></label>-->
                          
                  <!--        <select name="unit_no" class="form-control" required>-->
                  <!--            <option value="">Select Unit</option>-->
                  <!--      <option value="Unit 1">Unit 1</option>-->
                  <!--      <option value="Unit 2">Unit 2</option>-->
                  <!--    </select>-->
                  <!--    </div>-->
                  <!--    <div class="form-group col-lg-3 deposit_no">-->
                  <!--        <label>Room No.<span>*</span></label>-->
                  <!--        <input type="text" name="room_no" class="form-control" placeholder="Only for OLD Students" required />-->
                  <!--    </div>-->
                  <!--</div>-->
                  <div class="row secborder">
                    <div class="form-group col-lg-3">
                      <label><small>First Name <span>*</span></small></label>
                      <input  type="text" name="first_name" class="form-control" placeholder="" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Father Name<span>*</span></small></label>
                      <input  type="text" name="father_name" class="form-control" placeholder="" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Surname <span>*</span></small></label>
                      <input  type="text" name="surname" class="form-control" placeholder="" data-rule="minlen:3" data-msg="Please enter at least 3 chars"  required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Sub Caste <span>*</span></small></label>
                      <select name="subcaste" class="form-control" required>
                        <option value="LEUVA">LEUVA</option>
                        <!--<option value="KADVA">KADVA</option>-->
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Gender <span>*</span></small></label>
                      <select name="gender" class="form-control" required>
                        <option value="MALE">MALE</option>
                        <!--<option value="FEMALE">FEMALE</option>-->
                      </select>
                    </div>
                    <input  type="hidden" name="native_place" class="form-control" placeholder=""  value="hidden" />
                    <!--<div class="form-group col-lg-3">-->
                    <!--  <label><small>Native Place <span>*</span></small></label>-->
                    <!--   <input  type="text" name="native_place" class="form-control" placeholder=""  required />-->
                    <!--</div>-->
                    <div class="form-group col-lg-3">
                      <label><small>Mobile Number<span>*</span></small></label>
                      <input  type="number" name="mobile"  class="form-control mobile" placeholder="" data-rule="mobile:10" data-msg="Please enter a valid mobile number of 10 digits" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>E-mail <span>*</span></small></label>
                      <input  type="email" class="form-control" name="email" id="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" required />
                      <div class="validation"></div>
                    </div>
                    
                    <div class="form-group col-lg-3">
                      <label><small>Father Mobile Number<span>*</span></small></label>
                      <input  type="number" name="father_mobile" class="form-control" placeholder="" data-rule="mobile:10" data-msg="Please enter a valid mobile number of 10 digits" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Date of Birth <span>*</span></small></label>
                      <input type="date" name="dob" class="form-control" required />
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Age <span>*</span></small></label>
                      <input  type="number" name="age" class="form-control" placeholder="" data-rule="age:15" data-msg="Please enter correct Birth Date and Age [minimum: 15]" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                        <label><small>Blood Group <span>*</span></small></label>
                        <select class="form-control" name="blood_group" required>
                            <option value="">--Select blood group--</option>
                            <option selected value="undefined">Undefined</option>
                            <option value="A">A-</option>
                            <option value="A+">A+</option>
                            <option value="B">B-</option>
                            <option value="B+">B+</option>
                            <option value="O">O-</option>
                            <option value="O+">O+</option>
                            <option value="AB">AB-</option>
                            <option value="AB+">AB+</option>
                        </select>
                    </div>
                     
                   
                   
                   
                    
                    <div class="form-group col-lg-12">
                    </div>    
                    <div class="form-group col-lg-3">
                      <label><small>Permanent Address <span>*</span></small></label>
                      <textarea name="address" class="form-control" required></textarea>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>State <span>*</span></small></label>
                      <select name="state" class="form-control" id="state" required>
                          <option disabled selected>Select State</option>
                                 
                                  <option value="Andaman Nicobar" >
                      Andaman Nicobar                                    </option>
                                 
                                  <option value="Andhra Pradesh" >
                      Andhra Pradesh                                    </option>
                                 
                                  <option value="Arunachal Pradesh" >
                      Arunachal Pradesh                                    </option>
                                 
                                  <option value="Assam" >
                      Assam                                    </option>
                                 
                                  <option value="Bihar" >
                      Bihar                                    </option>
                                 
                                  <option value="Chandigarh" >
                      Chandigarh                                    </option>
                                 
                                  <option value="Chhattisgarh" >
                      Chhattisgarh                                    </option>
                                 
                                  <option value="Dadra Nagar Haveli" >
                      Dadra Nagar Haveli                                    </option>
                                 
                                  <option value="Daman Diu" >
                      Daman Diu                                    </option>
                                 
                                  <option value="Delhi" >
                      Delhi                                    </option>
                                 
                                  <option value="Goa" >
                      Goa                                    </option>
                                 
                                  <option value="Gujarat" selected>
                      Gujarat                                    </option>
                                 
                                  <option value="Haryana" >
                      Haryana                                    </option>
                                 
                                  <option value="Himachal Pradesh" >
                      Himachal Pradesh                                    </option>
                                 
                                  <option value="Jammu Kashmir" >
                      Jammu Kashmir                                    </option>
                                 
                                  <option value="Jharkhand" >
                      Jharkhand                                    </option>
                                 
                                  <option value="Karnataka" >
                      Karnataka                                    </option>
                                 
                                  <option value="Kerala" >
                      Kerala                                    </option>
                                 
                                  <option value="Lakshadweep" >
                      Lakshadweep                                    </option>
                                 
                                  <option value="Madhya Pradesh" >
                      Madhya Pradesh                                    </option>
                                 
                                  <option value="Maharashtra" >
                      Maharashtra                                    </option>
                                 
                                  <option value="Manipur" >
                      Manipur                                    </option>
                                 
                                  <option value="Meghalaya" >
                      Meghalaya                                    </option>
                                 
                                  <option value="Mizoram" >
                      Mizoram                                    </option>
                                 
                                  <option value="Nagaland" >
                      Nagaland                                    </option>
                                 
                                  <option value="Odisha" >
                      Odisha                                    </option>
                                 
                                  <option value="Puducherry" >
                      Puducherry                                    </option>
                                 
                                  <option value="Punjab" >
                      Punjab                                    </option>
                                 
                                  <option value="Rajasthan" >
                      Rajasthan                                    </option>
                                 
                                  <option value="Sikkim" >
                      Sikkim                                    </option>
                                 
                                  <option value="Tamil Nadu" >
                      Tamil Nadu                                    </option>
                                 
                                  <option value="Telangana" >
                      Telangana                                    </option>
                                 
                                  <option value="Tripura" >
                      Tripura                                    </option>
                                 
                                  <option value="Uttar Pradesh" >
                      Uttar Pradesh                                    </option>
                                 
                                  <option value="Uttarakhand" >
                      Uttarakhand                                    </option>
                                 
                                  <option value="West Bengal" >
                      West Bengal                                    </option>
                                                      </select>
                      
                      
                      
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>City <span>*</span></small></label>
                      <select name="city" id="city" class="form-control" required>
                        
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Pincode <span>*</span></small></label>
                      <input  type="number" name="pincode" class="form-control" placeholder="" data-rule="pincode:6" data-msg="Please enter 6 digits" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-12">
                     
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Native Home In Saurashtra/Address <span>*</span></small></label>
                      
                      <textarea name="native_saurashtra" class="form-control" required></textarea>
                    </div>
                   
                    <div class="form-group col-lg-3">
                      <label><small>Village<span>*</span></small></label>
                      
                     <input type="text" name="village" class="form-control" required />
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>District<span>*</span></small></label>
                       <select class="form-control" name="district"  id="district" required>
                            <option value="">--Select Destrict--</option>
                            <option value="Amreli">Amreli</option>
                            <option value="Bhavnagar">Bhavnagar</option>
                            <option value="Junagadh">Junagadh</option>
                            <option value="Gir Somnath">Gir Somnath</option>
                            <option value="Porbandar">Porbandar</option>
                            <option value="Jamnagar">Jamnagar</option>
                            <option value="Bet Dwarka">Bet Dwarka</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Botad">Botad</option>
                            <option value="Morbi">Morbi</option>
                            <option value="Surendranagar">Surendranagar</option>
                        </select>
                     
                    </div>
                     <div class="form-group col-lg-3">
                      <label><small>Taluka<span>*</span></small></label>
                      <select name="taluka" class="form-control taluka_name"  required>
                         
                      </select>
                    </div>
                     
                    
                    <div class="form-group col-lg-12">
                     
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Is Physically Challenged <span>*</span></small></label>
                      <select name="physically_challenged" class="form-control" required>
                        <option value="NO">NO</option>
                        <option value="YES">YES</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Passport Sized Photo (max: 800kb,JPG/PNG) <span>*</span></small></label>
                      <input type="file" name="photo" class="form-control" accept="image/*" data-rule="photo:800" data-msg="Upload File within specified file size upto 800KB" required />
                      <div class="validation"></div>
                    </div>
                    
                    <div class="form-group col-lg-3">
                      <label><small>Leaving Certificate (max: 2mb,PNG/JPG/PDF) <span>*</span></small></label>
                      <input type="file" name="lc" class="form-control" data-rule="doc:2" data-msg="Upload File within specified file size upto 2MB" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>ID Proof (max: 2mb,PNG/JPG/PDF) <span>*</span></small></label>
                      <input type="file" name="id_proof" class="form-control" data-rule="doc:2" data-msg="Upload File within specified file size upto 2MB" required />
                      <div class="validation"></div>
                    </div> 
                    
                  </div>
                  <div class="row">
                      <div class="inner-legend" style="font-size: 14px;">CURRENT EDUCATIONAL DETAILS</div>
                  </div>
                  <div class="row secborder">
                      <div class="row">
                        <div class="form-group col-lg-3">
                          <label><small>College/School Fee Receipt(max: 2mb)<span>*</span></small></label>
                          <input type="file" name="fee_receipt"   class="form-control" data-rule="doc:2" data-msg="Upload File within specified file size" required />
                          <div class="validation"></div>
                        </div>
                      
                          <div class="form-group col-lg-3">
                            <label><small>Course Name<span>*</span></small></label>
                            <select name="course_name" class="form-control course_name"  required>
                                <option disabled selected>Select Course</option>
                                   
                                  
                                  <optgroup label="Secondary ">
                                      
                                               
                                              <option value="10th" data-id="1" >
                                              10th                                        
                                              
                                                 
                                  </optgroup>
                                   
                                  
                                  <optgroup label="Higher Secondary">
                                      
                                               
                                              <option value="11th Science" data-id="2" >
                                              11th Science                                        
                                              
                                               
                                              <option value="12th Science" data-id="2" >
                                              12th Science                                        
                                              
                                               
                                              <option value="11th Commerce" data-id="2" >
                                              11th Commerce                                        
                                              
                                               
                                              <option value="12th Commerce" data-id="2" >
                                              12th Commerce                                        
                                              
                                               
                                              <option value="11th Arts" data-id="2" >
                                              11th Arts                                        
                                              
                                               
                                              <option value="12th Arts" data-id="2" >
                                              12th Arts                                        
                                              
                                                 
                                  </optgroup>
                                   
                                  
                                  <optgroup label="Polytechnic">
                                      
                                               
                                              <option value="Diploma In Computer Science And Engineering" data-id="3" >
                                              Diploma In Computer Science And Engineering                                        
                                              
                                               
                                              <option value="Diploma In Civil Engineering" data-id="3" >
                                              Diploma In Civil Engineering                                        
                                              
                                               
                                              <option value="Diploma In Automobile Engineering" data-id="3" >
                                              Diploma In Automobile Engineering                                        
                                              
                                               
                                              <option value="Diploma In Electronics And Communication" data-id="3" >
                                              Diploma In Electronics And Communication                                        
                                              
                                               
                                              <option value="Diploma In Electrical Engineering" data-id="3" >
                                              Diploma In Electrical Engineering                                        
                                              
                                               
                                              <option value="Diploma In Mechanical Engineering" data-id="3" >
                                              Diploma In Mechanical Engineering                                        
                                              
                                               
                                              <option value="Diploma In Instrumentation And Control Engineering" data-id="3" >
                                              Diploma In Instrumentation And Control Engineering                                        
                                              
                                               
                                              <option value="Diploma In It Engineering" data-id="3" >
                                              Diploma In It Engineering                                        
                                              
                                               
                                              <option value="Diploma In Plastics Engineering" data-id="3" >
                                              Diploma In Plastics Engineering                                        
                                              
                                               
                                              <option value="Diploma In Metallurgy Engineering" data-id="3" >
                                              Diploma In Metallurgy Engineering                                        
                                              
                                               
                                              <option value="Diploma In Textile Engineering" data-id="3" >
                                              Diploma In Textile Engineering                                        
                                              
                                               
                                              <option value="Diploma In Bio Madical Engineering" data-id="3" >
                                              Diploma In Bio Madical Engineering                                        
                                              
                                               
                                              <option value="Diploma In Architecture Assistantship " data-id="3" >
                                              Diploma In Architecture Assistantship                                         
                                              
                                               
                                              <option value="Diploma In Computer Aided Costume Design And Dress Making" data-id="3" >
                                              Diploma In Computer Aided Costume Design And Dress Making                                        
                                              
                                               
                                              <option value="Diploma In Pharmacy " data-id="3" >
                                              Diploma In Pharmacy                                         
                                              
                                               
                                              <option value="Diploma In Printing Technology" data-id="3" >
                                              Diploma In Printing Technology                                        
                                              
                                               
                                              <option value="SAL Institute Of Diploma Studies" data-id="3" >
                                              SAL Institute Of Diploma Studies                                        
                                              
                                               
                                              <option value="Diploma in Computer Engineering" data-id="3" >
                                              Diploma in Computer Engineering                                        
                                              
                                                 
                                  </optgroup>
                                   
                                  
                                  <optgroup label="Paramedical">
                                      
                                               
                                              <option value="B.Sc Medical Lab Technology" data-id="4" >
                                              B.Sc Medical Lab Technology                                        
                                              
                                               
                                              <option value="Diploma In Physiotherapy" data-id="4" >
                                              Diploma In Physiotherapy                                        
                                              
                                               
                                              <option value="Diploma In Medical Laboratory Technology" data-id="4" >
                                              Diploma In Medical Laboratory Technology                                        
                                              
                                               
                                              <option value="Diploma In Dialysis Technology" data-id="4" >
                                              Diploma In Dialysis Technology                                        
                                              
                                               
                                              <option value="B.Sc. In Clinical Research And Healthcare Management" data-id="4" >
                                              B.Sc. In Clinical Research And Healthcare Management                                        
                                              
                                               
                                              <option value="Diploma In Clinical Cardiology" data-id="4" >
                                              Diploma In Clinical Cardiology                                        
                                              
                                               
                                              <option value="B.Sc. In Optometry" data-id="4" >
                                              B.Sc. In Optometry                                        
                                              
                                               
                                              <option value="Bachelor of Physiotherapy" data-id="4" >
                                              Bachelor of Physiotherapy                                        
                                              
                                               
                                              <option value="Bachelor Of Science Nursing" data-id="4" >
                                              Bachelor Of Science Nursing                                        
                                              
                                               
                                              <option value="Pharm-D" data-id="4" >
                                              Pharm-D                                        
                                              
                                                 
                                  </optgroup>
                                   
                                  
                                  <optgroup label="Bachelor's degree">
                                      
                                               
                                              <option value="Bachelor Of Pharmacy" data-id="5" >
                                              Bachelor Of Pharmacy                                        
                                              
                                               
                                              <option value="Bachelor Of Ayurvedic Medicine And Surgery" data-id="5" >
                                              Bachelor Of Ayurvedic Medicine And Surgery                                        
                                              
                                               
                                              <option value="Bachelor Of Homeopathic Medicine And Surgery" data-id="5" >
                                              Bachelor Of Homeopathic Medicine And Surgery                                        
                                              
                                               
                                              <option value="Bachelor Of Veterinary Science" data-id="5" >
                                              Bachelor Of Veterinary Science                                        
                                              
                                               
                                              <option value="Bachelor Of Dental Surgery" data-id="5" >
                                              Bachelor Of Dental Surgery                                        
                                              
                                               
                                              <option value="Bachelor Of Medicine And Bachelor Of Surgery (Mbbs)" data-id="5" >
                                              Bachelor Of Medicine And Bachelor Of Surgery (Mbbs)                                        
                                              
                                               
                                              <option value="Bachelor In Medical Laboratory Technology (Bmlt)" data-id="5" >
                                              Bachelor In Medical Laboratory Technology (Bmlt)                                        
                                              
                                               
                                              <option value="Bachelor Of Architecture" data-id="5" >
                                              Bachelor Of Architecture                                        
                                              
                                               
                                              <option value="Bachelor Of Computer Science" data-id="5" >
                                              Bachelor Of Computer Science                                        
                                              
                                               
                                              <option value="Bachelor Of Computer Applications" data-id="5" >
                                              Bachelor Of Computer Applications                                        
                                              
                                               
                                              <option value="Bachelor Of Design" data-id="5" >
                                              Bachelor Of Design                                        
                                              
                                               
                                              <option value="Bachelor Of Science" data-id="5" >
                                              Bachelor Of Science                                        
                                              
                                               
                                              <option value="Bachelor Of Commerce " data-id="5" >
                                              Bachelor Of Commerce                                         
                                              
                                               
                                              <option value="Bachelor Of Social Work" data-id="5" >
                                              Bachelor Of Social Work                                        
                                              
                                               
                                              <option value="Bachelor Of Arts" data-id="5" >
                                              Bachelor Of Arts                                        
                                              
                                               
                                              <option value="Bachelor of Business Administration" data-id="5" >
                                              Bachelor of Business Administration                                        
                                              
                                               
                                              <option value="Master of Science (Five years course)" data-id="5" >
                                              Master of Science (Five years course)                                        
                                              
                                               
                                              <option value="Bachelor of Vocational Education" data-id="5" >
                                              Bachelor of Vocational Education                                        
                                              
                                               
                                              <option value="Bachelor of Business Administration (Five years course)" data-id="5" >
                                              Bachelor of Business Administration (Five years course)                                        
                                              
                                               
                                              <option value="Intergrated Law (5 year)" data-id="5" >
                                              Intergrated Law (5 year)                                        
                                              
                                               
                                              <option value="B.sc IT" data-id="5" >
                                              B.sc IT                                        
                                              
                                                 
                                  </optgroup>
                                   
                                  
                                  <optgroup label="bachelor of engineering">
                                      
                                               
                                              <option value="Aeronautical Engineering" data-id="6" >
                                              Aeronautical Engineering                                        
                                              
                                               
                                              <option value="Aerospace Engineering" data-id="6" >
                                              Aerospace Engineering                                        
                                              
                                               
                                              <option value="Automobile Engineering" data-id="6" >
                                              Automobile Engineering                                        
                                              
                                               
                                              <option value="Biomedical Engineering" data-id="6" >
                                              Biomedical Engineering                                        
                                              
                                               
                                              <option value="Bio technology Engineering" data-id="6" >
                                              Bio technology Engineering                                        
                                              
                                               
                                              <option value="Ceramic Engineering" data-id="6" >
                                              Ceramic Engineering                                        
                                              
                                               
                                              <option value="Chemical Engineering" data-id="6" >
                                              Chemical Engineering                                        
                                              
                                               
                                              <option value="Civil Engineering" data-id="6" >
                                              Civil Engineering                                        
                                              
                                               
                                              <option value="Communications Engineering" data-id="6" >
                                              Communications Engineering                                        
                                              
                                               
                                              <option value="Computer Science Engineering" data-id="6" >
                                              Computer Science Engineering                                        
                                              
                                               
                                              <option value="Construction Engineering" data-id="6" >
                                              Construction Engineering                                        
                                              
                                               
                                              <option value="Electrical Engineering" data-id="6" >
                                              Electrical Engineering                                        
                                              
                                               
                                              <option value="Electronics & Communication Engineering" data-id="6" >
                                              Electronics & Communication Engineering                                        
                                              
                                               
                                              <option value="Electronics Engineering" data-id="6" >
                                              Electronics Engineering                                        
                                              
                                               
                                              <option value="Environmental Engineering" data-id="6" >
                                              Environmental Engineering                                        
                                              
                                               
                                              <option value="Industrial Engineering" data-id="6" >
                                              Industrial Engineering                                        
                                              
                                               
                                              <option value="Marine Engineering" data-id="6" >
                                              Marine Engineering                                        
                                              
                                               
                                              <option value="Mechanical Engineering" data-id="6" >
                                              Mechanical Engineering                                        
                                              
                                               
                                              <option value="Mechatronics Engineering" data-id="6" >
                                              Mechatronics Engineering                                        
                                              
                                               
                                              <option value="Metallurgical Engineering" data-id="6" >
                                              Metallurgical Engineering                                        
                                              
                                               
                                              <option value="Mining Engineering" data-id="6" >
                                              Mining Engineering                                        
                                              
                                               
                                              <option value="Petroleum Engineering" data-id="6" >
                                              Petroleum Engineering                                        
                                              
                                               
                                              <option value="Power Engineering" data-id="6" >
                                              Power Engineering                                        
                                              
                                               
                                              <option value="Production Engineering" data-id="6" >
                                              Production Engineering                                        
                                              
                                               
                                              <option value="Robotics Engineering" data-id="6" >
                                              Robotics Engineering                                        
                                              
                                               
                                              <option value="Structural Engineering" data-id="6" >
                                              Structural Engineering                                        
                                              
                                               
                                              <option value="Telecommunication Engineering" data-id="6" >
                                              Telecommunication Engineering                                        
                                              
                                               
                                              <option value="Textile Engineering" data-id="6" >
                                              Textile Engineering                                        
                                              
                                               
                                              <option value="Tool Engineering" data-id="6" >
                                              Tool Engineering                                        
                                              
                                               
                                              <option value="Transportation Engineering" data-id="6" >
                                              Transportation Engineering                                        
                                              
                                               
                                              <option value="Plastic engineering" data-id="6" >
                                              Plastic engineering                                        
                                              
                                               
                                              <option value="instrumentation and control engineering" data-id="6" >
                                              instrumentation and control engineering                                        
                                              
                                               
                                              <option value="Information Technology Engineering" data-id="6" >
                                              Information Technology Engineering                                        
                                              
                                               
                                              <option value="Rubber Technology" data-id="6" >
                                              Rubber Technology                                        
                                              
                                                 
                                  </optgroup>
                                   
                                  
                                  <optgroup label="diploma to degree">
                                      
                                               
                                              <option value="Mechanical Engineering" data-id="7" >
                                              Mechanical Engineering                                        
                                              
                                               
                                              <option value="Automobile Engineering" data-id="7" >
                                              Automobile Engineering                                        
                                              
                                               
                                              <option value="Biomedical Engineering" data-id="7" >
                                              Biomedical Engineering                                        
                                              
                                               
                                              <option value="Chemical Engineering" data-id="7" >
                                              Chemical Engineering                                        
                                              
                                               
                                              <option value="Civil Engineering" data-id="7" >
                                              Civil Engineering                                        
                                              
                                               
                                              <option value="Computer Engineering" data-id="7" >
                                              Computer Engineering                                        
                                              
                                               
                                              <option value="Electronics & Communication Engg." data-id="7" >
                                              Electronics & Communication Engg.                                        
                                              
                                               
                                              <option value="Environmental Engineering" data-id="7" >
                                              Environmental Engineering                                        
                                              
                                               
                                              <option value="Information Technology" data-id="7" >
                                              Information Technology                                        
                                              
                                               
                                              <option value="Plastic Technology" data-id="7" >
                                              Plastic Technology                                        
                                              
                                               
                                              <option value="Rubber Technology" data-id="7" >
                                              Rubber Technology                                        
                                              
                                               
                                              <option value="Textile Technology" data-id="7" >
                                              Textile Technology                                        
                                              
                                               
                                              <option value="Instrumentation & Control Engg" data-id="7" >
                                              Instrumentation & Control Engg                                        
                                              
                                               
                                              <option value="Power Electronics" data-id="7" >
                                              Power Electronics                                        
                                              
                                               
                                              <option value="Aerounitcal Engineering" data-id="7" >
                                              Aerounitcal Engineering                                        
                                              
                                               
                                              <option value="Metallurgical Engineering" data-id="7" >
                                              Metallurgical Engineering                                        
                                              
                                               
                                              <option value="Others" data-id="7" >
                                              Others                                        
                                              
                                                 
                                  </optgroup>
                                   
                                  
                                  <optgroup label="others">
                                      
                                               
                                              <option value="others" data-id="8" >
                                              others                                        
                                              
                                                 
                                  </optgroup>
                                                        </select>
                          </div>
                        <div class="form-group col-lg-3">
                          <label><small>College/School Name<span>*</span></small></label>
                          <select name="college_name" class="form-control college_name"  required>
                             
                          </select>
                          
                        </div>
                        <div class="form-group col-lg-3">
                          <label><small>Semester/Standard<span>*</span></small></label>
                          <select name="semester" class="form-control semester"  required>
                              <option disabled selected>Select semester</option>
                                     
                                      <option value="Semester 1(1st Year)" data-id="1" >
                          Semester 1(1st Year)                                    </option>
                                     
                                      <option value="Semester 3(2nd Year)" data-id="2" >
                          Semester 3(2nd Year)                                    </option>
                                     
                                      <option value="Semester 5(3rd Year)" data-id="3" >
                          Semester 5(3rd Year)                                    </option>
                                     
                                      <option value="Semester 7(4th Year)" data-id="4" >
                          Semester 7(4th Year)                                    </option>
                                     
                                      <option value="Semester 9(5th Year)" data-id="5" >
                          Semester 9(5th Year)                                    </option>
                                                          </select>
                        </div>
                    
                    
                    
                    </div>
                  </div>
                  <div class="row">
                      <div class="inner-legend" style="font-size: 14px;">PREVIOUS EDUCATIONAL DETAILS</div>
                  </div>
                  <div class="row secborder" id="company_main">
                      <div class="row">
                    <div class="form-group col-lg-3">
                      <label><small>Marksheet Pics (Last Exam-max:2mb)<span>*</span></small></label>
                      <input type="file" name="marksheets_file[]"   class="form-control" data-rule="doc:2" data-msg="Upload File within specified file size" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Education Category <span>*</span></small></label>
                      <select name="edu_cat[]" class="form-control edu_cat"  required>
                          <option disabled selected>Select Category</option>
                                 
                                  <option value="Secondary " data-id="1" >
                      Secondary                                     </option>
                                 
                                  <option value="Higher Secondary" data-id="2" >
                      Higher Secondary                                    </option>
                                 
                                  <option value="Polytechnic" data-id="3" >
                      Polytechnic                                    </option>
                                 
                                  <option value="Paramedical" data-id="4" >
                      Paramedical                                    </option>
                                 
                                  <option value="Bachelor's degree" data-id="5" >
                      Bachelor's degree                                    </option>
                                 
                                  <option value="bachelor of engineering" data-id="6" >
                      bachelor of engineering                                    </option>
                                 
                                  <option value="diploma to degree" data-id="7" >
                      diploma to degree                                    </option>
                                 
                                  <option value="others" data-id="8" >
                      others                                    </option>
                                                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Education <span>*</span></small></label>
                      <select name="edu_subcat[]"  class="form-control edu_subcat" required>
                        
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Year of Completion<span>*</span></small></label>
                        <select name="passing_year[]" class="form-control year" required>
                          <option value=""> - YEAR - </option>
                          <option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option>                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>Board / University / Institute <span>*</span></small></label>
                      <select name="board[]" class="form-control board"  required>
                          <option disabled selected>Select University/Board</option>
                                 
                                  <option value="(CBSE) Central Board Of Secondary Education" data-id="1" >
                      (CBSE) Central Board Of Secondary Education                                    </option>
                                 
                                  <option value="(GSHSEB) Gujarat Secondary And Higher Secondary Education Board" data-id="2" >
                      (GSHSEB) Gujarat Secondary And Higher Secondary Education Board                                    </option>
                                 
                                  <option value="(MSBSHSE) Maharashtra State Board Of Secondary & Higher Secondary Education" data-id="3" >
                      (MSBSHSE) Maharashtra State Board Of Secondary & Higher Secondary Education                                    </option>
                                 
                                  <option value="(NIOS) National Institute Of Open Schooling " data-id="4" >
                      (NIOS) National Institute Of Open Schooling                                     </option>
                                 
                                  <option value="(AU) Ahmedabad University" data-id="5" >
                      (AU) Ahmedabad University                                    </option>
                                 
                                  <option value="(GTU) Gujarat Technological University" data-id="6" >
                      (GTU) Gujarat Technological University                                    </option>
                                 
                                  <option value="(IU) Indus University" data-id="7" >
                      (IU) Indus University                                    </option>
                                 
                                  <option value="(NU) Nirma University" data-id="8" >
                      (NU) Nirma University                                    </option>
                                 
                                  <option value="(CEPT) CEPT University" data-id="9" >
                      (CEPT) CEPT University                                    </option>
                                 
                                  <option value="(GLS) Gls University" data-id="10" >
                      (GLS) Gls University                                    </option>
                                 
                                  <option value="(GAU) Gujarat Ayurved University" data-id="11" >
                      (GAU) Gujarat Ayurved University                                    </option>
                                 
                                  <option value="(GU) Gujarat University" data-id="12" >
                      (GU) Gujarat University                                    </option>
                                 
                                  <option value="(Autonomous) St. Xavier'S College " data-id="13" >
                      (Autonomous) St. Xavier'S College                                     </option>
                                 
                                  <option value="(CNV) C. N. Vidyavihar" data-id="14" >
                      (CNV) C. N. Vidyavihar                                    </option>
                                 
                                  <option value="(PU) Parul University" data-id="15" >
                      (PU) Parul University                                    </option>
                                 
                                  <option value=" (IGNOU) Indira Gandhi National Open University " data-id="16" >
                       (IGNOU) Indira Gandhi National Open University                                     </option>
                                 
                                  <option value="(SOU) Silver OAK University " data-id="17" >
                      (SOU) Silver OAK University                                     </option>
                                                      </select>
                      
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label><small>percentage <span>*</span></small></label>
                      <input  type="number" name="percentage[]" class="form-control percentage" placeholder="" min="33" max="100" step="any" data-rule="percentage:100" data-msg="Please Enter valid Percentage" required />
                      <div class="validation"></div>
                    </div>
                   
                    </div>
                  </div>
                 
                  <div class="row">
                      <div class="inner-legend">INCOME DETAILS</div>
                  </div>
                  <div class="row secborder" id="exam_main">
                      <div class="row">
                    <div class="form-group col-lg-4">
                      
                      <label><small>Person's Full Name <span>*</span></small></label>
                      <input  type="text" name="income_fullname[]" class="form-control" placeholder="" data-rule="minlen:2" data-msg="Please enter at least 10 chars" required />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-4">
                      <label><small>Relation With Candidate  <span>*</span></small></label>
                      <select name="rel_candidate[]" class="form-control rel_candidate"  required>
                          
                        <option disabled selected>Select</option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Brother">Brother</option>
                        <option value="Sister">Sister</option>                 
                  
                      </select>
                    </div>
                    <div class="form-group col-lg-4">
                      <label><small>Occupation <span>*</span></small></label>
                      <select name="occupation[]"  class="form-control occupation" required>
                        <option disabled selected>Select</option>
                        <option value="Business">Business</option>
                        <option value="Salaried">Salaried</option>
                        <option value="Professional">Professional</option>
                        <option value="Farmer">Farmer</option>   
                      </select>
                    </div>
                    <div class="form-group col-lg-4">
                      <label><small>Business/Job Address<span>*</span></small></label>
                      <textarea name="business_address[]" class="form-control business_address" required></textarea>
                    </div>
                    <div class="form-group col-lg-4">
                      <label><small>Income Per Year<span>*</span></small></label>
                      <input  type="number" name="income[]" class="form-control" placeholder="" data-rule="minlen:2" data-msg="Please Valid Value" required />
                      <div class="validation"></div>
                    </div>
                     <div class="form-group col-lg-4">
                      <label><small>No. Of Family Member<span>*</span></small></label>
                      <input  type="number" name="nof_fm[]" class="form-control" placeholder=""  required />
                      <div class="validation"></div>
                    </div>
                    
                    </div>
                    
                  </div>
                  <div class="text-center">
                      <label><span>*</span> <input type="checkbox" required name="terms" value="1" />
                        I hereby declare that the details furnished above are true and correct to the best of my knowledge. I shall abide by the rules and regulations of the institute. The institute can use my candidature to recognize the performance of the institute.</br>
                        From 3000 deposits of new and old students
 The extra amount will be refunded for cutting of 2000 Patel Suwas and 250 Alumanai Association as well as 250 badsheet cover
                        </br></br>In any case, if the student leaves the hostel, he / she will not be able to get his / her fee refunded.
                        </br>
                        (હું જાહેર કરું છું કે ઉપર આપેલી તમામ વિગતો મારી જાણકારી મુજબ સાચી અને યોગ્ય છે. હું સંસ્થાના નિયમોનું પાલન કરીશ તેમજ સંસ્થા મારી કામગીરીનો ઉપયોગ સંસ્થાના પ્રભાવને ઓળખવા માટે કરી શકે છે.)
                        </br>
                        નવા તથા જૂના વિદ્યાર્થીઓની ૩૦૦૦ ડિપોઝિટ માંથી
૨૦૦૦ પટેલ સુવાસ ના તથા ૨૫૦ એલ્યુિમનાઈ એસોિયેશનના તેમજ ૨૫૦ ચાદર ઘસારાના કપાઈ ને વધારાની રકમ પરત મળશે.
                        </br>કોઈ પણ સંજોગોમાં વિધાર્થી હોસ્ટેલ મૂકીને જશે તો તેને પોતાની ભરેલી ફી પરત મળી શકશે નહી.
                      </label>
                  </div>
                  <div class="form-group col-lg-12"></div>
                  <div class="text-center"><button type="submit" class="btn btn-primary" title="Send Message">Submit</button></div>
                </fieldset>
              </form>
            </div>
          </div>

        </div>

      </div>
      
      <div id="preloader"></div>
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align:center;">
                        <button type="button" class="still_edit">EDIT</button>
                        <button type="button" class="confirm_submit">CONFIRM SUBMIT</button>
                    </div>
                </div>
            </div>
            <div class="row" style="overflow:auto;background-color:#f5f5f5;border-radius:5px;padding-bottom:20px;margin-bottom:10px;">
                <div class="col-md-12 text-center" style="margin:10px 0;">
                    <span style="color:red;">Confirm your details and then press "CONFIRM SUBMIT" to Register Yourself.</span>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><u><b>Basic Details</b></u></h4>
                    <table class="preview_tables">
                        <tr>
                            <td>
                                <small>Student's Full Name:</small> 
                            </td>
                            <td>
                                <span id="first_name_prev"></span> <span id="father_name_prev"></span> <span id="surname_prev"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><small>Sub Caste:</small></td>
                            <td><span id="subcaste_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Gender:</small></td>
                            <td><span id="gender_prev"></span></td>
                        </tr>
                        
                        <tr>
                            <td><small>Mobile:</small></td> 
                            <td><span id="mobile_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Email:</small></td>
                            <td><span id="email_prev"></span></td>
                        </tr>
                        
                        <tr>
                            <td><small>Father Mobile:</small></td>
                            <td><span id="father_mobile_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Date of Birth:</small></td>
                            <td><span id="dob_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Blood Group:</small></td>
                            <td><span id="blood_group_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Age:</small></td>
                            <td><span id="age_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Permanent Address:</small></td>
                            <td><span id="address_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>State:</small></td>
                            <td><span id="state_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>City:</small></td>
                            <td><span id="city_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Pincode:</small></td>
                            <td><span id="pincode_prev"></span></td>
                        </tr>
                        <tr>    
                            <td><small>Native Home In Saurashtra:</small></td>
                            <td> <span id="native_home_prev"></span></td>
                        </tr>
                        <tr>    
                            <td><small>village:</small></td>
                            <td> <span id="village_prev"></span></td>
                        </tr>
                        <tr>    
                            <td><small>District:</small> </td>
                            <td><span id="district_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Taluka:</small> </td>
                            <td><span id="taluka_prev"></span></td>
                        </tr>
                        <tr>
                            <td><small>Is Physically Challenged:</small> </td>
                            <td><span id="physically_challenged_prev"></span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center"><u><b>Educational Details</b></u></h4>
                    <div style="text-align:center;margin-top:20px;"><h5>CURRENT</h5></div>
                    <table class="preview_tables" id="ced_prev">
                        <tr>
                            <th>College/School *</th>
                        </tr>
                        <tr>
                            <th>Course *</th>
                        </tr>
                        <tr>
                            <th>Semester/Standard *</th>
                        </tr>
                    </table>
                    <div style="text-align:center;margin-top:20px;"><h5>PREVIOUS</h5></div>
                    <table class="preview_tables" id="job_prev" style="margin:auto;">
                        <tr>
                            <th>Education Category *</th>
                        </tr>
                        <tr>
                            <th>Education *</th>
                        </tr>
                        <tr>
                            <th>Percentage *</th>
                        </tr>
                        <tr>
                            <th>Year of Completion *</th>
                        </tr>
                    </table>
                    <h4 class="text-center"><u><b>Income Details</b></u></h4>
                    <table class="preview_tables" id="exam_prev" style="margin:auto;">
                        <tr>
                            <th>Person's Full Name *</th>
                        </tr>
                        <tr>
                            <th>Relation With Candidate *</th>
                        </tr>
                        <tr>
                            <th>Occupation *</th>
                        </tr>
                        <tr>
                            <th>Business/Job Address *</th>
                        </tr>
                        <tr>
                            <th>Income Per Year *</th>
                        </tr>
                        <tr>
                            <th>No. Of Family Member *</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row text-center" style="margin-bottom:20px;">
                <div class="col-md-2 col-md-offset-1">
                    <span id="photo_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">Passport Sized Photo:</small>
                </div>
                <div class="col-md-2">
                    <span id="lc_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">Leaving Certificate:</small>
                </div>
                <div class="col-md-2">
                    <span id="id_proof_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">ID Proof:</small>
                </div>
                <div class="col-md-2">
                    <span id="marksheets_file_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">Marksheet Pics (Last Exam):</small>
                </div>
                <div class="col-md-2">
                    <span id="fee_receipt_prev"><img src="#" width="100px" /></span>
                    <small style="display:block">College/School Fee Receipt:</small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align:center;">
                        <button type="button" class="still_edit">EDIT</button>
                        <button type="button" class="confirm_submit">CONFIRM SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="otp_page">
        <div class="centerit">
            <label id="otp_mobile_display"></label><br>
             <label id="otp_email_display"></label><br>
            <label>Enter 4 Digit OTP Received On Your Phone And Email.</label><br>
            <label>OTP Is Valid Upto 10 Minutes.</br>
Do Not Press Back Button OR Refresh This Page.</label></br>
            <input type="number" name="otp" pattern="[0-9]{4}" title="Enter 4 digit OTP received on your Email" style="margin:10px;" /><br>
            <button type="button" id="otp_submit" class="btn btn-primary">Verify</button>
            <button type="button" id="otp_back_btn" class="btn btn-primary">Back</button>
        </div>
    </div>
<!-- Contact Form JavaScript File -->
  <script src="../assets-design/frontend/contactform/newcontactform6b4b.js?v=0.03"></script>


<script type="text/javascript">
  $(document).ready(function() {
    
      $(".still_edit").click(function(){
          $(".overlay").css("display","none");
      });
      $(".confirm_submit").click(function(){
          
          var mobile=$("input[name='mobile']").val();
          var email=$("input[name='email']").val();
          $.ajax({
               url: 'https://www.sspkm.org/welcome/otpsend',
                method:"POST",
               data:{mobile:mobile,email:email},
                success: function(response)
                {
                   $(".otp_page").css("display","block");
                   $("#otp_mobile_display").html(mobile);
                   $("#otp_email_display").html(email);
                }
            });
         
      });
    $("input[name='dob']").change(function(){
        dob = new Date($(this).val());
        var today = new Date();
        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        $("input[name='age']").val(age);
        $(".year").val();
    });
    $(".year").change(function(){
        var year = parseInt($(this).val());
        var dobyear = new Date($("input[name='dob']").val()).getFullYear();
        
        if(year<dobyear+10&&$(this).prop("name")!="ssc_year"){
            alert("Enter valid YEAR! your Birth year is: "+dobyear+" ");
            $(this).val("");
        }
    });
    
 
   $('#state').change(function(){  
          
            var state=$('#state').val();
            $.ajax({
               url: 'https://www.sspkm.org/welcome/getcity',
                method:"POST",
               data:{state:state},
                success: function(response)
                {
                    $('#city').html('');
                   $('#city').append(response);
                   $('#city').trigger('change');
                   
                }
            });
        });
    
     $('#district').change(function(){  
          
            var district=$('#district').val();
            $.ajax({
               url: 'https://www.sspkm.org/welcome/gettaluka',
                method:"POST",
               data:{district:district},
                success: function(response)
                {
                    $('.taluka_name').html('');
                   $('.taluka_name').append(response);
                   
                   
                }
            });
        });    
        
    $('#state').val("Gujarat").change();
    
       
       
        $('#company_main').on('change','.edu_cat',function(){ 
            
            var edu_cat=$(this).find(':selected').data('id');
            var sub=$(this).parent().next().children('.edu_subcat');
            $.ajax({
              url: 'https://www.sspkm.org/welcome/getsubcat/',
                method:"POST",
              data:{edu_cat:edu_cat},
                success: function(response)
                {
                    sub.html('');
                    sub.append(response);
                    
                }
            });
        });
        
        $(document).on('change','.course_name',function(){ 
            
            var course_name=$(this).find(':selected').data('id');
            
            var college_name=$(this).parent().next().children('.college_name');
            
            $.ajax({
              url: 'https://www.sspkm.org/welcome/getcollege_name/',
                method:"POST",
              data:{edu_cat:course_name},
                success: function(response)
                {
                    college_name.html('');
                    college_name.append(response);
                    
                }
            });
        });
      
      var marriage_div="<div class='col-lg-6'>"
                            +"<label><small>Marriage Certificate (max: 2mb) <span>*</span></small></label>"
                            +"<input type='file' name='marriage_certificate' class='form-control' data-rule='doc:2' data-msg='Upload File within specified file size' />"
                            +"<div class='validation'></div>"
                        +"</div>";
   
    var company_main=$("#company_main").html();
    var exam_main=$("#exam_main").html();
    $("#more_company").click(function(){
      $("#company_main").append(company_main);
    });
    $("#more_exam").click(function(){
      $("#exam_main").append(exam_main);
    });
    $("#company_main").on("click",".remove_company",function(){
      if($(".remove_company").length>1){
        $(this).parent().parent().remove();
        
      }
    });
    $("#exam_main").on("click",".remove_exam",function(){
      if($(".remove_exam").length>1){
        $(this).parent().parent().remove();
        
      }
    });
    
    $("input[type='file']").change(function(){
        if($(this).prop("name")=="photo"){
            if ((($(this))[0].files[0].size/1024)>800) {
              ferror = ierror = true;
              $(this).next('.validation').html((ierror ? ($(this).attr('data-msg') !== undefined ? $(this).attr('data-msg') : 'wrong Input') : '')).show('blind');
            }else{
                $(this).next('.validation').html('');
            }
        }else{
            if ((($(this))[0].files[0].size/1024/1024)>2) {
              ferror = ierror = true;
              $(this).next('.validation').html((ierror ? ($(this).attr('data-msg') !== undefined ? $(this).attr('data-msg') : 'wrong Input') : '')).show('blind');
            }else{
                $(this).next('.validation').html('');
            }
        }
    });
    $("select[name='gender'],select[name='marital_status']").change(function(){
        var gender=$("select[name='gender']").val();
        var marital_status=$("select[name='marital_status']").val();
        if(gender=="FEMALE"&&marital_status=="Married"){
            $(".marriage_div").html(marriage_div);
        }else{
            $(".marriage_div").html("");
        }
    });
    
    $("#otp_back_btn").click(function(){
        $(".otp_page").css("display","none");
    });
    $("#otp_submit").click(function(){
        
          var otp=$("input[name='otp']").val();
          var mobile=$("input[name='mobile']").val();
          
          $.ajax({
               url: 'https://www.sspkm.org/welcome/otpvarify',
                method:"POST",
               data:{otp:otp,mobile:mobile},
                success: function(response)
                {
                    
                   if(response=="yes")
                   {  
                    $("input[name='confirm_submit']").val("true");
                    $("input[name='confirm_otp']").val("true");
                       
                      $("#preloader").css("display","block");
                       $("form").submit();
                       
                   }else{
                       alert('not_match');
                   }
                   
                }
            });
       
    });
    // $("input[name='student_type']").change(function(){
    //     if($(this).val()=="new"){
    //         $("input[name='deposit_no']").prop("required",false);
    //         $("select[name='unit_no']").prop("required",false);
    //         $("input[name='room_no']").prop("required",false);
    //         $(".deposit_no").css("display","none");
    //     }else if($(this).val()=="old"){
    //         $("input[name='deposit_no']").prop("required",true);
    //         $("select[name='unit_no']").prop("required",true);
    //         $("input[name='room_no']").prop("required",true);
    //         $(".deposit_no").css("display","block");
    //     }
        
    // });
});
</script>    
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="text-center">
                    <a href="../index.html"><img width="150px" src="../assets-design/frontend/sspkm/img/logo.png" /></a>
                </div>
                <div class="text-center">
                    <a href="https://goo.gl/maps/rU6v11pDRFxm6PQQ6" class="view-on-map" target="_blank">View On Map</a>
                </div>
                <ul class="address">
                    <li>
                        Opp. Pankaj Vidhyalaya,<br>
                        Near BSNL Office, Gulbai Tekra,<br>
                        EllisBridge, Ahmedabad - 380006
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="footer-column-content">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><a href="tel:+9107926307099"><i class="fa fa-phone"></i> +91 079 26307099</a></li>
                        <li><a href="tel:+9107926307099"><i class="fa fa-phone"></i> +91 63520 96322</a></li>
                        <li><a href="tel:+9107926307099"><i class="fa fa-phone"></i> +91 88660 32888 ( Boys Hostel )</a></li>
                        <li><a href="tel:+9107926307099"><i class="fa fa-phone"></i> +91 88660 32444 ( Girls Hostel )</a></li>
                        <li><a href="mailto:sphostel@gmail.com"><i class="fa fa-envelope"></i> sphostel@gmail.com</a></li>
                        <li><a href="mailto:sspkminfo@gmail.com"><i class="fa fa-envelope"></i> sspkminfo@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="footer-column-content">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="temp_registration.html">Temprary Admission</a></li>
                        <li><a href="downloads.html">Downloads</a></li>
                        <li><a href="promotion.html">Student Promotion</a></li>
                        <li><a href="patel_suvas.html">Patel Suvas</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="updatedocuments.html">Update Documents</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="footer-column-content">
                   <h3>Recent Posts</h3>
                    facebook content here
                </div>
            </div>
        </div>
    </div>
    <!--<div class="container-fluid lower-footer">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-6 col-sm-6">Shree Saurashtra Patel Kelavani Mandal</div>-->
    <!--        <div class="col-md-6 col-sm-6 social text-right">-->
    <!--           <a href="https://www.facebook.com/pages/category/Hostel/Sp_hostel_offical-105637484591837/" target="_blank"><img src="https://www.sspkm.org/assets-design/frontend/sspkm/img/social/fb.png" /></a>-->
    <!--           <a href="https://instagram.com/sp_hostel_official?igshid=14nc7gvhmhnmy" target="_blank"><img src="https://www.sspkm.org/assets-design/frontend/sspkm/img/social/insta.png" /></a>-->
    <!--           <a href="https://www.youtube.com/channel/UCHeXQ_tHCSG3tGVt6Mvt09A" target="_blank"><img src="https://www.sspkm.org/assets-design/frontend/sspkm/img/social/youtube.png" /></a>-->
    <!--       </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="container-fluid designed-by">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <a href="privacy_policy.html">Privacy Policy</a> |
                    <a href="privacy_policy.html">Terms of Use</a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <span class="credits">
                    Website Developed by: <a href="https://www.ragingdevelopers.com/" target="_blank"> <span class="heart"></span> RagingDevelopers</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>
<script src="../assets-design/frontend/sspkm/js/main9093.js?v=0.02"></script>
<script src="../../unpkg.com/aos%402.3.0/dist/aos.js"></script>
<script>
    AOS.init({
  duration: 1200,
})
</script>
<script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("header");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        $(".sticky-hide").fadeOut();
      } else {
        header.classList.remove("sticky");
        $(".sticky-hide").fadeIn();
      }
    }
</script>
</body>

<!-- Mirrored from www.sspkm.org/home/boys_register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Aug 2021 09:01:43 GMT -->
</html>