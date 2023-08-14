<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\{
    Index,
    Index2,
    Index3,
    Index4,
    Index5,
    About,
    Accordion,
    AddProduct,
    Alerts,
    AvatarRadius,
    AvatarRound,
    AvatarSquare,
    Badge,
    Blog,
    BlogDetails,
    BlogPost,
    Breadcrumbs,
    Buttons,
    Calendar,
    Calendar2,
    Cards,
    Carousel,
    Cart,
    ChartChartist,
    ChartEchart,
    ChartFlot,
    ChartMorris,
    ChartNvd3,
    Chat,
    Checkout,
    Colors,
    Construction,
    Counters,
    CryptoCurrencies,
    Datatable,
    Dropdown,
    EmailCompose,
    EmailInbox,
    EmailRead,
    EmptyPage,
    Error400,
    Error401,
    Error403,
    Error404,
    Error500,
    Error503,
    Faq,
    FileAttachments,
    Filemanager,
    FilemanagerDetails,
    FilemanagerList,
    Footers,
    ForgotPassword,
    FormAdvanced,
    FormEditor,
    FormElements,
    FormLayouts,
    FormValidation,
    FormWizard,
    Gallery,
    Icons,
    Icons2,
    Icons3,
    Icons4,
    Icons5,
    Icons6,
    Icons7,
    Icons8,
    Icons9,
    Icons10,
    Icons11,
    Invoice,
    Listgroup,
    Loaders,
    Lockscreen,
    Login,
    Maps,
    Maps1,
    Maps2,
    Mediaobject,
    Modal,
    Navigation,
    Notify,
    NotifyList,
    Offcanvas,
    Pagination,
    Pricing,
    ProductDetails,
    Profile,
    Progress,
    Rangeslider,
    Rating,
    Register,
    Scroll,
    Scrollspy,
    Search,
    Services,
    Settings,
    Shop,
    Sweetalert,
    Switcher,
    Tables,
    Tabs,
    Tags,
    Terms,
    Thumbnails,
    TimeLine,
    Toast,
    Tooltipandpopover,
    Treeview,
    Typography,
    UsersList,
    Widgets,
    Wishlist,
};

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


//Route::get('/', Index::class);
Route::get('index', Index::class);
Route::get('index2', Index2::class);
Route::get('index3', Index3::class);
Route::get('index4', Index4::class);
Route::get('index5', Index5::class);
Route::get('about', About::class);
Route::get('accordion', Accordion::class);
Route::get('add-product', AddProduct::class);
Route::get('alerts', Alerts::class);
Route::get('avatar-radius', AvatarRadius::class);
Route::get('avatar-round', AvatarRound::class);
Route::get('avatar-square', AvatarSquare::class);
Route::get('badge', Badge::class);
Route::get('blog', Blog::class);
Route::get('blog-details', BlogDetails::class);
Route::get('blog-post', BlogPost::class);
Route::get('breadcrumbs', Breadcrumbs::class);
Route::get('buttons', Buttons::class);
Route::get('calendar', Calendar::class);
Route::get('calendar2', Calendar2::class);
Route::get('cards', Cards::class);
Route::get('carousel', Carousel::class);
Route::get('cart', Cart::class);
Route::get('chart-chartist', ChartChartist::class);
Route::get('chart-echart', ChartEchart::class);
Route::get('chart-flot', ChartFlot::class);
Route::get('chart-morris', ChartMorris::class);
Route::get('chart-nvd3', ChartNvd3::class);
Route::get('chat', Chat::class);
Route::get('checkout', Checkout::class);
Route::get('colors', Colors::class);
Route::get('construction', Construction::class);
Route::get('counters', Counters::class);
Route::get('crypto-currencies', CryptoCurrencies::class);
Route::get('datatable', Datatable::class);
Route::get('dropdown', Dropdown::class);
Route::get('email-compose', EmailCompose::class);
Route::get('email-inbox', EmailInbox::class);
Route::get('email-read', EmailRead::class);
Route::get('empty-page', EmptyPage::class);
Route::get('error400', Error400::class);
Route::get('error401', Error401::class);
Route::get('error403', Error403::class);
Route::get('error404', Error404::class);
Route::get('error500', Error500::class);
Route::get('error503', Error503::class);
Route::get('faq', Faq::class);
Route::get('file-attachments', FileAttachments::class);
Route::get('filemanager-details', FilemanagerDetails::class);
Route::get('filemanager-list', FilemanagerList::class);
Route::get('filemanager', Filemanager::class);
Route::get('footers', Footers::class);
Route::get('forgot-password', ForgotPassword::class);
Route::get('form-advanced', FormAdvanced::class);
Route::get('form-editor', FormEditor::class);
Route::get('form-elements', FormElements::class);
Route::get('form-layouts', FormLayouts::class);
Route::get('form-validation', FormValidation::class);
Route::get('form-wizard', FormWizard::class);
Route::get('gallery', Gallery::class);
Route::get('icons', Icons::class);
Route::get('icons2', Icons2::class);
Route::get('icons3', Icons3::class);
Route::get('icons4', Icons4::class);
Route::get('icons5', Icons5::class);
Route::get('icons6', Icons6::class);
Route::get('icons7', Icons7::class);
Route::get('icons8', Icons8::class);
Route::get('icons9', Icons9::class);
Route::get('icons10', Icons10::class);
Route::get('icons11', Icons11::class);
Route::get('invoice', Invoice::class);
Route::get('listgroup', Listgroup::class);
Route::get('loaders', Loaders::class);
Route::get('lockscreen', Lockscreen::class);
Route::get('login', Login::class);
Route::get('maps', Maps::class);
Route::get('maps1', Maps1::class);
Route::get('maps2', Maps2::class);
Route::get('mediaobject', Mediaobject::class);
Route::get('modal', Modal::class);
Route::get('navigation', Navigation::class);
Route::get('notify', Notify::class);
Route::get('notify-list', NotifyList::class);
Route::get('offcanvas', Offcanvas::class);
Route::get('pagination', Pagination::class);
Route::get('pricing', Pricing::class);
Route::get('product-details', ProductDetails::class);
Route::get('profile', Profile::class);
Route::get('progress', Progress::class);
Route::get('rangeslider', Rangeslider::class);
Route::get('rating', Rating::class);
Route::get('register', Register::class);
Route::get('scroll', Scroll::class);
Route::get('scrollspy', Scrollspy::class);
Route::get('search', Search::class);
Route::get('services', Services::class);
Route::get('settings', Settings::class);
Route::get('shop', Shop::class);
Route::get('sweetalert', Sweetalert::class);
Route::get('switcher', Switcher::class);
Route::get('tables', Tables::class);
Route::get('tabs', Tabs::class);
Route::get('tags', Tags::class);
Route::get('terms', Terms::class);
Route::get('thumbnails', Thumbnails::class);
Route::get('time-line', TimeLine::class);
Route::get('toast', Toast::class);
Route::get('tooltipandpopover', Tooltipandpopover::class);
Route::get('treeview', Treeview::class);
Route::get('typography', Typography::class);
Route::get('users-list', UsersList::class);
Route::get('widgets', Widgets::class);
Route::get('wishlist', Wishlist::class);

