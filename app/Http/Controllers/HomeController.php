<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function projectDescription($projectName)
    {
        $data = $this->getDataForView($projectName);
        $data['images'] = File::files("./images/works/$projectName/");

        return view("works.$projectName", $data)->render();
    }

    protected function getDataForView($projectName)
    {
        $data['name'] = $projectName;
        $data['skills'] = 'Html, Css, Jquery, PHP, Laravel, Bootstrap';

        switch ($projectName){
            case 'backoffice':
                $data['client'] = 'Creativos Tecnológicos IT';
                $data['date'] = 'Mar, 2020';

                return $data;

            case 'buzip':
                $data['date'] = 'Oct, 2019';

                return $data;

            case 'caribbeanticketshop':
                $data['client'] = 'Onlinepaycaribe N.V';

                return $data;

            case 'cedsucre':
                $data['client'] = 'Creativos Tecnológicos IT';
                $data['date'] = 'Nov, 2018';

                return $data;

            case 'ganobaloto':
                $data['date'] = 'Nov, 2019';

                return $data;

            case 'metrosabanas':
                $data['client'] = 'Metrosabanas';
                $data['date'] = 'Nov, 2019';

                return $data;

            case 'ondas':
                $data['client'] = 'Corporación Universitaria del Caribe CECAR';
                $data['date'] = 'Nov, 2019';
                return $data;

            case 'sincelejoregion':
                $data['client'] = 'Creativos Tecnológicos IT';
                $data['date'] = 'Mar, 2017';
                return $data;
        }
    }
}
