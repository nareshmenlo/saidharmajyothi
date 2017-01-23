<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';
$route['product_view/(:any)']="home/product_view/$1";
$route['search_products']="productlist/search_products";
//$route['arabic_news/(:any)']="arabic_news/news_detail/$1";
$route['newsevents_view/(:any)']="home/newsevents_view/$1";
$route['photos_album/(:any)']="photos/photos_album/$1";
$route['videos_album/(:any)']="videos/videos_album/$1";

$route['view_media/(:any)']="what_we_do/view_media/$1";
$route['view_listings/(:any)']="what_we_do/view_listings/$1";

$route['services_view/(:any)']="services/services_view/$1";
$route['view_projects/(:any)']="home/view_projects/$1";
$route['project_view/(:any)']="home/project_view/$1";

$route['articles_view/(:any)']="home/articles_view/$1";
$route['our_programes/(:any)']="home/our_programes/$1";
$route['saipravanchanalu/(:any)']="audiogallery/saipravanchanalu/$1";
$route['subphotogallery/(:any)']="photogallery/subphotogallery/$1";
$route['t_saipravanchanalu/(:any)']="t_audiogallery/t_saipravanchanalu/$1";
$route['t_subphotogallery/(:any)']="t_photogallery/t_subphotogallery/$1";

//$route['corp_newsletter/(:any)'] = "corp_newsletter";
//$route['corp_newsletter/(:any)']="corp_newsletter/month_archieve/$1";


/* End of file routes.php */
/* Location: ./application/config/routes.php */