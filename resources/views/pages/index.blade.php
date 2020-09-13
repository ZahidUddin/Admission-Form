@extends('layouts.app')

@section('content')

<style>

    .select2-container--default .select2-results__group {
        background-color: #33b5e5 !important;
        color: #fff !important;
    }
</style>

<div class="bgimg-1">
    <div class="caption">
        <span class="border">ONLINE ADMISSION FORM</span>
    </div>
</div>

<div class="container mt-5">
    <div class="card">

        @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Whoops!!!</strong> {{$error}}
            </div>
        @endforeach
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Welcome!</strong> {{session()->get('success')}}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Whops!</strong> {{session()->get('error')}}
            </div>
        @endif

        

        
        
        <div class="card-body px-lg-5 pt-0">
    
            <form class="md-form" style="color: #757575;" action="{{url('/')}}" method="post" enctype="multipart/form-data">
            @csrf
                <h5 class="card-header info-color white-text text-center py-4">
                <strong>SELECT PROGRAM</strong>
                </h5>
                <!-- Student Name -->
                <div class="row">

                    <div class="col-md-6">
                        
                        <div class="md-form">
                            <select name="dept" class="form-control select2" id="dept" onchange="toggleAcademics()">
                                <option value='0' disabled selected>Choose Program</option>
                                @if (isset($categories[0]))
                                @foreach ($categories as $key => $category)
                                <optgroup class="bg-primary" label="{{$category->name}}">
                                    @if (isset($category->programs[0]))
                                        @foreach ($category->programs as $key => $program)
                                            <option class="{{$category->name}}" value="{{$program->id}}" data-academics="{{ $category->academics }}">{{$program->programs}}</option>
                                        @endforeach
                                    @endif
                                </optgroup>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="file-upload-wrapper">
                                <label class="custom-file-label" for="customFile" style="top:-12px">Upload Your Photo</label>
                                <input type="file" class="custom-file-input" id="customFile" data-max-file-size="2M" name="file" />
                            </div>
                        </div>
                    </div>
                </div>



                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>PERSONAL INFORMATION</strong>
                </h5>
                
                <!-- Student Name -->
                <div class="md-form">
                    <label for="student_name">Student Name (Full Name)</label>
                    <input type="text" id="student_name" name="student_name" class="form-control" placeholder="">
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <!-- Father's Name -->
                        <div class="md-form">
                            <label for="father_name">Father's Name</label>
                            <input type="text" id="father_name" name="father_name" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Mother's Name -->
                        <div class="md-form">
                            <label for="mother_name">Mother's Name</label>
                            <input type="text" id="mother_name" name="mother_name" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <!-- Present Address -->
                        <div class="md-form">
                            <label for="present_address">Present Address</label>
                            <textarea id="present_address" name="present_address"  class="form-control md-textarea" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Permanent Address -->
                        <div class="md-form">
                            <label for="permanent_address">Permanent Address</label>
                            <textarea id="permanent_address" name="permanent_address"  class="form-control md-textarea" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Email -->
                        <div class="md-form mb-0">
                            <input type="email" class="form-control validate" id="email" name="email" aria-describedby="emailHelp">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
                            <label for="phone" class="">Phone</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form">
                            <label for="dob">Date of Birth</label>
                            <input class="form-control datepicker" type="text" id="dob" name="dob">
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="md-form">
                            <select class="form-control select2" id="gender" name="gender">
                                <option value="" disabled selected>Choose Your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>EDUCATIONAL INFORMATION</strong>
                </h5>
                
                @if(isset($academics[0]))
                @foreach($academics as $key => $academic)

                <div id="accordion">

                    <div class="card academics-card" data-academics-id="{{$academic->id}}">
                      <div class="card-header">
                      <a class="card-link" data-toggle="collapse" href="#collapse-{{$academic->id}}">
                            {{$academic->name}}
                        </a>
                      </div>
                      <div id="collapse-{{$academic->id}}" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Email -->
                                    <div class="md-form mb-0">
                                        <input type="text" class="form-control validate" id="education_name-{{$academic->id}}-{{$key}}" name="instritute_name[{{$academic->id}}]">
                                        <label for="education_name-{{$academic->id}}-{{$key}}" data-error="wrong" data-success="right">Institution Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <!-- Email -->
                                    <div class="md-form mb-0">
                                        <input type="text" class="form-control validate" id="education_name-{{$academic->id}}-{{$key}}" name="board_name[{{$academic->id}}]">
                                        <label for="education_name-{{$academic->id}}-{{$key}}" data-error="wrong" data-success="right">Board Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" class="form-control" id="education_result-{{$academic->id}}-{{$key}}" name="CGPA[{{$academic->id}}]">
                                        <label for="education_result-{{$academic->id}}-{{$key}}" class="">CGPA/Class/Division</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" class="form-control" id="education_result-{{$academic->id}}-{{$key}}" name="group_name[{{$academic->id}}]">
                                        <label for="education_result-{{$academic->id}}-{{$key}}" class="">Group Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                @endforeach
                @endif

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Comments</strong>
                </h5>

                <div class="row">
                    <div class="col-md-12 mt-4">
                        
                        <div class="md-form">
                            <label class="mdb-main-label" for="survey" style="margin-top: -40px;">How did you know about NUBTK ?</label>

                            

                            <select class="form-control select2" id="survey" name="survey">
                                <option value="" disabled selected>Choose</option>
                                
                                @foreach ($comments as $comment)
                                    <option value="{{ $comment->id }}">{{ $comment->survey }}</option>
                                @endforeach 
                            </select>
                        </div>
                    </div>
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Submit</button>

            </form>
        </div>
    </div>
</div>


<script>
toggleAcademics();

function toggleAcademics(){
    var dept = $('#dept');
    var academics = dept.find(':selected').attr('data-academics');
    academics = JSON.parse(academics);

    $.each($('.academics-card'), function(index, val) {
        var academics_id = $(this).attr('data-academics-id');
        if( academics.includes(parseInt(academics_id)) ) {
            $(this).show();
        }else{
            $(this).hide();
        }
    });
}

</script>

@endsection