<?php

class Employees_model extends CI_Model {

    
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
}

?>