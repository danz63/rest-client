<?php
class CURL
{
    public function init($url, $method = 'get', $data = [])
    {
        $method = strtolower($method);
        return $this->$method($url, $data);
    }

    public function get($url)
    {
        // create curl resource 
        $ch = curl_init();
        // set url 
        // $url = "http://www.omdbapi.com/?apikey=a7ec2b75&s=avenger";
        curl_setopt($ch, CURLOPT_URL, $url);
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $response contains the output string 
        $response = curl_exec($ch);
        // tutup curl 
        curl_close($ch);
        return $response;
    }

    public function post($url, $data)
    {
        $post = [];
        foreach ($data as $key => $value) {
            $post += [$key => $value];
        }
        //url-ify the data for the POST
        $fields_string = '';
        foreach ($post as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
        //open connection
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, count($post));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //execute post
        $response = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $response;
    }
}
