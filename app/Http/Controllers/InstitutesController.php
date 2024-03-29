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
    // change class
    public function change_class(Request $request)
    {
        $pagename = 'Change Class';
        return view('main_super_admin.dashboard.admissions.change-class', [
            'pagename' => $pagename,
        ]);
    }

    // add new Students
    public function add_Student(Request $request)
    {
        $pagename = 'Add New Student';
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
        return view('main_super_admin.dashboard.attendance.view-attendance', [
            'pagename' => $pagename,
        ]);
    }

    // ? add classes
    public function all_classes(Request $request)
    {
        $pagename = 'View All Classes';
        return view('main_super_admin.dashboard.classes.all_classes', [
            'pagename' => $pagename,
        ]);
    }

    public function add_class(Request $request)
    {
        $pagename = 'Add New Class';
        return view('main_super_admin.dashboard.classes.add_class', [
            'pagename' => $pagename,
        ]);
    }
    public function add_section(Request $request)
    {
        $pagename = 'Add Section';
        return view('main_super_admin.dashboard.classes.add_section', [
            'pagename' => $pagename,
        ]);
    }
    // ? Promote Students

    public function pro_student(Request $request)
    {
        $pagename = 'Promote Student';
        return view('main_super_admin.dashboard.pro_student.pro_student', [
            'pagename' => $pagename,
        ]);
    }
    // add new timetable
    public function add_new_timetable(Request $request)
    {
        $pagename = 'Add New Timetable';
        return view('main_super_admin.dashboard.timeTable.add-new-table', [
            'pagename' => $pagename,
        ]);
    }

    public function pro_studentClassData(Request $request)
    {
        $pagename = 'Promote Student Data';
        return view(
            'main_super_admin.dashboard.pro_student.pro_studentClassData',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? My profile
    public function my_profile(Request $request)
    {
        $pagename = 'My Profile';
        return view('main_super_admin.dashboard.my_profile.my_profile', [
            'pagename' => $pagename,
        ]);
    }
    public function acc_setting(Request $request)
    {
        $pagename = 'Account Setting';
        return view('main_super_admin.dashboard.my_profile.acc_setting', [
            'pagename' => $pagename,
        ]);
    }

    // former Student
    public function former_student(Request $request)
    {
        $pagename = 'Former Student';
        return view(
            'main_super_admin.dashboard.former-student.former_student',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? Subjects
    public function all_subjects(Request $request)
    {
        $pagename = 'All Subjects';
        return view('main_super_admin.dashboard.subjects.all_subjects', [
            'pagename' => $pagename,
        ]);
    }
    public function add_subject(Request $request)
    {
        $pagename = 'Add Subject';
        return view('main_super_admin.dashboard.subjects.add_subject', [
            'pagename' => $pagename,
        ]);
    }

    // ? Syllabus
    public function all_syllabus(Request $request)
    {
        $pagename = 'All Syllabus';
        return view('main_super_admin.dashboard.syllabus.all_syllabus', [
            'pagename' => $pagename,
        ]);
    }
    public function add_syllabus(Request $request)
    {
        $pagename = 'Add Syllabus';
        return view('main_super_admin.dashboard.syllabus.add_syllabus', [
            'pagename' => $pagename,
        ]);
    }
    // ? View Result
    public function view_result(Request $request)
    {
        $pagename = 'View Result';
        return view('main_super_admin.dashboard.result.view_result', [
            'pagename' => $pagename,
        ]);
        // ? View Time Table
    }
    public function view_timeTable(Request $request)
    {
        $pagename = 'View Timetable';
        return view('main_super_admin.dashboard.timeTable.view_timeTable', [
            'pagename' => $pagename,
        ]);
    }

    // Digital library
    public function digital_library(Request $request)
    {
        $pagename = 'Digital Library';
        return view(
            'main_super_admin.dashboard.digital-library.digital-library',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function add_new_category(Request $request)
    {
        $pagename = 'Add New Category';
        return view(
            'main_super_admin.dashboard.digital-library.addNew_category',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function all_books(Request $request)
    {
        $pagename = 'All Books';
        return view('main_super_admin.dashboard.digital-library.all-books', [
            'pagename' => $pagename,
        ]);
    }
    public function add_new_book(Request $request)
    {
        $pagename = 'Add New Book';
        return view('main_super_admin.dashboard.digital-library.add-new-book', [
            'pagename' => $pagename,
        ]);
    }

    public function book_reservation(Request $request)
    {
        $pagename = 'Add New Book';
        return view(
            'main_super_admin.dashboard.digital-library.book-reservation',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function new_reservation(Request $request)
    {
        $pagename = 'New Reservation';
        return view(
            'main_super_admin.dashboard.digital-library.new-reservation',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function returned_book(Request $request)
    {
        $pagename = 'Returned Book';
        return view(
            'main_super_admin.dashboard.digital-library.returned-book',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function book_renewal(Request $request)
    {
        $pagename = 'Book Renewal';
        return view('main_super_admin.dashboard.digital-library.book-renewal', [
            'pagename' => $pagename,
        ]);
    }
    public function all_fine(Request $request)
    {
        $pagename = 'All Fine';
        return view('main_super_admin.dashboard.digital-library.fine', [
            'pagename' => $pagename,
        ]);
    }
    public function add_new_fine(Request $request)
    {
        $pagename = 'Add Fine';
        return view('main_super_admin.dashboard.digital-library.add-new-fine', [
            'pagename' => $pagename,
        ]);
    }

    public function supplier_profile(Request $request)
    {
        $pagename = 'supplier Profile';
        return view(
            'main_super_admin.dashboard.digital-library.supplier-profile',
            [
                'pagename' => $pagename,
            ]
        );
    }

    public function add_new_supplier(Request $request)
    {
        $pagename = 'Add New Supplier';
        return view(
            'main_super_admin.dashboard.digital-library.add-new-supplier',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? HR Employee
    public function all_employees(Request $request)
    {
        $pagename = 'All Employees';
        return view('main_super_admin.dashboard.hr_screens.all_employees', [
            'pagename' => $pagename,
        ]);
    }

    public function add_employees(Request $request)
    {
        $pagename = 'Add Employees';
        return view('main_super_admin.dashboard.hr_screens.add_employees', [
            'pagename' => $pagename,
        ]);
    }

    // ? Employee attendance
    public function employees_attendance(Request $request)
    {
        $pagename = 'Employees Attendance';
        return view(
            'main_super_admin.dashboard.hr_screens.employees_attendance',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function add_attendance(Request $request)
    {
        $pagename = 'Employees Attendance';
        return view('main_super_admin.dashboard.hr_screens.add_attendance', [
            'pagename' => $pagename,
        ]);
    }

    public function all_holidays(Request $request)
    {
        $pagename = 'All Holidays';
        return view('main_super_admin.dashboard.hr_screens.all_holidays', [
            'pagename' => $pagename,
        ]);
    }
    public function add_new_holiday(Request $request)
    {
        $pagename = 'Add new holiday';
        return view('main_super_admin.dashboard.hr_screens.add_new_holiday', [
            'pagename' => $pagename,
        ]);
    }

    // ? Employee leave
    public function employee_leave(Request $request)
    {
        $pagename = 'Employees Leave';
        return view('main_super_admin.dashboard.hr_screens.employee_leave', [
            'pagename' => $pagename,
        ]);
    }
    public function add_employee_leave(Request $request)
    {
        $pagename = 'Add Employees Leave';
        return view(
            'main_super_admin.dashboard.hr_screens.add_employee_leave',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // all department
    public function all_department(Request $request)
    {
        $pagename = 'All Department';
        return view('main_super_admin.dashboard.hr_screens.all_department', [
            'pagename' => $pagename,
        ]);
    }
    // add new Department
    public function add_new_Department(Request $request)
    {
        $pagename = 'Add New Department';
        return view(
            'main_super_admin.dashboard.hr_screens.add_new_department',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? Fees management
    public function student_fees(Request $request)
    {
        $pagename = 'Student Fees';
        return view(
            'main_super_admin.dashboard.account-screens.fees_manage.fees',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? Student Challan
    public function student_challan(Request $request)
    {
        $pagename = 'Student Challan';
        return view(
            'main_super_admin.dashboard.account-screens.fees_manage.student_challan',
            [
                'pagename' => $pagename,
            ]
        );
    }
    // Account (payroll)

    public function salary(Request $request)
    {
        $pagename = 'Salary';
        return view(
            'main_super_admin.dashboard.account-screens.payroll.salary',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? Student Challan
    public function confirm_fees(Request $request)
    {
        $pagename = 'Confirm Fees';
        return view(
            'main_super_admin.dashboard.account-screens.fees_manage.confirm_fees',
            [
                'pagename' => $pagename,
            ]
        );
    }
    // deduction
    public function deduction(Request $request)
    {
        $pagename = 'deduction';
        return view(
            'main_super_admin.dashboard.account-screens.payroll.deduction',
            [
                'pagename' => $pagename,
            ]
        );
    }
    // ? Student fees record
    public function fees_record(Request $request)
    {
        $pagename = 'Confirm Fees';
        return view(
            'main_super_admin.dashboard.account-screens.fees_manage.fees_record',
            [
                'pagename' => $pagename,
            ]
        );
    }
    // bonus
    public function bonus(Request $request)
    {
        $pagename = 'bonus';
        return view(
            'main_super_admin.dashboard.account-screens.payroll.bonus',
            [
                'pagename' => $pagename,
            ]
        );
    }

    //add inventory
    public function add_inventory(Request $request)
    {
        $pagename = 'add Inventory';
        return view(
            'main_super_admin.dashboard.account-screens.inventory-billing.add-inventory',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // all inventory
    public function all_inventory(Request $request)
    {
        $pagename = 'All Inventory';
        return view(
            'main_super_admin.dashboard.account-screens.inventory-billing.all-inventory',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // billing
    public function billing(Request $request)
    {
        $pagename = 'billing';
        return view(
            'main_super_admin.dashboard.account-screens.inventory-billing.billing',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? print challan
    public function print_challan(Request $request)
    {
        $pagename = 'Print Challan';
        return view(
            'main_super_admin.dashboard.account-screens.fees_manage.print_challan',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? Teacher screen
    public function teacher_screen(Request $request)
    {
        $pagename = 'Teacher Screen';
        return view(
            'teacher_panel.teacher_screen',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? all_student_attendance_mark
    public function all_student_attendance_mark(Request $request)
    {
        $pagename = 'All Students Attendance Mark';
        return view(
            'teacher_panel.allStudentAttendance',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? result screen on teacher
    public function teacher_result(Request $request)
    {
        $pagename = 'Teacher Result';
        return view('teacher_panel.result', [
            'pagename' => $pagename,
        ]);
    }

    // ? give_marks
    public function give_marks(Request $request)
    {
        $pagename = 'Teacher Result';
        return view('teacher_panel.give_marks', [
            'pagename' => $pagename,
        ]);
    }

    // ? recorded screen on teacher
    public function recorded_lectures(Request $request)
    {
        $pagename = 'recorded lectures';
        return view(
            'teacher_panel.recorded-lectures',
            [
                'pagename' => $pagename,
            ]
        );
    }
    // diary assignment
    public function diary(Request $request)
    {
        $pagename = 'diary';
        return view(
            'teacher_panel.dairy-assignment',
            [
                'pagename' => $pagename,
            ]
        );
    }
    // course material
    public function course_material(Request $request)
    {
        $pagename = 'course material';
        return view(
            'teacher_panel.course-material',
            [
                'pagename' => $pagename,
            ]
        );
    }
    // event
    public function events(Request $request)
    {
        $pagename = 'event';
        return view('teacher_panel.events', [
            'pagename' => $pagename,
        ]);
    }
    // timetable
    public function timetable(Request $request)
    {
        $pagename = 'timetable';
        return view('teacher_panel.timetable', [
            'pagename' => $pagename,
        ]);
    }

    // timetable
    public function select_view_timetable(Request $request)
    {
        $pagename = 'select view timetable';
        return view(
            'main_super_admin.dashboard.timeTable.select-view-timetable-deatil',
            [
                'pagename' => $pagename,
            ]
        );
    }
    public function select_add_timetable(Request $request)
    {
        $pagename = 'select add timetable';
        return view(
            'main_super_admin.dashboard.timeTable.select-add-timetable-datail',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ? hostel management
    public function hostel_manage(Request $request)
    {
        $pagename = 'Hotstel Management';
        return view(
            'main_super_admin.dashboard.hostel_management.hostel_manage',
            [
                'pagename' => $pagename,
            ]
        );
    }

    // ?  Create Hostel
    public function create_hostel(Request $request)
    {
        $pagename = 'Create Hostel';
        return view(
            'main_super_admin.dashboard.hostel_management.create_hostel',
            [
                'pagename' => $pagename,
            ]
        );
    }


    // ?  All Hostels
    public function all_hostel(Request $request)
    {
        $pagename = 'All Hostel';
        return view('main_super_admin.dashboard.hostel_management.all_hostel', [
            'pagename' => $pagename,
        ]);
    }

    // ?  reserve room
    public function reserve_room(Request $request)
    {
        $pagename = 'Reserve Room';
        return view('main_super_admin.dashboard.hostel_management.reserve_room', [
            'pagename' => $pagename,
        ]);
    }

    // ?  Book room
    public function book_room(Request $request)
    {
        $pagename = 'Book Room';
        return view('main_super_admin.dashboard.hostel_management.book_room', [
            'pagename' => $pagename,
        ]);
    }
    // ?  student-screens
    public function student_screens(Request $request)
    {
        $pagename = 'Student Screens';
        return view('studen_panel.student_screens', [
            'pagename' => $pagename,
        ]);
    }

     // ?  update_profile
     public function update_profile(Request $request)
     {
         $pagename = 'Student Screens';
         return view('studen_panel.update_profile', [
             'pagename' => $pagename,
         ]);
     }
    // ?  my courses
    public function my_courses(Request $request)
    {
        $pagename = 'My Courses';
        return view('studen_panel.my_courses', [
            'pagename' => $pagename,
        ]);
    }
    // ?  Student classes schedule
    public function classes_schedule(Request $request)
    {
        $pagename = 'Student classes schedule';
        return view('studen_panel.classes_schedule', [
            'pagename' => $pagename,
        ]);
    }

    // ? Student result
    public function student_result(Request $request)
    {
        $pagename = 'Student result';
        return view('studen_panel.student_result', [
            'pagename' => $pagename,
        ]);
    }

    // ? Student Exams
    public function student_exams(Request $request)
    {
        $pagename = 'Student Exams';
        return view('studen_panel.student_exams', [
            'pagename' => $pagename,
        ]);
    }

    // ? Student Attendance
    public function student_attendance(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('studen_panel.student_attendance', [
            'pagename' => $pagename,
        ]);
    }

    // ? Student Library
    public function student_library(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('studen_panel.student_library', [
            'pagename' => $pagename,
        ]);
    }

    // ? specific Student Library
    public function stu_fees(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('studen_panel.specific_stu_fees', [
            'pagename' => $pagename,
        ]);
    }
    // ? assignments for students
    public function assignments(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('studen_panel.assignments', [
            'pagename' => $pagename,
        ]);
    }
    // ? hostel room for students
    public function stu_room(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('studen_panel.stu_room', [
            'pagename' => $pagename,
        ]);
    }

    // ?  Notice Board 

    public function notice_board(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('studen_panel.notice_board', [
            'pagename' => $pagename,
        ]);
    }

    // ?  Chat box 

    public function chat_box(Request $request)
    {
        $pagename = 'Student Attendance';
        return view('studen_panel.chat_box', [
            'pagename' => $pagename,
        ]);
    }



    // *======================================================================================
    // ? Affaque work
    public function core_finance(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.core_finance', [
            'pagename' => $pagename,
        ]);
    }
    // ? budget_manage
    public function budget_manage(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.budget_manage', [
            'pagename' => $pagename,
        ]);
    }
    // ? procurement
    public function procurement(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.procurement', [
            'pagename' => $pagename,
        ]);
    }
    // ? Inventory
    public function inventory(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.inventory', [
            'pagename' => $pagename,
        ]);
    }

    // ? fleet_manage
    public function fleet_manage(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.fleet_manage', [
            'pagename' => $pagename,
        ]);
    }

    // ? human & payroll
    public function human_payroll(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.human-payroll', [
            'pagename' => $pagename,
        ]);
    }
    // ? Admission
    public function Admission1(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.admission', [
            'pagename' => $pagename,
        ]);
    }

    // ?student information system
    public function student2(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.student', [
            'pagename' => $pagename,
        ]);
    }

    // ?student information system
    public function fees(Request $request)
    {
        $pagename = '';
        return view('main_super_admin.dashboard.affaque.fees', [
            'pagename' => $pagename,
        ]);
    }
}
