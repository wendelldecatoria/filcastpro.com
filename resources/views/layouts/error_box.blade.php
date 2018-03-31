@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
<<<<<<< HEAD
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"></i> Success!</h4>
	{{ Session::get('success') }}
</div>
@elseif(count($errors) > 0)
<div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-warning"></i> Warning!</h4>
	@if(count($errors) > 1)
	<ul>
		@foreach ($errors->all() as $error)
		<li>{!! $error !!}</li>
		@endforeach
	</ul>
	@else
	{!! $errors->all()[0] !!}
	@endif
=======
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success! </h4>
    {{ Session::get('success') }}
</div>
@elseif(count($errors) > 0)
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Warning! </h4>
    @if(count($errors) > 1)
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{!! $error !!}}</li>
        @endforeach
    </ul>
    @else
    {{!! $errors->all()[0] !!}}
    @endif
>>>>>>> b6f7695ca4e21d994aa1eb29f3f396da87c9fad3
</div>
@endif