@extends('admin.layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="card card-info" style="width:100%">
            <div class="card-header">
                Courses
                <a class="btn btn-sm btn-success" style="float: right" href="{{url('admin-panel/courses/create')}}"><i class="fa fa-plus text-white"></i></a>
            </div>
            <div class="card-body">

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    @if (isset($categories[0]))
                    @foreach ($categories as $key => $category)

                        <!-- Accordion card -->
                        <div class="card">
                    
                            <!-- Card header -->
                            <div class="card-header" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#courses-{{$category->id}}" aria-expanded="true"
                                aria-controls="{{$category->id}}">
                                <h5 class="mb-0">
                                    {{$category->name}} <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                                </a>
                            </div>
                        
                            <!-- Card body -->
                            <div id="courses-{{$category->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Courses</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                    @if (isset($category->programs[0]))
                                    @foreach ($category->programs as $key => $program)
                                    
                                        <tbody>
                                            <tr id="tr-{{ $program->id }}">
                                                <td style="width: 2%">{{ $key+1 }}</td>
                                                <td>{{$program->programs}}</td>
                                                <td class="text-center" style="width: 15%">
                                                <a class="btn btn-sm btn-info" href="{{url('admin-panel/courses/'.$program->id.'/edit')}}"><i class="fa fa-edit text-white"></i></a>
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
                        <!-- Accordion card -->
                    @endforeach
                    @endif
                
                </div>
                <!-- Accordion wrapper -->
            </div>
        </div>
    </div>
</div>

@endsection