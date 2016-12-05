<?php include('../include/header.php') ?>
<main class="main-content">
        <h1>Instructor Management</h1>
            <ul class="tabs">
                <li class="tab-link current" data-tab="tab-1">Add Instructors</li>
                <li class="tab-link" data-tab="tab-2">Contract Instructor to Course Section</li>
            </ul>
        <div id="tab-1" class="form-main tab-content current">
            <h2>Add Instructors</h2>
            <form>
                <div class="grid group">
                    <div class="col-4 form-section">
                        <label for="InstructorID">Instructor ID</label>
                        <input type="text" readonly value="BM13" class="form-input">
                    </div>
                </div>
                <div class="grid group">
                    <div class="col-2 form-section">
                        <label for="FirstName">First Name</label>
                        <input type="text" id="FirstName" value="Bruce" class="form-input"/>
                    </div>
                    <div class="col-2 form-section">
                        <label for="LastName">Last Name</label>
                        <input type="text" id="LastName" value="Wayne" class="form-input"/>
                    </div>
                </div>
                <div class="grid group">
                    <div class="col-2 form-section">
                        <label for="Email">E-Mail</label>
                        <input type="text" id="Email" value="iamnotbatman@gmail.com" class="form-input"/>
                    </div>
                    <div class="col-2 form-section">
                        <label for="PhoneNumber">Phone</label>
                        <input type="text" id="PhoneNumber" value="782-347-9569" class="form-input"/>
                    </div>
                </div>
                <div class="grid group grid-spacing">
                    <div class="col-4 form-section">
                        <label for="Designation">Designation</label>
                        <SELECT class="form-input form-ddl" name="Designation">
                            <option value="Orthodontist">Orthodontist</option>
                        </SELECT>
                    </div>
                    <div class="col-2 form-section checkbox">
                        <label for="InstructorType">Instructor Type</label>
                        <label class="checkbox-layout">
                            <input type="Radio" name="InstructorType" value="Full-Time" checked> Full-Time
                        </label>
                        <label class="checkbox-layout">
                            <input type="radio" name="InstructorType" value="Sessional"> Sessional
                        </label>
                    </div>
                </div>
                <div class="grid group">
                    <div class="col-4 form-section">
                        <label for="Address">Address</label>
                        <input type="text" id="Address" value="123 Gotham St" class="form-input"/>
                    </div>
                </div>
                <div class="grid group grid-spacing">
                    <div class="col-2 form-section">
                        <label for="Province/State">Province/State</label>
                        <input type="text"  id="Province/State" value="AB" class="form-input"/>
                    </div>
                    <div class="col-2 form-section">
                        <label for="PostalCode">Postal Code</label>
                        <input type="text" id="PostalCode" value="B4T 7V3"  class="form-input"/>
                    </div>
                    <div class="col-2 form-section">
                        <label for="City">City</label>
                        <input type="text" id="City" value="Gotham" class="form-input"/>
                    </div>
                </div>
                <div class="grid group">
                    <div class="col-4 form-section">
                        <label>Availability</label>
                    </div>
                </div>
                <div class="grid group">
                    <div class="col-1 form-section">
                        <label for="MonStart">Monday</label>
                        <input type="time" class="form-time-input" name="MonStart" id="MonStart" value="08:00:00" />
                        <input type="time" class="form-time-input" name="MonEnd" id="MonEnd" value="16:00:00" />
                    </div>
                    <div class="col-1 form-section">
                        <label for="Tuesday">Tuesday</label>
                        <input type="time" class="form-time-input" name="TuesStart" id="TuesStart" value="08:00:00" />
                        <input type="time" class="form-time-input" name="TuesEnd" id="TuesEnd" value="16:00:00" />
                    </div>
                    <div class="col-1 form-section">
                        <label for="Wednesday">Wednesday</label>
                        <input type="time" class="form-time-input" name="WedStart" id="WedStart" value="08:00:00" />
                        <input type="time" class="form-time-input" name="WedEnd" id="WedEnd" value="16:00:00" />
                    </div>
                </div>
                <div class="grid group">
                    <div class="col-1 form-section">
                        <label for="Thursday">Thursday</label>
                        <input type="time" class="form-time-input" name="ThursStart" id="ThursStart" value="08:00:00" />
                        <input type="time" class="form-time-input" name="ThursEnd" id="ThursEnd" value="16:00:00" />
                    </div>
                    <div class="col-1 form-section">
                        <label for="Friday">Friday</label>
                        <input type="time" class="form-time-input" name="FriStart" id="FriStart" value="08:00:00" />
                        <input type="time" class="form-time-input" name="FriEnd" id="FriEnd" value="16:00:00" />
                    </div>
                    <div class="col-1 form-section">
                        <label for="Saturday">Saturday</label>
                        <input type="time" class="form-time-input" name="SatStart" id="SatStart" value="08:00:00" />
                        <input type="time" class="form-time-input" name="SatEnd" id="SatEnd" value="16:00:00" />
                    </div>
                </div>
                <div class="grid group btn-group">
                    <div class="col-4 form-section">
                        <button type="submit" class="btn btn-submit" id="AddButton">Add Instructor</button>
                        <button type="submit" class="btn btn-update" id="UpdateButton">Update</button>
                        <button type="submit" id="CancelButton" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="tab-2" class="form-main tab-content">
        <h2>Contract Instructor to Course Section</h2>
            <form>
                <div class="grid group">
                    <div class="col-1 form-section">
                        <label for="Designation">Designation</label>
                        <select id="Designation" class="form-input form-ddl">
                            <option value="0">Select.....</option>
                            <option value="1">Orthodontist</option>
                        </select>
                    </div>
                    <div class="col-1 form-section">
                        <label for="FullTime">Full Time Instructors</label>
                        <select id="FullTime" class="form-input form-ddl">
                            <option value="0">Select.....</option>
                            <option value="1">Bruce Wayne</option>
                        </select>
                    </div>
                    <div class="col-1 form-section">
                        <label for="Sessional">Sessional Instructors</label>
                        <select id="Sessional"  class="form-input form-ddl">
                            <option value="0">Select.....</option>
                            <option value="1">Dick Grayson</option>
                        </select>
                    </div>
                </div>
                  <div class="grid group btn-group">
                       <div class = "col-4 form- section">
                      <button type="submit" class="btn btn-submit" id= "SearchButton">Search</button>
                           <button type="submit" class="btn btn-submit" id="ClearButton">Clear</button>
                      </div>
                      <div class="grid group">
                      <div class="col-4 form-section">
                      <label>Search Results</label>
                          <table>
                          <thead>
                              <tr>
                              <th>Instructor ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>E-mail</th>
                                  <th>Phone</th>
                                  <th>Designation</th>
                                  <th>Type</th>
                                  <th>Address</th>
                                  <th>Province/State</th>
                                  <th>Postal Code</th>
                                  <th>City</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>SM01</td>
                                      <td>Clarl</td>
                                      <td>Kent</td>
                                      <td>whoissuperman@gmail.com</td>
                                      <td>618-524-2141</td>
                                      <td>Dentist</td>
                                      <td>Full-Time</td>
                                      <td>1938 Sullivan Place</td>
                                      <td>Illinois</td>
                                      <td>S4S4S4</td>
                                      <td>Metropolis</td>
                                      <td><a href="#">Select</a></td>
                                  </tr>
                                  <tr>
                                      <td>FS03</td>
                                      <td>Barry</td>
                                      <td>Allen</td>
                                      <td>Neverlate@gmail.com</td>
                                      <td>426-784-5798</td>
                                      <td>Orthodontist</td>
                                      <td>Sessional</td>>
                                      <td>5749 Central Place</td>
                                      <td>Ohio</td>
                                      <td>F5F5F5</td>
                                      <td>Central City</td>
                                      <td><a href="#">Select</a></td>
                                    </tr>
                                  <tr>
                                      <td>HS04</td>
                                      <td>Bruce</td>
                                      <td>Banner</td>
                                      <td>youwontlikemewhenimmad@gmail.com</td>
                                      <td>916-456-7236</td>
                                      <td>Dentist</td>
                                      <td>Sessional</td>
                                      <td>179 Easton Road</td>
                                      <td>Alberta</td>
                                      <td>H0L3S5</td>
                                      <td>Edmonton</td>
                                      <td><a href="#">Select</a></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                          </div>
                    </div>
                <div class="grid group">
                    <div class="col-2 form-section">
                        <label for="CourseDLL">Course</label>
                        <select id="CourseDDL"  class="form-input form-ddl">
                            <option value="0">Select.....</option>
                            <option value="1" selected>OPTO1001</option>
                            <option value="2">DENT1000</option>
                        </select>
                    </div>
                    <div class="col-2 form-section">
                        <label for="SectionDDL">Section</label>
                        <select id="SectionDDL" class="form-input form-ddl">
                            <option value="0">Select......</option>
                            <option value="1">A01</option>
                            <option value="2">A02</option>
                            <option value="3">A03</option>
                        </select>
                    </div>
                    <div class="grid group">
                    <div class ="col-4 form-section">
                    <label>Instructor Schedule</label>
                        <table>
                            <thead>
                        <tr>
                        <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
								<td>8:00am</td>
								<td>Root Canals - 1002</td>
								<td></td>
								<td>Root Canals - 1002</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Root Canals - 1002</td>
							</tr>
							<tr>
								<td>9:00am</td>
								<td>Root Canals - 1002</td>
								<td></td>
								<td>Root Canals - 1002</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Root Canals - 1002</td>
							</tr>
							<tr>
								<td>10:00am</td>
								<td></td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td>Intro to Dentures - 1304</td>
								<td></td>
							</tr>
							<tr>
								<td>11:00am</td>
								<td>Root Canals - 1002</td>
								<td>Intro to Dentures -1304</td>
								<td>Advance Root Canals - 2046</td>
								<td>Intro to Dentures - 1304</td>
								<td></td>
							</tr>
							<tr>
								<td>12:00pm</td>
								<td>Root Canals - 1002</td>
								<td>Advance Root Canals - 2046</td>
								<td>Root Canals - 1002/td>
								<td></td>
								<td>Advance Root Canals - 2046</td>
							</tr>
							<tr>
								<td>1:00pm</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Advance Root Canals - 2046</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
							</tr>
							<tr>
								<td>2:00pm</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Advance Root Canals - 2046</td>
								<td>Customer Relations - 2028</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
							</tr>
							<tr>
								<td>3:00pm</td>
								<td>Advance Root Canals - 2046</td>
								<td>Intermidiate Braces - 2259</td>
								<td></td>
								<td>Root Canals - 2046</td>
								<td>Intermidiate Braces - 2259</td>
							</tr>
							<tr>
								<td>4:00pm</td>
								<td>Advance Root Canals - 2046</td>
								<td></td>
								<td></td>
								<td>Advance Root Canals - 2046</td>
								<td></td>
							</tr>
							<tr>
								<td>5:00pm</td>
								<td>Advance Root Canals - 2046</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>6:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>7:00pm</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
							</tr>
							<tr>
								<td>8:00pm</td>
								<td></td>
								<td>Advance Root Canals - 2046</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
                                <td>9:00pm</td>
								<td>Advance Root Canals - 2046</td>
								<td></td>
								<td>Advance Root Canals - 2046</td>
								<td></td>
								<td>Advance Root Canals - 2046</td>
							</tr>
                            </tbody>
                        </table>
                    </div>
                        </div>
                </div>
                <div class="grid group btn-group">
                    <div class="col-4 form-section">
                        <button type="submit" class="btn btn-submit" id="AssignButton">Assign</button>
                        <button type="submit" id="ResetButton" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php include('../include/footer.php') ?>