@extends('admin.index')
@section('content')
<div class="content">


  <div class="col-12">

    <h1 class="text-center my-5">Vehicle Requirements</h1>

    <div class="card card-default">

      <div class="card-header">

        Requirements

      </div>

      <div class="card-body">

          @if(session()->has('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          @if($errors->any())
              <div class="alert alert-danger">
                  {{ $errors->first() }}
              </div>
          @endif
      <table class="table table-striped">
        <thead>
            <tr>
                <td>#</td>
                <td>type</td>
                <td>local age</td>

                <td>international age</td>
                <td>international driving licence</td>

                <td>international fuel credit</td>
                <td>Action</td>
            </tr>
        </thead>
      <tbody>


      @foreach($requires as $require)

      <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$require->category->name??$require->type}}</td>
      <td>{{$require->local_age}}</td>

      <td>{{$require->international_age}}</td>
      <td>{{$require->international_driving_licence}}</td>

      <td>{{$require->international_fuel_credit}}</td>

      <td>
          <a href="/admin/vehicle_requirements/{{$require->id}}/edit" class="btn btn-success"><i class="fa fa-pencil f-s-25"></i> Edit</a>
          <a href="/admin/vehicle_requirements/{{$require->id}}" class="btn btn-success"><i class="fa fa-eye f-s-25"></i> Show</a>

            {!! Form::open([
                                               'method'=>'DELETE',
                                               'url' => ['/admin/vehicle_requirements', $require->id],
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
