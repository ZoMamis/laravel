@extends('layouts.app')
@section('content')

<main class="form-signin"> 

  <form class="text-center">
    <img class="mb-4" src="assets/user.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <form id="con">
    <div class="form-floating">
      <input type="email" class="form-control" id="mail" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> 
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
    <p class="mt-5 mb-3 text-muted"><a href="/register">Sign Up</a></p>
  </form>
</main>

@endsection