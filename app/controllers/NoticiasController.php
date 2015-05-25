<?php

class NoticiasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /noticias
	 *
	 * @return Response
	 */

	public function index()
	{
        $noticias = Noticia::all();
        //return $noticias;
        return View::make('noticias.index',compact('noticias'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /noticias/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('noticias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /noticias
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /noticias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$noticia = Noticia::find($id);
        return View::make('noticias.show',compact('noticia'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /noticias/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /noticias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /noticias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}