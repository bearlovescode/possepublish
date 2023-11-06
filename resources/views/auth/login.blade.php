@extends('templates.admin')

@section('content')
   <section class="content">
       <form id="frmAuthLogin">

           <div class="actions"></div>
           @csrf
       </form>
   </section>
@endsection
