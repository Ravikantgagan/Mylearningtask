<!DOCTYPE html>
<html>
<head>
	<title>this is if condtion statement</title>
</head>
<body>
	<?php

		$u="data not found";
	?>

	@if($data == 'hello')

	{{ $data }}

	@elseif($data=='hi')

	{{ $data }}

	@else

	{{ $u }}

	@endif
</body>
</html>