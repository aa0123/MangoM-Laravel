@if (Auth::guard('web')->check())
<p class="text-success">
    Logged in as a User
</p>
@else
<p class="text-danger">
    You are logged out as a User
</p>
@endif

@if (Auth::guard('admin')->check())
<p class="text-success">
    Logged in as an Admin
</p>
@else
<p class="text-danger">
    You are logged out as a Admin
</p>
@endif