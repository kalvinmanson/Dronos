<div class="sidefields">

	<div class="list-group">
	@foreach ($fields as $field)
	  <div class="list-group-item">

	  	{!! Form::open([
	  	    'method' => 'DELETE',
	  	    'route' => ['fields.destroy', $field->id]
	  	]) !!}
	  		<div class="btn-group pull-right">
		  	    <a href="/fields/{{ $field->id }}/edit" class="btn btn-warning btn-xs fancya"><i class="fa fa-edit"></i></a>
		  	    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></button>
	  	    </div>
	  	{!! Form::close() !!}

	    <h4 class="list-group-item-heading">{{ $field->name }}</h4>
	    <p class="list-group-item-text">{{ $field->content }}</p>
	  </div>
	@endforeach
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">New field</div>
	  <div class="panel-body">
	  	<form method="POST" action="/fields">
		    <div class="form-group">
		    	<label form="category">Category</label>
		    	<select name="category" id="category" class="form-control">
		    		<option value="text">Texto</option>
		    	</select>
		    </div>
		    <div class="form-group">
		    	<label form="name">Name</label>
		    	<input type="text" name="name" id="name" class="form-control typeahead" autocomplete="off">
		    </div>
		    <div class="form-group">
		    	<label form="content">Content</label>
		    	<textarea name="content" id="content" class="form-control"></textarea>
		    </div>
		    <div class="form-group">
				<input type="hidden" name="{{ $resource }}" value="{{ $resource_id }}" id="token">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		    	<button type="submit" class="btn btn-primary">Save</button>
		    </div>
		</form>
	  </div>
	</div>
</div>