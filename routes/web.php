<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\authentications\LoginBasic@index')->name('dashboard-analytics');
Route::get('/dashboard-analytics', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
Route::get('/layouts/navbar', $controller_path . '\dashboard\Analytics@logout')->name('dashboard-analytics-logout');

// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-profil', $controller_path . '\pages\AccountSettingsProfil@index')->name('pages-account-settings-profil');
Route::get('/pages/account-settings-role', $controller_path . '\pages\AccountSettingsRole@index')->name('pages-account-settings-role');
Route::get('/pages/account-settings-members', $controller_path . '\pages\AccountSettingsMembers@index')->name('pages-account-settings-members');
Route::get('/pages/account-settings-meta-business', $controller_path . '\pages\AccountSettingsMetaBusiness@index')->name('pages-account-settings-meta-business');
Route::get('/pages/account-settings-email', $controller_path . '\pages\AccountSettingsEmail@index')->name('pages-account-settings-email');
Route::get('/pages/account-settings-SMS', $controller_path . '\pages\AccountSettingsSMS@index')->name('pages-account-settings-SMS');
Route::get('/pages/settings-paiement', $controller_path . '\pages\SettingsPaiement@index')->name('pages-settings-paiement');
Route::get('/pages/settings-historics', $controller_path . '\pages\SettingsHistorics@index')->name('pages-settings-historics');
Route::get('/pages/settings-credit', $controller_path . '\pages\SettingsCredit@index')->name('pages-settings-credit');



Route::get('/pages/campagne-statistic', $controller_path . '\pages\CampagneStatistic@index')->name('pages-campagne-statistic');
Route::post('/pages/campagne-statistic', $controller_path . '\pages\CampagneStatistic@store')->name('pages-campagne-statistic-log');

Route::get('/pages/campagne-template', $controller_path . '\pages\CampagneTemplate@index')->name('pages-campagne-template'); 

Route::get('/pages/campagne-template-one', $controller_path . '\pages\CampagneTemplate@campagneTemplateOne')->name('pages-campagne-template-one'); 
Route::post('/pages/campagne-template-one', $controller_path . '\pages\CampagneTemplate@postCampagneTemplateOne')->name('pages-campagne-template-one-post'); 

Route::get('/pages/campagne-template-two', $controller_path . '\pages\CampagneTemplate@campagneTemplateTwo')->name('pages-campagne-template-two'); 
Route::post('/pages/campagne-template-two', $controller_path . '\pages\CampagneTemplate@postCampagneTemplateTwo')->name('pages-campagne-template-two-post'); 

Route::get('/pages/campagne-template-three', $controller_path . '\pages\CampagneTemplate@campagneTemplateThree')->name('pages-campagne-template-three'); 
Route::post('/pages/campagne-template-three', $controller_path . '\pages\CampagneTemplate@postCampagneTemplateThree')->name('pages-campagne-template-three-post');

Route::get('/pages/campagne-email', $controller_path . '\pages\CampagneEmail@index')->name('pages-campagne-email');
Route::get('/pages/campagne-whatsapp', $controller_path . '\pages\CampagneWhatsapp@index')->name('pages-campagne-whatsapp');
//Route::post('/pages/campagne-whatsapp', $controller_path . '\pages\CampagneWhatsapp@sendCreateTemplateWhatsapp')->name('pages-campagne-whatsapp-campaign');
Route::post('/pages/campagne-whatsapp', $controller_path . '\pages\CampagneWhatsapp@sendMessageWhatsapp')->name('pages-campagne-whatsapp-send-message');


Route::get('/pages/campagne-message', $controller_path . '\pages\CampagneMessage@index')->name('pages-campagne-message');
//Route::get('/pages/campagne-message', $controller_path . '\pages\CampagneMessage@sendWhatsappMessage')->name('pages-campagne-message');
Route::post('/pages/campagne-message', $controller_path . '\pages\CampagneMessage@sendWhatsappMultiMessage')->name('pages-campagne-message-multiple');

Route::get('/pages/contacts-list-folder', $controller_path . '\pages\ContactsListFolder@index')->name('pages-contacts-list-folder');
Route::post('/pages/contacts-list-folder', $controller_path . '\pages\ContactsListFolder@store')->name('pages-contacts-list-folder-log');

Route::get('/pages/contacts-contact', $controller_path . '\pages\ContactsContact@index')->name('pages-contacts-contact');
//Route::post('/pages/contacts-contact', $controller_path . '\pages\ContactsContact@store')->name('pages-contacts-contact-GET');

Route::post('/pages/contacts-contact', $controller_path . '\pages\ContactsContact@store')->name('pages-contacts-contact-data');
//Route::post('/pages/contacts-contact', $controller_path . '\pages\ContactsContact@storeImportContacts')->name('imports-contact-import');

/// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::post('/auth/login-basic', $controller_path . '\authentications\LoginBasic@authenticate')->name('auth-login');

Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');

Route::get('/auth/create-step-one', $controller_path . '\authentications\RegisterBasic@createStepOne')->name('auth-register-basic-create-step-one');
Route::post('/auth/create-step-one', $controller_path . '\authentications\RegisterBasic@postCreateStepOne')->name('auth-register-basic-create-step-one-post');

Route::get('/auth/create-step-two', $controller_path . '\authentications\RegisterBasic@createStepTwo')->name('auth-register-basic-create-step-two');
Route::post('/auth/create-step-two', $controller_path . '\authentications\RegisterBasic@postCreateStepTwo')->name('auth-register-basic-create-step-two-post');

Route::get('/auth/create-step-three', $controller_path . '\authentications\RegisterBasic@createStepThree')->name('auth-register-basic-create-step-three');
Route::post('/auth/create-step-three', $controller_path . '\authentications\RegisterBasic@postCreateStepThree')->name('auth-register-basic-create-step-three-post');

Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/SMS', $controller_path . '\icons\SMS@index')->name('icons-SMS');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/statistics', $controller_path . '\tables\Statistics@index')->name('tables-statistics');