@extends('admin.index')
@section('content')
<div class="content">


  <div class="col-12">

    <h1 class="text-center my-5">Vehicle Requirements</h1>



    <div class="card card-default">

      <div class="card-header">

        Requirements

        <a href="{{ url('admin/faq/create') }}" class="btn btn-primary">Create FAQ</a>

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
                <td>local_age</td>
                <td>local_driving_license</td>
                <td>local_insurance</td>
                <td>local_liability_insurance</td>
                <td>local_property_damage_waiver</td>
                <td>local_tire_protection</td>
                <td>local_mechanical_breakdown_coverage</td>
                <td>local_fuel_credit</td>
                <td>international_age</td>
                <td>internationl_driving_license</td>
                <td>international_insurance</td>
                <td>international_full_coverage_insurance_d1</td>
                <td>international_full_coverage_insurance_d2</td>
                <td>international_property_damage_waiver</td>
                <td>international_tire_protection</td>
                <td>international_mechanical_breakdown_coverage</td>
                <td>international_fuel_credit</td>
                <td>Action</td>
            </tr>
        </thead>
      <tbody>


      @foreach($requires as $require)

      <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$require->type}}</td>
      <td>{{$require->local_driving_license}}</td>
      <td>{{$require->local_insurance}}</td>
      <td>{{$require->local_liability_insurance}}</td>
      <td>{{$require->local_property_damage_waiver}}</td>
      <td>{{$require->local_tire_protection}}</td>
      <td>{{$require->local_mechanical_breakdown_coverage}}</td>
      <td>{{$require->local_fuel_credit}}</td>
      <td>{{$require->international_age}}</td>
      <td>{{$require->internationl_driving_license}}</td>
      <td>{{$require->international_insurance}}</td>
      <td>{{$require->international_full_coverage_insurance_d1}}</td>
      <td>{{$require->international_full_coverage_insurance_d2}}</td>
      <td>{{$require->international_property_damage_waiver}}</td>
      <td>{{$require->international_tire_protection}}</td>
      <td>{{$require->international_mechanical_breakdown_coverage}}</td>
      <td>{{$require->international_fuel_credit}}</td>

      <td>
          <a href="/admin/faq/{{$faq->id}}/edit" class="btn btn-success"><i class="fa fa-pencil f-s-25"></i> Edit</a>

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
