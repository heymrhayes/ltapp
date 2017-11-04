<?php 
    //require_once getenv('init_path');
    require "../_apphead.php";
    
    ?>
<style>
    .ltStaffEditIconLink {display: none; color:#2780e3 !important;}
    .screen {display:none; padding-top: 60px;}
    .media {border: solid 1px #dddddd; margin:10px; padding:10px;}
    .panel-contact {margin:10px;}
    
    .modal-body{
        height: 250px;
        overflow-y: auto;
    }
    
    @media (min-height: 500px) {
        .modal-body { height: 400px; }
    }
    
    @media (min-height: 800px) {
        .modal-body { height: 600px; }
    }
    
    
</style>
<div class="container">  
    <div style="display:none;" id="notification" class="alert alert-dismissible alert-success">
      <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
      <strong>Well done!</strong> <p></p>
    </div>
<!--<ul class="nav nav-tabs">-->
<!--  <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Home</a></li>-->
<!--  <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a></li>-->
<!--  <li class="disabled"><a>Disabled</a></li>-->
<!--  <li class="dropdown">-->
<!--    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">-->
<!--      Dropdown <span class="caret"></span>-->
<!--    </a>-->
<!--    <ul class="dropdown-menu">-->
<!--      <li><a href="#dropdown1" data-toggle="tab">Action</a></li>-->
<!--      <li class="divider"></li>-->
<!--      <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>-->
<!--    </ul>-->
<!--  </li>-->
<!--</ul>-->
    <div id="screens" class="tab-content">
      <div class="screen fade active in" id="home">
            <h2 id="signInMessage">Sign in with your @cps account.</h2>
            <div class="g-signin2" data-onsuccess="onSignIn" data-prompt="select_account"></div>
        <div class="panel-group">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h4 class="panel-title">
                
                <a data-toggle="collapse" href="#appUpdate">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> <strong>Apps update 09/26/2017 10:45</strong></a>
              </h4>
            </div>
            <div id="appUpdate" class="panel-collapse collapse">
              <div class="panel-body">
                  <strong>Apps update 09/26/2017 10:45</strong>
                  <p>The new "notify, then logout" functionality to handle the Google Authentication timeout seems to be working.<br><br>
                      Based on suggestion, we've added the communication log entries from prior years to the student detail, in a section labeled <strong>Archive Communication Log Entries</strong>.
                      <br><br>
                      Also based on suggestion, student pictures now appear on the student detail page.
                    </p>
                  <strong>Apps update 09/25/2017 08:15</strong>
                  <p>We're testing a feature to notify users when their Google Authentication is expiring so they can stay logged on; hopefully, this reduces some confusing errors.<br><br>
                      Based on suggestion, we've added email links on the student detail page for teachers, counselor, attendance and contacts.  These links will open Gmail.
                      <br><br>
                      Based on another suggestion, we've added primary parent contact info to the student listings (My Students and Student Search);  in order to preserve space, they are hidden by default, but you can use the "columns chooser" button above the table to choose to display them.
                  </p>
                  <strong>Apps update 09/18/2017 08:20</strong>
                  <p>Keep those suggestions coming;  the goal is to make this a tool that's useful for teachers and staff.<br><br>
                  Several improvements over the past few days:  communication log search, and display on student detail; absence information search, and display on student detail; filter controls on many tables (e.g., "My Students"); data update to fix student grade levels; and a few more </p>
                  <p>This will be under <strong>active</strong> development for another week or two;  after that, updates will be developed in the next version. </p>
                  
                  
                  <strong>Apps update 09/13/2017 11:00</strong><p>This application is part of an effort to reduce the number
                  of tools and datasources related to accomplishing our work 
                  at Lane Tech.
                  </p><p></p>
                  It's very much under active development, and you may see some changes
                  over the next couple of weeks as users provide feedback to improve and
                  add features.
                  </p><p>
                  Please use the feedback link in the navbar to let us know about issues and suggestions.
                  </p><p>
                  
                  There's a currently known issue related to the navbar scrolling off screen on certain pages.
                  </p>
              </div>
            </div>
          </div>
        </div>
          
          <h2 id="date"></h2>
          <div id="bellSchedulePanel" class="panel panel-default">
              <div class="panel-heading">Be</div>
              <div id="bellSchedule" class="panel-body">
                
              </div>
            </div>
    
      </div>
      <div class="screen" id="login">
            <h2 id="signInMessage">Sign in with your @cps account.</h2>
            <div class="g-signin2" data-onsuccess="onSignIn" data-prompt="select_account"></div>
    
      </div>
      <div class="screen" id="myStudents">
          <h2>My Students</h2>
          <table id="tableStudents" data-show-toggle="true" data-show-columns="true" data-search="true" data-show-export="true" data-id-field="studentId" data-detail-view="true" data-filter-control="true" ></table>
      </div>
      <div class="screen" id="resources">
        <h2>Resources</h2>
        <div class="panel-group" id="accordion">
    			  <!-- unsubmitted attendance -->
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="" aria-expanded="true">Unsubmitted Attendance & Attendance Corrections</a>
    			      </h4>
    			    </div>
    			    <div id="collapse1" class="panel-collapse collapse" aria-expanded="true" style="">
    			      <div class="panel-body">
    
                    A report for unsubmitted attendance will be run daily approximately 10 minutes after the beginning of 8th period.  Teachers receiving an email should complete the <a href="https://docs.google.com/a/cps.edu/forms/d/1LorJwgoZ-JsyPcFJc5A8h0gJsBFLwl5gr-h86sXhD7w/viewform" target="_blank">Unsubmitted Attendance</a> form and schedule a meeting with the Assistant Principal over their department for the following day to ensure that the corrections are made.<br><br>
                    If you have make a correction to previously submitted attendance, please submit the changes for each student on the <a href="https://docs.google.com/a/cps.edu/forms/d/1LorJwgoZ-JsyPcFJc5A8h0gJsBFLwl5gr-h86sXhD7w/viewform" target="_blank">Attendance Correction</a> form within 1 week of the error.  Please do not wait until the end of the marking period to make corrections.
    			      </div>
    			    </div>
    			  </div>
    			  
    			  
    			  
    			  
    			  <!-- Tech Support -->
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false">Tech Support</a>
    			      </h4>
    			    </div>
    			    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
    			      <div class="panel-body">				
                    Zen Desk - <a href="http://lanetech.zendesk.com" target="_blank"><strong>Report Issue!</strong></a><br>
                    Lab Calendar Instructions - <a href="https://docs.google.com/a/cps.edu/document/d/1FmbHu94lSSpSNzTrSqmBx5iGntDqzAF_Z4FcOszK6t4" target="_blank">Click Here</a><br>
    				Discounted software - <a href="http://www.microsofthup.com/hupus/home.aspx?dialect_id=en-US&country_id=US" target="_blank">Shop now!</a><br>
                    Free MS Office 365 Education - <a href="http://office.microsoft.com/en-us/office-in-education-FX104367920.aspx" target="_blank">Click Here</a>
                    <ul>
                    	<li>Click link to "find out if you're eligible"</li>
                    	<li>Type in your school email address: username@cps.edu</li>
                        <li>Check your CPS Email for link. Email should be from Microsoft Office 365 Team.</li>
                        <li>You may need to login or create an account.</li>
                        <li>If you need to download for Mac, you need to be clicking on the link on a Mac Computer. If you want the PC version, click the link from a PC.</li>
                    </ul></div>
    			    </div>
    			  </div>
    			  <!-- Engineering and Building Use -->
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          
    			          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
    			          &nbsp;&nbsp; <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false">
    			        Engineering & Building Use</a>
    			      </h4>
    			    </div>
    			    <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
    			      <div class="panel-body">
    				
                    <strong><a href="https://docs.google.com/a/cps.edu/forms/d/1kYD6O9Fte9KjgJBSkiABHiLCoNHVpRJ2F1D8nmVHjK0/viewform" target="_blank">Click here</a></strong> to report any structural issues with your classroom and/or office<br><br>
                    <strong><a href="https://docs.google.com/a/cps.edu/document/d/1FmbHu94lSSpSNzTrSqmBx5iGntDqzAF_Z4FcOszK6t4/" target="blank">Click here</a></strong> to access the reservation calendar for shared spaces.<br><br>
                    <!--<strong><a href="https://docs.google.com/a/cps.edu/forms/d/11GEVk-oR8tapUgfhA0q79GGG1EVtFFKQwBOMRJ4jrSI/viewform" target="_blank">Click here</a></strong> to reserve the Library Media Room (pending approval).<br><br>-->
                    If you are using building space other than your classroom, please <!--check the <a href="http://www.google.com/calendar/embed?src=cps.edu_34a0fj4iepfs44g6l9626rri1g%40group.calendar.google.com&ctz=America/Chicago">building operations calendar</a> and then -->fill out <a href="https://docs.google.com/a/cps.edu/file/d/0B4V9Lsog04thNzFLc0JHQkdLWGM/edit?usp=sharing" target="_blank">this form</a> (requires login) and return it to Ms. Degante in the Records Office<br><br>			      	
    			      </div>
    			    </div>
    			  </div>
    			</div>
      </div>
      <div class="screen" id="profile">
        <form id="profileForm" class="form-horizontal">
          <fieldset id="profileFieldset">
            
            <div id="profileButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="profileButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
      </div>
      
      <div class="screen" id="commLog">
    
        <form id="commLogForm" class="form-horizontal">
          <fieldset id="commLogFieldset">
            <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Create Communication Log Entry</h2> 
            
            <label for="student_id" class="control-label col-lg-2">Student ID</label>
            <div class="col-lg-10 form-group"><input list="commLogStudents" id="student_id" name="student_id" maxlength="25" class="form-control ltdata"></div>
            <datalist id="commLogStudents"></datalist>
            
            
            <label for="dateTime" class="control-label col-lg-2">Communication Date/Time</label>
            <div class="col-lg-10 form-group"><input  id="dateTime" type="datetime-local" name="dateTime" class="form-control ltdata">
            <a data-count="-1" class="btn btn-primary btn-xs changeDay" href="#" role="button"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
            <a data-count="0" class="btn btn-primary btn-xs setNow" href="#" role="button"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a>
            <a data-count="1" class="btn btn-primary btn-xs changeDay" href="#" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <a data-count="-5" class="btn btn-primary btn-xs changeTime" href="#" role="button"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> 5</a>
            <a data-count="0" class="btn btn-primary btn-xs setNow" href="#" role="button"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></a>
            <a data-count="5" class="btn btn-primary btn-xs changeTime" href="#" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 5</a>



            
            
            </div>
            <label for="method" class="control-label col-lg-2">Communication Method</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" list="commMethods" id="method" name="method" >
            <datalist id="commMethods" name="commMethods">
                <option>Email</option>
                <option>Phone</option>
                <option>Conference</option>
            </datalist></div>
            <label for="category" class="control-label col-lg-2">Communication Category</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" list="commCategories" id="category" name="category" >
            <datalist id="commCategories" name="commCategories">
                <option>Academic</option>
                <option>Arts</option>
                <option>Athletics</option>
                <option>Attendance</option>
                <option>Discipline</option>
                <option>Extra-curricular</option>
                <option>Social/Emotional</option>
            </datalist></div>
            <label for="subject" class="control-label col-lg-2">Subject</label>
            <div class="col-lg-10 form-group">
                <input id="subject" name="subject" maxlength="50" class="form-control ltdata" placeholder="Enter a brief subject line (50 characters max)" >
            </div>
            <label for="summary" class="control-label col-lg-2">Summary</label>
            <div class="col-lg-10 form-group"><textarea  id="summary" name="summary" maxlength="1000" class="form-control ltdata" placeholder="Enter a summary of the communication (1000 characters max)"></textarea></div>
            
         
            
            <label for="commLogButtons" class="control-label col-lg-2"></label>
            <div id="commLogButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="commLogButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
      </div>
      <div class="screen" id="demerit">
        
        
        <form id="demeritForm" class="form-horizontal">
          <fieldset id="demeritFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Create Demerit Entry</h2> 
              
            <label for="student_id" class="control-label col-lg-2">Student ID</label>
            <div class="col-lg-10 form-group"><input list="commLogStudents" id="student_id" name="student_id" maxlength="25" class="form-control ltdata" list="commLogStudents"></div>
            
            
            
            <label for="dateTime" class="control-label col-lg-2">Date/Time of communication</label>
            <div class="col-lg-10 form-group"><input  id="dateTime" type="datetime-local" name="dateTime" class="form-control ltdata"></div>
            
            <label for="reason" class="control-label col-lg-2">Reason</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" list="demeritReasons" id="reason" name="reason" >
            <datalist id="demeritReasons" name="demeritReasons">
                <option>Attendance</option>
                <option>Dress Code</option>
            </datalist></div>
            
            <label for="amount" class="control-label col-lg-2">Number of demerits</label>
            <div class="col-lg-10 form-group"><input disabled value="1" id="amount" type="number" step="1" min="-10" max="10" name="amount" class="form-control ltdata"></div>
            
            
            
            <label for="comment" class="control-label col-lg-2">Comment</label>
            <div class="col-lg-10 form-group"><textarea  id="comment" name="comment" maxlength="255" class="form-control ltdata"></textarea></div>
            
         
            
            <label for="demeritButtons" class="control-label col-lg-2"></label>
            <div id="demeritButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="demeritButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
      </div>
      <div class="screen" id="event">
        
        
        <form id="eventForm" class="form-horizontal">
          <fieldset id="eventFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Create Event</h2> 
              

            <label for="dateTime" class="control-label col-lg-2">Start Date/Time</label>
            <div class="col-lg-10 form-group"><input  id="startDateTime" type="datetime-local" name="startDateTime" class="form-control ltdata"></div>
            
            <label for="durationMinutes" class="control-label col-lg-2">Duration (in minutes)</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata"  type="number" step="10" min="10" max="480" id="durationMinutes" name="durationMinutes" placeholder="Enter duration in minutes"></div>
            
            
            <label for="type" class="control-label col-lg-2">Event Type</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" list="eventTypes" id="type" name="type" >
            
            <datalist id="eventTypes" name="eventTypes">
                <option>Detention</option>
            </datalist>
            </div>
            
            <label for="title" class="control-label col-lg-2">Event Title</label>
            <div class="col-lg-10 form-group"><input id="title"  type="text" name="title" class="form-control ltdata"></div>
            
            
            
            <label for="comment" class="control-label col-lg-2">Description</label>
            <div class="col-lg-10 form-group"><textarea  id="description" name="description" maxlength="255" class="form-control ltdata"></textarea></div>
            
            <label for="location" class="control-label col-lg-2">Location</label>
            <div class="col-lg-10 form-group"><input id="location"  type="text" name="location" class="form-control ltdata"></div>
            
            <label for="eventButtons" class="control-label col-lg-2"></label>
            <div id="eventButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="eventButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
      </div>
      <div class="screen" id="searchEventStudents">
        
        <form id="eventStudentsSearchForm" class="form-horizontal">
          <fieldset id="eventStudentsSearchFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Student Events Search</h2> 
              <p><a id="btnGetEvents" class="btn btn-primary btn-sm" href="#" role="button">Get Events</a></p>
            <label for="eventStudentsEventSelect" class="control-label col-lg-2"></label>
            <div  class="form-group col-lg-10">
                <select id="eventStudentsEventSelect">
                  <option value="0"></option>
                </select>
            </div>


            <label for="eventStudentsSearchButtons" class="control-label col-lg-2"></label>
            <div id="eventStudentsSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="eventStudentsSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        

      </div>          
      </div>
      
      
      
      <div class="screen" id="editSection">
        
        
        <form id="editSectionForm" class="form-horizontal">
          <fieldset id="editSectionFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Edit Section</h2> 
              
            <label for="id" class="control-label col-lg-2">Section ID</label>
            <div class="col-lg-10 form-group"><input  id="id" name="id" disabled class="form-control ltdata"></div>
            
            <label for="courseCode" class="control-label col-lg-2">Course Code</label>
            <div class="col-lg-10 form-group"><input  id="courseCode" name="courseCode" disabled class="form-control ltdata"></div>
            
            <label for="courseName" class="control-label col-lg-2">Course Name</label>
            <div class="col-lg-10 form-group"><input  id="courseName" name="courseName" disabled class="form-control ltdata"></div>
            
            
            <label for="number" class="control-label col-lg-2">Section Number</label>
            <div class="col-lg-10 form-group"><input  id="number" name="number" disabled class="form-control ltdata"></div>
 
            <label for="period" class="control-label col-lg-2">Period</label>
            <div class="col-lg-10 form-group"><input  id="period" name="period" disabled class="form-control ltdata"></div> 
 
            
            <label for="room" class="control-label col-lg-2">Room</label>
                <div class="col-lg-10 form-group"><input  id="room" name="room" class="form-control ltdata" maxlength="10"></div>

            <label for="editSectionButtons" class="control-label col-lg-2"></label>
            <div id="editSectionButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="editSectionButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
      </div>
      <div class="screen" id="myDepartments">
        <div class="container">
           <img class="loader" src="/applications/assets/Loading_2.gif" alt="Loading..."> 
        </div>
      </div>
      <div class="screen" id="myCourseSections">
        <div class="container">
           <img class="loader" src="/applications/assets/Loading_2.gif" alt="Loading..."> 
        </div>
      </div>
      <div class="screen" id="myCommunicationLogEntries">
        <div class="container">
             <h2 class="col-lg-12 form-group">My Communication Log Entries</h2> 
           <img class="loader" src="/applications/assets/Loading_2.gif" alt="Loading..."> 
              <table id="tableCommunicationLogEntries" data-show-toggle="true" data-show-columns="true" data-search="true" data-detail-view="true" data-id-field="id"></table>
        
        </div>
      </div>
      <div class="screen" id="myDemeritEntries">
        <div class="container">
             <h2 class="col-lg-12 form-group">My Demerit Entries</h2> 
           <img class="loader" src="/applications/assets/Loading_2.gif" alt="Loading..."> 
              <table id="tableDemeritEntries" data-show-toggle="true" data-show-columns="true" data-search="true" data-detail-view="true" data-id-field="id"></table>
        
        </div>
      </div>
      <div class="screen" id="editStudentContacts">
        <form id="" class="form-horizontal">
          <fieldset id="">
            
            <div id="editStudentContactsButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="editStudentContactButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
      </div>
      <div class="screen" id="studentDetail">
          <div class="container">
          <h2></h2>
          <input type="hidden" id="id" name="id">
          <div class="panel-group" id="studentDetailAccordion">
                  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentProfile">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Profile</a>
    			      </h4>
    			    </div>
    			    <div id="studentProfile" class="panel-collapse collapse">
    			      <div id="studentProfilePanelBody" class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentDivisionInformation">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Division</a>
    			      </h4>
    			    </div>
    			    <div id="studentDivisionInformation" class="panel-collapse collapse">
    			      <div id="studentDivisionInformationPanelBody" class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentContactInformation">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Contacts</a>
    			      </h4>
    			    </div>
    			    <div id="studentContactInformation" class="panel-collapse collapse">
    			      <div id="studentContactInformationPanelBody" class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentCourseSections">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Student Course Sections</a>
    			      </h4>
    			    </div>
    			    <div id="studentCourseSections" class="panel-collapse collapse">
    			      <div class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentCommunicationLogEntries">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Communication Log Entries</a>&nbsp;&nbsp;
    			        <span id="badgeCommunicationLogEntriesCount" class="badge">4</span>
    			      <a class="studentDetailCommLogEntry" href="javascript:void(0)" title="Communication Log Form"><i class="glyphicon glyphicon-comment"></i></a>
    			      
    			      </h4>
    			    </div>
    			    <div id="studentCommunicationLogEntries" class="panel-collapse collapse">
    			      <div class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentArchiveCommunicationLogEntries">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Archive Communication Log Entries</a>&nbsp;&nbsp;
    			        <span id="badgeArchiveCommunicationLogEntriesCount" class="badge">4</span>
    			      </h4>
    			    </div>
    			    <div id="studentArchiveCommunicationLogEntries" class="panel-collapse collapse">
    			      <div class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentDemeritEntries">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Demerit Entries</a>&nbsp;&nbsp;
    			        <span id="badgeDemeritCount" class="badge"></span>
    			        <span id="badgeDemeritEntryCount" class="badge"></span>
    			      </h4>
    			    </div>
    			    <div id="studentDemeritEntries" class="panel-collapse collapse">
    			      <div class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    <div class="panel-heading">
    			      <h4 class="panel-title">
    			          <a data-toggle="collapse" data-parent="#studentDetailAccordion" href="#studentAbsenceEntries">
    			        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;&nbsp;Absence Entries</a>&nbsp;&nbsp;
    			        <span id="badgeAbsenceCount" class="badge"></span>
    			        <span id="badgeTardyCount" class="badge"></span>
    			      </h4>
    			    </div>
    			    <div id="studentAbsenceEntries" class="panel-collapse collapse">
    			      <div class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    			  <div class="panel panel-default">
    			    
    			    <div id="studentImage" class="panel-collapse ">
    			      <div class="panel-body">
    			      	
    			      </div>
    			    </div>
    			  </div>
    	    </div>          
    </div>
    
      </div>
      <div class="screen" id="myTasks">

      <div class="container">
           <h2 class="col-lg-12 form-group">My Tasks</h2>
           <div class="panel panel-warning">
              <div class="panel-heading">Still under development</div>
              <div class="panel-body">
                This feature needs work, but it should be functional.<br><br>
                The display won't automatically refresh to show your updates;  if you need to verify, you can reload the page/app.
              </div>
            </div>
           <div class="screen-content">
               <img class="loader" src="/applications/assets/Loading_2.gif" alt="Loading..."> 
            </div>
        </div>
    </div>
      <div class="screen" id="studentSearch">
                <form id="studentSearchForm" class="form-horizontal">
          <fieldset id="studentSearchFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Student Search</h2> 
              
            <label for="student_id" class="control-label col-lg-2">Student ID</label>
            <div class="col-lg-10 form-group"><input id="id" name="id" maxlength="25" class="form-control ltdata"></div>
            
            <label for="firstName" class="control-label col-lg-2">First Name</label>
            <div class="col-lg-10 form-group"><input id="firstName" name="firstName" maxlength="25" class="form-control ltdata"></div>
            
            <label for="lastName" class="control-label col-lg-2">Last Name</label>
            <div class="col-lg-10 form-group"><input id="lastName" name="lastName" maxlength="25" class="form-control ltdata"></div> 
            <label for="studentSearchButtons" class="control-label col-lg-2"></label>
            <div id="studentSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="studentSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
        <table id="tableStudentSearch" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="ckStudentId"  data-id-field="id"
        ></table>
        <div>
            <button id="btnAddToEvent" type="button" class="btn btn-primary hidden"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Add to Event</button>
        </div>
        
      </div>
      <div class="screen" id="eventSearch">
          <form  class="form-horizontal">
          <fieldset>
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Event Search</h2> 

            
            <label for="type" class="control-label col-lg-2">Event Type</label>
            <div class="col-lg-10 form-group"><input id="type" name="type" maxlength="25" list="eventTypes" class="form-control ltdata"></div>
            
            <label for="lowerBound_startDateTime" class="control-label col-lg-2">From Date</label>
            <div class="col-lg-10 form-group"><input id="lowerBound_startDateTime" name="lowerBound_startDateTime" type="date" class="form-control ltdata"></div> 
            <label for="upperBound_startDateTime" class="control-label col-lg-2">To Date</label>
            <div class="col-lg-10 form-group"><input id="upperBound_startDateTime" name="upperBound_startDateTime" type="date" class="form-control ltdata"></div> 
            
            <label for="eventSearchButtons" class="control-label col-lg-2"></label>
            <div id="eventSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="eventSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
        <table id="tableEventSearch"   data-id-field="id"
        ></table>
        <h2 id="eventStudentsTableHeader"></h2>
        <table id="tableEventStudentsSearch"  data-select-item-name="ckStudentEventId" data-id-field="id"></table>        
        <div>
            <button id="btnShowStudentEventUpdateModal" type="button" class="btn btn-primary hidden"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Update Status</button>
        </div>
        
      </div>
      <div class="screen" id="communicationLogSearch">
        <form id="communicationLogSearchForm" class="form-horizontal">
          <fieldset id="communicationLogSearchFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Communication Log Search</h2> 
              
            <label for="student_id" class="control-label col-lg-2">Student ID</label>
            <div class="col-lg-10 form-group"><input id="student_id" name="student_id" maxlength="25" class="form-control ltdata" list="commLogStudents"></div>
            
            <label for="studentFirstName" class="control-label col-lg-2">Student First Name</label>
            <div class="col-lg-10 form-group"><input id="studentFirstName" name="studentFirstName" maxlength="25" class="form-control ltdata"></div>

            <label for="studentLastName" class="control-label col-lg-2">Last Name</label>
            <div class="col-lg-10 form-group"><input id="studentLastName" name="studentLastName" maxlength="25" class="form-control ltdata"></div> 

            <label for="staffFirstName" class="control-label col-lg-2">Staff First Name</label>
            <div class="col-lg-10 form-group"><input id="staffFirstName" name="staffFirstName" maxlength="25" class="form-control ltdata"></div>

            <label for="staffLastName" class="control-label col-lg-2">Staff Last Name</label>
            <div class="col-lg-10 form-group"><input id="staffLastName" name="staffLastName" maxlength="25" class="form-control ltdata"></div>

            <label for="category" class="control-label col-lg-2">Communication Category</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" list="commCategories" id="category" name="category" ></div>



            <label for="communicationLogSearchButtons" class="control-label col-lg-2"></label>
            <div id="communicationLogSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="communicationLogSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
        <table id="tableCommunicationLogSearch" data-show-toggle="true" data-show-columns="true" data-detail-view="true" data-search="true" data-id-field="id"></table>        
        
      </div>
      <div class="screen" id="demeritSearch">
        <form id="demeritSearchForm" class="form-horizontal">
          <fieldset id="demeritSearchFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Demerit Search</h2> 
              
            <label for="student_id" class="control-label col-lg-2">Student ID</label>
            <div class="col-lg-10 form-group"><input id="student_id" name="student_id" maxlength="25" class="form-control ltdata" list="commLogStudents"></div>
            
            <label for="studentFirstName" class="control-label col-lg-2">Student First Name</label>
            <div class="col-lg-10 form-group"><input id="studentFirstName" name="studentFirstName" maxlength="25" class="form-control ltdata"></div>

            <label for="studentLastName" class="control-label col-lg-2">Last Name</label>
            <div class="col-lg-10 form-group"><input id="studentLastName" name="studentLastName" maxlength="25" class="form-control ltdata"></div> 

            <label for="staffFirstName" class="control-label col-lg-2">Staff First Name</label>
            <div class="col-lg-10 form-group"><input id="staffFirstName" name="staffFirstName" maxlength="25" class="form-control ltdata"></div>

            <label for="staffLastName" class="control-label col-lg-2">Staff Last Name</label>
            <div class="col-lg-10 form-group"><input id="staffLastName" name="staffLastName" maxlength="25" class="form-control ltdata"></div>

            <label for="reason" class="control-label col-lg-2">Reason</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" list="demeritReasons" id="reason" name="reason" >
            </div>

            <label for="demeritSearchButtons" class="control-label col-lg-2"></label>
            <div id="demeritSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="demeritSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
        <table id="tableDemeritSearch" data-show-toggle="true" data-show-columns="true" data-detail-view="true" data-search="true" data-id-field="id"></table>        
        
      </div>
      <div class="screen" id="demeritTotalsSearch">
        <form id="demeritTotalsSearchForm" class="form-horizontal">
          <fieldset id="demeritTotalsSearchFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Demerit Totals Search</h2> 

            <label for="demeritTotalsSearchButtons" class="control-label col-lg-2"></label>
            <div id="demeritTotalsSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="demeritTotalsSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
        <table id="tableDemeritTotalsSearch" data-show-toggle="true" data-show-columns="true" data-filter-control="true" data-show-export="true" data-search="true"  data-select-item-name="ckStudentId" data-id-field="studentId"></table>        
        <div>
            <button id="btnShowAddToEventModal" type="button" class="btn btn-primary hidden"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Add to Event</button>
        </div>
      </div>
      <div class="screen" id="absenceSearch">
        <form id="absenceSearchForm" class="form-horizontal">
          <fieldset id="absenceSearchFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Student Absence Search</h2> 
              
            <label for="student_id" class="control-label col-lg-2">Student ID</label>
            <div class="col-lg-10 form-group"><input id="student_id" name="student_id" maxlength="25" class="form-control ltdata" list="commLogStudents"></div>
            
            <label for="studentFirstName" class="control-label col-lg-2">Student First Name</label>
            <div class="col-lg-10 form-group"><input id="studentFirstName" name="studentFirstName" maxlength="25" class="form-control ltdata"></div>

            <label for="studentLastName" class="control-label col-lg-2">Last Name</label>
            <div class="col-lg-10 form-group"><input id="studentLastName" name="studentLastName" maxlength="25" class="form-control ltdata"></div> 

            <label for="date" class="control-label col-lg-2">Date</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" id="date" name="date" type="date" min="2017-09-05"></div>

            <label for="limit" class="control-label col-lg-2">Max Results</label>
            <div class="col-lg-10 form-group"><input class="form-control ltdata" id="limit" name="limit" type="text" list="listLimits" value="100">
                <datalist name="listLimits" id="listLimits">
                    <option>100</option>
                    <option>1000</option>
                </datalist>
            </div>

            <!--<label for="staffFirstName" class="control-label col-lg-2">Staff First Name</label>-->
            <!--<div class="col-lg-10 form-group"><input id="staffFirstName" name="staffFirstName" maxlength="25" class="form-control ltdata"></div>-->

            <!--<label for="staffLastName" class="control-label col-lg-2">Staff Last Name</label>-->
            <!--<div class="col-lg-10 form-group"><input id="staffLastName" name="staffLastName" maxlength="25" class="form-control ltdata"></div>-->





            <label for="absenceSearchButtons" class="control-label col-lg-2"></label>
            <div id="absenceSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="absenceSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
        <table id="tableAbsenceSearch" data-select-item-name="ckAbsenceId" data-show-toggle="true" data-show-columns="true" data-detail-view="true" data-filter-control="true" data-search="true" data-id-field="id"></table>
        <div>
            <button id="btnUpdateAbsenceStatus" type="button" class="btn btn-primary hidden"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Update Absence Status</button>
        </div>
        
        
      </div>      
      <div class="screen" id="staffSearch">
        <form id="staffSearchForm" class="form-horizontal">
          <fieldset id="staffSearchFieldset">
              
             <label  class="control-label col-lg-2"></label> 
             <h2 class="col-lg-10 form-group">Staff Search</h2> 
              
            <label for="firstName" class="control-label col-lg-2">First Name</label>
            <div class="col-lg-10 form-group"><input id="firstName" name="firstName" maxlength="25" class="form-control ltdata"></div>
            
            <label for="lastName" class="control-label col-lg-2">Last Name</label>
            <div class="col-lg-10 form-group"><input id="lastName" name="lastName" maxlength="25" class="form-control ltdata"></div> 
             
            <label for="latestYear" class="control-label col-lg-2">Latest Year</label>
            <div class="col-lg-10 form-group"><input value="1718" id="latestYear" name="latestYear" maxlength="4" class="form-control ltdata"></div> 
            
            <label for="staffSearchButtons" class="control-label col-lg-2"></label>
            <div id="staffSearchButtons" class="form-group col-lg-10">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button id="staffSearchButton" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </fieldset>
        </form>
        
        <table id="tableStaffSearch" data-show-toggle="true" data-show-columns="true" data-detail-view="true" data-show-export="true" data-search="true" data-id-field="id"></table>        
        
      </div>      
      <div class="screen" id="attendanceFiles">
        <div class="container">
           <h2 class="col-lg-12 form-group">Attendance File and Demerit Processing</h2>
           
           <div id="uploadAttendanceFile" class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Upload Attendance File
            </div>
            <div class="panel-body">
              <p>Upload an attendance file (downloaded from Gradebook.)</p>
              <p><input type="file" name="fileAttendance" id="fileAttendance">
              </p>
              <p>
                 <a id="btnUploadAttendanceFile" class="btn btn-primary btn-sm" href="#" role="button">Upload Attendance File</a>
                </p>
            </div>          
        </div>

           <div id="processAttendanceFiles" class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Process Attendance Files
            </div>
            <div class="panel-body">
              <p>Create attendance records based on the uploaded file.</p>
              <p><a id="btnGetUnprocessedAttendanceFiles" class="btn btn-primary btn-sm" href="#" role="button">Get Unprocessed Attendance Files</a></p>
              <div id="unprocessedAttendanceFiles">  </div>
              
            </div>          
        </div>


           

           <div id="unprocessedDemeritDates" class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Process Attendance Demerits</div>
            <div class="panel-body">
              <p>List of dates for which attendance records have been created but for which the demerits have not been created.  Click the relevant button to create attendance demerits for that date.</p>
              <p><a id="getUnprocessedDemeritDates" class="btn btn-primary btn-sm" href="#" role="button">Get Unprocessed Demerit Dates</a>
              </p>
              <div id="unprocessedDemeritDatesButtons"></div>
            </div>          
        </div>
           
           
           

           
           
           
           
           
           
      </div>
    
</div>
</div>

<div class="container" style="display:none;">
    <h1>Teacher</h1>
    Filter  by:
    <label for="selDepartment">Completion Status</label>
    <select name="selDepartment" id="selDepartment">
        <option value="Any" selected>Any</option>
        
    </select>
    <label for="selGrade">Grade Level (17-18 SY)</label>
    <select name="selGrade" id="selGrade">
        <option value="Any" selected>Any</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <label for="txtStudentId">Student Id</label>
    <input type="text" id="txtStudentId" name="txtStudentId" placeholder="8-digit student id">
    <label for="selLimit">Max Records</label>
    <select name="selLimit" id="selLimit">
        <option value="10">10</option>
        <option value="100" selected>100</option>
        <option value="1000">1000</option>
        <option value="5000">5000</option>
    </select>

    <a id="search" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</a>
</div>
<hr>
<div id="searchResults" class="container"  style="display:none;">
    <table id="tableResults" data-detail-view="true" class="table table-striped">

    </table>
    
</div>

<div id="genericModal"  class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">hmmm...something's not right</h4>
      </div>
      <div class="modal-body">
        <p>If you're seeing this, some error occurred and a valid response was not received from the, very possibly due to your login having timed-out.  We're working on implementing a better app awareness of you're logged-in state, but it's not in place yet. <br><br>
            Please refresh the app/page (copy any important form data first), log in, and try it again.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnModal" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<div id="absenceUpdateModal"  class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Update Absence Records</h4>
      </div>
      <div class="modal-body">
        <p></p>
        <p>Select the updated absence status for these records, and click the <strong>Change Status</strong> button when ready.
        </p>
        <p><strong>Note:</strong>The display won't automatically refresh with the new values, but you can submit the same search to verify that your changes were recorded.</p>
        <select id="absenceModalStatus" name="absenceModalStatus">
            <option>AEX</option>
            <option>AUX</option>
            <option>RHOL</option>
            <option>SF</option>
            <option>T</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnModal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-updateAbsenceStatus">Change Status</button>
      </div>
    </div>
  </div>
</div>

<div id="studentEventUpdateModal"  class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Update Student Event Records</h4>
      </div>
      <div class="modal-body">
        <p></p>
        <p>Select the updated absence status for these records, and click the <strong>Change Status</strong> button when ready.
        </p>
        <p><strong>Note:</strong>The display won't automatically refresh with the new values, but you can submit the same search to verify that your changes were recorded.</p>
        <select id="studentEventModalStatus" name="studentEventModalStatus">
            <option></option>
            <option>Attended: Met Requirements</option>
            <option>Attended: Did Not Meet Requirements</option>
            <option>Did not attend</option>
            
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnModal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-updateAbsenceStatus">Change Status</button>
      </div>
    </div>
  </div>
</div>









<div id="addToEventModal"  class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add To Event</h4>
      </div>
      <div class="modal-body">
        <p></p>
        <p>Choose an event, and click the <strong>Add to Event</strong> button when ready.
        </p>
        <!--<p><strong>Note:</strong>The display won't automatically refresh with the new values, but you can submit the same search to verify that your changes were recorded.</p>-->
        <select id="addToEventModalEventId" name="addToEventModalEventId">
            <option value="0"></option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnModal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ">Add To Event</button>
      </div>
    </div>
  </div>
</div>




<div id="contactEditModal"  class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit Contact</h4>
      </div>
      <div class="modal-body">
        <p><strong>Note:</strong>The display won't automatically refresh with the new information, but you can submit the same search to verify that your changes were recorded.</p>
        <form class="form-horizontal">
          
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnModal" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-updateContact">Update Contact</button>
      </div>
    </div>
  </div>
</div>

<div id="studentImageModal"  class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Student Name and Id</h4>
      </div>
      <div class="modal-body">
       Student image should be visible here
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<div class="media" id="contactTemplate" style="display:none;">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="..." alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><strong>Name</strong></h4>
    <p class="contact-address"></p>
    <div>
        <abbr title='Phone'>P:</abbr><span class="contact-phone"></span>&nbsp;&nbsp;
        <abbr title='Cell'>C:</abbr><span class="contact-cell"></span>&nbsp;&nbsp;
        <abbr title='Email'>E:</abbr><span class="contact-email"></span>&nbsp;&nbsp;
    </div>
  </div>
</div>
<div class="panel panel-default hide panel-contact" id="contactPanelTemplate" >
  <div class="panel-heading">
    <h3 class="panel-title"><strong></strong></h3>
  </div>
  <div class="panel-body"></div>
</div>

<script>

    var data;
    var now = new Date();
var departmentsWithDemeritAmountPermission = ["Attendance","Administration"];
var departmentsWithContactEditPermission =  ["Attendance","Administration"];    
      function setDateTimeInputValueToNow (jqObj) {
        var now = new Date();
        jqObj.val(new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19));
      }
      
      function changeDateTimeInputValue(jqObj, minutes) {
        var dateTime = new Date(jqObj.val());
        var newDateTime = addMinutes(dateTime, minutes);
        jqObj.val(new Date(newDateTime.getTime()-newDateTime.getTimezoneOffset()*60000).toISOString().substring(0,19));
      }

      // from https://stackoverflow.com/questions/1197928/how-to-add-30-minutes-to-a-javascript-date-object
      function addMinutes(date, minutes) {
          return new Date(date.getTime() + minutes*60000);
      }
      
        function showEventStudents(eventId) {
          //var eventId = $("#eventStudentsEventSelect").val();
          getDataWithParams("vwStudentEvents", {"event_id" : eventId},function(response) {
            loadCoursesAndStudents (response.data, "tableEventStudentsSearch");
          });
        }  



function patchData(resource,key,columnData) {
        console.log("testPatch");
        console.log(key,columnData);
        
        
        $.post(
                    'https://lanetech.org/api/v2/api.php/' + resource + '/' + key, 
                    
                    { 
                        idtoken: id_token,
                        method: "PATCH",
                        columns: columnData
                    },
                    function(response) {
                        //console.log(response);
                        // $("#notification p").text("Profile updated");
                        // $("#notification strong").text("Success");
                        // $("#notification").show();
                        showModal(response.result, response.message);
                        $("#profileButton").prop("disabled",false);
                        $("#editSectionButton").prop("disabled",false);
                    });
        
        };


        function handleFormResponse(resource,response) {
            console.log(response);
            showModal(response.result,response.message);
            if ($("#genericModal h4").text() == "success") {
               var formEl,submitButton;
               switch(resource) {
                 case 'Communication' :
                     formEl = $("#commLogForm")[0];
                     submitButton = $("#commLogForm button[type='Submit']");
                     break;
                case 'Demerit' :
                   formEl = $("#demeritForm")[0];
                   submitButton = $("#demeritForm button[type='Submit']")
                   break;
                case 'Event' :
                   formEl = $("#eventForm")[0];
                   submitButton = $("#eventForm button[type='Submit']")
                   break;
                }
                formEl.reset();
                submitButton.prop('disabled',false);
        }
        }
        
        /***************************************
         *  function postData
         * 
         * 
        ***************************************/
        function postData(resource, columnData, responseHandler) {
        $.post(
                    'https://lanetech.org/api/v2/api.php/' + resource + '/', 
                    
                    { 
                        idtoken: id_token,
                        method: "POST",
                        columns: columnData
                    },
                    function(response) {
                        handleFormResponse(resource,response);
                    });
        };

        
         function checkResponseError (response) {
            if (response["result"] == "error") {
                showModal(response["result"],response["message"]);
            }
        }
        
        
        
        function getData(strResource, strKey) {
            $.post(
                    'https://lanetech.org/api/v2/api.php/' + strResource + '/' + (strKey != 0 ? strKey : ''), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        console.log(response);
                    });
            }     

    
    $(function() {
        
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        
        
        $("#home").find("#date").html("It's " + now.toLocaleDateString('en-US', options));
        
        
        getPublicData('vwDayBellSchedules',loadBellSchedule);
        
        $("#btnUpdateAbsenceStatus").on("click", showAbsenceUpdateModal);
        
        $("#btnShowStudentEventUpdateModal").on("click", showStudentEventUpdateModal);
        
        $("#btnAddToEvent").on("click", showAddToEventModal);
        
        $("#eventSearchButton").on("click", function() {
          var params = $("#eventSearch form").serializeArray();
          params = params.filter(function(el) {return el.value != "";});
          getDataWithParams('Event', params , function(response) {
            loadCoursesAndStudents (response.data, "tableEventSearch");
          });
          return false;
        })
        
           
        $("#btnShowAddToEventModal").on("click", showAddToEventModal);  
        
        $(".setNow").on("click", function() {
          setDateTimeInputValueToNow($("#commLogForm #dateTime"));
        })
        
        $(".changeDay").on("click", function() {
            var dayCount=$(this).attr("data-count");
            var diffMinutes = dayCount*24*60;
            changeDateTimeInputValue($("#commLogForm #dateTime"),diffMinutes);  
        });
        
        $(".changeTime").on("click", function() {
            var minutesCount=$(this).attr("data-count");
            changeDateTimeInputValue($("#commLogForm #dateTime"),minutesCount);  
        });
        
        $("a[href='#commLog']").on("click", function() {
          setDateTimeInputValueToNow($("#commLogForm #dateTime"));
        });
        
        
        
        
        
           
           
        $("#btnGetEvents").on("click", function() {
          getData('Event',0, function(response) {
            
            $("#eventStudentsEventSelect option[value!='0']").remove();
            var sortedData = response.data.sort(function(a,b) {
              return a.startDateTime < b.startDateTime;
            });
            
            
            $.each(sortedData, function(i,v){
              var option = $("<option>");
              option.attr("value", v.id);
              option.text(v.startDateTime + " - " + v.type);
              $("#eventStudentsEventSelect").append(option);
            });
            
          });
          
        });      
        
        $("#eventStudentsSearchButton").on("click", function() {
          var eventId = $("#eventStudentsEventSelect").val();
          getDataWithParams("vwStudentEvents", {"event_id" : eventId},function(response) {
            loadCoursesAndStudents (response.data, "tableEventStudentsSearch");
          });
        });
        
      
        
        
        $("#btnGetUnprocessedAttendanceFiles").on("click", getUnprocessedAttendanceFiles);
 
 
 // the following is from 
 //    http://usefulangle.com/post/14/jquery-2-ways-of-ajax-file-upload-formdata-and-filereader
 
        $("#btnUploadAttendanceFile").on('click', function() {
	// validate type of file
    if(['text/csv'].indexOf($("#fileAttendance").get(0).files[0].type) == -1) {
        alert('Error : Only JPEG, PNG & GIF allowed');
        return;
    }

    var $data = new FormData();
    $data.append('title', 'Attendance File');
    $data.append('file', $("#fileAttendance").get(0).files[0]);
    $data.append('idtoken', id_token);
    $data.append('method', 'OTHER');


	  // processData & contentType should be set to false
    
    $.ajax({
        type: 'POST',
        url:'https://lanetech.org/api/processes/processes.php/uploadAttendanceFile/', 
        data: $data,
        success: function(response) {
        	 showModal(response.result, response.message);
        },
        error: function(response) {
             showModal(response.result, response.message);
        },
        processData: false,
        contentType: false
    });
});
 
        $("body").on("click",".btnCreateAttendanceDemerits", function () {
            var date = $(this).attr("data-date");
            var button = $(this);
            $.post(
                    'https://lanetech.org/api/processes/processes.php/createDemeritsFromAttendanceData', 
                    { 
                        idtoken: id_token,
                        method: "GET",
                        attendanceDate: date
                    },
                    function(response) {
                        showModal(response.result, response.message);
                        if (response.result == "success") {
                          button.remove();
                        }
                    });
          
          
        });
        
        
        $("body").on("click",".btnProcessAttendanceFile", function () {
            var filename = $(this).attr("data-filename");
            var button = $(this);
            $.post(
                    'https://lanetech.org/api/processes/processes.php/createAttendanceEntriesFromFile', 
                    { 
                        idtoken: id_token,
                        method: "GET",
                        filename: filename
                    },
                    function(response) {
                        showModal(response.result, response.message);
                        if (response.result == "success") {
                          button.remove();
                        }
                    });
          
          
        });
        
        
        $("#getUnprocessedDemeritDates").on("click", function() {
              $.post(
                    'https://lanetech.org/api/v2/api.php/vwUnprocessedAttendanceDemeritDates', 
                    
                    { 
                        idtoken: id_token,
                        method: "GET",
                        
                    },
                    function (response) {
                        $("#unprocessedDemeritDatesButtons").empty();
                        $.each(response.data, function(i,v) {
                          
                          var button = $("<a>");
                          button.addClass("btn btn-primary btnCreateAttendanceDemerits");
                          button.text("Create demerits for " + v.date);
                          button.attr("data-date",v.date);
                          $("#unprocessedDemeritDatesButtons").append(button);
                          $("#unprocessedDemeritDatesButtons").append("<br><br>");
                        });

                    });
  
        });
        
        
        
        $(".studentDetailCommLogEntry").on("click", function() {
            console.log($(this));
            var student_id = $("#studentDetail input[id='id']").val();
            $("#commLogForm #dateTime").val(new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19));
            showCommLogEntryForm(student_id);
        });   
        
        $("#profileButton").on("click", function() {
           var key = $("input[id='id']").val();
           var profileData ={};
           $('#profileForm input.ltdata').filter(':enabled').each(function(){
                profileData[$(this).attr("id")] = $(this).val();
            });
           patchData('Staff',key,profileData);
           $("#profileButton").prop("disabled",true);
           $('html, body').animate({scrollTop: '0px'}, 300);
           return false;
       });


        $(".btn-updateContact").on("click", function() {
           var key = $("#contactEditModal form input[id='id']").val();
           var data ={};
           $('#contactEditModal form input.ltdata').filter(':enabled').each(function(){
                // only include changed fields
                if ($(this).attr("data-initial-value") != $(this).val()) {
                    data[$(this).attr("id")] = $(this).val();
                };
            });
           //console.log(key,data);
           patchData('Contact',key,data);
           $("#contactEditModal").modal("hide");
           return false;
       });

      
      function changeDateTimeInputValue(jqObj, minutes) {
        var dateTime = new Date(jqObj.val());
        var newDateTime = addMinutes(dateTime, minutes);
        jqObj.val(new Date(newDateTime.getTime()-newDateTime.getTimezoneOffset()*60000).toISOString().substring(0,19));
      }

      // from https://stackoverflow.com/questions/1197928/how-to-add-30-minutes-to-a-javascript-date-object
      function addMinutes(date, minutes) {
          return new Date(date.getTime() + minutes*60000);
      }



      function loadEditContactForm (response) {
            $("#contactEditModal form").empty();
            var contact = response.data[0];
            var input, div, label;
            $.each(contact, function(k,v) {
                formGroup = $('<div>');
                label = $('<label>');
                div = $('<div>');
                input = $('<input>');
                
                formGroup.addClass('form-group');

                label.attr('for',k);
                label.text(columns["Contact"][k]["Label"]);
                label.addClass("col-sm-2 control-label");
                input.attr('id',k);
                input.attr('placeholder',k);
                input.attr('type','text');
                input.addClass("form-control ltdata");
                input.attr("data-initial-value",v);
                input.val(v);

                //console.log(columns["Contact"][k]["Editable"],columns["Contact"][k]["Display"]);
                if (!columns["Contact"][k]["Editable"]) {
                  input.prop("readonly",true);
                }
                
                if (!columns["Contact"][k]["Display"]) {
                  formGroup.addClass("hidden");
                } 
                
                
                div.append(input);
                div.addClass('col-sm-10');
                formGroup.append(label);
                formGroup.append(div);
                
                $("#contactEditModal form").append(formGroup);
            })
    
            $("#contactEditModal").modal();
            
        }
        
        $("body").on("click", ".editContactButton", function() {
            console.log($(this));
            var contactId = $(this).attr("data-contact-id");
            getData('Contact',contactId,loadEditContactForm);
        });


       $("#editSectionButton").on("click", function() {
           console.log("editSectionButton.click");
           
           var key = $("#editSectionForm input[id='id']").val();
           var formData ={};
           $('#editSectionForm input.ltdata').filter(':enabled').each(function(){
                formData[$(this).attr("id")] = $(this).val();
            });
           patchData('Section',key,formData);
           $("#editSectionButton").prop("disabled",true);
           $('html, body').animate({scrollTop: '0px'}, 300);
           return false;
       });
 
       $("#commLogButton").on("click", function() {
           if ($("#commLogForm #dateTime").val() == "") {   
               showModal('Error in date-time value', 'Please enter both a date and time.')
               return false;
           }  
           $("#commLogButton").prop("disabled",true);
           
           var key = $("input[id='id']").val();
           var commLogData ={};
           $('#commLogForm .ltdata').filter(':enabled').each(function(){
                commLogData[$(this).attr("id")] = $(this).val();
            });
            console.log(commLogData);
           postData('Communication',commLogData);
           if ($("#genericModal h4").text() == "success") {
               $("#commLogForm")[0].reset();
           }
           
           $('html, body').animate({scrollTop: '0px'}, 300);
           $("#commLogButton").prop("disabled",false);
           return false;
       }); 
       
       $("#studentSearchButton").on("click", function() {
           var formValues = $("#studentSearchForm").serializeArray();
           var params = {};
           $.each(formValues, function(i,v) {
              if (v.value != "") {
                  params[v.name] = v.value;
              } 
           });
           searchStudents(params);
           return false;
       });

       $("#demeritTotalsSearchButton").on("click", function() {
           var formValues = $("#demeritTotalsSearchForm").serializeArray();
           var params = {};
           $.each(formValues, function(i,v) {
              if (v.value != "") {
                  params[v.name] = v.value;
              } 
           });
           searchDemeritTotals(params);
           return false;
       });

       $("#communicationLogSearchButton").on("click", function() {
           var formValues = $("#communicationLogSearchForm").serializeArray();
           var params = {};
           $.each(formValues, function(i,v) {
              if (v.value != "") {
                  params[v.name] = v.value;
              } 
           });
           searchCommunicationLog(params);
           return false;
       });

       $("#demeritSearchButton").on("click", function() {
           var formValues = $("#demeritSearchForm").serializeArray();
           var params = {};
           $.each(formValues, function(i,v) {
              if (v.value != "") {
                  params[v.name] = v.value;
              } 
           });
           searchDemerits(params);
           return false;
       });

       $("#staffSearchButton").on("click", function() {
           var formValues = $("#staffSearchForm").serializeArray();
           var params = {};
           $.each(formValues, function(i,v) {
              if (v.value != "") {
                  params[v.name] = v.value;
              } 
           });
           searchStaff(params);
           return false;
       });

        $("#absenceSearchButton").on("click", function() {
           var formValues = $("#absenceSearchForm").serializeArray();
           var params = {};
           $.each(formValues, function(i,v) {
              if (v.value != "") {
                  params[v.name] = v.value;
              } 
           });
           searchAbsence(params);
           
           
           return false;
       });
       
       
       $("#demeritButton").on("click", function() {
           if ($("#demeritForm #dateTime").val() == "") {   
               showModal('Error in date-time value', 'Please enter both a date and time.')
               return false;
           }  
           $("#demeritButton").prop("disabled",true);
           var key = $("input[id='id']").val();
           var data ={};
           $('#demeritForm .ltdata').filter(':enabled').each(function(){
                data[$(this).attr("id")] = $(this).val();
            });
           postData('Demerit',data);
           if ($("#genericModal h4").text() == "success") {
               $("#demeritForm")[0].reset();
           }
           $('html, body').animate({scrollTop: '0px'}, 300);
           $("#demeritButton").prop("disabled",false);
           return false;
       });        

       $("#eventButton").on("click", function() {
           if ($("#eventForm #dateTime").val() == "") {   
               showModal('Error in date-time value', 'Please enter both a date and time.')
               return false;
           }  
           $("#eventButton").prop("disabled",true);
           var key = $("input[id='id']").val();
           var data ={};
           $('#eventForm .ltdata').filter(':enabled').each(function(){
                data[$(this).attr("id")] = $(this).val();
            });
           postData('Event',data);
           if ($("#genericModal h4").text() == "success") {
               $("#demeritForm")[0].reset();
           }
           $('html, body').animate({scrollTop: '0px'}, 300);
           $("#eventButton").prop("disabled",false);
           return false;
       }); 



       
        $('body').on('click', 'a.editItem', function() {
            loadEditForm($(this).attr("data-resource"),$(this).attr("data-id"));
        });

         $('body').on('click', 'button.btnModal', function() {
            if ($("#genericModal .modal-header h4").text() == "Are you still using the app?") {
                gapi.auth2.getAuthInstance().currentUser.get().reloadAuthResponse(); 
                inactivityTimer = setTimeout(promptToStayLoggedIn,(1000*60*30));
                clearTimeout(logOutTimer);
            }
        });
 
        // $('body').on('click', 'button', function() {
        //     console.log("body click button");
        //     console.log($(this));
        //     if (!$(this).hasClass('btnModal') && !$(this).hasClass("btn-updateAbsenceStatus")) {
        //         loadEditForm($(this).attr("data-resource"),$(this).attr("data-id"));
        //     }
        // }); 
            
        $("ul.nav li a").on("click", function() {
          // 
        //   if (typeof gapi !== 'undefined') {
        //       if (gapi.hasOwnProperty("auth2")) {
        //           if (!gapi.auth2.init().isSignedIn) {
        //               showModal("Please log in", "The app was unable to determine that you are still logged in;  please return to the home page and log in again.");
        //               signOut();
        //               showScreen("#home");
        //           }
        //       }
        //   }
          
          var target = $(this).attr("href");

          if (target == "#myDepartments") {
              getMyData('vwStaffDepartments',loadMyDepartments);
          }
          else if (target == "#myCourseSections") {
              getMyData('vwStaffCourseSections',loadMyCourseSections);
          }
          else if (target == "#myCommunicationLogEntries") {
              getMyData('vwCommunicationLogEntries',loadCommunicationLogEntries);
          }
          else if (target == "#myDemeritEntries") {
              getMyData('vwDemeritEntries',loadDemeritEntries);
          }
          
          if (target != "#") {
             showScreen(target);
             //return false;
          }
          $("#notification").hide();
          
        });
        
        
        $(document).on('click','.navbar-collapse.in',function(e) {
            if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
                $(this).collapse('hide');
            }
        });


        
        //loadProfileValues(user['username']);
        
        function loadFilterValues() {
            $.post(
                    'https://lanetech.org/api/v2/api.php/Department/', 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        $.each(response.data, function(i,v){
                            $("#selDepartment").append('<option value=' + v["id"] +'>' + v["name"] + '</option>');
                        })
                        
                        
                    })
        
            }
        
        
       
        
        
        
         
         
        //setTimeout(loadFilterValues,3000); 
                
        $("#search").on("click", function() {
            makeDataRequest();
        })
        
        
        $.each(columns["StaffProfile"], function(k,v) {
           if (v["Display"]) {
               //  Legend Text provides group headers
               if (v.hasOwnProperty("legendText")) {
                   var legend = $("<legend>");
                   legend.text(v["legendText"]);
                   $("#profileFieldset").append(legend);
               };

               var group = $("<div>");
               var label = $("<label>");
               var div = $("<div>");
               var field = $("<input>");
               
               var datalist = $("<datalist>");
               var option = $("<option>");

                
                // DataList for "autocomplete"
                if (v.hasOwnProperty("DataList")) {
                    datalist.attr("id", k + "DataList");
                    field.attr("list",k + "DataList");
                    $.each(v["DataList"], function(idx,val) {
                       option = $("<option>"); 
                       option.attr("value",val);
                       option.text(val);
                       datalist.append(option);
                    });
                }    

               
               group.addClass("form-group");
               field.attr("id", k);
               field.attr("name", k);
               field.attr("maxlength", v["MaxLength"]);
               field.addClass("form-control ltdata");
              if (v["Label"].includes("Phone")) {
                  field.attr("pattern", patterns["phone"]);
                  field.attr("title", "Please enter phone in 999-999-9999 format" );
              }
               
            
               if (!v["Editable"]) {
                   field.attr("disabled","");
               }
               div.addClass("col-lg-10");
               div.append(field);
               if (v.hasOwnProperty("DataList")) {
                div.append(datalist);
                   
               }
               
               label.attr("for",k);
               label.text(v["Label"]);
               label.addClass("control-label col-lg-2")
               group.append(label);
               group.append(div);
               $("#profileFieldset").append(group);               
               
           }

        });
        
        $("#profileFieldset").append($("#profileButtons"));
        
        
        
        
    })
    

    function getPublicData (resource, responseHandler) {
        var url = 'https://lanetech.org/api/v2/api.php/' + resource ;
        
        if (resource == 'vwDayBellSchedules') {
            url += "?date=" + now.toISOString().substring(0, 10);
        }
        $.post(
                url, 
                { 
                    method: 'GET'
                },
                responseHandler);           
    }

    function hideModal() {
        $("#genericModal").modal("hide");
    }
    
    function showModal (title, body) {
        var modal = $("#genericModal");
        modal.find(".modal-header h4").html(title);
        modal.find(".modal-body p").html(body);
        modal.modal();
    }


    function getMyData (resource, responseHandler) {
        var url = 'https://lanetech.org/api/v2/api.php/' + resource + '?username=' + user["username"];   
         
        switch (resource) {
            case 'vwCommunicationLogEntries' :
            case 'vwDemeritEntries':
                 url = 'https://lanetech.org/api/v2/api.php/' + resource + '?createdBy_staff_id=' + user["id"];
                 break;
            default:
        }        
                $.post(
                        url, 
                        { 
                            idtoken: id_token,
                            method: 'GET'
                        },
                        responseHandler);           
    }


    function loadCommunicationLogSearchResults (response) {
        console.log("loadCommunicationLogSearchResults");
        //console.log(data);
        $('#tableCommunicationLogSearch').bootstrapTable('destroy');
        $('#tableCommunicationLogSearch').bootstrapTable({
            detailFormatter: communicationsLogDetailFormatter,
            columns: [
             {field: "dateTime", title: "Date/Time", sortable: true},
             {field: "studentId", title: "Student ID", sortable: true},
             {field: "studentFullName", title: "Student Name", sortable: true},
             {field: "studentUsername", title: "Username", sortable: true},
             {field: "staffFullName", title: "Staff Name", sortable: true},
             {field: "staffEmail", title: "Staff Email", sortable: true},
             {field: "category", title: "Category", sortable: true},
             {field: "method", title: "Method", sortable: true},
             {field: "subject", title: "Subject", sortable: true},
             {
                        field: 'actions',
                        title: 'Actions',
                        align: 'center',
                        events: actionEvents,
                        formatter: actionFormatter
                    }
             ],   
            data: response.data
        });
         hideLoader('myCommunicationLogEntries');
    }    

    function loadDemeritSearchResults (response) {

        $('#tableDemeritSearch').bootstrapTable('destroy');
        $('#tableDemeritSearch').bootstrapTable({
            detailFormatter: function(index, row) {return row["comment"]},
            columns: [
             {field: "dateTime", title: "Date/Time", sortable: true},
             {field: "studentId", title: "Student ID", sortable: true},
             {field: "studentFullName", title: "Student Name", sortable: true},
             {field: "studentEmail", title: "Student Email", sortable: true},
             {field: "staffFullName", title: "Staff Name", sortable: true},
             {field: "staffEmail", title: "Staff Email", sortable: true},
             {field: "reason", title: "Reason", sortable: true},
             {field: "amount", title: "Number", sortable: true},
             {
                        field: 'actions',
                        title: 'Actions',
                        align: 'center',
                        events: actionEvents,
                        formatter: actionFormatter
                    }
             ],   
            data: response.data
        });
         //hideLoader('myCommunicationLogEntries');
    }   

    function loadDemeritTotalsSearchResults (response) {

        $('#tableDemeritTotalsSearch').bootstrapTable('destroy');
        $('#tableDemeritTotalsSearch').bootstrapTable({
            columns: [
              {field: "", checkbox: true},
             {field: "studentId", title: "Student ID", sortable: true},
             {field: "studentFullName", title: "Student Name", sortable: true},
             {field: "studentEmail", title: "Student Email", sortable: true},
             {field: "gradeLevel", title: "Grade Level", "filterControl": "select", sortable: true},
             {field: "demeritCount", title: "Total", sortable: true},
             {
                        field: 'actions',
                        title: 'Actions',
                        align: 'center',
                        events: actionEvents,
                        formatter: actionFormatter
                    }
             ],   
            data: response.data
        });
         //hideLoader('myCommunicationLogEntries');
    }   


 
     function loadAbsenceSearchResults (response) {
        console.log("loadAbsenceSearchResults");
        //console.log(data);
        $('#tableAbsenceSearch').bootstrapTable('destroy');
        $('#tableAbsenceSearch').bootstrapTable({
            detailFormatter: function () {},
            columns: [
             {field: "id", checkbox: true},
             {field: "date", title: "Date", "filterControl": "select", sortable: true},
             {field: "studentId", title: "Student ID", "filterControl": "select", sortable: true},
             {field: "studentFullName", title: "Student Name", sortable: true},
             {field: "studentUsername", title: "Username", sortable: true},
             {field: "period", title: "Period", "filterControl": "select", sortable: true},
             {field: "status", title: "Status", "filterControl": "select", sortable: true},
             {
                        field: 'actions',
                        title: 'Actions',
                        align: 'center',
                        events: actionEvents,
                        formatter: actionFormatter
                    }
             ],   
            data: response.data
        });
        if (username="dphayes" ||departmentsWithDemeritAmountPermission.indexOf(profileData["department"]) >= 0) {
                       
                        $("#btnUpdateAbsenceStatus").removeClass("hidden");
                        $("#btnShowAddToEventModal").removeClass("hidden");
                    };
         hideLoader('absenceSearch');
    }    
    
    function loadCommunicationLogEntries (response) {
        console.log("loadCommunicationLogEntries");
        //console.log(data);
        $('#tableCommunicationLogEntries').bootstrapTable({
            detailFormatter: communicationsLogDetailFormatter,
            columns: [
             {field: "dateTime", title: "Date/Time", sortable: true},
             {field: "studentId", title: "Student ID", sortable: true},
             {field: "studentLastName", title: "Last Name", sortable: true},
             {field: "studentFirstName", title: "First Name", sortable: true},
             {field: "studentUsername", title: "Username", sortable: true},
             {field: "category", title: "Category", sortable: true},
             {field: "method", title: "Method", sortable: true},
             {field: "subject", title: "Subject", sortable: true}
             ],   
            data: response.data
        });
         hideLoader('myCommunicationLogEntries');
        
    }

    function loadDemeritEntries (response) {
        console.log("loadCommunicationLogEntries");
        //console.log(data);
        $('#tableDemeritEntries').bootstrapTable({
            detailFormatter: demeritDetailFormatter,
            columns: [
             {field: "dateTime", title: "Date/Time", sortable: true},
             {field: "studentId", title: "Student ID", sortable: true},
             {field: "studentLastName", title: "Last Name", sortable: true},
             {field: "studentFirstName", title: "First Name", sortable: true},
             {field: "studentUsername", title: "Username", sortable: true},
             {field: "reason", title: "Reason", sortable: true},
             {field: "amount", title: "Amount", sortable: true}
             ],   
            data: response.data
        });
         hideLoader('myDemeritEntries');
        
    }
    
    
    function loadCoursesAndStudents (data, tableId) {
        var courseIds = [];
        var courses = {};
        var div;
        var displayColumns;
        $.each(data, function(i,v) {
            // create array of courses (needed for later)
            if (!courseIds.indexOf(v["courseId"])) {
                courseIds.push(v["courseId"]);
                courses[v["courseId"]] = {
                    courseName: v["courseName"],
                    courseId: v["courseId"],
                    courseCode: v["courseCode"],
                    sectionNumber: v["sectionNumber"],
                    sectionId: v["sectionId"],
                    students: []
                };

            }
            // push students to array for the course
        });
        
        switch(tableId) {
            case "tableEventSearch" :
            $('#' + tableId).bootstrapTable('destroy');
             displayColumns = [
                 {field: "id", title: "Event ID"},
                 {field: "startDateTime", title: "Date/Time", sortable: true},
                 {field: "durationMinutes", title: "Duration (min)"},
                 {field: "type", title: "Type", sortable: true},
                 {field: "title", title: "Title", sortable: true},
                  {
                        field: 'actions',
                        title: 'Actions',
                        align: 'center',
                        events: actionEvents,
                        formatter: function (value, row, index) {
                          return '<a class="eventStudents" href="javascript:void(0)"><i class="glyphicon glyphicon-list"></i></a>'; 
                        }
                  } 
                ];
             break;              
            
            
            case "tableCommunicationLogSearch":
             $('#' + tableId).bootstrapTable('destroy');
             displayColumns = [
                 {field: "id", title: "Entry ID", sortable: true},
                 {field: "dateTime", title: "Date/Time", sortable: true},
                 {field: "studentId", title: "Student Id", sortable: true},
                 {field: "studentLastName", title: "Student Last Name", sortable: true},
                 {field: "studentFirstName", title: "Student First Name", sortable: true},
                 {field: "category", title: "Category", sortable: true},
                 {field: "subject", title: "Subject", sortable: true},
                 {field: "staffLastName", title: "Staff", sortable: true}
                 
                ];
             break;

            case "tableStudentSearch":
             $('#' + tableId).bootstrapTable('destroy');
             displayColumns = [
               
                 {field: "", checkbox: true},
                 {field: "id", title: "Student ID", sortable: true},
                 {field: "lastName", title: "Last Name", sortable: true},
                 {field: "firstName", title: "First Name", sortable: true},
                 {field: "username", title: "Username", sortable: true},
                 {field: "gradeLevel", title: "Grade", sortable: true},
                 {
                            field: 'actions',
                            title: 'Actions',
                            align: 'center',
                            events: actionEvents,
                            formatter: actionFormatter
                        }
                 
                ];
             break;
            case "tableStudents" :
                displayColumns = [
             {field: "studentId", title: "Student ID", sortable: true},
             {field: "studentLastName", title: "Last Name", "filterControl": "input", sortable: true},
             {field: "studentFirstName", title: "First Name", sortable: true},
             {field: "studentUsername", title: "Username", sortable: true},
             {field: "gradeLevel", title: "Grade", sortable: true},
             {field: "courseName", title: "Course", "filterControl": "select", sortable: true},
             {field: "courseCode", title: "Code", sortable: true},
             {field: "period", title: "Period", "filterControl": "select", sortable: true},
             {field: "sectionNumber", title: "Section", sortable: true},
             {field: "email", title: "Email", sortable: true},
             {field: "parent1Name", title: "Parent 1 Name", visible: false, sortable: true},
             {field: "parent1Relation", title: "Parent 1 Relation", visible: false, sortable: true},
             {field: "parent1Email", title: "Parent 1 Email", visible: false, sortable: true},
             {field: "parent1Phone", title: "Parent 1 Phone", visible: false, sortable: true},
             {field: "parent1Cell", title: "Parent 1 Cell", visible: false, sortable: true},
             {
                        field: 'actions',
                        title: 'Actions',
                        align: 'center',
                        events: actionEvents,
                        formatter: actionFormatter
                    }
             
             ]  ;
             break;
            case "tableStaffSearch" :
                
             $('#' + tableId).bootstrapTable('destroy');
            displayColumns = [
             {field: "lastName", title: "Last Name", sortable: true},
             {field: "firstName", title: "First Name", sortable: true},
             {field: "latestYear", title: "Latest Year", sortable: true},
             //{field: "username", title: "Username", sortable: true},
             {field: "department", title: "Primary Deparment", sortable: true},
             {field: "phoneCell", title: "Cell Phone", sortable: true},
             {field: "phoneHome", title: "Home Phone", sortable: true},
             {field: "email", title: "Email", sortable: true}
            //  {
            //             field: 'actions',
            //             title: 'Actions',
            //             align: 'center',
            //             events: actionEvents,
            //             formatter: actionFormatter
            //         }
             
             ]  ;
             break;
          case "tableEventStudentsSearch":
             //console.log("loadCoursesAndStudents",tableId);
             $('#' + tableId).bootstrapTable('destroy');
             displayColumns = [
               
                 {field: "", checkbox: true},
                 {field: "student_id", title: "Student ID", sortable: true},
                 {field: "studentName", title: "Student Name", sortable: true},
                 {field: "status", title: "Event Status", sortable: true}
                ];
             break;   
 
        }

        $('#' + tableId).bootstrapTable({
            detailFormatter: detailFormatter,
            columns: displayColumns,   
            data: data

        });
        
        
    }
    
    function actionFormatter(value, row, index) {
        return [
             '<a class="studentDetail" href="javascript:void(0)" title="Student Detail">',
            '<i class="glyphicon glyphicon-user"></i>',
            '</a>  ',
            '<a class="commLog" href="javascript:void(0)" title="Communication Log Form">',
            '<i class="glyphicon glyphicon-comment"></i>',
            '</a>  ',
            '<a class="demerit" href="javascript:void(0)" title="Demerit Form">',
            '<i class="glyphicon glyphicon-thumbs-down"></i>',
            '</a>'
        ].join('');
    }
    

 
    function searchStudents(params) {
                
                
                $.post(
                    'https://lanetech.org/api/v2/api.php/Student?' + $.param(params), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        loadCoursesAndStudents(response.data,"tableStudentSearch");
                    });
            } 
 
        function searchStaff(params) {
                $.post(
                    'https://lanetech.org/api/v2/api.php/Staff?' + $.param(params), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        loadCoursesAndStudents(response.data,"tableStaffSearch");
                    });
        }  
 
        function searchCommunicationLog(params) {
                $.post(
                    'https://lanetech.org/api/v2/api.php/vwCommunicationLogEntries?' + $.param(params), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        loadCommunicationLogSearchResults(response);
                    });
        }   

        function searchDemerits(params) {
                $.post(
                    'https://lanetech.org/api/v2/api.php/vwDemeritEntries?' + $.param(params), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        loadDemeritSearchResults(response);
                    });
        }   
        function searchDemeritTotals(params) {
                $.post(
                    'https://lanetech.org/api/v2/api.php/vwDemeritTotals?' + $.param(params), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        loadDemeritTotalsSearchResults(response);
                        if (username="dphayes" ||departmentsWithDemeritAmountPermission.indexOf(profileData["department"]) >= 0) {
                          console.log("demerit totals response handler");
                          $("#btnShowAddToEventModal").removeClass("hidden");
                      };
                    });
        }   
        
        function searchAbsence(params) {
                $.post(
                    'https://lanetech.org/api/v2/api.php/vwAbsence?' + $.param(params), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        loadAbsenceSearchResults(response);
                    });
        }   

            function getCoursesAndStudents(staffId) {
            $.post(
                    'https://lanetech.org/api/v2/api.php/vwStudentCourseSections?limit=500&staff_id=' + staffId, 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        checkResponseError(response);
                        var studentData = response.data;
                        $.each(studentData, function(i,v) {
                            studentData[i]["email"] = studentData[i]["studentUsername"] + "@cps.edu";
                        });
                        loadCoursesAndStudents(studentData,"tableStudents");
                        loadDataLists(studentData);
                    });
        
            }            
    
    
    
     window.actionEvents = {
        'click .studentDetail': function (e, value, row, index) {
            var targetStudentId;
            //console.log(value,row,index);
            if (row.hasOwnProperty("studentId")) {
                targetStudentId = row.studentId;
            }
            else if (row.hasOwnProperty("id")){
                targetStudentId = row.id;
            };
            getStudentDetail(targetStudentId);
            showScreen("#studentDetail");
        },
        'click .demerit': function (e, value, row, index) {
            console.log(value,row,index);
            if (row.hasOwnProperty("studentId")) {
                targetStudentId = row.studentId;
            }
            else if (row.hasOwnProperty("id")){
                targetStudentId = row.id;
            };
            
            showDemeritEntryForm(targetStudentId) ;
        },
        'click .commLog': function (e, value, row, index) {
            console.log(value,row,index);
            if (row.hasOwnProperty("studentId")) {
                targetStudentId = row.studentId;
            }
            else if (row.hasOwnProperty("id")){
                targetStudentId = row.id;
            };  
            
            showCommLogEntryForm(targetStudentId) ;
            
        },
        'click .eventStudents': function (e, value, row, index) {
            console.log(value,row,index);
            if (row.hasOwnProperty("eventId")) {
                targetEventId = row.eventId;
            }
            else if (row.hasOwnProperty("id")){
                 targetEventId = row.id;
            };  
            $("#eventStudentsTableHeader").text("Event: " + row.title + " " + row.startDateTime);
            $("#eventStudentsTableHeader")[0].scrollIntoView();
            showEventStudents(targetEventId);
        }
    };
    
    
    
    
    function loadMyDepartments (response) {
        $("#myDeparments table").remove();
        
        displayTable( 
            [ {header:'Department Name', column: 'departmentName'}],
            response.data,
            'myDepartments'
        );
        
        hideLoader('myDepartments');
    }

    function loadMyCourseSections (response) {
        $("#myCourseSections table").remove();
        var sortedData = response.data.sort(function(a, b){
            	return a.period - b.period;
        });
        
        $.each(sortedData, function(i,v) {
            sortedData[i]["edit-Section-id"] = v.sectionId;
        })
        
        displayTable( 
            [ 
                {column: 'period', header: 'Period'},
                {column: 'room', header: 'Room'},
                {column: 'courseCode', header: 'Course Code'},
                {column: 'courseName', header: 'Course Name'},
                {column: 'number', header: 'Section Number'},
                {column: 'edit-Section-id', header: 'Edit'}
                
            ],
            sortedData,
            'myCourseSections'
        );
        
        hideLoader('myCourseSections');
    }

    function hideLoader(elementId) {
        $("#" + elementId + " .loader").hide();
    }
    
    function updateResourceData (resource, key, columnData, responseHandler) {
                $.post(
                    'https://lanetech.org/api/v2/api.php/' + resource + '/' + key, 
                    
                    { 
                        idtoken: id_token,
                        method: "PATCH",
                        columns: columnData
                    },
                    function(response) {
                        responseHandler(response);
                        //console.log(response);
                    });
        
    };

    
    
    function loadMyTasks (response) {
        var screen = $("#myTasks");
        var div = screen.find("div.container .screen-content");
        div.html("");
        $.each(response.data, function(i,v) {
            div.append(v.description);
            var select = $("<select>");
            select.attr("data-id", v["staffTask_id"]);
            select.attr("name", "status");
            var option;
            $.each(v["statusOptions"].split(","), function(idx,val) {
               option = $("<option>");
               if (val == v["status"]) {
                   option.prop("selected", true);
               }
               option.attr("value", val);
               option.text(val);
               
               select.append(option);
            });
            
            div.append(select);
            div.append("<p>Current status of <strong>" + v["status"] + "</strong> was set on " + v["statusDateTime"] + "</p>");
        });
        
        $("#myTasks select").on("change",function() {
              var key = $(this).attr("data-id");
              var columnName = $(this).attr("name");
              var value = $(this).find(":selected").val();
              updateResourceData(
                  'StaffTask', 
                  key,
                  { "status" : value},
                  genericResponseHandler
                );
        });
    }

    var genericResponseHandler = function(response) {
        console.log("genericResponseHandler",response);
        //$("#notification strong").text(response.status);
        $("#notification").find("strong").text("Updated");
        $("#notification").show();
    }

    function loadBellSchedule (response) {
        //displayDataInElement(response.data, 'bellSchedule');
       
        var data = response.data;
        
        console.log((data[0]["isStudentAttendanceDayP"] == 1));
        console.log(data[0]["isStudentAttendanceDayP"]);
        var studentAttendanceDay = (data[0]["isStudentAttendanceDayP"] == 1);
        var teacherAttendanceDay = (data[0]["isTeacherAttendanceDayP"] == 1);
        
        
        $("#bellSchedulePanel .panel-heading").html("Bell Schedule: <strong>" + data[0]['name'] + "</strong>");
        
        var message = "Today is a non-attendance day for both students and faculty/staff.";
        var messageClass = "warning";
        if (studentAttendanceDay && teacherAttendanceDay) {
            console.log("both are true");
            message = message.replace("a non-","an ");
            messageClass = "";
        }
        else if (!studentAttendanceDay && teacherAttendanceDay) {
            message = "Today is an attendance day for faculty/staff but not students."
        }
        $("#bellSchedule").append("<strong>" + message + "</strong>");
        
        if (data[0]["BellSchedule_id"] != 0) {
            var table = $("<table>");
            var tbody = $("<tbody>");
            var row = $("<tr>");
            table.append("<thead><th>Period</th><th>Start Time</th><th>End Time</th><th>Minutes</th></thead>");
            
            var cell;
            var startTime, endTime, minutes;
            $.each(data, function(i,v) {
                startTime = new Date("01-01-01 " + v['startTime']);
                endTime = new Date("01-01-01 " + v['endTime']);
                
                minutes = (endTime - startTime)/(60*1000);
                row = $("<tr>");
                row.append("<td>" + v['period'] + "</td>");
                row.append("<td>" + v['startTime'] + "</td>");
                row.append("<td>" + v['endTime'] + "</td>");
                row.append("<td>" + minutes + "</td>");
                tbody.append(row);
            })
            table.append(tbody);
            table.addClass("table table-striped");
            $("#bellSchedule").append(table);
            
        }
    }


    function displayTable (columns,data,elementId){
            var table = $("<table>");
            var thead = $("<thead>")
            var tbody = $("<tbody>");
            var row = $("<tr>");
            var cell;
            var editLink = $("<a>");
            editLink.addClass("editItem");
            editLink.attr("href","javascript:void(0)");
            editLink.attr("title", "Edit Section");
            editLink.html('<i class="glyphicon glyphicon-pencil"></i>');
            editLink.attr("data-id");
            editLink.attr("data-resource");

            //console.log(columns);
            $.each(columns, function(i, v) {
                //console.log(v);
                cell = $("<th>");
                cell.text(v["header"]);
                row.append(cell);
            });
            thead.append(row);
            table.append(thead);
            
            $.each(data, function(i,v) {
                row = $("<tr>");
                $.each(columns, function(idx, val) {
                    //console.log(idx, val);
                    cell = $("<td>");
                    if (val["column"].indexOf("edit-") > -1) {   // add an edit link
                        // assumes column name format edit-<table>-<key>
                        var cellEditLink = editLink.clone();
                        cellEditLink.attr("data-resource",val["column"].split("-")[1]);
                        cellEditLink.attr("data-id", v[val["column"]]);
                        cell.append(cellEditLink);
                    }
                    else {
                        cell.html(v[val["column"]]);
                    }
                    row.append(cell);
                // $.each(v, function(key,val) {
                //      cell = $("<td>");
                //      cell.text(val);
                //      row.append(cell);
                // 
                    
                });

                tbody.append(row);
            });
            table.append(tbody);
            table.addClass("table table-striped");
            $("#" + elementId).append(table);
            
        }





    
    var displayDataInElement = function(data, id) {
         console.log("displayDataInElement");
        //console.log(data);
        var element = $("#" + id);
        
        //$("#myDepartments div.container").html("");
        element.html("");
        $.each(data, function(i,v) {
            element.append(JSON.stringify(v, null, '\t'));
        });
    }


    var displayData = function(data, screenName) {
         console.log("loadDepartments");
        //console.log(data);
        var screen = $("#" + screenName);
        var container = screen.find("div.container");
        
        //$("#myDepartments div.container").html("");
        container.html("");
        $.each(data, function(i,v) {
            container.append(JSON.stringify(v, null, '\t'));
        });
    }
    
    
    var displayColumns = ["id","firstName","lastName","department","username","email"];
    
    function makeDataRequest() {
       var baseUrl = "https://lanetech.org/api/v2/api.php/Teacher/";
       var url = baseUrl;
       if ($.isNumeric($("#txtStudentId").val())) {
           url = baseUrl + $("#txtStudentId").val() + "?";
       } 
       else {
           url += "?"
           if ($("#selGrade").val() != "Any") {
             url += "&grade=" + $("#selGrade").val(); 
           } 
           if ($("#selDepartment").val() != "Any") {
               url += "&department_id=" + $("#selDepartment").val(); 
           }
       }
       
       url += "&limit=" + $("#selLimit").val();
       callApi(url);
        
        
        
        
    }
    
    function logToConsole(response) {
        console.log(response);
    }
    
    
    function getData(resource, key, responseHandler) {
        console.log("getData");
        var url = 'https://lanetech.org/api/v2/api.php/' + resource + (key!=0 ? '/' + key : '');
        $.post(
                url, 
                { 
                    idtoken: id_token,
                    method: 'GET'
                },
                window[responseHandler]);      
    }
    
    
    
    function loadEditForm (strResource, strKey) {
        // handle to form
        var editForm = $("#edit" + strResource + "Form");
        
        // get data
        getData("vwEdit" + strResource, strKey, function (response) { 
            if (response.data.length > 1) {
                showModal("Error", "An error occurred while retrieving data for this item.");
                return false;
            }
            var record = response.data[0];
            // load into form
            $.each(record, function(k,v) {
                editForm.find("#" + k).val(v);
            });
            // show screen
            showScreen("#edit" + strResource);
        });
    }
    
    
    
    
    function loadProfileValues (username) {
        var url = 'https://lanetech.org/api/v2/api.php/Staff/?username=' + username;
        $.post(
                url, 
                { 
                    idtoken: id_token,
                    method: 'GET'
                },
                function(response) {
                    var profileData = response.data[0];
                    $.each(profileData, function(k,v) {
                        //console.log(k,$("input[id='" + k + "']"));
                        if (v != "") {
                            $("#profileForm input[id='" + k + "']").val(v);
                        }
                    })
                    user["id"] = profileData["id"];
                    user["department"] =  profileData["department"];  
                    if (username="zdphayes" ||departmentsWithDemeritAmountPermission.indexOf(profileData["department"]) >= 0) {
                        $("#demeritForm #amount").prop("disabled",false);
                        $(".ltStaffEditIconLink").show();
                    }
                    
                    
                    getMyData('vwStaffTasks',loadMyTasks);
                    getCoursesAndStudents(profileData["id"]);
                });      
    }
        
    function loadStudentContactsForm (id) {
        var url = 'https://lanetech.org/api/v2/api.php/vwStudentContacts/' + id;
        $.post(
                url, 
                { 
                    idtoken: id_token,
                    method: 'GET'
                },
                function(response) {
                    var data = response.data[0];
                    var fieldset = $("#editStudentContacts fieldset")
                    fieldset.find("div.form-group").not("#editStudentContactsButtons").remove();
                    $.each(data, function(k,v) {
                        var formGroup = $("<div>"), inputDiv = $("<div>"), label = $("<label>"), input = $("<input>");
                        formGroup.addClass("form-group");
                        label.attr("for", k);
                        label.text(k);
                        label.addClass("control-label col-lg-2");
                        formGroup.append(label);
                        
                        inputDiv.addClass("col-lg-10");
                        
                        input.attr("type", "text");
                        input.addClass("form-control ltdata");
                        input.attr("id",k);
                        input.attr("data-initialValue",v);
                        input.val(v);
                        if (k == "id") {
                            input.prop("readonly", true)
                        }
                        
                        inputDiv.append(input);
                        formGroup.append(inputDiv);
                        fieldset.append(formGroup);
                    });
                    fieldset.append($("#editStudentContactsButtons"));
    });
    
    
    }
    
    
    
    function showCommLogEntryForm(studentId) {
      $("#commLogForm #student_id").val(studentId);
      $("#commLogForm #dateTime").val(new Date());
      showScreen('#commLog');
    } 

    function showDemeritEntryForm(studentId) {
      $("#demeritForm #student_id").val(studentId);
      showScreen('#demerit');
    } 

     
    function loadDataLists (data) {
        var option;
        $.each(data, function(i,v) {
           option = $("<option>");
           option.attr("value",v.studentId);
           option.text(v.studentLastName + ", " + v.studentFirstName + ": " + v.studentId);
           $("#commLogStudents").append(option);
        });
    } 
    
    function getData(strResource, strKey, responseHandler) {
            $.post(
                    'https://lanetech.org/api/v2/api.php/' + strResource + '/' + (strKey != 0 ? strKey : ''), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    function(response) {
                        console.log(response);
                        responseHandler(response);
                    });
        
            }    
    
    function getDataWithParams(strResource, params, responseHandler) {
            $.post(
                    'https://lanetech.org/api/v2/api.php/' +strResource + '?' 
                    + $.param(params), 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    
                    },
                    responseHandler
                    );
    }
    
    
    function getStudentDetail (studentId) {
        getData('Student', studentId, loadStudentBasic);
        //getData('student_database', studentId, loadStudentContacts);
        getDataWithParams('Contact', {"student_id": studentId}, loadStudentContactsV2);
        
        getDataWithParams('vwStudentDivision', {"student_id": studentId}, loadStudentDivision);
        getDataWithParams('vwStudentCourseSections', {"student_id": studentId}, loadStudentCourseSections);
        getDataWithParams('vwCommunicationLogEntries', {"student_id": studentId}, loadStudentCommunicationLogEntries);
        getDataWithParams('vwArchiveCommunicationLogEntries', {"student_id": studentId}, loadStudentArchiveCommunicationLogEntries);
        getDataWithParams('vwDemeritEntries', {"student_id": studentId}, loadStudentDemeritEntries);
        getDataWithParams('Absence', {"student_id": studentId}, loadStudentAbsenceEntries);     
        $("#studentImage .panel-body").html("");
        
        var simg = $("<img>");
        simg.addClass("img-responsive");
        simg.attr("src", getStudentImageUrl(studentId));
        simg.attr("alt", "image of " + studentId);
        $("#studentImage .panel-body").append(simg);
    }
    
    
    function getStudentImageUrl(studentId) {
        var strId = studentId.toString();
        var f1 = strId.substring(0,1);
        var f2 = strId.substring(1,2);
        return "/simages/" + f1 + "/" + f2 + "/" + studentId + ".jpg";
    }
    
    
    
    
     
    /* 
        
     
    */
    function loadStudentBasic(response) {
        var studentBasic=response["data"][0];
        //$("#studentDetail").append(JSON.stringify(studentBasic));
        $("#studentDetail h2").text(studentBasic.lastName + ", " + studentBasic.firstName + ": " + studentBasic.id);
        $("#studentDetail input[id='id']").val(studentBasic.id);
       
    }
    
    
    function createContactPanel (contact) {
        var panel = $("#contactPanelTemplate").clone();
        panel.removeClass("hide");
        panel.attr("id","");
        panel.find(".panel-title strong").text(contact.name);
        panel.find(".panel-title").append(" " + contact.type);
        panel.find(".panel-body").append(createContactAddressElement(contact));
        return panel;
    }
    
    function createContactPanelV2 (contact) {
        var panel = $("#contactPanelTemplate").clone();
        panel.removeClass("hide");
        panel.attr("id",contact.id);
        panel.attr("data-contact-id",contact.id);
        panel.find(".panel-title strong").text(contact.firstName + " " + contact.lastName);
        panel.find(".panel-title").append(" " + contact.type);
        panel.find(".panel-title").append(
        ' <a class="editContactButton ltStaffEditIconLink" href="#" title="Edit Contact" data-contact-id="' + contact.id + '"><i class="glyphicon glyphicon-pencil"></i></a>  ');
        panel.find(".panel-body").append(createContactAddressElementV2(contact));
        return panel;
    }
    
    function createContactAddressElementV2 (contact) {
        var el = $("<address>");
        el.append($("<strong>").text(contact.firstName + " " + contact.lastName));
        el.append(" (" + contact.relation + ")");
        el.append($("<br>"));
        el.append(contact.address);
        el.append($("<br>"));
        el.append(contact.city + ", " + contact.state + " " + contact.zip);
        el.append($("<br>"));
        el.append("Phone: " + contact.phoneHome);
        el.append($("<br>"));
        el.append("Cell: " + contact.phoneCell);
        el.append($("<br>"));        
        el.append("Email: " + contact.email );
        if (contact.email.indexOf('@') > -1) {
            el.append(" " + getGoogleMailToHtml(contact.email,''));
        }
        return el;
    }
    
    
    function createContactAddressElement (contact) {
        var el = $("<address>");
        el.append($("<strong>").text(contact.name));
        el.append(" (" + contact.relationship + ")");
        el.append($("<br>"));
        el.append(contact.address1);
        el.append($("<br>"));
        el.append(contact.city + ", " + contact.state + " " + contact.zip);
        el.append($("<br>"));
        el.append("Phone: " + contact.phone);
        el.append($("<br>"));
        el.append("Cell: " + contact.cell);
        el.append($("<br>"));        
        el.append("Email: " + contact.email );
        if (contact.email.indexOf('@') > -1) {
            el.append(" " + getGoogleMailToHtml(contact.email,''));
        }
        return el;
    }
    
    
    function getContactsFromQSData (studentData) {
        console.log("********");
        console.log(studentData);
        var contacts = {};
        var student = {
            type: "Student",
            name: studentData.first_name + " " + studentData.last_name,
            relationship : "self",
            email : studentData.userid + "@cps.edu",
            address1 : studentData.qs_address1,
            city : studentData.qs_address3,
            state : studentData.qs_address4,
            zip : studentData.qs_address5,
            phone : "(" + studentData.qs_area1 + ") " + studentData.qs_phone1a + "-" + studentData.qs_phone1b,
            cell : "(" + studentData.qs_cell1 + ") " + studentData.qs_cell1a + "-" + studentData.qs_cell1b
        };
        var parent1 = {
            type: "Parent 1",
            name: studentData.qs_p1name,
            relationship : studentData.qs_p1relation,
            email : studentData.qs_p1email,
            address1 : studentData.qs_p1address1,
            city : studentData.qs_p1address3,
            state : studentData.qs_p1address4,
            zip : studentData.qs_p1address5,
            phone : "(" + studentData.qs_p1area1 + ") " + studentData.qs_p1phone1a + "-" + studentData.qs_p1phone1b,
            cell : "(" + studentData.qs_p1cell1 + ") " + studentData.qs_p1cell1a + "-" + studentData.qs_p1cell1b
        };
        var parent2 = {
            type: "Parent 2",
            name: studentData.qs_p2name,
            relationship : studentData.qs_p2relation,
            email : studentData.qs_p2email,
            address1 : studentData.qs_p2address1,
            city : studentData.qs_p2address3,
            state : studentData.qs_p2address4,
            zip : studentData.qs_p2address5,
            phone : "(" + studentData.qs_p2area1 + ") " + studentData.qs_p2phone1a + "-" + studentData.qs_p2phone1b,
            cell : "(" + studentData.qs_p2cell1 + ") " + studentData.qs_p2cell1a + "-" + studentData.qs_p2cell1b
        };
        var emergency1 = {
            type: "Emergency Contact 1",
            name: studentData.qs_emg1name,
            relationship : studentData.qs_emg1relation,
            email : "no value supplied",
            address1 : studentData.qs_emg1address1,
            city : studentData.qs_emg1address3,
            state : studentData.qs_emg1address4,
            zip : studentData.qs_emg1address5,
            phone : "(" + studentData.qs_emg1area1 + ") " + studentData.qs_emg1phone1a + "-" + studentData.qs_emg1phone1b,
            cell : "no value supplied"
        };
        var emergency2 = {
            type: "Emergency Contact 2",
            name: studentData.qs_emg2name,
            relationship : studentData.qs_emg2relation,
            email : "no value supplied",
            address1 : studentData.qs_emg2address1,
            city : studentData.qs_emg2address3,
            state : studentData.qs_emg2address4,
            zip : studentData.qs_emg2address5,
            phone : "(" + studentData.qs_emg2area1 + ") " + studentData.qs_emg2phone1a + "-" + studentData.qs_emg2phone1b,
            cell : "no value supplied"
        };        
        var doctor = {
            type: "Doctor",
            name: studentData.qs_docname,
            relationship : "Doctor",
            email : "no value supplied",
            address1 : studentData.qs_docaddress1,
            city : studentData.qs_docaddress3,
            state : studentData.qs_docaddress4,
            zip : studentData.qs_docaddress5,
            phone : "(" + studentData.qs_docarea1 + ") " + studentData.qs_docphone1a + "-" + studentData.qs_docphone1b,
            cell : "no value supplied"
        };         
        
        contacts.parent1 = parent1;
        if (parent2.name != "") {
            contacts.parent2 = parent2;
        } 
        if (emergency1.name != "") {
            contacts.emergency1 = emergency1;
        }
        if (emergency2.name != "") {
            contacts.emergency2 = emergency2;
        }
        contacts.doctor = doctor;
        contacts.student = student;
        
        return contacts;
    }
    
    
    function loadStudentContacts(response) {
        $("#studentContactInformationPanelBody").text("");
        $("#studentProfilePanelBody").text("");
        var contacts = getContactsFromQSData(response.data[0]);
        
        
        $.each(contacts, function(k,v) {
            if (k != "student")
            $("#studentContactInformationPanelBody").append(createContactPanel(v));
        });
        
        $("#studentProfilePanelBody").append(createContactAddressElement(contacts["student"]));

   }
    
    function loadStudentContactsV2(response) {
        $("#studentContactInformationPanelBody").empty();
        $("#studentProfilePanelBody").text("");
        var contacts = response.data;
        $.each(contacts, function(i,v) {
            if (v.relation == 'Self') {
             $("#studentProfilePanelBody").append(createContactAddressElementV2(v));   
            }
            else {
                $("#studentContactInformationPanelBody").append(createContactPanelV2(v));
            }
        });
        
        if(departmentsWithContactEditPermission.indexOf(user["department"]) >= 0) {
          $(".ltStaffEditIconLink").show();
        }
        
        

   }
    
     function loadStudentDivision(response) {
        var data = response.data;
        
        var div = data[0]
        
        $("#studentDivisionInformationPanelBody").text("");
        
        var t = $('<table class="table table-striped">');
        var tbody = $('<tbody>');
        tbody.append('<tr><td>Code</td><td>' + div["code"] + '</td></tr>');
        
        tbody.append('<tr><td>Room</td><td>' + div["room"] + '</td></tr>');
        tbody.append('<tr><td>Teacher Name</td><td>' + div["divisionTeacherName"] + '</td></tr>');
        tbody.append('<tr><td>Teacher Email</td><td>' + div["divisionTeacherEmail"] + ' <a target="blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=' + div["divisionTeacherEmail"] + '&tf=1&su=' + div["studentName"] + ': ' + div["studentId"] + '"><i class="glyphicon glyphicon-envelope"></i></a></td></tr>');
        tbody.append('<tr><td>Counselor Name</td><td>' + div["divisionCounselorName"] + '</td></tr>');
        tbody.append('<tr><td>Counselor Email</td><td>' + div["divisionCounselorEmail"] + ' <a target="blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=' + div["divisionCounselorEmail"] + '&tf=1&su=' + div["studentName"] + ': ' + div["studentId"] + '"><i class="glyphicon glyphicon-envelope"></i></a></td></tr>');
        tbody.append('<tr><td>Attendance Name</td><td>' + div["divisionAttendanceName"] + '</td></tr>');
        tbody.append('<tr><td>Attendance Email</td><td>' + div["divisionAttendanceEmail"] + ' <a target="blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=' + div["divisionAttendanceEmail"] + '&tf=1&su=' + div["studentName"] + ': ' + div["studentId"] + '"><i class="glyphicon glyphicon-envelope"></i></a></td></tr>');
        tbody.append('<tr><td>Student Leader Name</td><td>' + div["divisionStudentLeaderName"] + '</td></tr>');
        tbody.append('<tr><td>Student Leader Email</td><td>' + div["divisionStudentLeaderEmail"] + ' <a target="blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=' + div["divisionStudentLeaderEmail"] + '"><i class="glyphicon glyphicon-envelope"></i></a></td></tr>');
        t.append(tbody);
        
        $("#studentDivisionInformationPanelBody").append(t);
        
        
        
        hideLoader('studentDivisionInformation');
    }
    
    
    function getGoogleMailToHtml (to, subject) {
        return '<a target="blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=' + to + '&tf=1&su=' + subject + '"><i class="glyphicon glyphicon-envelope"></i></a>';
    }
    
    
    function getUnprocessedAttendanceFiles () {
        $.post(
                    'https://lanetech.org/api/processes/processes.php/unprocessedAttendanceFiles/', 
                    
                    { 
                        idtoken: id_token,
                        method: "GET"
                    },
                    function (response) {
                      $("#unprocessedAttendanceFiles .loader").show();
                      $("#unprocessedAttendanceFiles *").not(".loader").remove();
                      var d = new Date();
                      var n = d.toLocaleString();
                      $("#unprocessedAttendanceFiles .loader").hide();
                      $("#unprocessedAttendanceFiles").append("<p>Number of unprocessed files as of " + n + ": " + response.count + "</p>");
                      
                      // clear existing buttons and create a button for each file
                      $(".btnProcessAttendanceFile").remove();
                      $.each(response.data, function(i,v) {

                          var button = $("<a>");
                          button.addClass("btn btn-primary btnProcessAttendanceFile");
                          button.attr("data-filename",v);
                          button.text("Process file " + v);
                          $("#unprocessedAttendanceFiles").append(button);
                          $("#unprocessedAttendanceFiles").append("<br><br>");
                      });
                      
                    });
    }
    
    function showAddToEventModal () {
        // disable the button until we have events to select
        $("#addToEventModal .btn-primary").prop("disabled",true);
        
        // get event data and load into select
        getData('vwRecentAndFutureEvents', 0, function(response) {
           $("#addToEventModalEventId option[value!='0']").remove();
           
           $.each(response.data, function(i,v) {
             var option = $("<option>");
             option.attr("value",v.id);
             option.text(v.title + ", " + v.startDateTime + ", in " + v.location);
             $("#addToEventModalEventId").append(option);
           });
           // if we have events, enable the button
           if (response.data.length > 0) {
              $("#addToEventModal .btn-primary").prop("disabled",false);
           }
           else {
             showModal("No events found","There are no events; you may need to create one first.");
           }
         });
        
        
        var checkedCount = $("input[name='ckStudentId']:checked").length;
        if (checkedCount == 0) {
            $("#addToEventModal").modal("hide");
            showModal("Invalid", "You must select at least one item.");
        }
        $("#addToEventModal .modal-body p:eq(0)").text("You're about to add " + checkedCount + " student" + (checkedCount > 1 ? "s":"") + " to the selected event.");
        $("#addToEventModal").modal("show");
    }

    $("#addToEventModal .btn-primary").on("click", function() {
        var eventId = $("#addToEventModalEventId").val();
        if (eventId == "") {
            showModal("Invalid Event", "Please select an event.");
            return false;
        }
        
        var keys = [];
        $.each($("input[name='ckStudentId']:checked"), function(){            
            keys.push($(this).val());
        });
        //$("#absenceUpdateModal").modal("hide");
        createStudentEventEntries(keys.toString(),eventId);
        
    })

    function createStudentEventEntries (studentIds, eventId) {
        $("#addToEventModal").modal("hide");
        $.post(
                'https://lanetech.org/api/processes/processes.php/addStudentsToEvent', 
                
                { 
                    idtoken: id_token,
                    method: "POST",
                    event_id: eventId, 
                    student_ids: studentIds
                },
                function(response) {
                    showModal(response["result"],response["message"]);
                });
    }




    function showAbsenceUpdateModal () {
        var checkedCount = $("input[name='ckAbsenceId']:checked").length;
        if (checkedCount == 0) {
            $("#absenceUpdateModal").modal("hide");
            showModal("Invalid", "You must select at least one item.");
        }
        $("#absenceUpdateModal .modal-body p:eq(0)").text("You're about to update the attendance status for the " + checkedCount + " selected item" + (checkedCount > 1 ? "s":"") + ".");
        $("#absenceUpdateModal").modal("show");
    }

    $("#absenceUpdateModal .btn-primary").on("click", function() {
        var status = $("#absenceModalStatus").val();
        if (status == "") {
            showModal("Invalid Status Value", "Please select a status");
            return false;
        }
        
        var keys = [];
        $.each($("input[name='ckAbsenceId']:checked"), function(){            
            keys.push($(this).val());
        });
        //$("#absenceUpdateModal").modal("hide");
        updateAbsenceEntries(keys.toString(),status);
        
    })

    function updateAbsenceEntries (keys, status) {
        $('#absenceUpdateModal').modal("hide");
        $.post(
                'https://lanetech.org/api/v2/api.php/Absence/', 
                { 
                    idtoken: id_token,
                    method: "PATCH",
                    columns: {"status": status, "keys": keys}
                },
                function(response) {
                    showModal(response["result"],response["message"]);
                });
    }
    
    function showStudentEventUpdateModal () {
        var checkedCount = $("#eventSearch input[name='ckStudentEventId']:checked").length;
        if (checkedCount == 0) {
            $("#studentEventUpdateModal").modal("hide");
            showModal("Invalid", "You must select at least one item.");
        }
        $("#studentEventUpdateModal .modal-body p:eq(0)").text("You're about to update the event status for the " + checkedCount + " selected item" + (checkedCount > 1 ? "s":"") + ".");
        $("#studentEventUpdateModal").modal("show");
    }

    $("#studentEventUpdateModal .btn-primary").on("click", function() {
        var status = $("#studentEventModalStatus").val();
        if (status == "") {
            showModal("Invalid Status Value", "Please select a status");
            return false;
        }
        
        var keys = [];
        $.each($("#eventSearch input[name='ckStudentEventId']:checked"), function(){            
            keys.push($(this).val());
        });
        
        updateStudentEventEntries(keys.toString(),status);
        
    })

    function updateStudentEventEntries (keys, status) {
        $('#studentEventUpdateModal').modal("hide");
        $.post(
                'https://lanetech.org/api/v2/api.php/StudentEvent/', 
                { 
                    idtoken: id_token,
                    method: "PATCH",
                    columns: {"status": status, "keys": keys}
                },
                function(response) {
                    showModal(response["result"],response["message"]);
                });
    }    
    
    
    function loadStudentCourseSections(response) {
        var data = response.data;
        console.log(response.data);
        $("#studentCourseSections table").remove();
        var sortedData = response.data.sort(function(a, b){
            	var compare1 = isNaN(a.period) ? 0 : a.period;
            	var compare2 = isNaN(b.period) ? 0 : b.period;
            	return compare1 - compare2;
        });
        console.log(sortedData);
        $.each(sortedData, function(i,v) {
            v["teacherFullName"] += " " + getGoogleMailToHtml(v["teacherUsername"] + '@cps.edu',v["studentFullName"] + ": " + v["studentId"]);
        });
        displayTable( 
            [ 
                {column: 'period', header: 'Period'},
                {column: 'room', header: 'Room'},
                {column: 'courseCode', header: 'Course Code'},
                {column: 'courseName', header: 'Course Name'},
                {column: 'sectionNumber', header: 'Section Number'},
                {column: 'teacherFullName', header: 'Teacher'}
                
            ],
            sortedData,
            'studentCourseSections'
        );
        
        hideLoader('studentCourseSections');
    }
     
    function loadStudentCommunicationLogEntries(response) {
        var data = response.data;
        
        $("#badgeCommunicationLogEntriesCount").text("Number of entries: " + data.length);
        
        $("#studentCommunicationLogEntries table").remove();
        var sortedData = response.data.sort(function(a, b){
            	return a.dateTime - b.dateTime;
        });
        displayTable( 
            [ 
                {column: 'dateTime', header: 'Date/Time'},
                {column: 'staffLastName', header: 'Staff'},
                {column: 'subject', header: 'Subject'},
                {column: 'summary', header: 'Summary'}
            ],
            sortedData,
            'studentCommunicationLogEntries'
        );
        
        hideLoader('studentCommunicationLogEntries');
    }        

    function loadStudentArchiveCommunicationLogEntries(response) {
        var data = response.data;
        
        $("#badgeArchiveCommunicationLogEntriesCount").text("Number of entries: " + data.length);
        
        $("#studentArchiveCommunicationLogEntries table").remove();
        var sortedData = response.data.sort(function(a, b){
            	return a.dateTime - b.dateTime;
        });
        displayTable( 
            [ 
                {column: 'dateTime', header: 'Date/Time'},
                {column: 'staffLastName', header: 'Staff'},
                {column: 'subject', header: 'Subject'},
                {column: 'summary', header: 'Summary'}
            ],
            sortedData,
            'studentArchiveCommunicationLogEntries'
        );
        
        hideLoader('studentArchiveCommunicationLogEntries');
    }  



    function loadStudentDemeritEntries(response) {
        var data = response.data;
        
        var totalDemerits = 0;
        $.each(data, function(i,v) {
            totalDemerits += v["amount"];
        });
        
        $("#badgeDemeritCount").text("Number of demerits: " + totalDemerits);
        $("#badgeDemeritEntryCount").text("Number of entries: " + data.length);
        $("#studentDemeritEntries table").remove();
        var sortedData = response.data.sort(function(a, b){
            	return (new Date(a.dateTime)) - (new Date(b.dateTime));
        });
        
        
        displayTable( 
            [ 
                {column: 'dateTime', header: 'Date/Time'},
                {column: 'reason', header: 'Reason'},
                {column: 'amount', header: 'Number'},
                {column: 'staffLastName', header: 'Staff'},
                {column: 'comment', header: 'Comment'}
            ],
            sortedData,
            'studentDemeritEntries'
        );
        
        hideLoader('studentDemeritEntries');
    }      

    function loadStudentAbsenceEntries(response) {
        var data = response.data;
        
        var absenceCount = 0, tardyCount = 0;
        
        $.each(data, function(i,v) {
            if (v["status"].indexOf("AUX") > -1 || v["status"].indexOf("AEX") > -1 ) {
                absenceCount += 1;
            } 
            else if (v["status"].indexOf("T") > -1) {
                tardyCount += 1;
            }
        });
        
        $("#badgeAbsenceCount").text("Absences: " + absenceCount);
        $("#badgeTardyCount").text("Tardies: " + tardyCount);

        
        $("#studentAbsenceEntries table").remove();
        
        displayTable( 
            [ 
                {column: 'date', header: 'Date'},
                {column: 'period', header: 'Period'},
                {column: 'status', header: 'Status'}
            ],
            data,
            'studentAbsenceEntries'
        );
        
        hideLoader('studentAbsenceEntries');
    }       
   
    function callApi(url, dataMethod){
            //   using POST for every request due to Google Auth;
            //   dataMethod uses HTTP request methods, but all requests are POSTS
            //   using http request method names as "method" item in passed data
            $.post(
                url, 
                // 
                { 
                    idtoken: id_token,
                    method: dataMethod
                
                },
                function(response) {
                    var columns = [];
                    var column;
                    $.each(response.data[0], function (k,v) {
                         column = {};
                         column.field = k;
                         column.title = k;
                         column.sortable = true;
                         columns.push(column);
                    });
                    console.log(columns);
                    console.log(response.data);
    //                 var myColumns = [{
    //     field: 'id',
    //     title: 'id'
    // }, {
    //     field: 'firstName',
    //     title: 'First Name',
    //     sortable: true
    // }];
                    $('#tableResults').bootstrapTable({
                        detailFormatter: detailFormatter,
                        columns: columns,
    // columns: columns,
    data: response.data

                    });
                });
                // function(response) {
                //     data = response.data;
                //     $("#tableResults").html("");
                //     $("#tableResults").append("<tr id='tableHead'></tr>");
                //     $.each(displayColumns, function(i,v){
                //         $("#tableHead").append("<th>" + v + "</th>");
                //     });
                //     $("#tableResults").append("<tbody></tbody>");
                //     //console.log(typeof response);
                //     $.each(response.data, function(di,dv){
                //         var row = $("<tr>");
                //         var cell;
                //         console.log(dv);
                //         $.each(displayColumns, function(ci,cv){
                //             row.append("<td>" + dv[cv] + "</td>");
                //         })
                        
                //         $("#tableResults tbody").append(row);
                //     })
                    
                    
                    
                // });
        };

        function getCurrentDateTime() {
            var newDate = new Date();

            var offset = newDate.getTimezoneOffset() / 60;
            var hours = newDate.getHours();
        
            newDate.setHours(hours - offset);
        
            return newDate;   
        }



        function communicationsLogDetailFormatter(index, row) {
            return "<p><strong>Summary</strong><br>" + row[
            "summary"].replace(/(?:\r\n|\r|\n)/g, '<br />',"<br>") + "</p>" ;
        }

        function demeritDetailFormatter(index, row) {
            return "<p><strong>Summary</strong><br>" + row[
            "comment"].replace(/(?:\r\n|\r|\n)/g, '<br />',"<br>") + "</p>" ;
        }

        function detailFormatter(index, row) {
            var html = [];
            $.each(row, function (key, value) {
                html.push('<p><b>' + key + ':</b> ' + value + '</p>');
            });
            return html.join('');
        }
    
        var columns = {};

