@extends('layouts.app')
@section('content')
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="asset/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Liste audio
    </a>
  </div>
</nav>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titre</th>
      <th scope="col">Duree</th>
      <th scope="col">Taille</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>
@endsection