@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header"><h3><center>{{ __('BUILDING  LIST  TABLE') }}</h3></center></div>
                <div class="card-body">
                    <a  href="/building/create"  class="btn btn-primary my-2 "> + CREATE</a>
                    <div class="table-responsive">
                    <table class="table table-striped " id="example">
                        <thead>
                            <tr class="info">
                                <th width="3%">#</th>
                                <th width="30%">Project</th>
                                <th width="5%">FmCode</th>
                                <th width="4%">พื้นที่</th>
                                <th width="30%">ที่อยู่</th>
                                <th width="5%">เขต</th>
                                <th width="10%">ชื่อผู้ติดต่อ</th>
                                <th width="6%">เบอร์โทร</th>
                                <th width="2%">จำนวนอาคาร</th>
                                <th width="2%">ชั้น/อาคาร</th>
                                <th width="2%">จำนวนห้อง</th>
                                <th width="12%">Edit</th>
                                <th width="12%">Delete</th>
                            </tr>
                        </thead>
                    </div>
                        <tbody>
                           @foreach ($data as $row)
                               <tr>
                                <th scope="row">{{$row->id}}</th>
                                <td>{{$row->projecct}}</td>
                                <td>{{$row->fmcode}}</td>
                                <td>{{$row->area}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->zone}}</td>
                                <td>{{$row->contact}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->numberlayer}}</td>
                                <td>{{$row->floorbuilding}}</td>
                                <td>{{$row->roomnumber}}</td>
                                <td>
                                    <a href="{{route('building.edit',$row->id)}}" class="btn btn-success" >edit</a>
                                </td>
                                <td>
                                    <form action="{{route('building.destroy',$row->id)}}" method="post">
                                        @csrf @method('DELETE')
                                      <input type="submit" value='Delete'  data-name="{{$row->projecct}}" class="btn btn-danger deleteForm">
                                    </form>
                                </td>
                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection