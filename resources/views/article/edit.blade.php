@extends('layouts.backend.master')

@section('content')

{{-- @dd($id) --}}
@livewire('article.edit',['id' => $id])

@endsection
