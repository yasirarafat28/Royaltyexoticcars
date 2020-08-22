@extends('admin.index')
@section('content')

<h1 class="text-center">Create FAQs</h1>

<div class="row justify-content-center my-5">

    <div class="col-md-8">

        <div class="card card-default">

            <div class="card-header">

                Edit FAQs

            </div>

            <div class="card-body">

                <form action="{{url('admin/faq/'.$faqs->id)}}" method="POST">
                {{method_field('PATCH')}}

                    @csrf

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Question" name="question" value="{{ $faqs->question }}">

                    </div>

                    <div class="form-group">

                        <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control" value="">{{ $faqs->descripton }}</textarea>

                    </div>

                    <div class="form-group text-center">

                        <button class="btn btn-success" type="submit">

                            Update FAQ

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
