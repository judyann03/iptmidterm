@extends('base')

@section('content')
<br><br><br>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="card-header">
                <div>
                    <h1 style="text-align:center; color:rgb(255, 255, 255);">Registration Form</h1>
                </div>
<br>
                <div>
                    <form action="{{url('/register')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="name" style="color: white;">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="gender" style="color: white;"">Gender</label>
                            <input type="text" name="gender" id="gender" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="email" style="color: white;"">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" style="color: white;"">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <button class="btn btn-success form-control" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop