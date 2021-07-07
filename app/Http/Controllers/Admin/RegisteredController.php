<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyRegisteredRequest;
use App\Http\Requests\StoreRegisteredRequest;
use App\Http\Requests\UpdateRegisteredRequest;
use App\Models\Registered;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class RegisteredController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('registered_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Registered::query()->select(sprintf('%s.*', (new Registered())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'registered_show';
                $editGate = 'registered_edit';
                $deleteGate = 'registered_delete';
                $crudRoutePart = 'registereds';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : '';
            });
            $table->editColumn('fname', function ($row) {
                return $row->fname ? $row->fname : '';
            });
            $table->editColumn('idnumber', function ($row) {
                return $row->idnumber ? $row->idnumber : '';
            });
            $table->editColumn('branch', function ($row) {
                return $row->branch ? $row->branch : '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('age', function ($row) {
                return $row->age ? $row->age : '';
            });
            $table->editColumn('country', function ($row) {
                return $row->country ? $row->country : '';
            });
            $table->editColumn('branch_code', function ($row) {
                return $row->branch_code ? $row->branch_code : '';
            });

            $table->editColumn('have_account', function ($row) {
                return $row->have_account ? Registered::HAVE_ACCOUNT_SELECT[$row->have_account] : '';
            });
            $table->editColumn('gender', function ($row) {
                return $row->gender ? $row->gender : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.registereds.index');
    }

    public function create()
    {
        abort_if(Gate::denies('registered_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registereds.create');
    }

    public function store(StoreRegisteredRequest $request)
    {
        $registered = Registered::create($request->all());

        return redirect()->route('admin.registereds.index');
    }

    public function edit(Registered $registered)
    {
        abort_if(Gate::denies('registered_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registereds.edit', compact('registered'));
    }

    public function update(UpdateRegisteredRequest $request, Registered $registered)
    {
        $registered->update($request->all());

        return redirect()->route('admin.registereds.index');
    }

    public function show(Registered $registered)
    {
        abort_if(Gate::denies('registered_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registereds.show', compact('registered'));
    }

    public function destroy(Registered $registered)
    {
        abort_if(Gate::denies('registered_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registered->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegisteredRequest $request)
    {
        Registered::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
