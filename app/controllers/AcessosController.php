<?php

class AcessosController extends BaseController {

	/**
	 * Acesso Repository
	 *
	 * @var Acesso
	 */
	protected $acesso;

	public function __construct(Acesso $acesso)
	{
		$this->acesso = $acesso;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$acessos = $this->acesso->all();

		return View::make('acessos.index', compact('acessos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('acessos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Acesso::$rules);

		if ($validation->passes())
		{
			$this->acesso->create($input);

			return Redirect::route('acessos.index');
		}

		return Redirect::route('acessos.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$acesso = $this->acesso->findOrFail($id);

		return View::make('acessos.show', compact('acesso'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$acesso = $this->acesso->find($id);

		if (is_null($acesso))
		{
			return Redirect::route('acessos.index');
		}

		return View::make('acessos.edit', compact('acesso'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Acesso::$rules);

		if ($validation->passes())
		{
			$acesso = $this->acesso->find($id);
			$acesso->update($input);

			return Redirect::route('acessos.show', $id);
		}

		return Redirect::route('acessos.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->acesso->find($id)->delete();

		return Redirect::route('acessos.index');
	}

}
