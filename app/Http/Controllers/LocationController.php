<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use PhpParser\Node\Stmt\TryCatch;
use App\Traits\ResponseService;
use Exception;

class LocationController extends Controller
{
    use ResponseService;
    /**
     * el siguiente endpoint muestra la lista de sedes  con los siguientes campos.
     * - code (ID)
     * - name (nombre de la sede)
     * - image (imagen URL)
     * - creationDate (fecha de creación)
     *
     * @response 200 {
     *   "code": 1,
     *   "name": "Sede Central",
     *   "image": "https://images.pexels.com/photos/2014422/pexels-photo-2014422.jpeg",
     *   "creationDate": "2023-01-15"
     * }
     *
     * @return JsonResponse
     */

    public function index():JsonResponse
    {
        try{

            $data = [
                [
                    'code' => 1,
                    'name' => 'Sede Central 1',
                    'image' => 'https://images.pexels.com/photos/2014422/pexels-photo-2014422.jpeg',
                    'creationDate' => '2022-01-15',
                ],
                [
                    'code' => 2,
                    'name' => 'Sede Central 2',
                    'image' => 'https://images.pexels.com/photos/3573351/pexels-photo-3573351.png',
                    'creationDate' => '2023-01-15',
                ],
                [
                    'code' => 3,
                    'name' => 'Sucursal Norte 1',
                    'image' => 'https://images.pexels.com/photos/2880507/pexels-photo-2880507.jpeg',
                    'creationDate' => '2023-02-10',
                ],
                [
                    'code' => 4,
                    'name' => 'Sucursal Norte 2',
                    'image' => 'https://images.pexels.com/photos/2014422/pexels-photo-2014422.jpeg',
                    'creationDate' => '2024-02-10',
                ],
                [
                    'code' => 5,
                    'name' => 'Sucursal Sur 1',
                    'image' => 'https://images.pexels.com/photos/3573351/pexels-photo-3573351.png',
                    'creationDate' => '2021-03-20',
                ],
                [
                    'code' => 6,
                    'name' => 'Sucursal Sur 2',
                    'image' => 'https://images.pexels.com/photos/2880507/pexels-photo-2880507.jpeg',
                    'creationDate' => '2022-03-20',
                ]
            ];

            return response()->json($data, 200);
        }catch(Exception $e){
            return $this->statusHttp(500, $e);
        }
    }
}
