<!DOCTYPE html>
<html>
<head>
	<title>this is my insert form demo</title>
</head>
<body>
	<center>
		<form action="{{url('insert')}}" method="post">
			
			<table>
				<tr>
					{{csrf_field()}}

					<td>
						First Name:
					</td>
					<td><input type="text" name="firstname"></td>
				</tr>
				<tr>
					<td>
						Last Name:
					</td>
					<td><input type="text" name="lasttname"></td>
				</tr>
				<tr>
					<td>
						mobile:
					</td>
					<td><input type="text" name="mobile"></td>
				</tr>
				<tr>
				
					
					
					<td><input type="submit"  value="add"></td>
				</tr>
			</table>



		</form>
	</center>
	


</body>
</html>