@extends('home2')
@section('home2')

<center><h3 class="card-title">{{$pacientes->id}} </h3></center>

<h3 class="card-title">{{$pacientes->persona->nombre}} </h3></center>
<h3 class="card-title">{{$pacientes->afiliacion->nombre}} </h3></center>

              @stop