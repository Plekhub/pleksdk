<?php

namespace Plekhub\Pleksdk\Requisition;

/**
 * Description of Curl
 *
 * @author cleomar
 */
class Curl extends ARequisition {

    //put your code here
    public function request() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->createUrl());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        if ($this->verb == "POST") {
            curl_setopt($ch, CURLOPT_POST, TRUE);
        }
        if ($this->body) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->body);
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

        $response = curl_exec($ch);
        curl_close($ch);
        if(!$response){
            throw new \Plekhub\Pleksdk\Exceptions\RequisitionException("Falha na comunicação com o servidor");
        }
        return $response;
    }

    private function createUrl() {
        $queryString = "";
        if($this->query){
            $queryString = http_build_query($this->query);
        }
        return trim($this->url,"/")."/".trim($this->endpoint,"/")."?".$queryString;
    }

}
