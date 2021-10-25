<div class="container">
    <h1>IPT102 Project</h1>

    <div>
        <h3>Welcome {{$user->name}}!</h3>

        <p>
            Click the link below for verification.
        </p>
    </div>
    <p>
        <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}" class="btn btn-primary form-control">
            Click here..
        </a>
    </p> 
</div>