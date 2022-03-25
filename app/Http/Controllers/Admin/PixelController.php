<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPixelRequest;
use App\Http\Requests\StorePixelRequest;
use App\Http\Requests\UpdatePixelRequest;
use App\Models\Pixel;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PixelController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pixel_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pixels = Pixel::all();

        return view('admin.pixels.index', compact('pixels'));
    }

    public function create()
    {
        abort_if(Gate::denies('pixel_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pixels.create');
    }

    public function store(StorePixelRequest $request)
    {
        $pixel = Pixel::create($request->all());

        return redirect()->route('admin.pixels.index');
    }

    public function edit(Pixel $pixel)
    {
        abort_if(Gate::denies('pixel_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pixels.edit', compact('pixel'));
    }

    public function update(UpdatePixelRequest $request, Pixel $pixel)
    {
        $pixel->update($request->all());

        return redirect()->route('admin.pixels.index');
    }

    public function show(Pixel $pixel)
    {
        abort_if(Gate::denies('pixel_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pixels.show', compact('pixel'));
    }

    public function destroy(Pixel $pixel)
    {
        abort_if(Gate::denies('pixel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pixel->delete();

        return back();
    }

    public function massDestroy(MassDestroyPixelRequest $request)
    {
        Pixel::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
