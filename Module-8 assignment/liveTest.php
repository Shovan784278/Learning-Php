<!DOCTYPE html>
<html>
<head>
	<title>Table Example</title>
</head>
<body>
	<h1>Table Example</h1>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>25</td>
			</tr>
			<tr>
				<td>Sarah</td>
				<td>30</td>
			</tr>
			<tr>
				<td>Mike</td>
				<td>28</td>
			</tr>
		</tbody>
	</table>
	
	<h2>Add a new row</h2>
	<form>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="age">Age:</label>
		<input type="number" id="age" name="age"><br><br>
		<input type="button" value="Add" onclick="addRow()">
	</form>
	
	<script>
		function addRow() {
			var name = document.getElementById("name").value;
			var age = document.getElementById("age").value;
			var table = document.getElementsByTagName("table")[0];
			var newRow = table.insertRow(table.length);
			var cell1 = newRow.insertCell(0);
			var cell2 = newRow.insertCell(1);
			cell1.innerHTML = name;
			cell2.innerHTML = age;
		}
	</script>
</body>
</html>
