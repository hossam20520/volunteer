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

class RegisteredController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('registered_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registereds = Registered::all();
        // $registereds = Registered::where('id' ,  1)->get();

        // $registereds = Registered::where('id' , '>'  ,   0)->paginate(200);

        return view('admin.registereds.index', compact('registereds'));
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
