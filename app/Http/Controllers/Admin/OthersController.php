<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyOtherRequest;
use App\Http\Requests\StoreOtherRequest;
use App\Http\Requests\UpdateOtherRequest;
use App\Models\Other;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class OthersController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('other_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Other::query()->select(sprintf('%s.*', (new Other())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'other_show';
                $editGate = 'other_edit';
                $deleteGate = 'other_delete';
                $crudRoutePart = 'others';

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
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('firstname', function ($row) {
                return $row->firstname ? $row->firstname : '';
            });
            $table->editColumn('lastname', function ($row) {
                return $row->lastname ? $row->lastname : '';
            });
            $table->editColumn('username', function ($row) {
                return $row->username ? $row->username : '';
            });
            $table->editColumn('company', function ($row) {
                return $row->company ? $row->company : '';
            });
            $table->editColumn('job', function ($row) {
                return $row->job ? $row->job : '';
            });
            $table->editColumn('eq', function ($row) {
                return $row->eq ? $row->eq : '';
            });
            $table->editColumn('country', function ($row) {
                return $row->country ? $row->country : '';
            });
            $table->editColumn('city', function ($row) {
                return $row->city ? $row->city : '';
            });
            $table->editColumn('password', function ($row) {
                return $row->password ? $row->password : '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('age', function ($row) {
                return $row->age ? $row->age : '';
            });
            $table->editColumn('accept_terms', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->accept_terms ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'accept_terms']);

            return $table->make(true);
        }

        return view('admin.others.index');
    }

    public function create()
    {
        abort_if(Gate::denies('other_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.others.create');
    }

    public function store(StoreOtherRequest $request)
    {
        $other = Other::create($request->all());

        return redirect()->route('admin.others.index');
    }

    public function edit(Other $other)
    {
        abort_if(Gate::denies('other_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.others.edit', compact('other'));
    }

    public function update(UpdateOtherRequest $request, Other $other)
    {
        $other->update($request->all());

        return redirect()->route('admin.others.index');
    }

    public function show(Other $other)
    {
        abort_if(Gate::denies('other_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.others.show', compact('other'));
    }

    public function destroy(Other $other)
    {
        abort_if(Gate::denies('other_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $other->delete();

        return back();
    }

    public function massDestroy(MassDestroyOtherRequest $request)
    {
        Other::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
