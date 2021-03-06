<?php namespace Philsquare\LaraManager\Http\Controllers; 

use Carbon\Carbon;
use Philsquare\LaraManager\Models\Error;

class NotFoundExceptionsController extends Controller {

    protected $error;

    public function __construct(Error $error)
    {
        $this->error = $error;
    }

    public function index()
    {
        $now = Carbon::create();
        $last7 = $this->error->where('exception', 'NotFoundHttpException')
            ->where('updated_at', '>', $now->subDays(7))->get();

        $all = $this->error->where('exception', 'NotFoundHttpException')->get();

        return view('laramanager::errors.not_found.index', compact('last7', 'all'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $error = $this->error->findOrFail($id);

        if($error->delete()) return response()->json(['status' => 'ok']);

        return response()->json(['status' => 'failed']);
    }

}