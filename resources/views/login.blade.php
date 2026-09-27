@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group" style="padding-top:10px;">
                <button type="submit" class="btn btn-primary" style="padding-top:10px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection