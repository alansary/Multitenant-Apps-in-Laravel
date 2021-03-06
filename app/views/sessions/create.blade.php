<form class="form-signin" role="form" method="post" action="{{ tenantRoute('sign-in') }}">
    <h1>Toodoo</h1>

    @include('shared._notifications')

    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="email" class="form-control" name="email" placeholder="Email address" required autofocus>
    <input type="password" class="form-control" name="password" placeholder="Password" required>
    <label class="checkbox">
        <input type="hidden" name="remember" value="0">
        <input type="checkbox" name="remember" value="1"> Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
    <a class="btn btn-lg btn-default btn-block" href="{{ tenantRoute('sign-up') }}">Sign Up</a>
</form>
