<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Appliation routes definition for version 1
$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->get('/', function() {
        return response()->json(['version' => sprintf("%s(%s)", "Micro Finances Api", APP_VERSION)]);
    });
    // Application route definitions
    
});

// Drewlabs Generated MVC Route Defnitions, Please Do not delete to avoid duplicates route definitions

// Route definitions for account-stake-holders
$router->get('/account-stake-holders', ['uses' => 'AccountStakeHoldersController@index']);
$router->get('/account-stake-holders/{id}', ['uses' => 'AccountStakeHoldersController@show']);
$router->post('/account-stake-holders', ['uses' => 'AccountStakeHoldersController@store']);
$router->put('/account-stake-holders/{id}', ['uses' => 'AccountStakeHoldersController@update']);
$router->delete('/account-stake-holders/{id}', ['uses' => 'AccountStakeHoldersController@destroy']);
// !End Route definitions for account-stake-holders

// Route definitions for activity-sectors
$router->get('/activity-sectors', ['uses' => 'ActivitySectorsController@index']);
$router->get('/activity-sectors/{id}', ['uses' => 'ActivitySectorsController@show']);
$router->post('/activity-sectors', ['uses' => 'ActivitySectorsController@store']);
$router->put('/activity-sectors/{id}', ['uses' => 'ActivitySectorsController@update']);
$router->delete('/activity-sectors/{id}', ['uses' => 'ActivitySectorsController@destroy']);
// !End Route definitions for activity-sectors

// Route definitions for addresses
$router->get('/addresses', ['uses' => 'AddressesController@index']);
$router->get('/addresses/{id}', ['uses' => 'AddressesController@show']);
$router->post('/addresses', ['uses' => 'AddressesController@store']);
$router->put('/addresses/{id}', ['uses' => 'AddressesController@update']);
$router->delete('/addresses/{id}', ['uses' => 'AddressesController@destroy']);
// !End Route definitions for addresses

// Route definitions for business-links
$router->get('/business-links', ['uses' => 'BusinessLinksController@index']);
$router->get('/business-links/{id}', ['uses' => 'BusinessLinksController@show']);
$router->post('/business-links', ['uses' => 'BusinessLinksController@store']);
$router->put('/business-links/{id}', ['uses' => 'BusinessLinksController@update']);
$router->delete('/business-links/{id}', ['uses' => 'BusinessLinksController@destroy']);
// !End Route definitions for business-links

// Route definitions for cities
$router->get('/cities', ['uses' => 'CitiesController@index']);
$router->get('/cities/{id}', ['uses' => 'CitiesController@show']);
$router->post('/cities', ['uses' => 'CitiesController@store']);
$router->put('/cities/{id}', ['uses' => 'CitiesController@update']);
$router->delete('/cities/{id}', ['uses' => 'CitiesController@destroy']);
// !End Route definitions for cities

// Route definitions for civil-states
$router->get('/civil-states', ['uses' => 'CivilStatesController@index']);
$router->get('/civil-states/{id}', ['uses' => 'CivilStatesController@show']);
$router->post('/civil-states', ['uses' => 'CivilStatesController@store']);
$router->put('/civil-states/{id}', ['uses' => 'CivilStatesController@update']);
$router->delete('/civil-states/{id}', ['uses' => 'CivilStatesController@destroy']);
// !End Route definitions for civil-states

// Route definitions for countries
$router->get('/countries', ['uses' => 'CountriesController@index']);
$router->get('/countries/{id}', ['uses' => 'CountriesController@show']);
$router->post('/countries', ['uses' => 'CountriesController@store']);
$router->put('/countries/{id}', ['uses' => 'CountriesController@update']);
$router->delete('/countries/{id}', ['uses' => 'CountriesController@destroy']);
// !End Route definitions for countries

// Route definitions for customer-documents
$router->get('/customer-documents', ['uses' => 'CustomerDocumentsController@index']);
$router->get('/customer-documents/{id}', ['uses' => 'CustomerDocumentsController@show']);
$router->post('/customer-documents', ['uses' => 'CustomerDocumentsController@store']);
$router->put('/customer-documents/{id}', ['uses' => 'CustomerDocumentsController@update']);
$router->delete('/customer-documents/{id}', ['uses' => 'CustomerDocumentsController@destroy']);
// !End Route definitions for customer-documents

