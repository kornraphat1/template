<?php namespace Config;



// Create a new instance of our RouteCollection class.

$routes = Services::routes(true);



// Load the system's routing file first, so that the app and ENVIRONMENT

// can override as needed.

if (file_exists(SYSTEMPATH . 'Config/Routes.php'))

{

	require SYSTEMPATH . 'Config/Routes.php';

}



/**

 * --------------------------------------------------------------------

 * Router Setup

 * --------------------------------------------------------------------

 */

$routes->setDefaultNamespace('App\Controllers');

$routes->setDefaultController('Home');

$routes->setDefaultMethod('index');

$routes->setTranslateURIDashes(false);

$routes->set404Override();

$routes->setAutoRoute(true);



/**

 * --------------------------------------------------------------------

 * Route Definitions

 * --------------------------------------------------------------------

 */



// We get a performance increase by specifying the default

// route since we don't have to scan directories.





//--------------------------------------movie -----------------------------------------------//

$routes->get('/', 'Home::index');
$routes->get('/page/home', 'Home::index');
$routes->get('/zoom', 'Home::zoom');
$routes->get('/category_series', 'Home::list_series');

$routes->get('/series/(:num)/(:segment)', 'Home::series/$1/$2');
$routes->get('/video/(:num)/(:any)', 'Home::video/$1/$2');
$routes->get('/series/(:num)/(:segment)/(:num)/(:segment)', 'Home::video_series/$1/$2/$3/$4');
$routes->get('/player/(:num)/(:segment)', 'Home::player/$1/$2');
$routes->get('/player/(:num)/(:segment)/(:segment)', 'Home::player/$1/$2/$3');

// Category แบ่งตามหมวดหมู่ เมื่อกดเลือก ตามหมวดหมู่
$routes->get('/category/(:num)/(:any)', 'Home::video_bycate/$1/$2');

// year แบ่งตาม ปี เมื่อกดเลือก  ปี
$routes->get('/year/(:num)', 'Home::video_byyear/$1');
// หนังใหม่ 
$routes->get('/newmovie', 'Home::newmovie');
// search
$routes->get('/search/(:any)', 'Home::video_search/$1');
// topimdb
$routes->get('/list_top_imdb', 'Home::video_topimdb');
//แจ้งหนังเสีย
$routes->get('/savereport/branch/(:num)/id/(:num)/reason/(:segment)/name/(:segment)/(:segment)', 'Home::save_report/$1/$2/$3/$4/$5');

//ขอหนัง 
$routes->get('/saverequest/branch/(:num)/movie/(:any)', 'Home::save_request/$1/$2');

//ติดต่อโฆษณา 
$routes->post('/contact_ads', 'Home::contact_ads');

//หน้า contract
$routes->get('contract', 'Home::contract');


$routes->get('countview/(:num)', 'Home::countView/$1');

// Popular dunung4u
$routes->get('popular', 'Home::popular');
$routes->get('/moviedata', 'Home::moviedata');
$routes->get('/moviedata_search', 'Home::moviedata_search');
$routes->get('/moviedata_category', 'Home::moviedata_category');

// category dunung4u
$routes->get('category', 'Home::categorylist');

//--------------------------------------AV -----------------------------------------------//
$routes->get('/av', 'Av_Home::index');
$routes->get('/av/page/home', 'Av_Home::index');
$routes->get('/av/zoom', 'Av_Home::zoom');
$routes->get('/av/series/(:num)/(:segment)', 'Av_Home::series/$1/$2');
$routes->get('/av/video/(:num)/(:any)', 'Av_Home::video/$1/$2');
$routes->get('/av/series/(:num)/(:segment)/(:num)/(:segment)', 'Av_Home::video_series/$1/$2/$3/$4');
$routes->get('/av/player/(:num)/(:segment)', 'Av_Home::player/$1/$2');
$routes->get('/av/player/(:num)/(:segment)/(:segment)', 'Av_Home::player/$1/$2/$3');

// Category แบ่งตามหมวดหมู่ เมื่อกดเลือก ตามหมวดหมู่
$routes->get('/av/category/(:num)/(:any)', 'Av_Home::video_bycate/$1/$2');

// year แบ่งตาม ปี เมื่อกดเลือก  ปี
$routes->get('/av/year/(:num)', 'Av_Home::video_byyear/$1');