columns["StaffProfile"] = {

"id":{ "Label":"ID",	"Display":true,	"Editable":false,	"MaxLength":6},
"employeeId":{	"Label":"Employee ID",	"Display":false,	"Editable":false,	"MaxLength":9},
"tempId":{	"Label":"tempID",	"Display":false,	"Editable":false,	"MaxLength":6},
"firstName":{	"Label":"First Name",	"Display":true,	"Editable":true,	"MaxLength":25},
"lastName":{	"Label":"Last Name",	"Display":true,	"Editable":true,	"MaxLength":25},
"username":{	"Label":"Username",	"Display":true,	"Editable":false,	"MaxLength":25},
"title":{	"Label":"Title",	"Display":true,	"Editable":false,	"MaxLength":50},
"department":{	"Label":"department",	"Display":false,	"Editable":false,	"MaxLength":50},
"department_id":{	"Label":"department_id",	"Display":false,	"Editable":false,	"MaxLength":4},
"email":{	"Label":"Email",	"Display":true,	"Editable":false,	"MaxLength":50},
"gradebookId":{	"Label":"Gradebook ID",	"Display":true,	"Editable":false,	"MaxLength":10},
"old_id":{	"Label":"old_id",	"Display":false,	"Editable":false,	"MaxLength":6},
"address1":{	"Label":"Address1",	"Display":true,	"Editable":true,	"MaxLength":50},
"address2":{	"Label":"Address2",	"Display":true,	"Editable":true,	"MaxLength":50},
"city":{	"Label":"City",	"Display":true,	"Editable":true,	"MaxLength":50},
"state":{	"Label":"State",	"Display":true,	"Editable":true,	"MaxLength":2},
"zip":{	"Label":"ZIP",	"Display":true,	"Editable":true,	"MaxLength":10},
"phoneHome":{	"Label":"Phone: Home",	"Display":true,	"Editable":true,	"MaxLength":12},
"phoneCell":{	"Label":"Phone: Cell",	"Display":true,	"Editable":true,	"MaxLength":12},
"cellCarrier":{	"Label":"Cell Carrier",	"Display":true,	"Editable":true,	"MaxLength":25, "DataList": ['AT&T','Boost Mobile','Cricket Wireless','MetroPCS','Pinger','Sprint','T-Mobile','US Cellular','Verizon Wireless','Virgin Mobile']},
"emgName":{	"Label":"Name",	"Display":true,	"Editable":true,	"MaxLength":75},
"emgAddress1":{	"Label":"Address 1",	"Display":true,	"Editable":true,	"MaxLength":50},
"emgAddress2":{	"Label":"Address 2",	"Display":true,	"Editable":true,	"MaxLength":50},
"emgCity":{	"Label":"City",	"Display":true,	"Editable":true,	"MaxLength":50},
"emgState":{	"Label":"State",	"Display":true,	"Editable":true,	"MaxLength":2},
"emgZip":{	"Label":"Zip",	"Display":true,	"Editable":true,	"MaxLength":12},
"emgPhone":{	"Label":"Phone",	"Display":true,	"Editable":true,	"MaxLength":12},
"emgRelationship":{	"Label":"Relationship",	"Display":true,	"Editable":true,	"MaxLength":25},
"docName":{	"Label":"Name",	"Display":true,	"Editable":true,	"MaxLength":75},
"docAddress1":{	"Label":"Address 1",	"Display":true,	"Editable":true,	"MaxLength":50},
"docAddress2":{	"Label":"Address 2",	"Display":true,	"Editable":true,	"MaxLength":50},
"docCity":{	"Label":"City",	"Display":true,	"Editable":true,	"MaxLength":50},
"docState":{	"Label":"State",	"Display":true,	"Editable":true,	"MaxLength":2},
"docZip":{	"Label":"Zip",	"Display":true,	"Editable":true,	"MaxLength":12},
  "docPhone":{	"Label":"Phone",	"Display":true,	"Editable":true,	"MaxLength":12}};

