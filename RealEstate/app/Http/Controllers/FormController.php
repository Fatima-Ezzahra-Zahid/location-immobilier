<?php

namespace App\Http\Controllers;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms=Form::all();
        return view('Properties',['forms'=>$forms]); 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'descr'=>['max:500','min:20']
        ]);
      

        $forms = new Form();
        if (Auth::check()) {
            $userId = Auth::id();
            $forms->user_id = $userId;
        }
        $forms->full_name = $request->full_name;
        $forms->address = $request->address;
        $forms->email = $request->email;
        $forms->Phone_Number = $request->Phone_Number;
        $forms->types_id = $request->types_id;
        $forms->cities_name = $request->cities_name;
        $forms->autre = $request->autre;
        $forms->price = $request->price;
        $forms->District = $request->District;
        $forms->area = $request->area;
        $forms->number_r = $request->number_r;
        $forms->floor_n = $request->floor_n;
        $forms->title = $request->title;
        $forms->descr = $request->descr;

        if ($forms->save()) {
            if ($request->hasfile('files')) {
                $files = $request->file('files');
                
    
                foreach($files as $file) {
                    $file->name = time() . '-' . rand().$file->getClientOriginalName();
                    // $path = $file->storeAs('image', $name, 'public');
                    $file->id_f=$forms->id_f;
                    $file->path='image/imageAnnonce';  
                    
                    if($file->save())
                    {
                        \Image::make($file)->save('image/imageAnnonce/' .$file->name);
                    }
                    else
                    {
                        return "error";
                    }
                    // $file->save();
                    // File::create([
                    //     'name' => $name,
                    //     'path' => '/storage/'.$path
                    //   ]);
                }
             }
            return back()->with('successInfo', 'Save successfully');
        }
        else{
            return response()->json(['error' => 'Oups vos données sont invalides.'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
