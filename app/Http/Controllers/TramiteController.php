<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTramiteRequest;
use App\Http\Requests\UpdateTramiteRequest;
use App\Repositories\TramiteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TramiteController extends AppBaseController
{
    /** @var  TramiteRepository */
    private $tramiteRepository;

    public function __construct(TramiteRepository $tramiteRepo)
    {
        $this->tramiteRepository = $tramiteRepo;
    }

    /**
     * Display a listing of the Tramite.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tramiteRepository->pushCriteria(new RequestCriteria($request));
        $tramites = $this->tramiteRepository->all();

        return view('tramites.index')
            ->with('tramites', $tramites);
    }

    /**
     * Show the form for creating a new Tramite.
     *
     * @return Response
     */
    public function create()
    {
        return view('tramites.create');
    }

    /**
     * Store a newly created Tramite in storage.
     *
     * @param CreateTramiteRequest $request
     *
     * @return Response
     */
    public function store(CreateTramiteRequest $request)
    {
        $input = $request->all();

        $tramite = $this->tramiteRepository->create($input);

        Flash::success('Tramite saved successfully.');

        return redirect(route('tramites.index'));
    }

    /**
     * Display the specified Tramite.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tramite = $this->tramiteRepository->findWithoutFail($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        return view('tramites.show')->with('tramite', $tramite);
    }

    /**
     * Show the form for editing the specified Tramite.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tramite = $this->tramiteRepository->findWithoutFail($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        return view('tramites.edit')->with('tramite', $tramite);
    }

    /**
     * Update the specified Tramite in storage.
     *
     * @param  int              $id
     * @param UpdateTramiteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTramiteRequest $request)
    {
        $tramite = $this->tramiteRepository->findWithoutFail($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        $tramite = $this->tramiteRepository->update($request->all(), $id);

        Flash::success('Tramite updated successfully.');

        return redirect(route('tramites.index'));
    }

    /**
     * Remove the specified Tramite from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tramite = $this->tramiteRepository->findWithoutFail($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        $this->tramiteRepository->delete($id);

        Flash::success('Tramite deleted successfully.');

        return redirect(route('tramites.index'));
    }
}
