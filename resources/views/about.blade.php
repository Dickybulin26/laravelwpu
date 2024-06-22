@extends('layouts.main')

@section('container')
    <h1>about Page</h1>
    <h3><?php echo $name; ?></h3>
    <p>{{ $email; }}</p>
    <img src="{{ $image; }}" alt="{{ $name; }}">
@endSection
