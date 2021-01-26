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
{!! Form::open(['action' => ['buildingController@update',$data->id],'method'=>'PUT']) !!}
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">{{ __('EIDT BUILDING') }}</div>
                    <div class="card-body">
                     <div class ="container">

                            <div class="form-group">
                                {!! Form::label('Building')!!}
                                {!! Form::text('projecct',$data->projecct,["class"=>"form-control"])!!}
                            </div>
                            
                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('Fm-Code')!!}
                                    {!! Form::text('fmcode',$data->fmcode,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Area')!!}
                                      {!! Form::text('area',$data->area,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('Address')!!}
                                {!! Form::textarea('address',$data->address,["class"=>"form-control",'rows' => 2])!!}
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('Zone')!!}
                                    {!! Form::text('zone',$data->zone,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Latitude')!!}
                                      {!! Form::text('lat',$data->lat,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Longitude')!!}
                                      {!! Form::text('long',$data->long,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('Contact-Name')!!}
                                    {!! Form::text('contact',$data->contact,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Phone')!!}
                                      {!! Form::number('phone',$data->phone,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                  <div class="form-group">
                                    {!! Form::label('NumberLayer')!!}
                                    {!! Form::number('numberlayer',$data->numberlayer,["class"=>"form-control"])!!}
                                  </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Floor/Building')!!}
                                      {!! Form::number('floorbuilding',$data->floorbuilding,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('RoomNumber')!!}
                                      {!! Form::number('roomnumber',$data->roomnumber,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                      {!! Form::label('Balance')!!}
                                      {!! Form::number('balance',$data->balance,["class"=>"form-control"])!!}
                                    </div>
                                </div>
                            </div><br>
                           <input type="submit" value="Edit " class="btn btn-primary">
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
