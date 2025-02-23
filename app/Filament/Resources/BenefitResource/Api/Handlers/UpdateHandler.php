<?php
namespace App\Filament\Resources\BenefitResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\BenefitResource;
use App\Filament\Resources\BenefitResource\Api\Requests\UpdateBenefitRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = BenefitResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update Benefit
     *
     * @param UpdateBenefitRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateBenefitRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}