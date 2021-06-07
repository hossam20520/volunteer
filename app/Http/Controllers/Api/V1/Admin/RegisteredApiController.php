<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisteredRequest;
use App\Http\Requests\UpdateRegisteredRequest;
use App\Http\Resources\Admin\RegisteredResource;
use App\Models\Registered;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisteredApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('registered_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegisteredResource(Registered::all());
    }

    public function store(StoreRegisteredRequest $request)
    {
        $registered = Registered::create($request->all());

        return (new RegisteredResource($registered))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Registered $registered)
    {
        abort_if(Gate::denies('registered_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegisteredResource($registered);
    }

    public function update(UpdateRegisteredRequest $request, Registered $registered)
    {
        $registered->update($request->all());

        return (new RegisteredResource($registered))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Registered $registered)
    {
        abort_if(Gate::denies('registered_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registered->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