columns["Contact"] = {
  "id":{ "Label":"ID",	"Display":true,	"Editable":false,	"MaxLength":6},
"type":{ "Label":"Type",	"Display":true,	"Editable":true,	"Options":"Parent 1,Parent 2,Emergency 1,Emergency 2,Doctor"},
"relation":{ "Label":"Relationship",	"Display":true,	"Editable":true},
"firstName":{ "Label":"First Name",	"Display":true,	"Editable":true},
"lastName":{ "Label":"Last Name",	"Display":true,	"Editable":true},
"address":{ "Label":"Address",	"Display":true,	"Editable":true},
"city":{ "Label":"City",	"Display":true,	"Editable":true},
"state":{ "Label":"State",	"Display":true,	"Editable":true,	"MaxLength":2},
"zip":{ "Label":"Zip",	"Display":true,	"Editable":true,	"MaxLength":10},
"email":{ "Label":"Email",	"Display":true,	"Editable":true},
"phoneCell":{"Label":"Phone: Cell",	"Display":true,	"Editable":true,	"MaxLength":12},
"phoneHome":{"Label":"Phone: Home",	"Display":true,	"Editable":true,	"MaxLength":12},
"cellConsent":{ "Label":"Cell Consent",	"Display":true,	"Editable":true,	"MaxLength":6},
"student_id":{ "Label":"Student_id",	"Display":true,	"Editable":false,	"MaxLength":6},
"staff_id":{ "Label":"Staff_id",	"Display":true,	"Editable":false,	"MaxLength":6},
"createdBy_staff_id":{ "Label":"Created By ID",	"Display":false,	"Editable":false,	"MaxLength":6},
"createdDateTime":{ "Label":"Created",	"Display":true,	"Editable":false,	"MaxLength":6},

}

var patterns = {};
patterns.phone = "[0-9]{3}-[0-9]{3}-[0-9]{4}";
patterns.zip = "(\d{5}([\-]\d{4})?)";
patterns.state = "[A-Z]{2}";


columns["id"]["legendText"] = "Profile Basics"  ;  
columns["emgName"]["legendText"] = "Emergency Contact"  ; 
columns["docName"]["legendText"] = "Physician"  ;       






var bellScheduleColumns = {
    
};


</script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
    
    <!--// table export extension-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js"></script>
    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
</body>
</html>


