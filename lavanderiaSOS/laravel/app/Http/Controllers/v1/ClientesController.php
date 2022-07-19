<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\v1\Cliente;
=======
use App\Models\v1\cliente;
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function getAll()
    {
        $response = new \stdClass();
        $response->success=true;

<<<<<<< HEAD
        $clientes = Cliente::all();
=======
        $clientes = cliente::all();
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f

        $response->data=$clientes;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdClass();
        $response->success=true;

<<<<<<< HEAD
        $clientes = Cliente::find($id);
=======
        $clientes = cliente::find($id);
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f
        $response->data = $clientes;

        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $response->success=true;

<<<<<<< HEAD
        $clientes = new Cliente();
        $clientes->fecha = $request->fecha;
=======
        $clientes = new Producto();
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f
        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->dirección = $request->dirección;
<<<<<<< HEAD
=======
        $clientes->fecha = $request->fecha;
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f
        $clientes->save();

        $response->data=$clientes;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

<<<<<<< HEAD
        $clientes = Cliente::find($request->id);

        $clientes->fecha = $request->fecha;
=======
        $producto = Producto::find($request->id);

>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f
        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->dirección = $request->dirección;
<<<<<<< HEAD
        $clientes->save();
=======
        $clientes->fecha = $request->fecha;
        $producto->save();
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f

        $response->data = $clientes;

        return response()->json($clientes,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

<<<<<<< HEAD
        $clientes = Cliente::find($request->id);

        if(isset($request->fecha))
        $clientes->fecha = $request->fecha;

        if (isset($request->dni)) 
        $clientes->dni = $request->dni;
        
        if (isset($request->nombre)) 
        $clientes->nombre = $request->nombre;

        if (isset($request->celular)) 
        $clientes->celular = $request->celular;

        if(isset($request->correo))
        $clientes->correo = $request->correo;

        if(isset($request->dirección))
        $clientes->dirección = $request->dirección;

        $clientes->save();

        $response->data = $clientes;
=======
        $clientes = cliente::find($request->id);

        if(isset($request->codigo))
        $producto->codigo = $request->codigo;

        if (isset($request->nombre))
        $clientes->nombre = $request->nombre;

        $clientes->save();

        $clientes->data = $clientes;
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f

        return response()->json($clientes,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

<<<<<<< HEAD
        $clientes = Cliente::find($id);
=======
        $clientes = cliente::find($id);
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f

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
>>>>>>> e6244e4b3e441f79e13e9b4ff9f45895a16d242f
