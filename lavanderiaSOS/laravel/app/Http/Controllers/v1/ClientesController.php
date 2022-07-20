<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function getAll()
    {
        $response = new \stdClass();
        $response->success=true;

        $clientes = Cliente::all();

        $response->data=$clientes;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdClass();
        $response->success=true;


        $clientes = Cliente::find($id);
        $response->data = $clientes;

        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $response->success=true;

        $clientes = new Cliente();
<<<<<<< HEAD
=======
        $clientes->fecha = $request->fecha;

        $clientes = new Cliente();
>>>>>>> 97ceb587662c24e4ba399555378930c72b752f05
        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->dirección = $request->dirección;

        $clientes->save();

        $response->data=$clientes;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

        $clientes = Cliente::find($request->id);
<<<<<<< HEAD
=======

        $clientes->fecha = $request->fecha;

        $producto = Producto::find($request->id);
>>>>>>> 97ceb587662c24e4ba399555378930c72b752f05

        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->dirección = $request->dirección;
        $clientes->save();

        $response->data = $clientes;

        return response()->json($clientes,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

        $clientes = Cliente::find($request->id);

        if(isset($request->fecha))
        $clientes->fecha = $request->fecha;
<<<<<<< HEAD

        if (isset($request->dni))
        $clientes->dni = $request->dni;
=======
>>>>>>> 97ceb587662c24e4ba399555378930c72b752f05

        if (isset($request->dni)) 
        $clientes->dni = $request->dni;
        
        if (isset($request->nombre)) 
        $clientes->nombre = $request->nombre;

<<<<<<< HEAD
        if (isset($request->celular))
=======
        if (isset($request->celular)) 
>>>>>>> 97ceb587662c24e4ba399555378930c72b752f05
        $clientes->celular = $request->celular;

        if(isset($request->correo))
        $clientes->correo = $request->correo;

        if(isset($request->dirección))
        $clientes->dirección = $request->dirección;

        $clientes->save();

        $response->data = $clientes;

        $clientes = cliente::find($request->id);

        $clientes->data = $clientes;

        return response()->json($clientes,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

        $clientes = Cliente::find($id);

        if($clientes)
        {
            $clientes->delete();
            $response_code = 200;
        }
        else
        {
            $response->erros = [];
            $response->erros[] = "El elemento ya ha sido eliminado previamente";
            $response_code = 500;
        }

    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 97ceb587662c24e4ba399555378930c72b752f05
