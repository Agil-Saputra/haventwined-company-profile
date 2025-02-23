<?php
namespace App\Filament\Resources\BenefitResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\BenefitResource;
use App\Filament\Resources\BenefitResource\Api\Requests\CreateBenefitRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = BenefitResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Benefit
     *
     * @param CreateBenefitRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateBenefitRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}