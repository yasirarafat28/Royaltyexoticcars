@extends('layouts.front')
@section('content')

<div class="container">
    
    <h1 class="text-center my-5">
    
        {{ $faqs->question }}

    </h1>

    <div class="row justify-content-center my-5">
    
        <div class="col-md-6">
        
            <div class="card card-default">
        
                <div class="card-header">
                
                    Answer
                
                </div>

                <div class="card-body">
                
                    {{ $faqs->descripton }}
                
                </div>

            </div>
        
        </div>
    
    </div>

</div>

@endsection