<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api extends Controller
{
    protected $token;
    protected $header;
    protected $url;

    public function __construct()
    {
        $this->token = 'Z1ZHVFgzczJzekNxKy90YWZ2MTV1V0tXbDB6OXRXMWJBM0U1Rmc5NWFxL2lmcWVjOGp2d2VRSnhVY0traDVjY3ZlSndIVlcvZlR5SmRzK29Zc2t4ZllVa2RtbktBSWNMYnJORzBER1c3alg1SFZYeDE3aXpMWWNtUlhjYVA3akcwZ0ZTNm1xcnJ1cWMzSmJUcGpkOGwyb3Erenh1SUw5ZzZYeEVHRXVIK1lEaVp5S1kyTGNiYXQzMDZMUVduM1R3';
        $this->header = array("Authorization: Bearer ".$this->token );
        $this->url = 'https://bukaolshop.net/api/v1/';
    }

    public function endPoin($parameter, $query=[])
    {
        if($query){
            $query_cu=http_build_query($query);
            $cu = $this->url.$parameter.$query_cu;
        } else {
            $cu = $this->url.$parameter;
        }
        

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $cu,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Accept: */*",
            "Cache-Control: no-cache",
            "Connection: keep-alive",
            "Content-Type: application/json",
            "Authorization: Bearer ".$this->token
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        // Decode the response from the API

        $decoded_response_object = json_decode($response);

        curl_close($curl);

        // Return the decoded response so you can use it to make another request
        // foreach($decoded_response_object->data as $data){
        //     echo $data->nama_barang.'Harga: '.$data->harga_barang.'<br>';
        // }
        // dd($decoded_response_object->data);
        return $decoded_response_object->data;
    }

    public function produk($page=1)
    {
        return $this->endPoin('produk/list?', ["page"=>$page]);
    }

    public function transaksi($page=1, $id_user=false, $email_user=false, $filter_status=false)
    {
        $query = ['page' => $page];
        if($id_user){
           $query = array_merge($query, ['id_user'=>$id_user]);
        }
        if($email_user){
           $query = array_merge($query, ['email_user'=>$email_user]);
        }
        if($filter_status){
            $query = array_merge($query, ['filter_status'=>$filter_status]);
        }

        return $this->endPoin('transaksi/list?', $query);
    }

}

