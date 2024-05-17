<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        // dump($request->berkas);
        // // return "Pemroses file upload di sini";
        // if($request->hasFile('berkas'))
        // {
        //     echo "path(): ". $request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): ".$request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): ".
        //          $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType(): ". $request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): ".
        //         $request->berkas->getClientOriginalname();
        //     echo "<br>";
        //     echo "getSize(): ".$request->berkas->getSize();
        // }
        // else
        // {
        //     echo "Tidak ada berkas yang upload";
        // }
        // $request->validate([
        //     'berkas' => 'required|file|image|max:5000',]);
        //     echo $request->berkas->getClientOriginalName()."lolos validasi";
    //     $request->validate([
    //         'berkas' => 'required|file|image|max:5000',]);
    //         // $path = $request->berkas->store('uploads');
    //         $path = $request->berkas->storeAs('uploads', 'berkas');
    //     echo "proses upload berhasil, file berada di: $path";
    // }
//             $request->validate([
//                  'berkas' => 'required|file|image|max:5000',]);
//                 $namafile=$request->berkas->getClientOriginalName();
//                 $path = $request->berkas->storeAs('uploads', $namafile);
//                 echo "proses upload berhasil, data disimpan pada:$path";
// }
           $request->validate([
            'berkas' => 'required|file|image|max:500',]);
            $extfile=$request->berkas->getClientOriginalName();
            $namaFile='web'.time().".".$extfile;
            $path = $request->berkas->storeAs('uploads',$namaFile);
            echo "proses upload berhasil, data disimpan pada:$path";
        }
}