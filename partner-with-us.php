<!DOCTYPE html>
<html>
<head>
	<title>Partner with us</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-------------Style link------------------->
    <link href="styles.css" rel="stylesheet"  >
</head>
<style>
	ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  
}
ul.breadcrumb li {
  display: inline;
  font-size: 15px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
 #Partner-list{
  padding-top: 30px;
 }
 #Partner-list  li a{
   text-decoration: none;
   font-size: 14px;
  color: #6B8E23;
 }

#Partner-list ul{
  list-style: none;
}
#Partner-list ul ul{
  list-style-type: disc;

}
#Partner-list ul ul li{
  font-size: 13px;
  
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  font-size: 15px;
}
 .center {
  text-align: center;
}
.pagination a.active {
  background-color: #1E90FF;
  color: white;
  border-radius: 50%;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}

  #partner-form .form-group label{
  font-size: 15px;
  color: #6B8E23;
  
}
 .footer h1{
    font-size: 21px;
  }
  .footer p{
    font-size: 14px;
  }
  .footer.row{
   padding-right: 20px;
  }
</style>
<body>
  
<div id="navbar">
  <span class="logo1"><img src="images/logo_WBO.jpeg"></span>
<ul>
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#about">ABOUT US  <span class="glyphicon glyphicon-chevron-down"></span></a>
           
             </li>
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#news"> OUR TEAM <span class="glyphicon glyphicon-chevron-down"></span></a>
            
             </li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#news"> OUR NETWORK <span class="glyphicon glyphicon-chevron-down"></span></a>
            
             </li>
           <li><a href="#">PARTNER WITH US</a></li>
             <li><a href="#">CONTACT US</a></li> 
            
            <li><a href="#"><span class="glyphicon glyphicon-share" ></span> Report</</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-calendar" ></span> Report</</a></li>
             <li><a href="mycart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background: red;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;">
    <?php if(isset($_SESSION["cart_qty"])){ 
      echo $_SESSION["cart_qty"];
    } else{ 
      echo "0";
    }?></span></a></li>
           </ul>
  

</div>


  <div style="padding:0px 0px 2000px;font-size:30px">
  <div class="top-nav-bar">
        <div class="search-box">
            
            
            <a class="logo" href="#"  style="color: #fff; text-decoration: none"><img src="images/logo_WBO.jpeg"></a>
            <input type="text" class="form-control" Placeholder="Search essentials, groceries, and more ...">
            <div class="input-group-text">Search</div>
        </div>
        <div class="menu-bar">
          <ul>
        <li><span class="glyphicon glyphicon-calendar" ></span><a href="#"> Test/ Package</</a></li>
             <li><span class="glyphicon glyphicon-share"></span><a href="#"> Report</a></li>
             <li><a href="mycart.php"><span class="glyphicon glyphicon-shopping-cart"><span id="badge" style="background: red;
    border-radius: 50%;font-size:15px;padding: 4px 7px 4px 7px"; >
    <?php if(isset($_SESSION["cart_qty"])){ 
      echo $_SESSION["cart_qty"];
    } else{ 
      echo "0";
    }?></span></span></a></li>
           </ul>
        </div>
       <div class="menu-bar2">
         <ul>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
             </li>
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> OUR TEAM <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
             </li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> OUR NETWORK <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
             </li>
             <li><a href="#">PARTNER WITH US</a></li>
             <li><a href="#">CONTACT US</a></li>
              <li style="margin-left: 170px;"><a href="#"><span class="glyphicon glyphicon-earphone"></span> 7982100200</a></li>
         </ul>
       </div>
  <!-----------------------------------contain------------------------>
  <div class="container">
     <div class="row" >
      <div class="col-md-6" id="Partner-list">
        <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li>Partner with us</li>
        </ul>
      <ul>
     <li><a href="#demo" data-toggle="collapse">Collection Centers</a>
  <div id="demo" class="collapse">
   <h4> THE PARTNERSHIP</h4>
<p style="font-size: 13px;">In this partnership mode, Max Lab will award a franchisee to the partner for running an exclusive collection center. Max Lab exclusive collection centers would form a major chunk of our network and shall be the prime face of Max Lab in the retail marketplace.<br><br>

Patients can either walk in the collection center or call for home sample collection.</p>

    <h4> OUR USP</h4>
    <ul><li>Association with brand Max - one of the most trusted healthcare brand in the country</li>
