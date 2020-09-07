			<!-- section_ReqForm start -->
			<div id="section_ReqForm" class="border sectionDiv container-fluid">
				<h3>Submit a Customer request</h3>
				<form action="includes/request.inc.php" class="row" method="post">
					<div class="form-group col-sm-2">
						<input maxlength="25" type="text" class="form-control" id="customerName" name="customerName" placeholder="Name" required>
					</div>
					<div class="form-group col-sm-2">
						<input maxlength="25" type="text" class="form-control" id="customerSurname" name="customerSurname" placeholder="Surname">
					</div>
					<div class="form-group col-sm-2">
						<input maxlength="10" type="text" class="form-control" id="customerMobile" name="customerMobile" placeholder="Mobile" required>
					</div>
					<div class="form-group col-sm-2">
						<input maxlength="13" type="text" class="form-control" id="customerId" name="customerId" placeholder="Id number">
					</div>
					<div class="form-group col-sm-2">
						<input  type="number" step="0.01" class="form-control" id="reqAmount" name="reqAmount" placeholder="Request Amount" required>
					</div>
                    <div class="form-group col-sm-2">
                    <select id="cars" name="reqType" id="reqType" class="form-control">
                        <option value="1">Loan</option>
                        <option value="2">Emergancy</option>
                    </select>
					</div>
					<div class="form-group col-sm-2">
						<input  type="submit" class="form-control btn-success" id="reqSubmit" name="reqSubmit" value="submit">
					</div>
				</form>
			</div>
			<!-- section_ReqForm End -->