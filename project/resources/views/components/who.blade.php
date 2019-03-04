@if(Auth::guard('web')->check())
    <p class="text-success">You are loged in as a Student</p>
@else
    <p class="text-danger">You are loged out as a Student</p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">You are loged in as an Admin</p>
@else
    <p class="text-danger">You are loged out as a Admin</p>
@endif

@if(Auth::guard('teacher')->check())
    <p class="text-success">You are loged in as a Teacher</p>
@else
    <p class="text-danger">You are loged out as a Teacher</p>
@endif
