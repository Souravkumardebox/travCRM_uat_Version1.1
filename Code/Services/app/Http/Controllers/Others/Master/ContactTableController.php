<?php

namespace App\Http\Controllers\Others\Master;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Others\Master\ContactTable;


class ContactTableController extends Controller
{
    public function index(Request $request){
    
       
         
        $arrayDataRows = array();
  
        call_logger('REQUEST COMES FROM STATE LIST: '.$request->getContent());
        
        $Search = $request->input('Search');
        $Status = $request->input('Status');
        
        $posts = CurrencyMaster::when($Search, function ($query) use ($Search) {
            return $query->where('CountryCode', 'like', '%' . $Search . '%');
        })->when($Status, function ($query) use ($Status) {
             return $query->where('Title',$Status);
        })->select('*')->orderBy('ContactPerson')->get('*');
  
        
  
        
        if ($posts->isNotEmpty()) {
            $arrayDataRows = [];
            foreach ($posts as $post){
                $arrayDataRows[] = [
                    "Contact_id" => $post->id,
                    "Title" => $post->Title,
                    "ContactPerson" => $post->ContactPerson,
                    "Designation" => $post->Designation,
                    "CountryCode" => $post->CountryCode,
                    "Phone1" => $post->Phone1,
                    "Phone2" => $post->Phone2,
                    "Email1" => $post->Email1,
                    "Email2" => $post->Email2,
                   
                ];
            }
            
            
            return response()->json([
                'Status' => 200,
                'TotalRecord' => $posts->count('Contact_id'),
                'DataList' => $arrayDataRows
            ]);
        
        }else {
            return response()->json([
                "Status" => 0,
                "TotalRecord" => $posts->count('Contact_id'), 
                "Message" => "No Record Found."
            ]);
        }
    }
  
    public function store(Request $request)
    {
        
        try{
            $id = $request->input('Contact_id');
            if($id == '') {
                 
                $businessvalidation =array(
                    'Title' => 'required|unique:'._DB_.'.'._CONTACT_TABLE_.',Title',
                );
                 
                $validatordata = validator::make($request->all(), $businessvalidation); 
                
                if($validatordata->fails()){
                    return $validatordata->errors();
                }else{
                 $savedata = ContactTable::create([
                    'Title' => $request->Title,
                    'ContactPerson' => $request->ContactPerson,
                    'Designation' => $request->Designation,
                    'CountryCode' => $request->CountryCode,
                    'Phone1' => $request->Phone1,
                    'Phone2' => $request->Phone2,
                    'Email1' => $request->Email1,
                    'Email2' => $request->Email2, 
                    'created_at' => now(),
                ]);
  
                if ($savedata) {
                    return response()->json(['Status' => 0, 'Message' => 'Data added successfully!']);
                } else {
                    return response()->json(['Status' => 1, 'Message' =>'Failed to add data.'], 500);
                }
              }
     
            }else{
    
                $id = $request->input('Contact_id');
                $edit = ContactTable::find($id);
    
                $businessvalidation =array(
                    'Title' => 'required',
                );
                 
                $validatordata = validator::make($request->all(), $businessvalidation);
                
                if($validatordata->fails()){
                 return $validatordata->errors();
                }else{
                    if ($edit) {
                        $edit->Title = $request->input('Title');
                        $edit->ContactPerson = $request->input('ContactPerson');
                        $edit->Designation = $request->input('Designation');
                        $edit->CountryCode = $request->input('CountryCode');
                        $edit->Phone1 = $request->input('Phone1');
                        $edit->Phone2 = $request->input('Phone2');
                        $edit->Email1 = $request->input('Email1');
                        $edit->Email2 = $request->input('Email2');
                        $edit->updated_at = now();
                        $edit->save();
                        
                        return response()->json(['Status' => 0, 'Message' => 'Data updated successfully']);
                    } else {
                        return response()->json(['Status' => 1, 'Message' => 'Failed to update data. Record not found.'], 404);
                    }
                }
            }
        }catch (\Exception $e){
            call_logger("Exception Error  ===>  ". $e->getMessage());
            return response()->json(['Status' => -1, 'Message' => 'Exception Error Found']);
        }
    }
  
  
}
