<?php

use App\Models\dynamicSlider;
use App\Models\servicesCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtdController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminManagement;
use App\Http\Controllers\GalleryCategory;
use App\Http\Controllers\HowToController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CtdSectionController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\CommissionsController;
use App\Http\Controllers\FAQCategoryController;
use App\Http\Controllers\NewslettersController;
use App\Http\Controllers\PricingPlanController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoSliderController;
use App\Http\Controllers\BlogArchivesController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CallToActionController;
use App\Http\Controllers\IntroSectionController;
use App\Http\Controllers\DynamicSliderController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\BackendSettingsController;
use App\Http\Controllers\ServicesCategoryController;
use App\Http\Controllers\AnnouncementPopupController;
use App\Http\Controllers\StatisticsSectionController;
use App\Models\userManagement as ModelsUserManagement;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\SupervisingMinistriesController;

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
Route::get('/', function () {
  return view('welcome');
});
Route::get('/401', function () {
  abort(401, 'Page not found');
});
Route::get('/402', function () {
  abort(402, 'Page not found');
});
Route::get('/403', function () {
  abort(403, 'Page not found');
});
Route::get('/404', function () {
  abort(404, 'Page not found');
});
Route::get('/419', function () {
  abort(419, 'Page not found');
});
Route::get('/429', function () {
  abort(429, 'Page not found');
});
Route::get('/500', function () {
  abort(500, 'Page not found');
});
Route::get('/503', function () {
  abort(503, 'Page not found');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

$controller_path = 'App\Http\Controllers';

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  $controller_path = 'App\Http\Controllers';
  // Main Page Route
  Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard');
  Route::get('/dashboard/analytics', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
  Route::get('/dashboard/ecommerce', $controller_path . '\dashboard\Ecommerce@index')->name('dashboard-ecommerce');
  // locale
  Route::get('lang/{locale}', $controller_path . '\language\LanguageController@swap');
  // layout
  Route::get('/layouts/collapsed-menu', $controller_path . '\layouts\CollapsedMenu@index')->name(
    'layouts-collapsed-menu'
  );
  Route::get('/layouts/content-navbar', $controller_path . '\layouts\ContentNavbar@index')->name(
    'layouts-content-navbar'
  );
  Route::get('/layouts/content-nav-sidebar', $controller_path . '\layouts\ContentNavSidebar@index')->name(
    'layouts-content-nav-sidebar'
  );
  Route::get('/layouts/horizontal', $controller_path . '\layouts\Horizontal@index')->name('dashboard-analytics');
  Route::get('/layouts/vertical', $controller_path . '\layouts\Vertical@index')->name('dashboard-analytics');
  Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
  Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name(
    'layouts-without-navbar'
  );
  Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
  Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
  Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');
  // apps
  Route::get('/app/calendar', $controller_path . '\apps\Calendar@index')->name('app-calendar');
  Route::get('/app/invoice/list', $controller_path . '\apps\InvoiceList@index')->name('app-invoice-list');
  Route::get('/app/invoice/preview', $controller_path . '\apps\InvoicePreview@index')->name('app-invoice-preview');
  Route::get('/app/invoice/print', $controller_path . '\apps\InvoicePrint@index')->name('app-invoice-print');
  Route::get('/app/invoice/edit', $controller_path . '\apps\InvoiceEdit@index')->name('app-invoice-edit');
  Route::get('/app/invoice/add', $controller_path . '\apps\InvoiceAdd@index')->name('app-invoice-add');
  Route::get('/app/user/list', $controller_path . '\apps\UserList@index')->name('app-user-list');
  Route::get('/app/user/view/account', $controller_path . '\apps\UserViewAccount@index')->name('app-user-view-account');
  Route::get('/app/user/view/security', $controller_path . '\apps\UserViewSecurity@index')->name(
    'app-user-view-security'
  );
  Route::get('/app/user/view/billing', $controller_path . '\apps\UserViewBilling@index')->name('app-user-view-billing');
  Route::get('/app/user/view/notifications', $controller_path . '\apps\UserViewNotifications@index')->name(
    'app-user-view-notifications'
  );
  Route::get('/app/user/view/connections', $controller_path . '\apps\UserViewConnections@index')->name(
    'app-user-view-connections'
  );
  Route::get('/app/access-roles', $controller_path . '\apps\AccessRoles@index')->name('app-access-roles');
  Route::get('/app/access-permission', $controller_path . '\apps\AccessPermission@index')->name(
    'app-access-permission'
  );
  // pages
  Route::get('/pages/profile-user', $controller_path . '\pages\UserProfile@index')->name('pages-profile-user');
  Route::get('/pages/profile-teams', $controller_path . '\pages\UserTeams@index')->name('pages-profile-teams');
  Route::get('/pages/profile-projects', $controller_path . '\pages\UserProjects@index')->name('pages-profile-projects');
  Route::get('/pages/profile-connections', $controller_path . '\pages\UserConnections@index')->name(
    'pages-profile-connections'
  );
  Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name(
    'pages-account-settings-account'
  );
  Route::get('/pages/account-settings-security', $controller_path . '\pages\AccountSettingsSecurity@index')->name(
    'pages-account-settings-security'
  );
  Route::get('/pages/account-settings-billing', $controller_path . '\pages\AccountSettingsBilling@index')->name(
    'pages-account-settings-billing'
  );
  Route::get(
    '/pages/account-settings-notifications',
    $controller_path . '\pages\AccountSettingsNotifications@index'
  )->name('pages-account-settings-notifications');
  Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name(
    'pages-account-settings-connections'
  );
  Route::get('/pages/faq', $controller_path . '\pages\Faq@index')->name('pages-faq');
  Route::get('/pages/help-center-landing', $controller_path . '\pages\HelpCenterLanding@index')->name(
    'pages-help-center-landing'
  );
  Route::get('/pages/help-center-categories', $controller_path . '\pages\HelpCenterCategories@index')->name(
    'pages-help-center-categories'
  );
  Route::get('/pages/help-center-article', $controller_path . '\pages\HelpCenterArticle@index')->name(
    'pages-help-center-article'
  );
  Route::get('/pages/pricing', $controller_path . '\pages\Pricing@index')->name('pages-pricing');
  Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
  Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name(
    'pages-misc-under-maintenance'
  );
  Route::get('/pages/misc-comingsoon', $controller_path . '\pages\MiscComingSoon@index')->name('pages-misc-comingsoon');
  Route::get('/pages/misc-not-authorized', $controller_path . '\pages\MiscNotAuthorized@index')->name(
    'pages-misc-not-authorized'
  );
  // authentication
  Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
  Route::get('/auth/login-cover', $controller_path . '\authentications\LoginCover@index')->name('auth-login-cover');
  Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name(
    'auth-register-basic'
  );
  Route::get('/auth/register-cover', $controller_path . '\authentications\RegisterCover@index')->name(
    'auth-register-cover'
  );
  Route::get('/auth/register-multisteps', $controller_path . '\authentications\RegisterMultiSteps@index')->name(
    'auth-register-multisteps'
  );
  Route::get('/auth/verify-email-basic', $controller_path . '\authentications\VerifyEmailBasic@index')->name(
    'auth-verify-email-basic'
  );
  Route::get('/auth/verify-email-cover', $controller_path . '\authentications\VerifyEmailCover@index')->name(
    'auth-verify-email-cover'
  );
  Route::get('/auth/reset-password-basic', $controller_path . '\authentications\ResetPasswordBasic@index')->name(
    'auth-reset-password-basic'
  );
  Route::get('/auth/reset-password-cover', $controller_path . '\authentications\ResetPasswordCover@index')->name(
    'auth-reset-password-cover'
  );
  Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name(
    'auth-reset-password-basic'
  );
  Route::get('/auth/forgot-password-cover', $controller_path . '\authentications\ForgotPasswordCover@index')->name(
    'auth-forgot-password-cover'
  );
  Route::get('/auth/two-steps-basic', $controller_path . '\authentications\TwoStepsBasic@index')->name(
    'auth-two-steps-basic'
  );
  Route::get('/auth/two-steps-cover', $controller_path . '\authentications\TwoStepsCover@index')->name(
    'auth-two-steps-cover'
  );
  // wizard example
  Route::get('/wizard/ex-checkout', $controller_path . '\wizard_example\Checkout@index')->name('wizard-ex-checkout');
  Route::get('/wizard/ex-property-listing', $controller_path . '\wizard_example\PropertyListing@index')->name(
    'wizard-ex-property-listing'
  );
  Route::get('/wizard/ex-create-deal', $controller_path . '\wizard_example\CreateDeal@index')->name(
    'wizard-ex-create-deal'
  );

  // modal
  Route::get('/modal-examples', $controller_path . '\modal\ModalExample@index')->name('modal-examples');

  // cards
  Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');
  Route::get('/cards/advance', $controller_path . '\cards\CardAdvance@index')->name('cards-advance');
  Route::get('/cards/statistics', $controller_path . '\cards\CardStatistics@index')->name('cards-statistics');
  Route::get('/cards/analytics', $controller_path . '\cards\CardAnalytics@index')->name('cards-analytics');
  Route::get('/cards/actions', $controller_path . '\cards\CardActions@index')->name('cards-actions');

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
  Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name(
    'ui-pagination-breadcrumbs'
  );
  Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
  Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
  Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
  Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
  Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name(
    'ui-tooltips-popovers'
  );
  Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

  // extended ui
  Route::get('/extended/ui-avatar', $controller_path . '\extended_ui\Avatar@index')->name('extended-ui-avatar');
  Route::get('/extended/ui-blockui', $controller_path . '\extended_ui\BlockUI@index')->name('extended-ui-blockui');
  Route::get('/extended/ui-drag-and-drop', $controller_path . '\extended_ui\DragAndDrop@index')->name(
    'extended-ui-drag-and-drop'
  );
  Route::get('/extended/ui-media-player', $controller_path . '\extended_ui\MediaPlayer@index')->name(
    'extended-ui-media-player'
  );
  Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name(
    'extended-ui-perfect-scrollbar'
  );
  Route::get('/extended/ui-star-ratings', $controller_path . '\extended_ui\StarRatings@index')->name(
    'extended-ui-star-ratings'
  );
  Route::get('/extended/ui-sweetalert2', $controller_path . '\extended_ui\SweetAlert@index')->name(
    'extended-ui-sweetalert2'
  );
  Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name(
    'extended-ui-text-divider'
  );
  Route::get('/extended/ui-timeline-basic', $controller_path . '\extended_ui\TimelineBasic@index')->name(
    'extended-ui-timeline-basic'
  );
  Route::get('/extended/ui-timeline-fullscreen', $controller_path . '\extended_ui\TimelineFullscreen@index')->name(
    'extended-ui-timeline-fullscreen'
  );
  Route::get('/extended/ui-tour', $controller_path . '\extended_ui\Tour@index')->name('extended-ui-tour');
  Route::get('/extended/ui-treeview', $controller_path . '\extended_ui\Treeview@index')->name('extended-ui-treeview');
  Route::get('/extended/ui-misc', $controller_path . '\extended_ui\Misc@index')->name('extended-ui-misc');

  // icons
  Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');
  Route::get('/icons/font-awesome', $controller_path . '\icons\FontAwesome@index')->name('icons-font-awesome');

  // form elements
  Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
  Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');
  Route::get('/forms/custom-options', $controller_path . '\form_elements\CustomOptions@index')->name(
    'forms-custom-options'
  );
  Route::get('/forms/editors', $controller_path . '\form_elements\Editors@index')->name('forms-editors');
  Route::get('/forms/file-upload', $controller_path . '\form_elements\FileUpload@index')->name('forms-file-upload');
  Route::get('/forms/pickers', $controller_path . '\form_elements\Picker@index')->name('forms-pickers');
  Route::get('/forms/selects', $controller_path . '\form_elements\Selects@index')->name('forms-selects');
  Route::get('/forms/sliders', $controller_path . '\form_elements\Sliders@index')->name('forms-sliders');
  Route::get('/forms/switches', $controller_path . '\form_elements\Switches@index')->name('forms-switches');
  Route::get('/forms/extras', $controller_path . '\form_elements\Extras@index')->name('forms-extras');

  // form layouts
  Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name(
    'form-layouts-vertical'
  );
  Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name(
    'form-layouts-horizontal'
  );
  Route::get('/form/layouts-sticky', $controller_path . '\form_layouts\StickyActions@index')->name(
    'form-layouts-sticky'
  );

  // form wizards
  Route::get('/form/wizard-numbered', $controller_path . '\form_wizard\Numbered@index')->name('form-wizard-numbered');
  Route::get('/form/wizard-icons', $controller_path . '\form_wizard\Icons@index')->name('form-wizard-icons');
  Route::get('/form/validation', $controller_path . '\form_validation\Validation@index')->name('form-validation');

  // tables
  Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');
  Route::get('/tables/datatables-basic', $controller_path . '\tables\DatatableBasic@index')->name(
    'tables-datatables-basic'
  );
  Route::get('/tables/datatables-advanced', $controller_path . '\tables\DatatableAdvanced@index')->name(
    'tables-datatables-advanced'
  );
  Route::get('/tables/datatables-extensions', $controller_path . '\tables\DatatableExtensions@index')->name(
    'tables-datatables-extensions'
  );

  // charts
  Route::get('/charts/apex', $controller_path . '\charts\ApexCharts@index')->name('charts-apex');
  Route::get('/charts/chartjs', $controller_path . '\charts\ChartJs@index')->name('charts-chartjs');

  // maps
  Route::get('/maps/leaflet', $controller_path . '\maps\Leaflet@index')->name('maps-leaflet');

  // laravel example
  Route::get('/laravel/user-management', [UserManagement::class, 'UserManagement'])->name(
    'laravel-example-user-management'
  );
  Route::get('sliders/content-homepage-hero-settings', function () {
    return view('content.slider.settings');
  })->name('content-homepage-hero-settings');
  Route::get('mail', [AdminManagementController::class, 'mailModule'])->name('admin-mail');
  Route::get('content-ctd', [CtdController::class, 'typeConfigure'])->name('content-ctd');
  Route::get('commissions/settings', [CommissionsController::class, 'settings'])->name('commissions-settings');
  Route::get('packages/categories', [PackagesController::class, 'categories'])->name('packages-categories');
  Route::get('packages/settings', [PackagesController::class, 'settings'])->name('packages-settings');
  Route::get('packages/subscribers', [PackagesController::class, 'subscribers'])->name('packages-subscribers');
  Route::get('invoice/create/{type}', [InvoiceController::class, 'create'])->name('invoice.create');
  Route::get('invoice/preview', [InvoiceController::class, 'preview'])->name('invoice.preview');
  Route::get('user/list', [UserManagementController::class, 'userList'])->name('user.list');
  Route::get('user/view/account', [UserManagementController::class, 'userView'])->name('user-view-account');
  Route::get('user/view/security', [UserManagementController::class, 'userViewSec'])->name('user-view-security');
  Route::get('user/view/billing', [UserManagementController::class, 'userViewWallet'])->name('user-view-billing');
  Route::get('user/view/statistics', [UserManagementController::class, 'userViewStatistics'])->name(
    'user-view-statistics'
  );
  Route::get('user/view/connections', [UserManagementController::class, 'userViewConnections'])->name(
    'user-view-connections'
  );
  Route::get('user/view/notifications', [UserManagementController::class, 'userViewNotifications'])->name(
    'user-view-notifications'
  );
  Route::get('withdrawal/list', [UserManagementController::class, 'poWithdrawalList'])->name('withdrawal-list');
  Route::get('withdrawal/profile', [UserManagementController::class, 'poWithdrawalProfile'])->name(
    'withdrawal-profile'
  );
  Route::get('admin/list', [AdminManagementController::class, 'index'])->name('admin-list');
  Route::get('admin/preview', [AdminManagementController::class, 'adminPreview'])->name('admin-preview');
  Route::get('po/list', [UserManagementController::class, 'PoList'])->name('po-list');
  Route::get('po/account', [UserManagementController::class, 'poView'])->name('po-view-account');
  Route::get('po/security', [UserManagementController::class, 'poViewSec'])->name('po-view-security');
  Route::get('po/billing', [UserManagementController::class, 'poViewWallet'])->name('po-view-billing');
  Route::get('po/notifications', [UserManagementController::class, 'poViewNotifications'])->name(
    'po-view-notifications'
  );
  Route::get('po/connections', [UserManagementController::class, 'poViewConnections'])->name('po-view-connections');
  Route::get('po/statistics', [UserManagementController::class, 'poViewStatistics'])->name('po-view-statistics');
  Route::get('po/earnings', [UserManagementController::class, 'poViewEarnings'])->name('po-view-earnings');
  Route::get('ctd-earnings/list', [UserManagementController::class, 'CTDEarnings'])->name('earn-ctd-list');
  Route::get('ctd-earnings/preview/{earner?}', [UserManagementController::class, 'CTDEarningsPreview'])->name(
    'earn-ctd-preview'
  );
  Route::get('ctd/preview', [CtdController::class, 'previewCTD'])->name('ctd-preview');
  Route::get('ctd/edit', [CtdController::class, 'edit'])->name('ctd-edit');
  Route::get('content-gallery-settings', [GalleryController::class, 'settings'])->name('content-gallery.setting');
  Route::get('content-services-settings', [ServicesController::class, 'settings'])->name('content-services.setting');
  Route::get('content-faq-settings', [FAQController::class, 'settings'])->name('content-faq.setting');
  Route::get('content-homepage-cta', [HomepageController::class, 'ctaView'])->name('content-homepage-cta');
  Route::get('content-homepage-sections', [HomepageController::class, 'sectionsCustomize'])->name(
    'content-homepage-sections'
  );
  Route::get('content/fiscal-years', [BackendSettingsController::class, 'FiscalYears'])->name('content-fiscal-years');
  Route::resource('/commissions', CommissionsController::class);
  Route::resource('content-ministries', SupervisingMinistriesController::class);
  Route::resources([
    '/content-homepage-ctd' => CtdSectionController::class,
    '/content-homepage-pricing' => PricingPlanController::class,
    '/content-homepage-team' => TeamMemberController::class,
    '/announcement/popups' => AnnouncementPopupController::class,
    '/newsletters' => NewslettersController::class,
    '/ctd' => CtdController::class,
    '/user' => UserManagementController::class,
    '/packages' => PackagesController::class,
    '/invoice' => InvoiceController::class,
    '/content-faq' => FAQController::class,
    '/content-faq-category' => FAQCategoryController::class,
    '/content-services' => ServicesController::class,
    '/content-services-category' => ServicesCategoryController::class,
    '/content-gallery' => GalleryController::class,
    '/content-gallery-category' => GalleryCategory::class,
    '/content-blog' => BlogController::class,
    '/content-blog-category' => BlogCategoryController::class,
    '/content-blog-archives' => BlogArchivesController::class,
    '/content-funding' => FundingController::class,
    '/content-homepage-user-list' => UserManagement::class,
    '/content-homepage-features' => FeaturesController::class,
    '/content-homepage-intro' => IntroSectionController::class,
    '/content-homepage-statistics' => StatisticsSectionController::class,
    '/content-homepage-how-to' => HowToController::class,
    '/content-homepage-testimonials' => TestimonialController::class,
    '/content-homepage-partners' => PartnersController::class,
  ]);
  Route::group(['prefix' => 'sliders'], function () {
    Route::resources([
      '/content-homepage-hero-static' => SliderController::class,
      '/content-homepage-hero-slider' => DynamicSliderController::class,
      '/content-homepage-hero-video' => VideoSliderController::class,
    ]);
  });
  Route::group(['prefix' => 'settings'], function () {
    Route::get('general', [BackendSettingsController::class, 'GeneralSettings'])->name('settings-general');
    Route::get('third-party', [BackendSettingsController::class, 'ThirdPartySettings'])->name('settings-third-party');
    Route::get('header', [BackendSettingsController::class, 'HeaderSettings'])->name('settings-header');
    Route::get('footer', [BackendSettingsController::class, 'FooterSettings'])->name('settings-footer');
    Route::get('preloader', [BackendSettingsController::class, 'PreloaderSettings'])->name('settings-preloader');
    Route::get('social', [BackendSettingsController::class, 'SocialSettings'])->name('settings-social');
    Route::get('social-auth', [BackendSettingsController::class, 'SocialAuthSettings'])->name('settings-social-auth');
    Route::get('maintenance', [BackendSettingsController::class, 'MaintenanceSettings'])->name('settings-maintenance');
    Route::get('mail/settings', [BackendSettingsController::class, 'MailSettings'])->name('settings-mail-settings');
    Route::get('mail/templates', [BackendSettingsController::class, 'MailTemplates'])->name('settings-mail-templates');
  });
  Route::group(['prefix' => 'wallet'], function () {
    Route::get('settings', [BackendSettingsController::class, 'WalletSettings'])->name('wallet-settings');
    Route::get('type', [BackendSettingsController::class, 'WalletType'])->name('wallet-type');
    Route::get('movements', [BackendSettingsController::class, 'WalletMovements'])->name('wallet-movements.index');
    Route::get('movements/details', [BackendSettingsController::class, 'DepositDetatils'])->name(
      'wallet-movements.details'
    );
  });
});