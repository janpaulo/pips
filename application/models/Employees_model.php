<?php

class Employees_model extends CI_Model {
    private $pears_ws = PEARS_WS;
    
    public function getEmployees(){
        
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:7001/pears/PIPS/GetEmployees',
            // CURLOPT_URL => 'http://hcp-testsvr:9000/PWRMT/RMTWS/GetEmployeeProfile/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            $response_json = json_decode($response);

            curl_close($curl);
            
            return $response_json;
    }
    
    public function searchEmployees($hrisID, $phicCode, $lname,  $fname){
        
        $url = $this->pears_ws."SearchEmployee";
        // $url = 'http://localhost:7001/pears/PIPS/SearchEmployee';

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL =>  $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{"empID": "'.$hrisID.'", "phicCode": "'.$phicCode.'","lname": "'.$lname.'", "fname": "'.$fname.'"}',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        
        $response_json = json_decode($response);
        return $response_json;
        // echo $response;
        
    }
}

?>