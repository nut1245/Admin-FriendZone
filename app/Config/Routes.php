<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/** 
*!OfficerController
*/
$routes->get('/', 'OfficerController::index');                                      //Login (index)
$routes->get('/register', 'OfficerController::index2');                             //Register
$routes->get('/adminmanage', 'OfficerController::viewAdmin');                       //showAllAdmin
$routes->get('/deleteAdmin/(:any)', 'OfficerController::deleteAdmin/$1');           //deleteAdmin
$routes->get('/logout', 'OfficerController::logout');                               //Logout    

/** 
*!UserController
*/
$routes->get('/dashboard', 'UserController::index');                                 //Dashboard
$routes->get('/alluser', 'UserController::viewUser');                                //viewUser(request)                    
$routes->get('/updateStatus/(:any)', 'UserController::updateStatus/$1');             //updateStatusSuccess
$routes->get('/updateStatusFail/(:any)', 'UserController::updateStatusFail/$1');     //updateStatusFail
$routes->get('/viewUserSuccess', 'UserController::viewUserSuccess');                 //viewUserSuccess
$routes->get('/viewUserFail', 'UserController::viewUserFail');                       //viewUserFail
$routes->get('/viewUserEdit', 'UserController::viewUserEdit');                       //viewUserEdit
$routes->get('/viewUserBlock', 'UserController::viewUserBlock');                     //viewUserBlock
$routes->get('/allusermanage', 'UserController::viewAllUser');                       //showAllUser(manage)
$routes->get('/blockUser/(:any)', 'UserController::blockUser/$1');                   //blockUser
$routes->get('/UnblockUser/(:any)', 'UserController::UnblockUser/$1');               //UnblockUser


/** 
*!PostController
*/
$routes->get('/postmanage', 'PostController::viewPost');                           //viewPost(AllPost)
$routes->get('/reportpost', 'PostController::viewReport');                         //viewReport
$routes->get('/deleteReport/(:any)', 'PostController::deleteReport/$1');           //deleteReport
$routes->get('/viewPostDetail/(:any)', 'PostController::viewPostDetail/$1',);        //viewPostDetail
$routes->get('/reviewpost', 'PostController::reviewpost');                          //reviewPost
$routes->get('/viewPostOpen', 'PostController::viewPostOpen');                     //viewPostOpen
$routes->get('/viewPostClose', 'PostController::viewPostClose');                   //viewPostClose


/** 
*!CategoryrController
*/
$routes->get('/category', 'CategoeyController::showCategory');                       //showCategory
$routes->get('/deleteCategory/(:any)', 'CategoeyController::deleteCategory/$1');    //deleteCategory
/*

/** 
*!For Test
*/
$routes->get('/deleteUser/(:any)', 'UserController::deleteUser/$1');    //deleteCategory
/*


 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
