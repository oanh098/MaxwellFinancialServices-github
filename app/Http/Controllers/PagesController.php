<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function about()
    {
        $bodyClass = 'about';
        $headerTitle = 'About Us';
        return view('about', compact(['bodyClass','headerTitle']));
    }

    public function BusinessGrowth(){
        $bodyClass='business-growth';
        $headerTitle = 'Business Growth';
        return view('BusinessGrowth', compact(['bodyClass','headerTitle']));
    }

    public function ResearchAndStrategy(){
        $bodyClass='research-and-strategy';
        $headerTitle = 'Research and Strategy';
        return view('ResearchAndStrategy', compact(['bodyClass','headerTitle']));
    }

    public function LiabilitiesManagement(){
        $bodyClass='liabilities-management';
        $headerTitle = 'Liabilities Management';
        return view('LiabilitiesManagement', compact(['bodyClass','headerTitle']));
    }

    public function ClearingAndExecution(){
        $bodyClass='clearing-and-execution';
        $headerTitle = 'Clearing and Execution';
        return view('ClearingAndExecution', compact(['bodyClass','headerTitle']));
    }

    public function ProductSolution(){
        $bodyClass='product-solutions';
        $headerTitle = 'Product Solution';
        return view('ProductSolutions', compact(['bodyClass','headerTitle']));
    }
    public function TransitionServices(){
        $bodyClass='transition-services';
        $headerTitle = 'Transition Services';
        return view('TransitionServices', compact(['bodyClass','headerTitle']));
    }
    public function Resource(){
            $bodyClass='resource';
            $headerTitle = 'Resource';
            return view('Resource', compact(['bodyClass','headerTitle']));
    }
    public function Contact(){
                $bodyClass='contact';
                $headerTitle = 'Contact';
                return view('contact', compact(['bodyClass','headerTitle']));
    }

}