// Route definitions for customer-photos
$router->get('/customer-photos', ['uses' => 'CustomerPhotosController@index']);
$router->get('/customer-photos/{id}', ['uses' => 'CustomerPhotosController@show']);
$router->post('/customer-photos', ['uses' => 'CustomerPhotosController@store']);
$router->put('/customer-photos/{id}', ['uses' => 'CustomerPhotosController@update']);
$router->delete('/customer-photos/{id}', ['uses' => 'CustomerPhotosController@destroy']);
// !End Route definitions for customer-photos

// Route definitions for customers
$router->get('/customers', ['uses' => 'CustomersController@index']);
$router->get('/customers/{id}', ['uses' => 'CustomersController@show']);
$router->post('/customers', ['uses' => 'CustomersController@store']);
$router->put('/customers/{id}', ['uses' => 'CustomersController@update']);
$router->delete('/customers/{id}', ['uses' => 'CustomersController@destroy']);
// !End Route definitions for customers

// Route definitions for districts
$router->get('/districts', ['uses' => 'DistrictsController@index']);
$router->get('/districts/{id}', ['uses' => 'DistrictsController@show']);
$router->post('/districts', ['uses' => 'DistrictsController@store']);
$router->put('/districts/{id}', ['uses' => 'DistrictsController@update']);
$router->delete('/districts/{id}', ['uses' => 'DistrictsController@destroy']);
// !End Route definitions for districts

// Route definitions for documents-types
$router->get('/documents-types', ['uses' => 'DocumentsTypesController@index']);
$router->get('/documents-types/{id}', ['uses' => 'DocumentsTypesController@show']);
$router->post('/documents-types', ['uses' => 'DocumentsTypesController@store']);
$router->put('/documents-types/{id}', ['uses' => 'DocumentsTypesController@update']);
$router->delete('/documents-types/{id}', ['uses' => 'DocumentsTypesController@destroy']);
// !End Route definitions for documents-types

// Route definitions for individuals
$router->get('/individuals', ['uses' => 'IndividualsController@index']);
$router->get('/individuals/{id}', ['uses' => 'IndividualsController@show']);
$router->post('/individuals', ['uses' => 'IndividualsController@store']);
$router->put('/individuals/{id}', ['uses' => 'IndividualsController@update']);
$router->delete('/individuals/{id}', ['uses' => 'IndividualsController@destroy']);
// !End Route definitions for individuals

// Route definitions for marital-statuses
$router->get('/marital-statuses', ['uses' => 'MaritalStatusesController@index']);
$router->get('/marital-statuses/{id}', ['uses' => 'MaritalStatusesController@show']);
$router->post('/marital-statuses', ['uses' => 'MaritalStatusesController@store']);
$router->put('/marital-statuses/{id}', ['uses' => 'MaritalStatusesController@update']);
$router->delete('/marital-statuses/{id}', ['uses' => 'MaritalStatusesController@destroy']);
// !End Route definitions for marital-statuses

// Route definitions for member-categories
$router->get('/member-categories', ['uses' => 'MemberCategoriesController@index']);
$router->get('/member-categories/{id}', ['uses' => 'MemberCategoriesController@show']);
$router->post('/member-categories', ['uses' => 'MemberCategoriesController@store']);
$router->put('/member-categories/{id}', ['uses' => 'MemberCategoriesController@update']);
$router->delete('/member-categories/{id}', ['uses' => 'MemberCategoriesController@destroy']);
// !End Route definitions for member-categories

// Route definitions for member-types
$router->get('/member-types', ['uses' => 'MemberTypesController@index']);
$router->get('/member-types/{id}', ['uses' => 'MemberTypesController@show']);
$router->post('/member-types', ['uses' => 'MemberTypesController@store']);
$router->put('/member-types/{id}', ['uses' => 'MemberTypesController@update']);
$router->delete('/member-types/{id}', ['uses' => 'MemberTypesController@destroy']);
// !End Route definitions for member-types

// Route definitions for members
$router->get('/members', ['uses' => 'MembersController@index']);
$router->get('/members/{id}', ['uses' => 'MembersController@show']);
$router->post('/members', ['uses' => 'MembersController@store']);
$router->put('/members/{id}', ['uses' => 'MembersController@update']);
$router->delete('/members/{id}', ['uses' => 'MembersController@destroy']);
// !End Route definitions for members

