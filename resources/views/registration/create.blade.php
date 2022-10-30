@extends('layouts.app')

@section('content')

    <div class="container" >
        <div class="row">
            <div class="col-md-5 col-md-offset-4">
                <div class="tablet">
                    <h2>Registration form</h2>
                    <form method="POST" action="/register">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="departments" class="control-label thin-weight">@lang('Assign department')</label>
                            <select name="departments" id="" class="form-control">
                                @foreach($departments as $key => $department)
                                    <option {{ isset($user) && $user->department->first()->id === $key ? "selected" : "" }} value="{{$key}}">{{$department}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        @include('partials.formerrors')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
