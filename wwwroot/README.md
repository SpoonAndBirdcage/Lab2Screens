# DMIT2028 System Analysis and Design - Lab 2 REPO

## THIS IS THE READ ME - PLEASE KEEP THIS UPDATED AND DATED AS THINGS ARE DONE

## Current Server
http://sad2.10.129.5.154.xip.io/

---

## CSS Classes for form elements

### MAIN TAG
add the class "main-content" to your main element

EG.

	<main class="main-content">

---

###  GRID CLASS

I created a very simple grid system for the fomrs

First wrap every thing you wants in a horozontial row in a div with classes "grid group"

EG.

	<div class="grid group"> ONE FULL ROW GOES IN HERE</div>

---

### COLUMNS
each row has 4 columns. you can use them to do half and half, full, 1/4 and 3/4 or 3/4 and 1/4 or any combination that makes 4

Full Column Class: col-4
1/2 Column Class: col-2
1/4 Column Class: col-1
3/4 Column CLass: col-3

to create the comulms add a column class to a div that wraps you elements in the row
also add a form-section class to each column you make

EG.

	<div class="col-2 form-section"> YOUR FORM ELEMENTS GO HERE </div>

---

### FOMR CONTROLS

Make sure you fill your rows so if you are only using a col-2 add an extra col-2 to the row to fill the space.

Form elements also have css classes

#### TEXT INPUT

on a TEXT INPUT add the css class "form-input"

EG.

	<input type="text" name="yourName" id="yourID" class="form-input" value="Your Value">


#### TEXT AREA

on a TEXT AREA add the css classes "form-input form-textarea"

EG.

	<textarea id="elementID" class="form-input form-textarea"></textarea>


#### DROP DOWN LIST

for a drop down list add the classes "form-input form-ddl"

EG.

	<SELECT name="elementName" id="elementID" class="form-input form-ddl"> </select>

#### BUTTONS

For buttons add a class of "btn" and then depending on the function of the button add "btn-submit or btn-cancel"

EG.

	<button type="submit" class="btn btn-submit">Submit</button>


#### Checkboxes / Radio Buttons

All checkboxes and radio buttons need to be wrapped in a div with the class of checkbox

So this

	<div class="col-2 form-section">

will become

	<div class="col-2 form-section checkbox">

Also all check boxes and raido buttons need to be formated liek the following

	<label class="checkbox-layout">
		<input type="radio" name="Semester" value="Winter" checked> Winter
	</label>

The input type needs to be wrapped in a label container with the class of checkbox-layout

---

## TABS
---

### Setting Up the Tabs

This section should go directly after your main tag 

	<h1> *PLACE YOU MAIN PAGE TITLE HERE* </h1>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1"> *NAME OF THE FORM* </li>
			<li class="tab-link" data-tab="tab-2"> *NAME OF THE FORM* </li>
			<li class="tab-link" data-tab="tab-3"> *NAME OF THE FORM* </li>

		.... Place as many li here for every tab you want to use just incease the data-tab tab-# each time

	</ul>	
	
To get the froms to change when using the link change your div with the class form-main from:

	<div class="form-main">

To:

	<div id="tab-1" class="form-main tab-content current">	

The div ID needs to match the data-tab in the tab navigation

So 

	<div id="tab-1" class="form-main tab-content current">	

Will show up when you click this link 

	<li class="tab-link current" data-tab="tab-1"> First Form </li>

## THE CLASS OF current IS ONLY USED ON THE FIRST DIV AND THE FIRST LI 

---

## MORE TO COME

### Who is doing what:

	BALDWIN - Instructor Screens (Sessional and Full Time)
	EXO - Student Screens
	MARK - Classes & Rooms Screens
	BARRETT  - Patients Screens and Overall Design
	DAVID - Inventory Screens (Including Purchase Order stuff)


### TODO LIST:
	EVERYTHING NEEDS TO BE DONE




### READY FOR PEER REVIEW:
	-- Please update this list as you finish work or if you need some input


### COMPLETE:
	-- Update this list as things are singed off and finished by the group