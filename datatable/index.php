<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
</head>
<body>


<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
    	$(document).ready(function() {
		    var table = $('#example').DataTable( {
		        "processing": true,
		        "serverSide": true,
		        "ajax": "server_processing.php",
		        "aoColumnDefs": [ {
			      "aTargets": [7],
			      "mData": "id",
			      "mRender": function ( data, type, full ) {
			        return '<a href="view/'+data+'">View</a> | <a href="edit/'+data+'">Edit</a> | <a href="delete/'+data+'">Delete</a>';
			      },
			    } ]
		    });
		});
		 
    </script>







</body>
</html>