<?php
namespace App\Filament\Resources\BannerResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\BannerResource;
use App\Filament\Resources\BannerResource\Api\Requests\CreateBannerRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = BannerResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Banner
     *
     * @param CreateBannerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateBannerRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}