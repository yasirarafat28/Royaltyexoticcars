@extends('admin.index') 
@section('content')
   
<div class="main">


  <div class="faqs__container">

    <h1 class="text-center my-5">Frequently Asked Questions</h1>

    
    <div class="card card-default">
    
      <div class="card-header">
      
        FAQ's

        <a href="{{ url('admin/faq/create') }}" class="btn btn-primaryt">Create FAQ</a>
      
      </div>

      <div class="card-body">
      
        <ul class="list-group">
      
          @foreach($faqs as $faq)

            <li class="list-group-item">
            
              {{ $faq->question }}

              <a href="{{url('admin/faq/'.$faq->id.'/edit')}}" class="btn btn-info btn-sm float-right mr-2">
              
                Update 
              
              </a>

              <a href="{{url('admin/faq/'.$faq->id.'/delete')}}" class="btn btn-danger btn-sm float-right mr-2">
              
                Delete 
              
              </a>
              
            </li>

          @endforeach

        </ul>
      
      </div>

    </div>
    
  </div>
</div>


    <!-- Create Modal -->

@endsection
