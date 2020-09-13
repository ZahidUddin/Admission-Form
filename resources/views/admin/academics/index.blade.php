@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card card-info" style="width:100%">
            <div class="card-header">
                Academics
                <a class="btn btn-sm btn-success" style="float: right" href="{{url('admin-panel/academics/create')}}"><i class="fa fa-plus text-white"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($academics[0]))
                    @foreach($academics as $key => $academic)
                        <tr id="tr-{{ $academic->id }}">
                            <td style="width: 2%">{{ $key+1 }}</td>
                            <td>{{$academic->name}}</td>
                            <td class="text-center" style="width: 15%">
                            <a class="btn btn-sm btn-info" href="{{url('admin-panel/academics/'.$academic->id.'/edit')}}"><i class="fa fa-edit text-white"></i></a>
                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash text-white"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection