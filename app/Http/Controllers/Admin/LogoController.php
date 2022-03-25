<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLogoRequest;
use App\Http\Requests\StoreLogoRequest;
use App\Http\Requests\UpdateLogoRequest;
use App\Models\Logo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('logo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logos = Logo::all();

        return view('admin.logos.index', compact('logos'));
    }

    public function create()
    {
        abort_if(Gate::denies('logo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.logos.create');
    }

    public function store(StoreLogoRequest $request)
    {
        $logo = Logo::create($request->all());

        return redirect()->route('admin.logos.index');
    }

    public function edit(Logo $logo)
    {
        abort_if(Gate::denies('logo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.logos.edit', compact('logo'));
    }

    public function update(UpdateLogoRequest $request, Logo $logo)
    {
        $logo->update($request->all());

        return redirect()->route('admin.logos.index');
    }

    public function show(Logo $logo)
    {
        abort_if(Gate::denies('logo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.logos.show', compact('logo'));
    }

    public function destroy(Logo $logo)
    {
        abort_if(Gate::denies('logo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $logo->delete();

        return back();
    }

    public function massDestroy(MassDestroyLogoRequest $request)
    {
        Logo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
