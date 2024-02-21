<?php

class Myprofile_model extends CI_Model {
    private $pears_ws = PEARS_WS;

    //Family Background

    public function getFamilyList($empID){

        $url = $this->pears_ws."GetFamilyList"."/".$empID ;

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response_json = json_decode($response);
        return  $response_json;
            
    }

    //Education Background
    public function getEducation($empID){
        
        $url = $this->pears_ws."GetEmpEducationList"."/".$empID ;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response_json = json_decode($response);
        return  $response_json;
            
    }


    //Eligibility Background
    public function getEligibility($empID){
        
        $url = $this->pears_ws."GetEmpEligibility"."/".$empID ;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response_json = json_decode($response);
        return  $response_json;
            
    }

    //Eligibility Background
    public function getTrainings($empID){
        
        $url = $this->pears_ws."GetEmpTrainings"."/".$empID ;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response_json = json_decode($response);
        return  $response_json;
            
    }
    //Work experience Background
    public function getWorkExp($empID){
        
        $url = $this->pears_ws."GetEmpExperiences"."/".$empID ;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response_json = json_decode($response);
        return  $response_json;
            
    }
    //Work experience Background
    public function getVoluntaryWork($empID){
        
        $url = $this->pears_ws."GetEmpVoluntaryWork"."/".$empID ;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response_json = json_decode($response);
        return  $response_json;
            
    }
    //Work experience Background
    public function getOtherInfo($empID){
        
        $url = $this->pears_ws."GetOtherInfoList"."/".$empID ;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>  $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response_json = json_decode($response);
        return  $response_json;
            
    }
}

?>