@extends('layouts.template')
@section('title', 'Estado')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tema</h3>
    </div>
    <div class="card-body">
      Tema
    </div>
  </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            alert('HHHH')
        })
    </script>
@endpush
