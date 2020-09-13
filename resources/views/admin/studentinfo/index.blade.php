@extends('admin.layouts.app')
@section('content')

<style>
    td, th {
        vertical-align: middle !important;
        text-align: center;
        white-space: nowrap;
    }

    table {
    counter-reset: rowNumber;
    }

    table tr.start {
    counter-increment: rowNumber;
    }

    table tr.start td:first-child::before {
    content: counter(rowNumber);
    min-width: 1em;
    margin-right: 0.5em;
    }

    .color1 {
        background-color: #FFFEF9;
    }

    .color2 {
        background-color: #E3F0FF;
    }

    .color3 {
        background-color: #D2E7FF;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="card card-info" style="width:100%">
            <div class="card-header">
                Academics
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped ">
                        <thead>
                            <tr> 
                                <th rowspan="2">SL</th>
                                <th rowspan="2">Image</th>
                                <th rowspan="2">Student Name</th>
                                <th rowspan="2">Father's Name</th>
                                <th rowspan="2">Mother's Name</th>
                                <th rowspan="2">Address</th>
                                <th rowspan="2">Email</th>
                                <th rowspan="2">Phone</th>
                                <th rowspan="2">Gender</th>
                                <th rowspan="2">Comment</th>
                                <th rowspan="2">Selected Department</th>
                                <th colspan="4" class="bg-gradient-primary">SSC</th>
                                <th colspan="4" class="bg-gradient-success">HSC</th>
                                <th colspan="4" class="bg-gradient-info">BSC</th>
                            </tr>
                            <tr>
                                <th>Institute Name</th>
                                <th>Board Name</th>
                                <th>CGPA</th>
                                <th>Group Name</th>
                                <th>Institute Name</th>
                                <th>Board Name</th>
                                <th>CGPA</th>
                                <th>Group Name</th>
                                <th>Institute Name</th>
                                <th>Board Name</th>
                                <th>CGPA</th>
                                <th>Group Name</th>
                              </tr>
                        </thead>
                        <tbody>
                            @if(isset($userInfos[0]))
                                @foreach ($userInfos as $value)
                                <tr class="start">
                                    <td></td>
                                    <td>@if(isset($value->image[0]))
                                            <img src="{{url('/user-images')}}/{{$value->image}}" width="100%" alt="{{$value->student_name}}" >
                                        @else
                                            <img src="{{url('/user-images/no-image.png')}}" width="100%" alt="{{$value->student_name}}" >
                                        @endif
                                    </td>
                                    <td>{{$value->student_name}}</td>
                                    <td>{{$value->father_name}}</td>
                                    <td>{{$value->mother_name}}</td>
                                    <td>Present Address: {{$value->present_address}} <br> Permanent Address: {{$value->permanent_address}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td>{{$value->gender}}</td>
                                    <td>{{$value->comments->survey}}</td>
                                    <td>{{$value->program->category->name}}: {{$value->program->programs}}</td>
                                    @foreach($value->academics as $key => $academic)
                                    @php
                                    $information = json_decode($academic->information,true);
                                    @endphp
                                    @foreach($information as $key => $value)

                                    <td>{{ $value }}</td>

                                    @endforeach
                                    @endforeach

                                    
                                </tr> 
                                @endforeach
                            @endif


                        {{-- @if(isset($userinfos[0]))
                        @foreach($userinfos as $key => $userinfo)
                            <tr id="tr-{{ $userinfos->id }}">
                                <td style="width: 2%">{{ $key+1 }}</td>
                                <td>{{$userinfos->name}}</td>
                                <td class="text-center" style="width: 15%">
                                <a class="btn btn-sm btn-info" href="{{url('admin-panel/academics/'.$academic->id.'/edit')}}"><i class="fa fa-edit text-white"></i></a>
                                    <a class="btn btn-sm btn-danger"><i class="fa fa-trash text-white"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection