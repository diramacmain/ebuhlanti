<div class="container-fluid">
		  <!-- /#page-content-wrapper -->
			<h1>RMS Dashboard</h1>
			<?php 
			require 'requestForm.php';?>
			<!-- section_PayForm start -->
			<div id="section_PayForm" class="border sectionDiv container-fluid">
				<h3>Make Payment</h3>
				<form action="#" class="row">
					<div class="form-group col-sm-2">
						<label for="customerName" class="">Enter Req Id</label>
						<input maxlength="25" type="text" class="form-control" id="customerName" name="customerName">
					</div>
					<div class="form-group col-sm-2">
						<label for="customerName" class="">Enter Amount</label>
						<input maxlength="25" type="text" class="form-control" id="customerName" name="customerName">
					</div>
					<div class="form-group col-sm-2">
						<input  type="submit" class="form-control" id="reqSubmit" name="reqSubmit">
					</div>
				</form>
			</div>
			<!-- section_PayForm End -->

			<!-- section_ReqTable start -->
			<div id="section_ReqTable" class="border sectionDiv">
				<h3>Request List</h3>
				<table id="requestTable" class="display">
					<thead>
						<tr>
							<th>ReqId</th>
							<th>EBU Member</th>
							<th>Date of request</th>
							<th>Amount</th>
							<th>Request Type</th>
							<th>Status</th>
							<th>Comments</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>230</td>
							<td>Jack</td>
							<td>18/082020</td>
							<td>R1885.65</td>
							<td>External</td>
							<td>
								<a class="dropdown-toggle" href="#" id="statusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Approved</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="statusDropdown">
									<a class="dropdown-item" href="#">Approved</a>
									<a class="dropdown-item" href="#">Disbursed</a>
									<a class="dropdown-item" href="#">Canceled</a>
									<a class="dropdown-item" href="#">Rejected</a>
								</div>
							</td>
							<td> </td>
						</tr>
						<tr>
							<td>230</td>
							<td>Henry</td>
							<td>17/082020</td>
							<td>R1200.65</td>
							<td>Internal</td>
							<td>Approved</td>
							<td> </td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- section_ReqTable End -->

			<!-- section_MCol_Table start -->
			<div id="section_MCol_Table" class="border sectionDiv">
				<h3>Members Collections</h3>
				<table id="collectionsTableM" class="display">
					<thead>
						<tr>
							<th>ReqId</th>
							<th>Client</th>
							<th>Disbursment Date</th>
							<th>Loan Amount</th>
							<th>Expected amount</th>
							<th>Loan Status</th>
							<th>Outstanding</th>
							<th>Payment</th>
							<th>Payment Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>230</td>
							<td>Jack</td>
							<td>18/082020</td>
							<td>R1885.65</td>
							<td>External</td>
							<td>Approved</td>
							<td>555</td>
							<td>150</td>
							<td>Paid</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- section_MCol_Table End -->

			<!-- section_ACol_Tabl start -->
			<div id="section_ACol_Table" class="border sectionDiv">
				<h3>All Collections</h3>
				<table id="collectionsTableA" class="display">
					<thead>
						<tr>
							<th>ReqId</th>
							<th>Member</th>
							<th>Disbursment Date</th>
							<th>Loan Amount</th>
							<th>Expected amount</th>
							<th>Loan Status</th>
							<th>Outstanding</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>230</td>
							<td>Jack</td>
							<td>18/082020</td>
							<td>R1885.65</td>
							<td>External</td>
							<td>Approved</td>
							<td>566</td>

						</tr>
					</tbody>
				</table>
			</div>
			<!-- section_ACol_Tabl End -->

			<!-- section_Charts start -->
			<div id="section_Charts" class="border sectionDiv">
				<div class="row">  
					<div class="col-sm-6">
						<h3>Total Outstanding vs Member</h3>
						<div class="ct-chart ct-perfect-fourth" id="memberVsOut"></div>
					</div>
					<div class="col-sm-6">
						<h3>Requests Pie</h3>
						<div class="ct-chart ct-perfect-fourth" id="requestPie"></div>
					</div>
				</div>
			</div>
    </div>
    

  </div>
  <!-- /#wrapper -->