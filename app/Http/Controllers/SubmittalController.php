<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubmittalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $submittals = DB::select('select * from submittals');
        return view('/Submittal/Log_Submittals',['submittals'=>$submittals]);
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
        //
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


    public function insertInitatorForm()
    {
     
        $ref = $request->input('ref');
        $date = $request->input('date');
        $type = $request->input('type');
        $no = $request->input('no');


        $name = $request->input('name');
        $required_date = $request->input('required_date');
        $description = $request->input('description');

        $data=array('ref'=>$ref,"date"=>$date,"type"=>$type,"no"=>$no);
        DB::table('initiators')->insert($data);
        
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }


    public function ShowInitatorForm()
    {
        
      return view ('Submittal.Initiator');
    }

    public function ShowContractorRecieveForm()
    {
        
      return view ('Submittal.Contractor_Recv');
    }

    public function ShowContractorSendForm()
    {
        
      return view ('Submittal.Contractor_Sent');
    }

    public function ShowConsultantRecieveForm()
    {
        
      return view ('Submittal.Consultant_Recieve');
    }

    public function ShowConsultantReplyForm()
    {
        
      return view ('Submittal.Consultant_Reply');
    }
    
    
    
    public function ShowConsultantTeamReplyForm()
    {
        
      return view ('Submittal.Consultant_Team_Reply');
    }

  
}
