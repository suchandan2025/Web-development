<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InerPageController extends Controller
{
    public function index(){
        return view("WebsiteDevelopment");
    }
    public function GraphicDesigning(){
        return view("Graphic_Designing");
    }
    public function DigitalMarketing(){
        return view("DigitalMarketing");
    }
    public function UI_UX_Designing(){
        return view("UiDesigning");
    }
    public function AppDevelopment(){
        return view("AppDevelopment");
    }
    public function SEOContent(){
        return view("SEOContent");
    }
    public function AIServices(){
        return view("AIServices");
    }
    public function GameDevelopment(){
        return view("GameDevelopment");
    }
    public function BigData(){
        return view("Big_Data");
    }
    public function CRMSolution(){
        return view("CRM ERP Solution");
    }
    public function CloudHosting(){
        return view("CloudHosting");
    }
    public function ITSupport(){
        return view("IT_Support");
    }
}
