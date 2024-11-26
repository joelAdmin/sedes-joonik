<?php

namespace App\Traits;

use App\Helpers\HelperEncryptAES;
use App\Helpers\Sgc\Constants;
use App\Models\Log;
use Illuminate\Support\Facades\Request;

trait ResponseService
{

    /**
     * Retorna una respuesta JSON con el estado HTTP especificado y datos opcionales.
     *
     * @param int $option   Opción que indica el código de estado HTTP (404, 200, 500, etc.).
     * @param mixed $data   Datos opcionales que se incluirán en la respuesta JSON (puede ser nulo).
     * @param Request $request   Objeto Request opcional para incluir en la respuesta JSON (puede ser nulo).
     * @param string $message   Mensaje opcional que se incluirá en la respuesta JSON (puede ser nulo).
     * @param bool|null $status   Estado opcional que indica el estado de la respuesta (puede ser nulo).
     * @return \Illuminate\Http\JsonResponse   Respuesta JSON con el estado y datos especificados.
     */
    public function statusHttp($option, $data = null, $message = null, $request = null, $status = null)
    {

        switch ($option) {
            case 404:
                return  response()->json([
                    'status'  => is_null($status) ? false : $status,
                    'message' => is_null($message) ? 'Recurso no encontrado' : $message,
                    'token'   => env('API_KEY')
                ], 404);
                break;
            case 200:
                return  response()->json([
                    'status'  => is_null($status) ? true : $status,
                    'data'    => $data,
                    //'data'    => HelperEncryptAES::encrypt($request, $data, true),
                    'message' => is_null($message) ? 'success' : $message,
                    'token'   => env('API_KEY')
                ], 200);
                break;
            case 204:
                return  response()->json([
                    'status'  => is_null($status) ? true : $status,
                    'data'    => $data,
                    //'data'    => HelperEncryptAES::encrypt($request, $data, true),
                    'message' => is_null($message) ? 'success:solicitud se ha procesado correctamente pero no hay contenido que devolver o no se realizaron cambios significativos.' : $message,
                    'token'   => env('API_KEY')
                ], 204);
                break;
            case 500:
                return response()->json([
                    'status'  => is_null($status) ? false : $status,
                    'message' => 'Error: ' . (!is_null($message) ? $message : $data->getMessage()),
                ], 500);
                break;
            case 400:
                return response()->json([
                    'status'  =>  is_null($status) ? false : $status,
                    'message' =>  is_null($message) ? 'Error(400 datos faltantes)' : $message,
                    'token'   => env('API_KEY')
                ], 400);
                break;
            case 401:
                return response()->json([
                    'status'  =>  is_null($status) ? false : $status,
                    'message' =>  is_null($message) ? 'Usuario no Autorizado (401 Unauthorized)' : $message,
                    'token'   => env('API_KEY')
                ], 401);
                break;
            case 403:
                return response()->json([
                    'status'  =>  is_null($status) ? false : $status,
                    'message' =>  is_null($message) ? 'Usuario no Autorizado (403 Prohibido)' : $message,
                    'token'   => env('API_KEY')
                ], 403);
                break;
            case 409:
                return response()->json([
                    'status'  =>  is_null($status) ? false : $status,
                    'message' =>  is_null($message) ? 'Usuario no puede completar la acción debido a un conflicto con el estado actual del recurso,' : $message,
                    'token'   =>env('API_KEY')
                ], 409);
                break;
            case 422:
                return response()->json([
                    'status'  =>  is_null($status) ? false : $status,
                    'data'    => $data,
                    'message' =>  is_null($message) ? 'Error al intentar validar la información,' : $message,
                    'token'   => env('API_KEY')
                ], 422);
                break;
           
            default:
                error_log('Log default', LOG_INFO);
        }
    }
}
