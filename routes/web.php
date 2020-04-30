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

// Route::get('/', function () {
//     return view('1welcome');
// });

// Route::get('/index.html', function () {
//     return view('index');
// });




Route::get('/add-products.html', function () {
    return view('add-products');
});

Route::get('/basic-table.html', function () {
    return view('basic-table');
});

Route::get('/bootstrap-treeview.html', function () {
    return view('bootstrap-treeview');
});

Route::get('/bootstrap-ui.html', function () {
    return view('bootstrap-ui');
});

Route::get('/bootstrap-wysihtml5.html', function () {
    return view('bootstrap-wysihtml5');
});

Route::get('/buttons.html', function () {
    return view('buttons');
});

Route::get('/calender.html', function () {
    return view('calender');
});

Route::get('/carousel.html', function () {
    return view('carousel');
});

Route::get('/chart.html', function () {
    return view('chart');
});

Route::get('/chartist.html', function () {
    return view('chartist');
});


//need to check later becuase initially it was chart.js file

Route::get('/chats.html', function () {
    return view('chats');
});

Route::get('/contact-card.html', function () {
    return view('contact-card');
});


Route::get('/contact-list.html', function () {
    return view('contact-list');
});


Route::get('/cropperjs.html', function () {
    return view('cropperjs');
});

Route::get('/data-table.html', function () {
    return view('data-table');
});

Route::get('/documentation.html', function () {
    return view('documentation');
});

Route::get('/dropdown.html', function () {
    return view('dropdown');
});

Route::get('/dropzone.html', function () {
    return view('dropzone');
});

Route::get('/e-commerce.html', function () {
    return view('e-commerce');
});

Route::get('/easy-pie-chart.html', function () {
    return view('easy-pie-chart');
});

Route::get('/editable-table.html', function () {
    return view('editable-table');
});

Route::get('/export-table.html', function () {
    return view('export-table');
});

Route::get('/faq.html', function () {
    return view('faq');
});

Route::get('/file-manager.html', function () {
    return view('file-manager');
});

Route::get('/float-chart.html', function () {
    return view('float-chart');
});

Route::get('/fontawesome.html', function () {
    return view('fontawesome');
});

Route::get('/foo-table.html', function () {
    return view('foo-table');
});

Route::get('/forgot-password.html', function () {
    return view('forgot-password');
});

Route::get('/form-advance.html', function () {
    return view('form-advance');
});

Route::get('/form-element.html', function () {
    return view('form-element');
});

Route::get('/form-file-upload.html', function () {
    return view('form-file-upload');
});

Route::get('/form-layout.html', function () {
    return view('form-layout');
});

Route::get('/form-mask.html', function () {
    return view('form-mask');
});

Route::get('/form-picker.html', function () {
    return view('form-picker');
});

Route::get('/form-validation.html', function () {
    return view('form-validation');
});

Route::get('/form-wizard.html', function () {
    return view('form-wizard');
});

Route::get('/form-x-editable.html', function () {
    return view('form-x-editable');
});

Route::get('/gallery.html', function () {
    return view('gallery');
});

Route::get('/glyphicons.html', function () {
    return view('glyphicons');
});

Route::get('/google-map.html', function () {
    return view('google-map');
});

Route::get('/grid-styles.html', function () {
    return view('grid-styles');
});

Route::get('/inbox-detail.html', function () {
    return view('inbox-detail');
});

Route::get('/inbox.html', function () {
    return view('inbox');
});

Route::get('/index2.html', function () {
    return view('index2');
});

Route::get('/index3.html', function () {
    return view('index3');
});

Route::get('/index4.html', function () {
    return view('index4');
});

Route::get('/index5.html', function () {
    return view('index5');
});

Route::get('/index6.html', function () {
    return view('index6');
});

Route::get('/invoice-archive.html', function () {
    return view('invoice-archive');
});

Route::get('/invoice.html', function () {
    return view('invoice');
});

Route::get('/jsgrid-table.html', function () {
    return view('jsgrid-table');
});

Route::get('/linea-icon.html', function () {
    return view('linea-icon');
});

Route::get('/locked.html', function () {
    return view('locked');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/modals.html', function () {
    return view('modals');
});

Route::get('/morris-chart.html', function () {
    return view('morris-chart');
});

Route::get('/nestable.html', function () {
    return view('nestable');
});

Route::get('/notifications.html', function () {
    return view('notifications');
});

Route::get('/panels-wells.html', function () {
    return view('panels-wells');
});

Route::get('/pe-icon-7.html', function () {
    return view('pe-icon-7');
});

Route::get('/peity-chart.html', function () {
    return view('peity-chart');
});

Route::get('/pricing.html', function () {
    return view('pricing');
});

Route::get('/product-cart.html', function () {
    return view('product-cart');
});

Route::get('/product-checkout.html', function () {
    return view('product-checkout');
});

Route::get('/product-detail.html', function () {
    return view('product-detail');
});

Route::get('/product-orders.html', function () {
    return view('product-orders');
});

Route::get('/product.html', function () {
    return view('product');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/progressbars.html', function () {
    return view('progressbars');
});

Route::get('/range-slider.html', function () {
    return view('range-slider');
});

Route::get('/reset-password.html', function () {
    return view('reset-password');
});

Route::get('/responsive-data-table.html', function () {
    return view('responsive-data-table');
});

Route::get('/responsive-table.html', function () {
    return view('responsive-table');
});

Route::get('/signup', function () {
    return view('signup');
});


//must delete page
Route::get('/', function () {
    return view('simple-line-icons');
});

Route::get('/', function () {
    return view('simplelineicons');
});

Route::get('/', function () {
    return view('skills-counter');
});

Route::get('/', function () {
    return view('sparkline');
});

Route::get('/', function () {
    return view('summernote-wysihtml5');
});

Route::get('/', function () {
    return view('sweetalert');
});

Route::get('/', function () {
    return view('tabs');
});

Route::get('/', function () {
    return view('themify');
});

Route::get('/', function () {
    return view('timeline');
});

Route::get('/', function () {
    return view('tinymce-wysihtml5');
});

Route::get('/todo-tasklist.html', function () {
    return view('todo-tasklist');
});

Route::get('/typeahad-js.html', function () {
    return view('typeahead-js');
});

Route::get('/typography.html', function () {
    return view('typography');
});

Route::get('/vetor-map.html', function () {
    return view('vector-map');
});

Route::get('/weather.html', function () {
    return view('weather');
});

Route::get('/blank.html', function () {
    return view('blank');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');