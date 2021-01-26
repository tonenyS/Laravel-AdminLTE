@extends('layouts.app')
@section('content')
<div class ="container">
  @if ($errors->all())
  <ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <li>
         {{$error}}
      </li>
    @endforeach
  </ul>
  @endif
{!! Form::open(['action' => 'buildingController@store','method'=>'POST']) !!}
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header"><h3>{{ __('ADD BUILDING') }}</h3></div>
                    <div class="card-body">
                     <div class ="container">
                            <div class="form-group">
                                {!! Form::label('Building')!!}
                                {!! Form::text('projecct',null,["class"=>"form-control"])!!}
                            </div>
                            
                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('Fm-Code')!!}
                                    {!! Form::text('fmcode',null,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Area')!!}
                                      {!! Form::text('area',null,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('Address')!!}
                                {!! Form::textarea('address',null,["class"=>"form-control",'rows' => 2])!!}
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('Zone')!!}
                                    {!! Form::text('zone',null,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Latitude')!!}
                                      {!! Form::text('lat',null,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Longitude')!!}
                                      {!! Form::text('long',null,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('Contact-Name')!!}
                                    {!! Form::text('contact',null,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Phone')!!}
                                      {!! Form::text('phone',null,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('NumberLayer')!!}
                                    {!! Form::number('numberlayer',null,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Floor/Building')!!}
                                      {!! Form::number('floorbuilding',null,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('RoomNumber')!!}
                                      {!! Form::number('roomnumber',null,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Balance')!!}
                                      {!! Form::number('balance',null,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div><br>
                           <input type="submit" value="Add " class="btn btn-primary">
                           <a href="/building" class="btn btn-success my-2">Back</a>
                        </div> <br>                                          
                    </div>
                 </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
</div>
@endsection
