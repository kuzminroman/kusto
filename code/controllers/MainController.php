<?php

namespace controllers;

use base\BaseController;
use base\Inquiries;

class MainController extends BaseController
{
    public function actionShowMainPage()
    {
        return $this->render(null,'main');
    }
}
