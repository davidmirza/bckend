<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Number extends ResourceController
{
    use ResponseTrait;

    public function index(): string
    {
        return view('welcome_message');
    }

    public function checkNumber(){
        $num= $this->request->getVar('num');
        $nomor =is_numeric($num);
        return $this->respondCreated($nomor);
    }
    public function segitiga(){
        $num= $this->request->getVar('num');
        $def = "0";
        $result= array();

       for($x = 0;$x<=strlen($num);$x++){
         $tmp = substr($num,$x,1) ;
         if($x!=strlen($num)){
            array_push($result, $tmp.$def);
         $def =$def."0";
         }
       }
       return $this->respond($result);
    }
    public function ganjil($num=null){
        $num= $this->request->getVar('num');
        $result= array();
        for($s=0;$s<=$num;$s++){
            $g = $s % 2;
            $tmpresult =  ($g!= 0) ? $s." Bilangan Ganjil": $s." Bukan Bilangan Ganjil";
            array_push($result,$tmpresult);
           
          }
          return $this->respond($result);
    }
    public function prima(){
        $num= $this->request->getVar('num');
        $result= array();
        for($s=0;$s<=$num;$s++){
            $isPrima= true;
            for($x = $s-1;$x>1; $x--){
              if($s % $x === 0){
                $isPrima = false;
              }
            }
            $tmpresult = $isPrima ? $s." Bilangan Prima": $s." Bukan Bilangan Prima";
            array_push($result,$tmpresult);
           
          }
          return $this->respond($result);
    }
}
