

@if($errors->any())
@foreach($errors->all() as $error)
<li>{{ $error }}</li>

@endforeach
@endif
<form action="{{ route('storedata') }}" method="post">
	
	{{csrf_field()}}

	<label for="Name">Name: </label>
	<input type="text" name="name">
	<input type="submit">


<!--	<label for="Email">Email: </label>
	<input type="text" name="email">
	<input type="submit">
	-->
</form>
	 
	 