// Route definitions for membership-statuses
$router->get('/membership-statuses', ['uses' => 'MembershipStatusesController@index']);
$router->get('/membership-statuses/{id}', ['uses' => 'MembershipStatusesController@show']);
$router->post('/membership-statuses', ['uses' => 'MembershipStatusesController@store']);
$router->put('/membership-statuses/{id}', ['uses' => 'MembershipStatusesController@update']);
$router->delete('/membership-statuses/{id}', ['uses' => 'MembershipStatusesController@destroy']);
// !End Route definitions for membership-statuses

// Route definitions for membership-status-changes
$router->get('/membership-status-changes', ['uses' => 'MembershipStatusChangesController@index']);
$router->get('/membership-status-changes/{id}', ['uses' => 'MembershipStatusChangesController@show']);
$router->post('/membership-status-changes', ['uses' => 'MembershipStatusChangesController@store']);
$router->put('/membership-status-changes/{id}', ['uses' => 'MembershipStatusChangesController@update']);
$router->delete('/membership-status-changes/{id}', ['uses' => 'MembershipStatusChangesController@destroy']);
// !End Route definitions for membership-status-changes

// Route definitions for memberships
$router->get('/memberships', ['uses' => 'MembershipsController@index']);
$router->get('/memberships/{id}', ['uses' => 'MembershipsController@show']);
$router->post('/memberships', ['uses' => 'MembershipsController@store']);
$router->put('/memberships/{id}', ['uses' => 'MembershipsController@update']);
$router->delete('/memberships/{id}', ['uses' => 'MembershipsController@destroy']);
// !End Route definitions for memberships

// Route definitions for moral-documents
$router->get('/moral-documents', ['uses' => 'MoralDocumentsController@index']);
$router->get('/moral-documents/{id}', ['uses' => 'MoralDocumentsController@show']);
$router->post('/moral-documents', ['uses' => 'MoralDocumentsController@store']);
$router->put('/moral-documents/{id}', ['uses' => 'MoralDocumentsController@update']);
$router->delete('/moral-documents/{id}', ['uses' => 'MoralDocumentsController@destroy']);
// !End Route definitions for moral-documents

// Route definitions for moral-signatories
$router->get('/moral-signatories', ['uses' => 'MoralSignatoriesController@index']);
$router->get('/moral-signatories/{id}', ['uses' => 'MoralSignatoriesController@show']);
$router->post('/moral-signatories', ['uses' => 'MoralSignatoriesController@store']);
$router->put('/moral-signatories/{id}', ['uses' => 'MoralSignatoriesController@update']);
$router->delete('/moral-signatories/{id}', ['uses' => 'MoralSignatoriesController@destroy']);
// !End Route definitions for moral-signatories

// Route definitions for morals
$router->get('/morals', ['uses' => 'MoralsController@index']);
$router->get('/morals/{id}', ['uses' => 'MoralsController@show']);
$router->post('/morals', ['uses' => 'MoralsController@store']);
$router->put('/morals/{id}', ['uses' => 'MoralsController@update']);
$router->delete('/morals/{id}', ['uses' => 'MoralsController@destroy']);
// !End Route definitions for morals

// Route definitions for sexes
$router->get('/sexes', ['uses' => 'SexesController@index']);
$router->get('/sexes/{id}', ['uses' => 'SexesController@show']);
$router->post('/sexes', ['uses' => 'SexesController@store']);
$router->put('/sexes/{id}', ['uses' => 'SexesController@update']);
$router->delete('/sexes/{id}', ['uses' => 'SexesController@destroy']);
// !End Route definitions for sexes

// Route definitions for stake-holder-types
$router->get('/stake-holder-types', ['uses' => 'StakeHolderTypesController@index']);
$router->get('/stake-holder-types/{id}', ['uses' => 'StakeHolderTypesController@show']);
$router->post('/stake-holder-types', ['uses' => 'StakeHolderTypesController@store']);
$router->put('/stake-holder-types/{id}', ['uses' => 'StakeHolderTypesController@update']);
$router->delete('/stake-holder-types/{id}', ['uses' => 'StakeHolderTypesController@destroy']);
// !End Route definitions for stake-holder-types

// !End Drewlabs Generated MVC Route Defnitions, Please Do not delete to avoid duplicates route definitions
