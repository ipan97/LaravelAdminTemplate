<?php
/**
 * @author Ipan Taufik Rahman
 * @since 01/03/18
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('ok', function ($data) {
            return Response::make([
                'meta' => [
                    'code' => 200,
                    'error' => 0,
                    'message' => 'Success',
                    'success' => true
                ],
                'data' => $data
            ]);
        });

        Response::macro('notFound', function ($data) {
            return Response::make([
                'meta' => [
                    'code' => 404,
                    'error' => 1,
                    'message' => 'Not Found',
                    'success' => false
                ],
                'data' => $data
            ]);
        });

        Response::macro('badRequest', function ($data) {
            return Response::make([
                'meta' => [
                    'code' => 400,
                    'error' => 1,
                    'message' => 'Bad Request',
                    'success' => false
                ],
                'data' => $data
            ]);
        });

        Response::macro('internalServerError', function ($data) {
            return Response::make([
                'meta' => [
                    'code' => 500,
                    'error' => 1,
                    'message' => 'Internal Server Error',
                    'success' => false
                ],
                'data' => $data
            ]);
        });
    }
}