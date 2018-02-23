<?php

namespace App\HttpController;

use EasySwoole\Core\Http\AbstractInterface\Controller;

class Index extends Controller
{
    function index(): void
    {
        $request = $this->request();

        $this->response()->write($request->getMethod());
    }
}