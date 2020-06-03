@extends('layout')

@section('css')

@endsection

@section('main')

@php
//print_r($tasks);
@endphp

<!-- brick-wrapper -->
<div class="bricks-wrapper">

    <div id="pannel">
       @include('front-standard')
    </div>   

</div>

@endsection

@section('js')
<script src="{{ asset('public/js/mine.js') }}"></script>
<script>
   $(document).ready(function(){
      //...
   });
</script>
@endsection

