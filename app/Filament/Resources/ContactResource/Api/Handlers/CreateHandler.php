<?php
namespace App\Filament\Resources\ContactResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\ContactResource;
use App\Filament\Resources\ContactResource\Api\Requests\CreateContactRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = ContactResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Contact
     *
     * @param CreateContactRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateContactRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}