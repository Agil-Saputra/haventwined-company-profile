<?php
namespace App\Filament\Resources\HeroResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\HeroResource;
use Illuminate\Routing\Router;


class HeroApiService extends ApiService
{
    protected static string | null $resource = HeroResource::class;

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
