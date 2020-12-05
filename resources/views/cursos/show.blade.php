@extends('layouts.plantilla')
@section('title','curso'.$curso)

@section('content')
<!--<h1>Bienvendio al curso<//?php echo $curso ;?></h1>-->
    <h1>Bienvendio al curso {{ $curso }} </h1>
@endsection

