<?php namespace Philsquare\LaraManager\Http\Controllers; 

use Illuminate\Support\Facades\Storage;
use Philsquare\LaraManager\Http\Requests\CreateObjectRequest;
use Philsquare\LaraManager\Http\Requests\UpdateObjectRequest;
use Philsquare\LaraManager\Models\Object;

class ObjectsController extends Controller {

    protected $object;

    public function __construct(Object $object)
    {
        $this->object = $object;
    }

    public function index()
    {
        $objects = $this->object->all();

        return view('laramanager::objects.index', compact('objects'));
    }

    public function create()
    {
        return view('laramanager::objects.create');
    }

    public function store(CreateObjectRequest $request)
    {
        $this->object->create($request->all());

        return redirect('admin/objects');
    }

    public function show()
    {

    }

    public function edit($objectId)
    {
        $object = $this->object->findOrFail($objectId);

        return view('laramanager::objects.edit', compact('object'));
    }

    public function update(UpdateObjectRequest $request, $objectId)
    {
        $object = $this->object->findOrFail($objectId);
        $object->update($request->all());

        return redirect('admin/objects');
    }

    public function destroy()
    {

    }

}