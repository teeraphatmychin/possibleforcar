<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd("eiei");
         return view('admin.home');
    }
        

    public function starter() {return view('admin.starter');}
    public function Dashboard() {return view('admin.Dashboard');}
    public function Dashboard3() {return view('admin.Dashboard3');}
    public function Dashboard2() {return view('admin.Dashboard2');}
    public function calendar() {return view('admin.pages.calendar');}
    public function gallery() {return view('admin.pages.gallery');}
    public function widgets() {return view('admin.pages.widgets');}
    public function chartjs() {return view('admin.pages.charts.chartjs');}
    public function flot() {return view('admin.pages.charts.flot');}
    public function inline() {return view('admin.pages.charts.inline');}
    public function n404() {return view('admin.pages.examples.404');}
    public function n500() {return view('admin.pages.examples.500');}
    public function blank() {return view('admin.pages.examples.blank');}
    public function contacts() {return view('admin.pages.examples.contacts');}
    public function e_commerce() {return view('admin.pages.examples.e_commerce');}
    public function forgot_password() {return view('admin.pages.examples.forgot_password');}
    public function invoice() { return view('admin.pages.examples.invoice');}
    public function invoice_print() {return view('admin.pages.examples.invoice_print');}
    public function language_menu() {return view('admin.pages.examples.language_menu');}
    public function legacy_user_menu() {return view('admin.pages.examples.legacy_user_menu');}
    public function lockscreen() {return view('admin.pages.examples.lockscreen');}
    public function lobin() {return view('admin.pages.examples.lobin');}
    public function pace() {return view('admin.pages.examples.pace');}
    public function profile() {return view('admin.pages.examples.profile');}
    public function project_add() {return view('admin.pages.examples.project_add');}
    public function project_detail() {return view('admin.pages.examples.project_detail');}
    public function project_edit() {return view('admin.pages.examples.project_edit');}
    public function projects() {return view('admin.pages.examples.projects');}
    public function recover_password() {return view('admin.pages.examples.recover_password');}
    public function register() {return view('admin.pages.examples.register');}
    public function advanced() {return view('admin.pages.forms.advanced');}
    public function editors() {return view('admin.pages.forms.editors');}
    public function general() {return view('admin.pages.forms.general');}
    public function validation() {return view('admin.pages.forms.validation');}
    public  function boxed() {return view('admin.pages.layout.boxed');}
    public  function collapsed_sidebar() {return view('admin.pages.layout.collapsed_sidebar');}
    public  function fixed_footer() {return view('admin.pages.layout.fixed_footer');}
    public  function fixed_sidebar() {return view('admin.pages.layout.fixed_sidebar');}
    public  function fixed_topnav() {return view('admin.pages.layout.fixed_topnav');}
    public  function top_nav_sidebar() {return view('admin.pages.layout.top_nav_sidebar');}
    public  function top_nav() {return view('admin.pages.layout.top_nav');}
    public  function compose() {return view('admin.pages.mailbox.compose');}
    public  function mailbox() {return view('admin.pages.mailbox.mailbox');}
    public  function read_mail() {return view('admin.pages.mailbox.read_mail');}

    public  function data() {return view('admin.pages.tables.data');}
    public  function jsgrid() {return view('admin.pages.tables.jsgrid');}
    public  function simple() {return view('admin.pages.tables.simple');}

    public  function buttons() {return view('admin.pages.UI.buttons');}
    public  function gerneral() {return view('admin.pages.UI.gerneral');}

    public  function icons() {return view('admin.pages.UI.icons');}
    public  function modals() {return view('admin.pages.UI.modals');}
    public  function navbar() {return view('admin.pages.UI.navbar');}
    public  function ribbons() {return view('admin.pages.UI.ribbons');}
    public  function sliders() {return view('admin.pages.UI.sliders');}
    public  function timeline() {return view('admin.pages.UI.timeline');}



}