// search
$routes->get('/av/search/(:any)', 'Av_Home::video_search/$1');

//แจ้งหนังเสีย
$routes->get('/av/savereport/branch/(:num)/id/(:num)/reason/(:segment)/name/(:segment)', 'Av_Home::save_report/$1/$2/$3/$4');

//ขอหนัง 
$routes->get('/av/saverequest/branch/(:num)/movie/(:any)', 'Av_Home::save_request/$1/$2');
$routes->get('/av/countview/(:num)', 'Av_Home::countView/$1');



//--------------------------------------CLIPS -----------------------------------------------//
$routes->get('/clips', 'Clips_Home::index');
$routes->get('/clips/page/home', 'Clips_Home::index');
$routes->get('/clips/zoom', 'Clips_Home::zoom');
$routes->get('/clips/series/(:num)/(:segment)', 'Clips_Home::series/$1/$2');
$routes->get('/clips/video/(:num)/(:any)', 'Clips_Home::video/$1/$2');
$routes->get('/clips/series/(:num)/(:segment)/(:num)/(:segment)', 'Clips_Home::video_series/$1/$2/$3/$4');
$routes->get('/clips/player/(:num)/(:segment)', 'Clips_Home::player/$1/$2');
$routes->get('/clips/player/(:num)/(:segment)/(:segment)', 'Clips_Home::player/$1/$2/$3');

// Category แบ่งตามหมวดหมู่ เมื่อกดเลือก ตามหมวดหมู่
$routes->get('/clips/category/(:num)/(:any)', 'Clips_Home::video_bycate/$1/$2');

// year แบ่งตาม ปี เมื่อกดเลือก  ปี
$routes->get('/clips/year/(:num)', 'Clips_Home::video_byyear/$1');

// search
$routes->get('/clips/search/(:any)', 'Clips_Home::video_search/$1');

//แจ้งหนังเสีย
$routes->get('/clips/savereport/branch/(:num)/id/(:num)/reason/(:segment)/name/(:segment)', 'Clips_Home::save_report/$1/$2/$3/$4');

//ขอหนัง 
$routes->get('/clips/saverequest/branch/(:num)/movie/(:any)', 'Clips_Home::save_request/$1/$2');
$routes->get('/clips/countview/(:num)', 'Clips_Home::countView/$1');




//--------------------------------------Anime -----------------------------------------------//
$routes->get('/anime', 'An_Home::index');
$routes->get('/anime/page/home', 'An_Home::index');
$routes->get('/anime/zoom', 'An_Home::zoom');
$routes->get('/anime/video/(:num)/(:segment)', 'An_Home::series/$1/$2');

$routes->get('/anime/video/(:num)/(:segment)/(:num)/(:segment)', 'An_Home::video_series/$1/$2/$3/$4');
$routes->get('/anime/player/(:num)/(:segment)', 'An_Home::player/$1/$2');
$routes->get('/anime/player/(:num)/(:segment)/(:segment)', 'An_Home::player/$1/$2/$3');

// Category แบ่งตามหมวดหมู่ เมื่อกดเลือก ตามหมวดหมู่
$routes->get('/anime/category/(:num)/(:any)', 'An_Home::video_bycate/$1/$2');

// year แบ่งตาม ปี เมื่อกดเลือก  ปี
$routes->get('/anime/year/(:num)', 'An_Home::video_byyear/$1');

// search
$routes->get('/anime/search/(:any)', 'An_Home::video_search/$1');

//แจ้งหนังเสีย
$routes->get('/anime/savereport/branch/(:num)/id/(:num)/reason/(:segment)/name/(:segment)/ep/(:segment)', 'An_Home::save_report/$1/$2/$3/$4/$5');

//ขอหนัง 
$routes->get('/anime/saverequest/branch/(:num)/movie/(:any)', 'An_Home::save_request/$1/$2');
$routes->get('/anime/countview/(:num)', 'An_Home::countView/$1');




/**

 * --------------------------------------------------------------------

 * Additional Routing

 * --------------------------------------------------------------------

 *

 * There will often be times that you need additional routing and you

 * need to it be able to override any defaults in this file. Environment

 * based routes is one such time. require() additional route files here

 * to make that happen.

 *

 * You will have access to the $routes object within that file without

 * needing to reload it.

 */

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))

{

	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';

}

