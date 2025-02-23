<?php
namespace App\Filament\Resources\BenefitResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\BenefitResource;
use Illuminate\Routing\Router;


class BenefitApiService extends ApiService
{
    protected static string | null $resource = BenefitResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
