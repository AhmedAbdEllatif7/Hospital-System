<?php

namespace App\Http\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

trait ManageFile
{
    public function uploadFile($request, $name, $folder, $prefix)
    {
        $imageOriginalExtension = $request->file($name)->getClientOriginalExtension();

        $newFileName = $prefix . '.' . $imageOriginalExtension;

        $request->file($name)->storeAs('attachments/' . $folder, $newFileName, 'upload_attachments');

        return $newFileName;
    }


    public function deleteFile($folder, $fileName)
    {
        $filePath = 'attachments/' . $folder . '/' . $fileName;

        $exists = Storage::disk('upload_attachments')->exists($filePath);

        if ($exists) {
            Storage::disk('upload_attachments')->delete($filePath);
        } else {
            return redirect()->back()->with(['error' => 'File not found']);
        }
    }




    //    public function uploadFile($request , $name , $folder){
//
//        $imageOriginalName = $request->file($name)->getClientOriginalName();
//
//        $request->file($name)->storeAs('attachments/' . $folder , $imageOriginalName , 'upload_attachments');
//
//        return $imageOriginalName;
//    }




}
