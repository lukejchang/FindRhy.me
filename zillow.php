<?php
/**
 * Created by PhpStorm.
 * User: JChang
 * Date: 10/18/2014
 * Time: 6:21 AM
 */

//get demographic data from zillow api, given zip code

$data = file_get_contents('http://www.zillow.com/webservice/GetDemographics.htm?zws-id=X1-ZWz1dxzeut9qtn_86zet&zip=98105');

echo $data;