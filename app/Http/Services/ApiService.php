<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;

class ApiService
{
    use ConsumesExternalService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.api.base_uri');
    }

    public function login($data){
        return $this->performRequest('POST','/login',$data);
    }


}
