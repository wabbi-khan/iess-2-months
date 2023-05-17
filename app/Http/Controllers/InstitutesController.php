<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;
use Carbon\Carbon;

class InstitutesController extends Controller
{
    public function main_dashboard(Request $request)
    {
        $pagename = 'Dashboard';
        return view('main_super_admin.dashboard.index', [
            'pagename' => $pagename,
        ]);
    }
    public function add_institute(Request $request)
    {
        $pagename = 'Add Institute';
        return view('main_super_admin.dashboard.institutes.institutes_form', [
            'pagename' => $pagename,
        ]);
    }
    public function store_institute(Request $request)
    {
        // dd($request);
        Institute::create([
            'institute_name' => $request->institute_name,
            'Institute_address' => $request->Institute_address,
            'institute_email' => $request->institute_email,
            'institute_password' => $request->institute_password,
            'institute_city' => $request->institute_city,
            'institute_contact' => $request->institute_contact,
            'institute_ptcl' => $request->institute_ptcl,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return Redirect()
            ->back()
            ->with(
                'success-message-Institute',
                'Institute is successfully Registered!'
            );
    }
    public function all_institute(Request $request)
    {
        $pagename = 'All Institute';
        $registered_institutes = Institute::all();
        // dd($registered_institutes);
        return view('main_super_admin.dashboard.institutes.all_institutes', [
            'pagename' => $pagename,
            'registered_institutes' => $registered_institutes,
        ]);
    }
    public function view_institute($view)
    {
        $pagename = 'View Institute';
        $view_institutes = Institute::find($view);
        // dd($view_institutes);
        return view('main_super_admin.dashboard.institutes.institutes_detail', [
            'pagename' => $pagename,
            'view_institutes' => $view_institutes,
        ]);
    }
    public function delete_institute($delete)
    {
        $res = Institute::find($delete)->delete();
        return Redirect()
            ->back()
            ->with(
                'delete-message-Institute',
                'Institute is deleted successfully!'
            );
    }

    // ? institute panel routes
    public function institute_panel(Request $request)
    {
        $pagename = 'Institute Dashboard';
        return view('institute_admin_panel.dashboard.index', [
            'pagename' => $pagename,
        ]);
    }

    // ? campus routes work
    public function add_campus(Request $request)
    {
        $pagename = 'Add Campus';
        return view('main_super_admin.dashboard.campus.campus_form', [
            'pagename' => $pagename,
        ]);
    }
    public function all_campus(Request $request)
    {
        $pagename = 'All Campus';
        return view('main_super_admin.dashboard.campus.all_campus', [
            'pagename' => $pagename,
        ]);
    }

    public function campus_general_operation(Request $request)
    {
        $pagename = 'General Operations';
        return view('main_super_admin.dashboard.campus.general_operation', [
            'pagename' => $pagename,
        ]);
    }

    public function campus_hr(Request $request)
    {
        $pagename = 'HR';
        return view(
            'main_super_admin.dashboard.campus.campus_hr
        ',
            [
                'pagename' => $pagename,
            ]
        );
    }

    public function campus_exams(Request $request)
    {
        $pagename = 'Exams';
        return view('main_super_admin.dashboard.campus.campus_exams', [
            'pagename' => $pagename,
        ]);
    }
    public function campus_accounts(Request $request)
    {
        $pagename = 'Accounts';
        return view('main_super_admin.dashboard.campus.campus_accounts', [
            'pagename' => $pagename,
        ]);
    }

    // addmision controller
    public function admissions(Request $request)
    {
        $pagename = 'Admissions';
        return view('main_super_admin.dashboard.admissions.admissions', [
            'pagename' => $pagename,
        ]);
    }
    // add new Students
    public function add_Student(Request $request)
    {
        $pagename = 'New Student';
        return view('main_super_admin.dashboard.admissions.new-admission', [
            'pagename' => $pagename,
        ]);
    }
    // view student details
    public function view_student(Request $request)
    {
        $pagename = 'view student';
        return view(
            'main_super_admin.dashboard.admissions.view-student-detail',
            [
                'pagename' => $pagename,
            ]
        );
    }

    //view Attendance
    public function view_attendance(Request $request)
    {
        $pagename = 'View Attendance';
        return view(
            'main_super_admin.dashboard.attendance.view-attendance',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? add classes 
    public function all_classes(Request $request)
    {
        $pagename = 'View Classes';
        return view(
            'main_super_admin.dashboard.classes.all_classes',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function add_class(Request $request)
    {
        $pagename = 'Add Class';
        return view(
            'main_super_admin.dashboard.classes.add_class',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function add_section(Request $request)
    {
        $pagename = 'Add Section';
        return view(
            'main_super_admin.dashboard.classes.add_section',
            [
                'pagename' => $pagename,
            ]
        );
    }
}