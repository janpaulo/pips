<?php

class Login_model extends CI_Model {

    
    public function loginAction($username, $password ){

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:7001/pears/PIPS/UserAuthentication',
            // CURLOPT_URL => 'http://hcp-testsvr:9000/PWRMT/RMTWS/AuthenticateUser',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{"userID": "'.$username.'", "password": "'.$password.'"}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);

            if(json_decode($response)->success != ''){
                $dataResult = json_decode($response)->result;

                $userInfo = $this->session->all_userdata();
                $userInfo['vUserID'] = $username;
                $userInfo['vUserPassword'] = $password;
                $userInfo['vRoleID'] = json_decode($dataResult)->roleID;
                $userInfo['vRoleDesc'] = json_decode($dataResult)->roleDesc;

                // print_r(json_decode($dataResult));

                echo $response;
                $this->session->set_userdata($userInfo);

            }else{
                echo $response;
            }
    }
}

?>