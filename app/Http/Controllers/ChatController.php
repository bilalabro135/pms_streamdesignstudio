<?php
namespace App\Http\Controllers;

use DB;
use DataTables;
use App\Models\Message;
use App\Models\Area;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:area-list', ['only' => ['index','show']]);
        //  $this->middleware('permission:area-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:area-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:area-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        return view('chats.index');
    }

    public function list()
    {
        $data   = Message::orderBy('messages.id')->get();
        return 
            DataTables::of($data)
                ->addColumn('author',function($data){
                    return (isset($data->sender->fname)) ?  $data->sender->fname : "";
                })

                ->addColumn('receiver',function($data){
                    return (isset($data->receiver->fname)) ?  $data->receiver->fname : "";
                })
                ->addColumn('action',function($data){
                    return '
                    <div class="btn-group btn-group">
                        <a class="btn btn-info btn-xs" href="chats/'.$data->id.'">
                            <i class="fa fa-eye"></i>
                        </a>
                        <button
                            class="btn btn-danger btn-xs delete_all"
                            data-url="'. url('del_chat') .'" data-id="'.$data->id.'">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>';
                })
                ->addColumn('srno','')
                ->rawColumns(['srno','author','receiver','','action'])
                ->make(true);
    }

    public function create()
    {
        return redirect()->route('chats.index')->with('permission','Invalid route!');
        $cities        = City::pluck('name','id')->all();
        return view('areas.create',compact('cities'));
    }

    public function store(Request $request)
    {
        return redirect()->route('chats.index')->with('permission','Invalid route!');
        // Retrieve the validated input data...
        $validated    = $request->validated();

        // store validated data
        $data         = Area::create($request->all());
        return response()->json(['success'=>$request['name']. ' added successfully.']);
      
    }

     public function show($id)
    {
        $data           = Message::findorFail($id);


        return view('chats.show',compact('data'));
    }


    public function edit($id)
    {
        return redirect()->route('chats.index')->with('permission','Invalid route!');
        $data           = Area::findorFail($id);
        $cities         = City::pluck('name','id')->all();
        return view('areas.edit',compact('data','cities'));
    }


    public function update(Request $request, $id)
    {
        return redirect()->route('chats.index')->with('permission','Invalid route!');
        // Retrieve the validated input data...
        $validated  = $request->validated();

        // get all request
        $data       = Area::findOrFail($id);
        $input      = $request->all();

        // if active is not set, make it in-active
        if(!(isset($input['active']))){
            $input['active'] = 0;
        }

        // update
        $upd        = $data->update($input);
        return response()->json(['success'=>$request['name']. ' updated successfully.']);
    }

    public function destroy(Request $request)
    {
        $data   = Message::whereIn('id',explode(",", $request->ids))->delete();
        return response()->json(['success'=>"Message deleted successfully."]);
    }

}
