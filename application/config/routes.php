<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['default_controller'] = 'Destiny_MainController';
$route['default_controller'] = 'UserController/homeportal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//$route['index']='Destiny_AdminController';



//-------------------------Admin Side Route Functions---------------------------

 
$route['image'] = 'App/apk_image';
// Login And Logout Routes For Admin
$route['Login']='UserController/login';
$route['LoginCheck']='UserController/login_check';
$route['Logout']='UserController/admin_logout';
$route['CpfView']='UserController/cpf_view';
$route['CpfView/(:any)']='UserController/cpf_view/$1';
$route['Saf']='UserController/saf';
$route['SafFormSubmit']='UserController/saf_form_submit';
$route['demo']='UserController/demo';
$route['Resume']='UserController/resume';
$route['ResumeForm']='UserController/resume_form';
$route['ResumeDetailSubmit']='UserController/resume_form_submit';
$route['ResumeDetailSubmit/Sid']='UserController/resume_form_submit';
$route['ResumeDetailSubmit/Did']='UserController/resume_form_submit';
$route['ResumeForm/Login']='UserController/resume_form_view';
$route['ResumeLoginSubmit']='UserController/resume_login_submit';
$route['ResumeFormView']='UserController/resume_form_view';
$route['ResumeFormView/Update']='UserController/resume_form_view';
$route['ResumeFormView/Updates/:num']='UserController/resume_form_view';
$route['ResumeView']='UserController/resume_view';
$route['Cpf']='UserController/cpf';

$route['Crf']='UserController/crf';
$route['Crf_submit']='UserController/crf_submit';
$route['StudentRegisterView']='UserController/studentregister_view';
$route['StdRegisterForCampus/:num']='UserController/student_register';

$route['StdRegSubmit']='UserController/StdReg_Submit';
$route['StdRegViewSub']='UserController/StdRegView_Sub';

$route['CrfView']='UserController/crf_view';
$route['CrfView/Update']='UserController/crf_view';
$route['CrfView/Register']='UserController/crf_view';
$route['CrfView/Login']='UserController/crf_view';
$route['Policy']='UserController/policy';
$route['Saf']='UserController/saf';
$route['SafView']='UserController/saf_view';
$route['SafView/Update']='UserController/saf_view';
$route['Notice']='UserController/notice';
$route['Dbf']='UserController/dbf';
$route['DbfView']='UserController/dbf_view';
$route['DbfView/(:any)']='UserController/dbf_view/$1';
$route['TnpTeams']='UserController/tnp_team';
$route['Logout']='UserController/user_logout';
$route['login']='UserController/login';
$route['LoginView']='UserController/login_view';
$route['loginsubmit']='UserController/login_submit';
$route['updatesubmit']='UserController/update_submit';
$route['StdDataUpdSubmit']='UserController/dbf_view_submit';
$route['CpfUpdateSubmit']='UserController/cpf_data_submit';

$route['updatepass/(:any)']='UserController/updatepass/$1';
$route['privacy_policy']='UserController/privacy_page';
$route['terms_condition']='UserController/condition_page';


//Dasboard Route

$route['Home']='UserController/homeportal';

// Login And Logout Routes For Admin
$route['AdminLogin']='AdminController/admin_login';
$route['AdminLoginCheck']='AdminController/admin_login_check';
$route['AdminLogout']='AdminController/admin_logout';
$route['Dashboard']='AdminController/dashboard';
$route['CpfList']='AdminController/cpf_list';
$route['StdDatabaseEntry']='AdminController/std_db_entry';
$route['StdDatabaseSubmit']='AdminController/std_db_submit';
$route['SafList']='AdminController/saf_list';
$route['AddNotice']='AdminController/add_new_notice';
$route['CampusList']='AdminController/campus_list';
$route['CampusRejected/(:any)']='AdminController/campus_rejected/$1';
$route['CampusAccepted/(:any)']='AdminController/campus_accepted/$1';
$route['PlacementPolicy']='AdminController/placement_policy';
$route['Policy']='AdminController/p_update';
$route['policyupdate/:num']='AdminController/policy_update';
$route['StdDatabase']='AdminController/std_database';
$route['TnpTeamUpdate']='AdminController/tnpteam';
$route['TnpTeamList']='AdminController/tnp_team_list';
$route['TnpTeamDelete/(:any)']='AdminController/tnp_team_delete/$1';
$route['AddSlider']='AdminController/add_slider';
$route['SliderList']='AdminController/slider_list';
$route['SliderDelete/(:any)']='AdminController/slider_delete/$1';
$route['Select_Branch']='AdminController/select_branch';


$route['addtnpteam']='AdminController/addnewtnp_team';
$route['AddTnpTeamSubmit']='AdminController/addnewtnp_team';
$route['StdDbDelete/(:any)']='AdminController/std_db_delete/$1';
$route['StdDbEdit/(:any)']='AdminController/std_db_update/$1';
$route['StdDbResume/(:any)']='AdminController/std_resume_view/$1';

?>