<li>Highest quality pathology testing with full reliability and patient convenience</li>
<li>Access to Max Lab pathologists</li>
</ul>

   <h4>WHO SHOULD PARTNER WITH US?</h4>
   <ul>
       <li>Entrepreneurs and financially-sound small businessmen willing to work hard</li>
        <li>Individuals with experience in diagnostics business</li>
     </ul>

     <h4>WHAT DOES MAX LAB BRING?</h4>
     <ul>
      <li> Tests performed at 10 NABL accredited laboratories at Max hospitals</li>
       <li>Technical and lab management SOPs</li>
   <li>Local area marketing support</li>
      <li>Staff training support</li>
       <li>Integrated IT program (LIMS)</li>
        <li>Proactive sample pick-up</li>
        <li>Provision for urgent testing for emergencies</li>
     </ul>

     <h4>WHAT DOES THE PARTNER BRING?</h4>
     <ul>
       <li>An approximate investment of Rs 1-1.50 Lacs</li>
        <li>Infrastructure development and operations as per Max Lab standards and guidelines</li>
         <li>Local area marketing and networking</li>
     </ul>

     <h4>SET UP REQUIRED</h4>
  <p style="font-size: 13px;">Collection center should be located in a visible, easily accessible location. Preferably on the ground floor with an area of around 150 - 225 sq. ft. with a washroom, a refrigerator, one centrifuge machine and one phlebotomy chair</p>
  </div></li>
     
      <li><a href="#demo1" data-toggle="collapse">Hospital Lab Management (HLM) Services</a>
  <div id="demo1" class="collapse">
    <h4> THE PARTNERSHIP</h4>
<p style="font-size: 13px;">In this partnership mode, Max Lab will either establish a lab inside the hospital or upgrade the existing lab. Max Lab will help you plan, design and operate fully-automated pathology laboratory inside your functional hospital or nursing home</p>

    <h4> OUR USP</h4>
    <ul><li>Association with brand Max - one of the most trusted healthcare brand in the country</li>
<li>Unmatched understanding of hospital pathology requirements and standards along with a proven track record in establishing and running world-class hospital-based laboratories</li>
<li>Access to Max Lab pathologists</li>
</ul>

   <h4>WHO SHOULD PARTNER WITH US?</h4>
   <ul>
       <li>Managers/owners of hospitals and nursing homes with over 50 beds</li>
     </ul>

     <h4>WHAT DOES MAX LAB BRING?</h4>
     <ul>
      <li>Testing equipment</li>
       <li>Reagents & supplies lab staff</li>
       <li>Laboratory Information Management System (LIMS)</li>
       <li>On-site branding and marketing support</li>
     </ul>

     <h4>WHAT DOES THE PARTNER BRING?</h4>
     <ul>
       <li>Lab area of ~1100 sq. ft. with interiors and utilities</li>
        <li>Sales and marketing of services</li>
     </ul>

     <h4>SET UP REQUIRED</h4>
     <ul>
     <li>1000 - 1200 sq. ft. finished area for Laboratory setup</li>
      <li>Sample collection area in OPD</li>
    </ul>
  </div></li>
      <li><a href="#demo2" data-toggle="collapse">Physician – Phlebotomist at Site (PAS)</a>
  <div id="demo2" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div></li>
      <li><a href="#demo3" data-toggle="collapse">Pathology Test Outsourcing (PTO)</a>
  <div id="demo3" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div></li>
      <li><a href="#demo4" data-toggle="collapse">Franchise Labs</a>
  <div id="demo4" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div></li>
       <ul>
      
        	
      </div>
      <div class="col-md-6" id="partner-form" >
      	<br><br>
        <h3>PARTNER WITH US</h3>
           <hr>
          <form action="" method="">
  <div class="form-group">
    <label for="email">NAME</label>
    <input type="email" class="form-control" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">EMAIL</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">PHONE NUMBER</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">COMPANY</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">ADDRESS</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">CITY</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">STATE</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">COUNTRY</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">ENTER YOUR QUERY</label>
         <div> <textarea class="form-control" id="addr" name="addr" rows="3" required=""></textarea>
   </div><br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div>
 </div>
 </div>>
 <!-----------------------------footer start-------------------------------------->
   
     <!---------------------------footer end---------------------------->
   
  




</div>
   
     </div>
</div>

<script>
//When the user scrolls down 20px from the top of the document, slide down the navbar 
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-66px";
  }
}
</script>

 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>