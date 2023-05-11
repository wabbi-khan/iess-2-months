<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutesController extends Controller
{
    public function main_dashboard(Request $request)
    {
        $pagename = "Dashboard";
        return view('main_super_admin.dashboard.index', ['pagename' => $pagename ]);
    }
    public function add_institute(Request $request)
    {
        $pagename = "Add Institute";
        return view('main_super_admin.dashboard.institutes.institutes_form', ['pagename' => $pagename ]);
    }
    public function all_institute(Request $request)
    {
        $pagename = "All Institute";
        return view('main_super_admin.dashboard.institutes.all_institutes', ['pagename' => $pagename ]);
    }
}
