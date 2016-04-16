


<div class="col-lg-12" style="background-color:#00c0ef;color:white;border-left: 5px solid black;">
    
	<h5><i class="glyphicon glyphicon-bullhorn"></i>
	 Message of the day</h5>
	 <marquee>If at first you don't succeed; call it version 1.0
	 </marquee>
</div>

<div class="row">
		<div class="col-md-4" style="margin-top:20px; ">
		                    <div class="panel panel-default" style="border-top:2px solid blue;text:center">
		                        <div class="panel-heading">
		                            Profile
		                        </div>
		                        <div class="panel-body"style="text-align: center">
		                          <img src="../image/virendra.jpg" style="height:105px;width:105px;" class="img-circle img-thumbnail">  
		                        <table class="table table-hover "style="text-align: left">
		                        	<tr>
		                        		<th>Name</th>
		                        		<td>Viendra Singh Pawar</td>
		                        	</tr>
		                        	<tr>
		                        		<th>Branch</th>
		                        		<td>CSE</td>
		                        	</tr>
		                        	<tr>
		                        		<th>Semester</th>
		                        		<td>VIII</td>
		                        	</tr>
		                        	<tr>
		                        		<th>Student Id</th>
		                        		<td>0901cs12061</td>
		                        	</tr>
		                        	<tr>
									<th>Status</th>
									<td>
										<span class="label label-success">Active</span>
									</td>
</tr>
		                        </table>
		                        <div class="box-footer text-right">
			<a class="btn btn-default btn-sm" href="#">More Info <i class="fa fa-arrow-circle-right"></i></a>	      </div>

		                         </div>
		                       

		                    </div>
		</div>
		<div class="col-md-8" style="margin-top:20px">
		  <div class="panel panel-default" style="border-top:2px solid red;">
		                        <div class="panel-heading">
		                            Time Table
		                        </div>
		                        <div class="panel-body">
		                       <table class="table table-hover">
		                       	<thead>
		                       	<tr>
		                       		<th>Timing</th>
		                       		<th>Mon</th>
		                       		<th>Tues</th>
		                       		<th>Wed</th>
		                       		<th>Thru</th>
		                       		<th>Fri</th>
		                       		<th>Sut</th>
		                       	</tr>
		                       	</thead>
		                       	<tr>
		                       		<td>10:00-10:50</td>
		                       		<td>A</td>
		                       		<td>B</td>
		                       		<td>C</td>
		                       		<td>D</td>
		                       		<td>E</td>
		                       		<td>F</td>
		                       	</tr>
		                       	<tr>
		                       		<td>10:50-11:40</td>
		                       		<td>A</td>
		                       		<td>B</td>
		                       		<td>C</td>
		                       		<td>D</td>
		                       		<td>E</td>
		                       		<td>F</td>
		                       	</tr>
		                       	<tr>
		                       		<td>11:40-12:30</td>
		                       		<td>A</td>
		                       		<td>B</td>
		                       		<td>C</td>
		                       		<td>D</td>
		                       		<td>E</td>
		                       		<td>F</td>
		                       	</tr>
		                       	<tr>
		                       		<td>12:30-01:20</td>
		                       		<td>A</td>
		                       		<td>B</td>
		                       		<td>C</td>
		                       		<td>D</td>
		                       		<td>E</td>
		                       		<td>F</td>
		                       	</tr>
		                       	<tr>
		                       		<td>01:20-02:20</td>
		                       		<td></td>
		                       		<td></td>
		                       		<td></td>
		                       		<td><b>Lunch</b></td>
		                       		<td></td>
		                       		<td></td>
		                       	</tr>
		                       	<tr>
		                       		<td>2:20-03:10</td>
		                       		<td>A</td>
		                       		<td>B</td>
		                       		<td>C</td>
		                       		<td>D</td>
		                       		<td>E</td>
		                       		<td>F</td>
		                       	</tr>
		                       	<tr>
		                       		<td>03:10-04:00</td>
		                       		<td>A</td>
		                       		<td>B</td>
		                       		<td>C</td>
		                       		<td>D</td>
		                       		<td>E</td>
		                       		<td>F</td>
		                       	</tr>
		                       	<tr>
		                       		<td>04:00-04:50</td>
		                       		<td>A</td>
		                       		<td>B</td>
		                       		<td>C</td>
		                       		<td>D</td>
		                       		<td>E</td>
		                       		<td>F</td>
		                       	</tr>
		                       </table>
		                        </div>
		</div>
		</div>
		</div>

		

