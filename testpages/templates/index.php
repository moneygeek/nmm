<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Negotiation Manager</title>
	<link rel="stylesheet" href="/static/css/bootstrap.css" />
	<link rel="stylesheet" href="/static/css/base.css"/>
	<link rel="stylesheet" href="/static/css/design.css" />
	<style>
	table.table td {
	}
	table .strip {
		background-color: #EEE;
	}
	input.box-up {
		margin-top: -3px;
	}
	
	</style>
</head>
<body>
<div class="container">
<div class="navbar">
    <div class="navbar-inner">
            <div class="row-fluid">
                <div class="span2"><a href="#"><img src="/static/img/nmlogo.jpg"></a></div>

                <ul class="nav pull-right">
                    <li><a id="ask_for_help" href="#ask_for_help_modal" data-toggle="modal">Ask For Help</a></li>
                    <li><a href="#">Jim</a></li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="breadcrumb">
        <li>Input</li>
    </ul>
	<h3>Negotiators:</h3>
	<table class="table" style="width: 735px">
		<tr class="strip">
			<td>First Name:</td>
			<td><input type="text" class="input-medium" value="Jim" /></td>
			<td>Last Name:</td>
			<td><input type="text" class="input-medium" value="Passmore" /></td>
		</tr>
		<tr class="strip">
			<td>Department:</td>
			<td><input type="text" class="input-medium" value="IT Department" /></td>
			<td>Position:</td>
			<td><input type="text" class="input-medium" value="Director of IT" /></td>
		</tr>
	</table>
	<input type="button" class="btn" value="Add Negotiator" />
	
	<h3>Stakeholders:</h3>
	<table class="table" style="width: 735px">
		<tr class="strip">
			<td>First Name:</td>
			<td><input type="text" class="input-medium" value="Andre" /></td>
			<td>Last Name:</td>
			<td><input type="text" class="input-medium" value="Robins" /></td>
		</tr>
		<tr class="strip">
			<td>Department:</td>
			<td><input type="text" class="input-medium" value="IT" /></td>
			<td>Position:</td>
			<td><input type="text" class="input-medium" value="Vice President" /></td>
		</tr>
		<tr class="strip">
			<td>Interests:</td>
			<td colspan="3"><input type="text" class="input-xxlarge" value="Risk Mitigation" /></td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" class="input-medium" value="Steve" /></td>
			<td>Last Name:</td>
			<td><input type="text" class="input-medium" value="Jarvis" /></td>
		</tr>
		<tr>
			<td>Department:</td>
			<td><input type="text" class="input-medium" value="" /></td>
			<td>Position:</td>
			<td><input type="text" class="input-medium" value="CEO" /></td>
		</tr>
		<tr>
			<td>Interests:</td>
			<td colspan="3"><input type="text" class="input-xxlarge" value="" /></td>
		</tr>
		<tr class="strip">
			<td>First Name:</td>
			<td><input type="text" class="input-medium" value="Bill" /></td>
			<td>Last Name:</td>
			<td><input type="text" class="input-medium" value="Millar" /></td>
		</tr>
		<tr class="strip">
			<td>Department:</td>
			<td><input type="text" class="input-medium" value="Legal" /></td>
			<td>Position:</td>
			<td><input type="text" class="input-medium" value="Vice President" /></td>
		</tr>
		<tr class="strip">
			<td>Interests:</td>
			<td colspan="3"><input type="text" class="input-xxlarge" value="Corporate Protection" /></td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" class="input-medium" value="Charlie" /></td>
			<td>Last Name:</td>
			<td><input type="text" class="input-medium" value="Ross" /></td>
		</tr>
		<tr>
			<td>Department:</td>
			<td><input type="text" class="input-medium" value="Engineering" /></td>
			<td>Position:</td>
			<td><input type="text" class="input-medium" value="Vice President" /></td>
		</tr>
		<tr>
			<td>Interests:</td>
			<td colspan="3"><input type="text" class="input-xxlarge" value="" /></td>
		</tr>
		<tr class="strip">
			<td>First Name:</td>
			<td><input type="text" class="input-medium" value="Ray" /></td>
			<td>Last Name:</td>
			<td><input type="text" class="input-medium" value="Murray" /></td>
		</tr>
		<tr class="strip">
			<td>Department:</td>
			<td><input type="text" class="input-medium" value="Operations" /></td>
			<td>Position:</td>
			<td><input type="text" class="input-medium" value="" /></td>
		</tr>
		<tr class="strip">
			<td>Interests:</td>
			<td colspan="3"><input type="text" class="input-xxlarge" value="" /></td>
		</tr>
	</table>
	<input type="button" class="btn" value="Add Stakeholder" />
	
	
	<p>&nbsp;</p>
	<table class="table" style="width: 735px">
		<tr>
			<td>Type of Contract:</td>
			<td><input type="text" value="Outsourcing Disaster Recovery" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="checkbox" checked="checked" class="box-up" /> New &nbsp;&nbsp;&nbsp; <input type="checkbox" class="box-up" /> Renewal</td>
		</tr>
		<tr>
			<td>Attachments:</td>
			<td><input type="file" class="btn" /> <input type="button" class="btn" value="Upload" /></td>
		</tr>
		<tr>
			<td>Value:</td>
			<td>$ <input type="text" value="900,000" /></td>
		</tr>
		<tr>
			<td>Desired Savings:</td>
			<td>$ <input type="text" value="75,000" /></td>
		</tr>
		<tr>
			<td>Deadline:</td>
			<td><input type="text" value="March 30, 2013" /></td>
		</tr>
		<tr>
			<td>Key Contract Terms:</td>
			<td>
				<textarea rows="4" style="width: 300px;">5 years, $180,000 per year, no annual escalation, recovery workshops, non-self managed recovery, high availability, contractual service level guarantee, recovery time objective.</textarea>
			</td>
		</tr>
		<tr>
			<td>No-Deal Option:</td>
			<td><textarea name="textarea">Our alternative is ABC corporation</textarea></td>
		</tr>
		<tr>
			<td>Team Members:</td>
			<td><textarea style="width: 300px;">operating systems manager, applications manager, storage manager, network manager</textarea></td>
		</tr>
		<tr>
			<td>Project Management Tools Used:</td>
			<td><textarea>Microsoft Project</textarea></td>
		</tr>
		<tr>
			<td>Negotiation Experience:</td>
			<td><select><option>Novice - no formal skills training</option></select></td>
		</tr>
		<tr>
			<td>Personal Time to Prepare:</td>
			<td><input type="text" value="3 hours" /></td>
		</tr>
		<tr>
			<td>Negotiation Partners</td>
			<td><textarea style="width: 300px;">Steve Petit, Sales Representative
George Vernon, Sales Manager</textarea></td>
		</tr>
	</table>
	<div class="row-fluid">
                <div class="span5 offset5">
                    <a href="/design/" class="btn btn-primary">Next Page</a>
                </div>
            </div>


	<div class="modal hide fade" id="ask_for_help_modal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Ask For Help</h4>
                </div>
                <div class="modal-body">
                    <select>
                        <option value="contract_terms">Contract Terms</option>
                        <option value="neg_strategies">Negotiating Strategies</option>
                        <option value="neg_process">Tips of Negotiating Process</option>
                        <option value="contract_analysis">Contract Analysis</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Message Expert</a>
                </div>
            </div>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                    <script src='/static/js/bootstrap.js'></script>
</div>
</body>
</html>