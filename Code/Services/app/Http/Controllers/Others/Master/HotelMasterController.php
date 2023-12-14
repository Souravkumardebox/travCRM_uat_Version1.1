<?php

namespace App\Http\Controllers\Others\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelMasterController extends Controller
{
    public function index(Request $request){
       
         
        $arrayDataRows = array();
  
        call_logger('REQUEST COMES FROM STATE LIST: '.$request->getContent());
        
        $Search = $request->input('Search');
        $Status = $request->input('Status');
        
        $posts = HotelMaster::when($Search, function ($query) use ($Search) {
            return $query->where('Name', 'like', '%' . $Search . '%');
        })->when($Status, function ($query) use ($Status) {
             return $query->where('Status',$Status);
        })->select('*')->orderBy('Name')->get('*');
  
        //$countryName = getName(_COUNTRY_MASTER_,3);
        //$countryName22 = getColumnValue(_COUNTRY_MASTER_,'ShortName','AU','Name');
        //call_logger('REQUEST2: '.$countryName22);
  
        if ($posts->isNotEmpty()) {
            $arrayDataRows = [];
            foreach ($posts as $post){
                $arrayDataRows[] = [
                    "Id" => $post->id,
                    "HotelName" => $post->HotelName,
                    "HotelCode" => $post->HotelCode,
                    "HotelCategory" => $post->HotelCategory,
                    "HotelCountry" => $post->HotelCountry,
                    "HotelState" => $post->HotelState,
                    "HotelCity" => $post->HotelCity,
                    "HotelType" => $post->HotelType,
                    "HotelPinCode" => $post->HotelPinCode,
                    "HotelAddress" => $post->HotelAddress,
                    "HotelLink" => $post->HotelLink,
                    "HotelLocation" => $post->HotelLocation,
                    "HotelGSTN" => $post->HotelGSTN,
                    "HotelWeekend" => $post->HotelWeekend,
                    "CheckIn" => $post->CheckIn,
                    "CheckOut" => $post->CheckOut,
                    "HotelInfo" => $post->HotelInfo,
                    "HotelPolicy" => $post->HotelPolicy,
                    "HotelT&C" => $post->HotelT&C,
                    "HotelAmenties" => $post->HotelAmenties,
                    "HotelRoomType" => $post->HotelRoomType,
                    "HotelStatus" => $post->HotelStatus,
                    "HotelChain" => $post->HotelChain,
                    "Contact_id" => $post->Contact_id,
                    "Created_at" => $post->created_at,
                    "Updated_at" => $post->updated_at
                ];
            }
            
            return response()->json([
                'Status' => 200,
                'TotalRecord' => $posts->count('id'),
                'DataList' => $arrayDataRows
            ]);
        
        }else {
            return response()->json([
                "Status" => 0,
                "TotalRecord" => $posts->count('id'), 
                "Message" => "No Record Found."
            ]);
        }
    }
  
    public function store(Request $request)
    {
        try{
            $id = $request->input('id');
            if($id == '') {
                 
                $businessvalidation =array(
                    'HotelName' => 'required|unique:'._DB_.'.'._HOTEL_MASTER_.',HotelName',
                );
                 
                $validatordata = validator::make($request->all(), $businessvalidation); 
                
                if($validatordata->fails()){
                    return $validatordata->errors();
                }else{
                 $savedata = HotelMaster::create([
                    
                    "HotelName" => $request->HotelName,
                    "HotelCode" => $request->HotelCode,
                    "HotelCategory" => $request->HotelCategory,
                    "HotelCountry" => $request->HotelCountry,
                    "HotelState" => $request->HotelState,
                    "HotelCity" => $request->HotelCity,
                    "HotelType" => $request->HotelType,
                    "HotelPinCode" => $request->HotelPinCode,
                    "HotelAddress" => $request->HotelAddress,
                    "HotelLink" => $request->HotelLink,
                    "HotelLocation" => $request->HotelLocation,
                    "HotelGSTN" => $request->HotelGSTN,
                    "HotelWeekend" => $request->HotelWeekend,
                    "CheckIn" => $request->CheckIn,
                    "CheckOut" => $request->CheckOut,
                    "HotelInfo" => $request->HotelInfo,
                    "HotelPolicy" => $request->HotelPolicy,
                    "HotelT&C" => $request->HotelT&C,
                    "HotelAmenties" => $request->HotelAmenties,
                    "HotelRoomType" => $request->HotelRoomType,
                    "HotelStatus" => $request->HotelStatus,
                    "HotelChain" => $request->HotelChain,
                    "Contact_id" => $request->Contact_id,
                    'created_at' => now(),
                ]);
  
                if ($savedata) {
                    return response()->json(['Status' => 0, 'Message' => 'Data added successfully!']);
                } else {
                    return response()->json(['Status' => 1, 'Message' =>'Failed to add data.'], 500);
                }
              }
     
            }else{
    
                $id = $request->input('id');
                $edit = HotelMaster::find($id);
    
                $businessvalidation =array(
                    'HotelName' => 'required',
                );
                 
                $validatordata = validator::make($request->all(), $businessvalidation);
                
                if($validatordata->fails()){
                 return $validatordata->errors();
                }else{
                    if ($edit) {
                        $edit->HotelName = $request->input('HotelName');
                        $edit->HotelCode = $request->input('HotelCode');
                        $edit->HotelCategory = $request->input('HotelCategory');
                        $edit->HotelCountry = $request->input('HotelCountry');
                        $edit->HotelState = $request->input('HotelState');
                        $edit->HotelCity = $request->input('HotelCity');
                        $edit->HotelType = $request->input('HotelType');
                        $edit->HotelPinCode = $request->input('HotelPinCode');
                        $edit->HotelAddress = $request->input('HotelAddress');
                        $edit->HotelLink = $request->input('HotelLink');
                        $edit->HotelLocation = $request->input('HotelLocation');
                        $edit->HotelGSTN = $request->input('HotelGSTN');
                        $edit->HotelWeekend = $request->input('HotelWeekend');
                        $edit->CheckIn = $request->input('CheckIn');
                        $edit->CheckOut = $request->input('CheckOut');
                        $edit->HotelInfo = $request->input('HotelInfo');
                        $edit->HotelPolicy = $request->input('HotelPolicy');
                        $edit->HotelTC = $request->input('HotelT&C');
                        $edit->HotelAmenties = $request->input('HotelAmenties');
                        $edit->HotelRoomType = $request->input('HotelRoomType');
                        $edit->HotelStatus = $request->input('HotelStatus');
                        $edit->HotelChain = $request->input('HotelChain');
                        $edit->Contact_id = $request->input('Contact_id');
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
  
  
     
    public function destroy(Request $request)
    {
        $brands = HotelMaster::find($request->id);
        $brands->delete();
  
        if ($brands) {
            return response()->json(['result' =>'Data deleted successfully!']);
        } else {
            return response()->json(['result' =>'Failed to delete data.'], 500);
        }
    
    }

}
