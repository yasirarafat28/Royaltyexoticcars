@extends('layouts.front')
@section('content')
  <div class="main">
    <div class="faqs__container">
      <h1 class="text-center my-5">Frequently Asked Questions</h1>
      
      <div class="card card-default">
      
        <div class="card-header">
        
          FAQ's
        
        </div>

        <div class="card-body">
        
          <ul class="list-group">
        
            @foreach($faqs as $faq)

              <li class="list-group-item">
              
                {{ $faq->question }}

                <a href="/faqs/{{ $faq->id }}" class="btn btn-primary btn-sm float-right">
                
                  View
                
                </a>
                
              </li>

            @endforeach

          </ul>
        
        </div>

      </div>
      
    </div>
  </div>
  @endsection