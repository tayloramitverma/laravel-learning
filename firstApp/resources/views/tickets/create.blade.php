@extends('master')
@section('title', 'Create a ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Create a ticket</h5>
                <div class="clearfix"></div>
            </div>


            <div class="card-body mt-2">
                <form method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label for="title" class="col-lg-12 control-label">Title</label>
                            <div class="col-lg-12">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-12 control-label">Content</label>
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                                <span class="help-block">Feel free to ask us any question.</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <!-- {!! Form::open(array ('url' => 'contact')) !!}
{!! Form::label('First name') !!}
{!! Form::text('firstname', 'Enter your first name') !!}
<br />
{!! Form::label('Last name') !!}
{!! Form::text('lastname', 'Enter your last name') !!}
<br />
{!! Form::submit() !!}
{!! Form::close() !!} -->
            </div>
        </div>
    </div>
@endsection