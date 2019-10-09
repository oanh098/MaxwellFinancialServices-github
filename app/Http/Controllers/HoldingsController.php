<?php

namespace App\Http\Controllers;

use App\Holding;
use App\Policies\HoldingPolicy;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HoldingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('holdings.create');
    }

    public function store(){

        $this->authorize('create',Holding::class);

        $data= \request()->validate([
            'date'=>'required',
            'Holding_Name'=>'required',
            'Code_Units' => 'required',
            'Registered_Units' => ['required','numeric'],
            'Available_Units' => ['required','numeric'],
            'Reversed_Units' => ['required','numeric'],
            'Purchase_Price' => ['required','numeric'],
            'Total_Value' => ['required','numeric'],
        ]);
        //auth()->user()->Holdings()->create($data);
       \App\Holding::create($data);
       return redirect('/holdings/'.Auth()->id());
    }
    public function update(\App\Holding $holding){

        $data= \request()->validate([
            'date'=>'required',
            'Holding_Name'=>'required',
            'Code_Units' => 'required',
            'Registered_Units' => ['required','numeric'],
            'Available_Units' => ['required','numeric'],
            'Reversed_Units' => ['required','numeric'],
            'Purchase_Price' => ['required','numeric'],
            'Total_Value' => ['required','numeric'],
        ]);
       $holding->update($data);
       return redirect('/holdings/'.Auth()->id());
    }

    public function index($user)
    {


        $adminList = array('admin@mail.com','dhdsfHddfD','otheridshere');

        $user=User::findOrFail($user);

            if(Auth::user()==$user) {

            if (in_array($user->email, $adminList)) {
                $holdings = \App\Holding::all();
                $users = \App\User::all();


                return view('holdings.holding', [
                    'user' => $user,
                    'holdings' => $holdings,
                    'users' => $users,
                ]);
            } else {
                return view('holdings.holding', [
                    'user' => $user,

                ]);
            }
        }
        //login another acc
        return view('holdings/notification');

    }

    public function show(\App\Holding $holding){

        return view('holdings.show',compact('holding'));

    }
    public function edit(\App\Holding $holding){

        return view('holdings.edit',compact('holding'));

    }
    public function editUserHoldings($user1){

            $user1=User::findOrFail($user1);
           $removeHoldings=$user1->Holdings()->get(); //dd($removoldings);
            $arr=$user1->Holdings()->pluck('holdings.id'); //dd($arr);
           $addHoldings=DB::table('holdings')
               ->wherenotin ('holdings.id',$arr)
               ->get(); //dd($addHoldings);
                        //$holdings=DB::table('holdings')
              //  ->leftJoin('holding_user','holdings.id','=','holding_id')
              //  ->select('holdings.*','user_id', DB::raw('holdings.id==holding_user.user_id as addStatus'))
               // ->where('user_id','=',$user1)
              //  ->get();
            //dd($holdings);
            //dd($user1);
       // $users = DB::select('select * from users where id = ?', array(1));
        //$users = DB::select( DB::raw("select * from users where username = :username"), array('username' => Input::get("username")))
        //$all_items = Item::all()->lists('id');
            //$addStatus=  true;
            //$removeHoldings=$user1->Holdings()->where('user_id ','not like',$user1->id)->get();
           // $addStatus=  false;
            //$holdings=\App\Holding::all();
            //$holdings= \App\Holding::all();

           //dd ($addHoldings);

        return view('holdings.editUserHoldings',[
            'user1' => $user1,
            'removeHoldings'=>$removeHoldings,
            'addHoldings'=>$addHoldings,
            //'addStatus'=>$addStatus,
        ]);


    }


}
