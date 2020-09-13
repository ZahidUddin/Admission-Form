@extends('admin.layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="card card-info" style="width:100%">
            <div class="card-header">
                How did you know about NUBTK ?
                <a class="btn btn-sm btn-success" style="float: right" href="{{url('admin-panel/courses/create')}}"><i class="fa fa-plus text-white"></i></a>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Comments</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                @if (isset($comments[0]))
                @foreach ($comments as $key => $comment)
                
                    <tbody>
                        <tr id="tr-{{ $comment->id }}">
                            <td style="width: 2%">{{ $key+1 }}</td>
                            <td>{{$comment->survey}}</td>
                            <td class="text-center" style="width: 15%">
                            <a class="btn btn-sm btn-info" href="{{url('admin-panel/courses/'.$comment->id.'/edit')}}"><i class="fa fa-edit text-white"></i></a>
                                <a class="btn btn-sm btn-danger"><i class="fa fa-trash text-white"></i></a>
                            </td>
                        </tr>
                    </tbody>
                
                @endforeach
                @endif
                </table>
            </div>
        </div>
    </div>
</div>

@endsection