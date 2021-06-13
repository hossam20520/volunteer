<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOtherRequest;
use App\Http\Requests\UpdateOtherRequest;
use App\Http\Resources\Admin\OtherResource;
use App\Models\Other;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OthersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('other_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OtherResource(Other::all());
    }

    public function store(StoreOtherRequest $request)
    {
        $other = Other::create($request->all());

        return (new OtherResource($other))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Other $other)
    {
        abort_if(Gate::denies('other_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OtherResource($other);
    }

    public function update(UpdateOtherRequest $request, Other $other)
    {
        $other->update($request->all());

        return (new OtherResource($other))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Other $other)
    {
        abort_if(Gate::denies('other_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $other->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
