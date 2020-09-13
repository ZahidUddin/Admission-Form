<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'categories' => \App\ProgramCategory::with(['programs'])->orderBy('name','asc')->get(),
            'academics' => \App\Academics::get(),
            'comments' => \App\Comments::get(),
        ];

        return view('pages.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:user_info',
            'phone' => 'required|min:11',
        ]);

        $user_info = \App\UserInfos::create($request->all());
        

        if($user_info){

            if($request->hasFile('file')){ 
                $fileInfo=fileInfo($request->file);
                if(explode('/',$fileInfo['type'])[0]=="image"){
                    $size = $fileInfo['size'];
                    $name=$user_info->id.'-'.date('YmdHis').'-'.rand().'-'.rand().'.'.$fileInfo['extension'];
                    $upload=fileUpload($request->file,'user-images',$name);
                    if($upload){
                       $user_info->image=$name;
                       $user_info->save();
                    }
                }
            }

            $user_academics = [];
            $academics = \App\Academics::get();

            if(isset($academics[0])){
                foreach($academics as $key => $academic){
                    if(isset($request->instritute_name[$academic->id])){
                        $information = array(
                            'instritute_name' => $request->instritute_name[$academic->id],
                            'board_name' => $request->board_name[$academic->id],
                            'CGPA' => $request->CGPA[$academic->id],
                            'group_name' => $request->group_name[$academic->id]
                        );

                        array_push($user_academics,array(
                            'user_id' => $user_info->id,
                            'academic_id' => $academic->id,
                            'information' => json_encode($information),
                            'created_at' => date('Y-m-d H:i:s')
                        ));
                    }
                }
            }

            if(isset($user_academics[0])){
                \App\UserAcademics::insert($user_academics);
            }


            session()->flash('success','Data added');
        }else{
            session()->flash('error','Something went wrong!');
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
