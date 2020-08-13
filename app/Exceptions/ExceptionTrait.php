<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait {

    public function apiException($request, $ex) {
        if ($this->isModel($ex)) {
            return response()->json([
                'errors' => 'Product Model Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        if ($this->isHttp($ex)) {
            return response()->json([
                'errors' => 'Route incorrect'
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public function isModel($e) {
        return $e instanceof ModelNotFoundException;
    }

    public function isHttp($e) {
        return $e instanceof NotFoundHttpException;
    }
    
}
    