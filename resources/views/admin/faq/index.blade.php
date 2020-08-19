@extends('admin.index') 
@section('content')
   
<div class="main">


  <div class="faqs__container">

    <h1 class="text-center my-5">Frequently Asked Questions</h1>

    
    <div class="card card-default">
    
      <div class="card-header">
      
        FAQ's

        <a href="{{ url('admin/faq/create') }}" class="btn btn-primary">Create FAQ</a>
      
      </div>

      <div class="card-body">
      <table class="table table-striped">
      <thead>
      <tr>
      <td>#</td>
      <td>Question</td>
      <td>Description</td>
      <td>Action</td>
      </tr>
      </thead>
      <tbody>
      
      
      @foreach($faqs as $faq)
      
      <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$faq->question}}</td>
      <td>{{$faq->descripton}}</td>
      <td>
      

        <a href="{{url('admin/faq/'.$faq->id.'/edit')}}" class="btn btn-info btn-sm float-right mr-2">
              
              Update 
            
            </a>
            
            {!! Form::open([
                                               'method'=>'DELETE',
                                               'url' => ['/admin/faq', $faq->id],
                                               'style' => 'display:inline'
                                            ]) !!}
                            {!! Form::button('<i class="fa fa-trash f-s-25"></i> Delete', array(
                                 'type' => 'submit',
                                 'onclick' => 'return confirm("Are you sure? ");',
                                 'class' => 'btn btn-danger',
                                    'data-type'=>'confirm',
                                 )) !!}
                            {!! Form::close() !!}

          </td>
      </tr>

      @endforeach
      </tbody>
      </table>
      
      </div>

    </div>
    
  </div>
</div>


    <!-- Create Modal -->

@endsection
