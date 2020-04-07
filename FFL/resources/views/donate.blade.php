@extends('layouts.app')
@section('title', 'Donate Now')
@section('style')

@endsection
@section('content')



 

    <div class="container mt-4 pt-4">
    <div class="row justify-content-md-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">Donation information</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">For how many people you want to donate?</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group row{{ $errors->has('food_type') ? ' has-error' : '' }}">
                            <label for="food_type" class="col-md-4 control-label">Food Type</label>

                            <div class="col-md-6">
                                <select id="food_type"  class="form-control" name="food_type" required>
								<option></option>
								<option></option>
								<option></option>
								</select>

                                @if ($errors->has('food_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('food_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						
					
						
						
                        <div class="form-group row{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date & Time of Donation</label>
							
                            <div class="col-md-3">
							<div class='input-group date' id='datetimepicker1'>
                                <input id="date" type="date" class="form-control" name="date" required>
								  <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
          </span>
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
								</div>
                            </div> 
							<div class="col-md-3">
							<div class='input-group time' id='timepicker1'>
                                <input id="date" type="datetime" class="form-control" name="time" required  placeholder="hr:min:sec" >
								  <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
          </span>
                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
								</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 control-label">Pick Up Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" required>
                            </div>
                        </div>
						    <div class="form-group row{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label for="contact" class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6">
                                <input id="contact" type="tel" class="form-control" name="contact" required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
					

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Donate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>$(function () {
		$('#datetimepicker1').datetimepicker({
			format: 'DD-MM-YYYY LT'
		});
		$('#datetimepicker2').datetimepicker({
			format: 'DD-MM-YYYY'
		});
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
</script>