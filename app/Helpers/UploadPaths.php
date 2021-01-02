<?php


namespace App\Helpers;


use Illuminate\Support\Facades\DB;

class UploadPaths
{
public static $uploadPaths = array(
    'product_photos' => '/uploads/products_images',

);

    public static function getUploadPath($path){
        return public_path().self::$uploadPaths[$path];
    }

    public static function uploadDataFromFile(){
        $filePath = public_path().'/files/laravel.txt';
        $read = fopen($filePath,"r");
        while (!feof($read)){
            $contents = fgets($read);
            //print_r($contents)."</br>";
            $contentArray = explode(",",trim($contents),2);
            //list($date,$desc) = array_pad($contentArray,2,'');

            DB::table('holidays')->insert([
                'date'=> isset($contentArray[0]) ? $contentArray[0] : '',
                'description'=> isset($contentArray[1]) ? $contentArray[1] : '',
                'type'=>0
            ]);
        }

        fclose($read);
    }
}
