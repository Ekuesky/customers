<?php

/*
 * This file is auto generated using the Drewlabs Code Generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace App\Http\Controllers;

use App\Services\CustomerDocumentService;
use App\Models\CustomerDocument;
use App\Http\ViewModels\CustomerDocumentViewModel;
use App\Dto\CustomerDocumentDto;
use Drewlabs\Contracts\Support\Actions\ActionHandler;
use Drewlabs\Contracts\Validator\Validator;
use Drewlabs\Packages\Http\Contracts\IActionResponseHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

// Function import statements
use function Drewlabs\Support\Proxy\Action;

final class CustomerDocumentsController
{

	/**
	 * Injected instance of MVC service
	 * 
	 * @var ActionHandler
	 */
	private $service;

	/**
	 * Injected instance of the validator class
	 * 
	 * @var Validator
	 */
	private $validator;

	/**
	 * Injected instance of the response handler class
	 * 
	 * @var IActionResponseHandler
	 */
	private $response;

	/**
	 * Resource primary key name
	 * 
	 * @var string
	 */
	private const RESOURCE_PRIMARY_KEY = "id";

	/**
	 * Class instance initializer
	 * 
	 * @param Validator $validator
	 * @param IActionResponseHandler $response
	 * @param ActionHandler $service
	 *
	 * @return self
	 */
	public function __construct(Validator $validator, IActionResponseHandler $response, ActionHandler $service = null)
	{
		# code...
		$this->validator = $validator;
		$this->response = $response;
		$this->service = $service ?? new CustomerDocumentService();
	}

	/**
	 * Display or Returns a list of items
	 * @Route /GET /customer-documents[/{$id}]
	 * 
	 * @param Request $request
	 * @param string $id
	 *
	 * @return JsonResponse
	 */
	public function index(Request $request, string $id = null)
	{
		# code...
		if (null !== $id) {
			return $this->show($request, $id);
		}
		$tranformFunc_ = function( $items) {
			return map_query_result($items, function ($value) {
				return $value ? (new CustomerDocumentDto)->withModel($value) : $value;
			});
		};
		$filters = drewlabs_databse_parse_client_request_query(new CustomerDocument, $request);
		
		$result = $this->service->handle(Action([
			'type' => 'SELECT',
			'payload' => $request->has('per_page') ? [
				$filters,
				(int)$request->get('per_page'),
				$request->has('_columns') ? (is_array($colums_ = $request->get('_columns')) ? $colums_ : (@json_decode($colums_, true) ?? ['*'])): ['*'],
				$request->has('page') ? (int)$request->get('page') : null,
			] :
			[
				$filters,
				$request->has('_columns') ? (is_array($colums_ = $request->get('_columns')) ? $colums_ : (@json_decode($colums_, true) ?? ['*']))  : ['*'],
			],
		]), $tranformFunc_);
		return $this->response->ok($result);
	}

	/**
	 * Display or Returns an item matching the specified id
	 * @Route /GET /customer-documents/{$id}
	 * 
	 * @param Request $request
	 * @param mixed $id
	 *
	 * @return JsonResponse
	 */
	public function show(Request $request, $id)
	{
		# code...
		$result = $this->service->handle(Action([
			'type' => 'SELECT',
			'payload' => [
				$id,
				$request->has('_columns') ? (is_array($colums_ = $request->get('_columns')) ? $colums_ : (@json_decode($colums_, true) ?? ['*'])): ['*'],
			],
		]), function($value) {
			return null !== $value ? new CustomerDocumentDto($value->toArray()) : $value;
		});
		return $this->response->ok($result);
	}

	/**
	 * Stores a new item in the storage
	 * @Route /POST /customer-documents
	 * 
	 * @param Request $request
	 *
	 * @return JsonResponse
	 */
	public function store(Request $request)
	{
		# code...
		// validate request inputs
		$viewModel_ = (new CustomerDocumentViewModel)->files($request->allFiles())->withBody($request->all());
		
		$result = $this->validator->validate($viewModel_, function() use ($viewModel_) {
			return $this->service->handle(Action([
				'type' => 'CREATE',
				'payload' => [
					$viewModel_->all(),
					$viewModel_->has(self::RESOURCE_PRIMARY_KEY) ?
						[
							'upsert' => true,
							'upsert_conditions' => [
								self::RESOURCE_PRIMARY_KEY => $viewModel_->get(self::RESOURCE_PRIMARY_KEY),
							],
						] :
						[]
				],
			]), function( $value) {
				return null !== $value ? new CustomerDocumentDto($value->toArray()) : $value;
			});
		});
		
		return $this->response->ok($result);
	}

	/**
	 * Update the specified resource in storage.
	 * @Route /PUT /customer-documents/{id}
	 * @Route /PATCH /customer-documents/{id}
	 * 
	 * @param Request $request
	 * @param mixed $id
	 *
	 * @return JsonResponse
	 */
	public function update(Request $request, $id)
	{
		# code...
		$request = $request->merge(["id" => $id]);
		// Validate request inputs
		$viewModel_ = (new CustomerDocumentViewModel)->files($request->allFiles())->withBody($request->all());
		
		$result = $this->validator->setUpdate(true)->validate($viewModel_, function() use ($id, $viewModel_) {
			return $this->service->handle(Action([
				'type' => 'UPDATE',
				'payload' => [$id, $viewModel_->all()],
			]), function( $value) {
				return null !== $value ? new CustomerDocumentDto($value->toArray()) : $value;
			});
		});
		
		return $this->response->ok($result);
	}

	/**
	 * Remove the specified resource from storage.
	 * @Route /DELETE /customer-documents/{id}
	 * 
	 * @param Request $request
	 * @param mixed $id
	 *
	 * @return JsonResponse
	 */
	public function destroy(Request $request, $id)
	{
		# code...
		$result = $this->service->handle(Action([
			'type' => 'DELETE',
			'payload' => [$id],
		]));
		return $this->response->ok($result);
	}

}