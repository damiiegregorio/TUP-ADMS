
@extends('layouts.app')
		
@section('content')
	<div class="container">
		<div class="col-md-9 col-xs-12">
		<div class="panel area-panel">
		  <div class="area-panel-heading">AREA 10: Administration</div>
		  <div class="panel-body">
		  	<table class="table table-hover">
			    <thead>	
			      <tr>
			        <th>Parameters</th>
			      </tr>
			    </thead>
			    <tbody>
			    <tr>
			   	<td>
		   		<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseA">A. Organization</a>
					</h4>
					</div>
					<div id="collapseA" class="panel-collapse collapse">
					  <div class="panel-body parameter-panel">
		  				<table class="table table-hover">
		  				<thead>	
						<tr>
						   <th data-toggle="collapse" href="#collapse2">System — Inputs and Process</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
							<ol id="collapse2" class="accrdn">
								<li><a href="">The institution has an organizational structure approved by the Board of Regents/Trustees (BOR/BOT)</a></li>
								<li><a href="">Every office/unit in the organizational structure has functions approved by the BOR/BOT.</a></li>
						    </ol>
							</td>
						</tr>
						</tbody>
						<thead>	
						<tr>
							<th data-toggle="collapse" href="#collapse2">Implementation</th>
						</tr>
						</thead>
						<tr>
							<td>
							<ol id="collapse2" class="accrdn">
								<li><a href="">The institution is subdivided into administrative units in accordance with the organizational structure.</a></li>
								<li><a href="">The functions, duties and responsibilities of the administrative personnel/staff in each unit/office are identified and carried out.</a></li>
								<li><a href="">The Board Regents/Trustees is supportive with the growth and development of the institution.</a></li>
								<li><a href="">The Academic and Administrative Councils exercise their powers and perform their functions.</a></li>
								<li><a href="">The flow of communication among and within units/departments is observed.</a></li>
						   	</ol>
							</td>
						</tr>
						<!-- OUTCOME -->
						<thead>	
							<tr>
								<th data-toggle="collapse" href="#collapse2">Outcome/s</th>
							</tr>
							</thead>
							<tr>
								<td>
								<ol id="collapse2" class="accrdn">
						      		<li><a href="">The institution has a well-designed and functional organizational structure.</a></li>
						      	</ol>
							    </td>
							</tr>
		  				</table>
		  			</div>
		  		</div>
		  	</div><!-- END OF PANEL -->
		  		  <!-- PARAMETER B -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B. Academic Administration</a>
					</h4>
				</div>
				<div id="collapseB" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table table-hover">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li data-toggle="collapse" href="#sub-parameter1"><a href="">The Dean/Academic Unit Head possesses the required educational qualification, experience and other prescribed requirements needed to administer the College/Academic Unit, as follows: <span class="glyphicon glyphicon-chevron-down"></span> </a></li>
								<ol id="sub-parameter1" class="panel-collapse collapse">
									<li><a href="#">Ms in ITE program at least three (3) years of IT work/consultancy experience, and at least three computer literacy both of which mus be within the last five (5) years.</a></li>
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER B -->
		  	<!-- PARAMETER C -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseB">B.</a>
					</h4>
				</div>
				<div id="collapseB" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table table-hover">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER C -->
		  	<!-- PARAMETER D -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseD">D. Financial Management</a>
					</h4>
				</div>
				<div id="collapseD" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table table-hover">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER D -->
		  	<!-- PARAMETER E -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseE">E. Supply Management</a>
					</h4>
				</div>
				<div id="collapseE" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table table-hover">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER E -->
		  	<!-- PARAMETER F -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseF">F. Records Management</a>
					</h4>
				</div>
				<div id="collapseF" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table table-hover">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER F -->
		  	<!-- PARAMETER G -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseG">G.</a>
					</h4>
				</div>
				<div id="collapseG" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table table-hover">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER G -->
		  	<!-- PARAMETER H -->
		  	<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseH">H.</a>
					</h4>
				</div>
				<div id="collapseH" class="panel-collapse collapse">
					<div class="panel-body">
		  			<table class="table table-hover">
		  			<thead>	
					<tr>
						<th>System — Inputs and Process</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li><a href=""></a></li>
							<li><a href=""></a></li>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Implementation</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
					<thead>	
					<tr>
						<th>Outcome/s</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
						<ol class="accrdn">
							<li><a href=""></a></li>
							<li data-toggle="collapse" href="#sub-parameter"><a href=""></a></li>
								<ol id="sub-parameter" class="panel-collapse collapse">
									<li><a href="#"></a></li>
								</ol>
				      	</ol>
						</td>
					</tr>
					</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>
		  	<!-- End of PARAMETER H -->
		  	</div>
		  	</td>
		  	</tr>
		  	</tbody>
		  	</table>	
		  	</div>
		</div>
	</div>
</div>

@endsection