<div class="row">
<div class="col-md-8" style="max-height: 900" >
		<div class="panel panel-default " style="border-top:2px solid #12df21;text:center">
		<div class="panel-heading">
		Calendar
		 </div>
		 <div class="panel-body">


<link href='../calender/fullcalendar.css' rel='stylesheet' />
<link href='../calender/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='../calender/lib/moment.min.js'></script>
<!-- <script src='../calender/lib/jquery.min.js'></script>
 -->
 <script src='../calender/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2016-01-12',
			businessHours: true, // display business hours
			editable: true,
			events: [
				{
					title: 'Business Lunch',
					start: '2016-01-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2016-01-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2016-01-18',
					end: '2016-01-20'
				},
				{
					title: 'Party',
					start: '2016-01-29T20:00:00'
				},

				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2016-01-11T10:00:00',
					end: '2016-01-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2016-01-13T10:00:00',
					end: '2016-01-13T16:00:00',
					rendering: 'background'
				},

				// red areas where no events can be dropped
				{
					start: '2016-01-24',
					end: '2016-01-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2016-01-06',
					end: '2016-01-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			]
		});
		
	});

</script>



	<div id='calendar'></div>







	<!-- 		<iframe src="../templates/calendar.html" class="col-md-12" scrolling="no" style="border: 0px;height: 650px">
	 -->
			</iframe>	
		

			
		 </div>
		</div>
	</div>	
	
	
	<div class="col-md-4" style="max-height: 900" >
		<div class="panel panel-default "style="border-top:2px solid orange;text:center">
		<div class="panel-heading">
	 Birthdays
	 <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Todays Birthday</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Upcoming Birthdays</a>
                                </li>
                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                   
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                               
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
		
	</div>
		
	</div>	





<div class="row">


	<div class="col-md-4" style="max-height: 900" >
		<div class="panel panel-default "style="border-top:2px solid black	;text:center">
		<div class="panel-heading">
		Notice Board
	 <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#Department" data-toggle="tab">Department </a>
                                </li>
                                <li><a href="#College" data-toggle="tab">College</a>
                                </li>
                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="Department">
                                   <p></p>
                                  <span class="label label-success">13/04/2016</span>   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  <span class="label label-success">16/04/2016</span>    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  <span class="label label-success">23/04/2016</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 
                                </div>
                                <div class="tab-pane fade" id="College">
                                    <p></p>
                                   <span class="label label-default">13/04/2016</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  <span class="label label-default">16/04/2016</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  <span class="label label-default">23/04/2016</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                </div>
                               
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
		
	</div>



<div class="col-md-8" style="max-height: 900" >
		<div class="panel panel-default "style="border-top:2px solid green;text:center">
		<div class="panel-heading">
		Library
		 </div>
		 <div class="panel-body">
			 <table class="table table-hover">
		                       	<thead>
		                       	<tr>
		                       		<th>S.no</th>
		                       		<th>Book id</th>
		                       		<th>Name</th>
		                       		<th>Issue Date</th>
		                       		<th>Return Date</th>
		                       		<th>Fine</th>
		                       		
		                       	</tr>
		                       	</thead>
		                       	<tr>
		                       		<td>1</td>
		                       		<td>cs2343</td>
		                       		<td>O.S. Cormen</td>
		                       		<td>12/04/2016</td>
		                       		<td>12/07/2016</td>
		                       		<td>Rs0.00</td>
		                       	</tr>
		                       	<tr>
		                       		<td>2</td>
		                       		<td>cs5343</td>
		                       		<td>D.S. Baluja</td>
		                       		<td>12/04/2016</td>
		                       		<td>12/07/2016</td>
		                       		<td>Rs0.00</td>
		                       	</tr>
			</table>
		 </div>
		</div>
	</div>	
	
	
		
	</div>	






	

	
</div>
	
</div>



