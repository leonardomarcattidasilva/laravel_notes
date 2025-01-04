@extends('layouts/main_layout')
@section('content')
   <div class="container mt-5">
      <div class="row justify-content-center">
         <div class="col">
            @include('top_bar')

            @if(count($notes) == 0)
               @include('first_note')
            @endif

            <!-- notes are available -->
            <div class="d-flex justify-content-end mb-3">
               <a href="{{route('newNote')}}" class="btn btn-secondary px-3">
                  <i class="fa-regular fa-pen-to-square me-2"></i>New Note
               </a>
            </div>

            @foreach($notes as $note)
               @include('note')
            @endforeach
		</div>
	  </div>
   </div>
@endsection
