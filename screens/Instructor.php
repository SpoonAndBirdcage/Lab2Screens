<!DOCTYPE html>
<html lang="en">
<title>Instructor</title>
<head>
	<meta charset="UTF-8">
	<title>Instructor</title>
	<link rel="stylesheet" href="styles/reset.css" type="text/css">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <header>
		<nav>
			<ul class="main-nav">
				<li class="group">
					<a href="#" class="nav-link"><img class="nav-icon" src="assets/navicons/appt_icon_96_96.png" alt="Appointment Icon"></a>
					<h4 class="nav-label">Appointments</h4>
				</li>
				<li class="group">
					<a href="#" class="nav-link"><img class="nav-icon" src="assets/navicons/patient_icon_96_96.png" alt="Patient Icon"></a>
					<h4 class="nav-label">Patients</h4>
				</li>
				<li class="group">
					<a href="#" class="nav-link"><img class="nav-icon" src="assets/navicons/inventory_icon_96_96.png" alt="Inventory Icon"></a>
					<h4 class="nav-label">Inventory</h4>
				</li>
				<li class="group">
					<a href="#" class="nav-link"><img class="nav-icon" src="assets/navicons/class_icon_96_96.png" alt="Classes Icon"></a>
					<h4 class="nav-label">Courses</h4>
				</li>
				<li class="group">
					<a href="#" class="nav-link"><img class="nav-icon" src="assets/navicons/student_icon_96_96.png" alt="Student Icon"></a>
					<h4 class="nav-label">Students</h4>
				</li>
				<li class="group">
					<a href="#" class="nav-link"><img class="nav-icon" src="assets/navicons/instructors_icon_96_96.png" alt="Instructor Icon"></a>
					<h4 class="nav-label">Instructors</h4>
				</li>

				<li class="group">
					<a href="#" class="nav-link"><img class="nav-icon" src="assets/navicons/classroom_icon_96_96.png" alt="Classroom Icon"></a>
					<h4 class="nav-label">Classrooms</h4>
				</li>
			</ul>
		</nav>
	</header>
    <main class="main-content">
<form class="Instructor">
            <label for="InstructorID">InstructorID</label>
    <input type="text" readonly value="111" class="form-input">
    <div class= "col-2 form-section">
     <div class= "grid group">
      <label for="FirstName">First Name</label>
    <input type="text" id="FirstName" value="Bruce" class="form-input"/>
    <br/>
      <label for="Address">Address</label>
    <input type="text" id="Address" value="123 Gotham St" class="form-input"/>
    <br/>
    <label for="City">City</label>
    <input type="text" id="City" value="Gotham" class="form-input"/>
    <br/> 
          <label for="Province">Province</label> 
    <input type="text"  id="Province" value="AB" class="form-input"/>
    <br/>
         <label for="PhoneNumber">Phone</label>
    <input type="text" id="PhoneNumber" value="7823479569" class="form-input"/>
    <br/>
         <label for="Designation">Designation</label>
    <input type="text" id="Designation" value="Orthodontist" class="form-input"/>
    <br/>
    </div>
    </div>
    
   
    <div class ="col-2 formsection">

        
       <div class="grid group">
      <label for="LastName">Last Name</label>
    <input type="text" id="LastName" value="Wayne" class="form-input"/>
    <br/>
   
  
    <label for="PostalCode">Postal Code</label>
    <input type="text" id="PostalCode" value="B4T7V3"  class="form-input"/>
    <br/>
    
   
    <label for="Email">E-Mail</label>
    <input type="text" id="Email" value="iamnotbatman@gmail.com" class="form-input"/>
    <br/>
    
    
    <label>Availability</label>       
    <br/>       
    <p>Enter times available for the following days eg. 12am-12pm *N/A for days unavailable</p>       
    <label for="Monday">Monday</label>
    <input type="text" id="Monday" value="8AM-9PM" class="form-input"/><br/>
    <label for="Tuesday">Tuesday</label>
    <input type="text" id="Tuesday" value="8AM-9PM" class="form-input"/><br/>
    <label for="Wednesday">Wednesday</label>
    <input type="text" id="Wednesday" value="8AM-9PM" class="form-input"/><br/>
    <label for="Thursday">Thursday</label>
    <input type="text" id="Thursday" value="8AM-9PM" class="form-input"/><br/>
    <label for="Friday">Friday</label>
    <input type="text" id="Friday" value="8AM-9PM" class="form-input"/><br/>
    <label for="Saturday">Saturday</label>
    <input type="text" id="Saturday" value="N/A" class="form-input"/><br/>
    <label for="Sunday">Sunday</label>
    <input type="text" id="Sunday" value="N/A" class="form-input"/><br/>
    <br/>
<label for="InstructorType">Instructor Type</label>
 <input type="Radio" name="InstructorType" value="Full-Time" checked>Full-Time<br/>
           <input type="radio" name="InstructorType" value="Sessional">Sessional&nbsp;
          
     </div>
    </div>

    <div class="grid group">
    <button type="submit" class="btn btn-submit" id="AddButton" >Add</button>&nbsp;&nbsp;
    <button type="submit" id="CancelButton" class="btn btn-cancel">Cancel</button>
    </div>
    </form>
    </main>
    <footer></footer>
</body>

</html>