@extends('admin.index')
@section('content')

<h1 class="text-center">Create FAQs</h1>

<div class="row justify-content-center my-5">

    <div class="col-md-8">

        <div class="card card-default">

            <div class="card-header">

                Create New FAQs

            </div>

            <div class="card-body">

                <form action="{{ url('admin/faq')}}" method="POST">

                    @csrf

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Question" name="question">

                    </div>

                    <div class="form-group">

                        <textarea name="description" placeholder="Description" cols="30" rows="10" class="form-control"></textarea>

                    </div>

                    <div class="form-group text-center">

                        <button class="btn btn-success" type="submit">

                            Create FAQ

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
