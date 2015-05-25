<?php

class UserController extends BaseController {

    public function getIndex()
    {
        return "Bienvenido al Index";
    }

    public function getVer()
    {
        return "Ver el listado";
    }

    public function getVista2()
    {
        //return View::make('ejemplo')->with('nombre','Juan Ruiz');
        return Redirect::to('users/vista3')->with('mensaje','Entraste correctamente'); //Redireccionamiento a vista3, incluso se pueden pasar variables, pero se bede recuperar como variable de sesion
    }

    //Varias variables
    public function getVista3()
    {
        return View::make('ejemplo2',array('nombre'=>'Juan','apellido'=>'Ruiz','telefono'=>'5516516'));
    }

}