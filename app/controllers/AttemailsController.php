<?php

class AttemailsController extends BaseController {

	/**
	 * Attemail Repository
	 *
	 * @var Attemail
	 */
	protected $attemail;

	public function __construct(Attemail $attemail)
	{
		$this->attemail = $attemail;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$attemails = $this->attemail->all();
        $attemails->map(function($att){
            $att->datarecebimento = date('d/m/Y', strtotime($att->datarecebimento));
            $att->dataresposta = date('d/m/Y', strtotime($att->dataresposta));
        });

		return View::make('attemails.index', compact('attemails'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('attemails.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validation = Validator::make($input, Attemail::$rules);

		if ($validation->passes())
		{
            $input['datarecebimento'] = DateTime::createFromFormat('d/m/Y',$input['datarecebimento'])->format('Y/m/d');
            $input['dataresposta'] = DateTime::createFromFormat('d/m/Y',$input['dataresposta'])->format('Y/m/d');
			$this->attemail->create($input);


			return Redirect::route('attemails.index');
		}

		return Redirect::route('attemails.create')
			->withInput()
			->withErrors($validation)
			->with('message','');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$attemail = $this->attemail->findOrFail($id);

		return View::make('attemails.show', compact('attemail'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$attemail = $this->attemail->find($id);

		if (is_null($attemail))
		{
			return Redirect::route('attemails.index');
		}

        $attemail->datarecebimento = date('d/m/Y', strtotime($attemail->datarecebimento));
        $attemail->dataresposta = date('d/m/Y', strtotime($attemail->dataresposta));

		return View::make('attemails.edit', compact('attemail'));
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
		$validation = Validator::make($input, Attemail::$rules);

		if ($validation->passes())
		{
			$attemail = $this->attemail->find($id);
			$attemail->update($input);

			return Redirect::route('attemails.show', $id);
		}

		return Redirect::route('attemails.edit', $id)
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
		$this->attemail->find($id)->delete();

		return Redirect::route('attemails.index');
	}

}
