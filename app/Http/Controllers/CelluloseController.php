<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CelluloseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May');
        //$data  = array(1, 2, 3, 4, 5);
        //$dataCV = DB::table('collectes')->where('factory', 'BEAUVAIS')->where('line', 'CV')->orderByRaw('date ASC')->pluck('rate');
        //$monthCV = DB::table('collectes')->where('factory', 'BEAUVAIS')->where('line', 'CV')->orderByRaw('date ASC')->pluck('date');
        $dataCE = DB::table('collectes')->where([['factory', '=', 'BEAUVAIS'],['line', '=', 'CE']])->limit(12)->orderByRaw('date ASC')->pluck('rate');
        $monthCE = DB::table('collectes')->where([['factory', '=', 'BEAUVAIS'],['line', '=', 'CE']])->limit(12)->orderByRaw('date ASC')->pluck('date');
        $dataCV = DB::table('collectes')->where([['factory', '=', 'BEAUVAIS'],['line', '=', 'CV']])->limit(12)->orderByRaw('date ASC')->pluck('rate');
        $monthCV = DB::table('collectes')->where([['factory', '=', 'BEAUVAIS'],['line', '=', 'CV']])->limit(12)->orderByRaw('date ASC')->pluck('date');
        $targetrate = json_encode(array(5,5,5,5,5,5,5,5,5,5,5,5));
        $data_SHL_CE = DB::table('collectes')->where([['factory', '=', 'SHL'],['line', '=', 'CE']])->limit(12)->orderByRaw('date ASC')->pluck('rate');
        $data_SHL_CE_YTD = DB::table('collectes')->where([['factory', '=', 'SHL'],['line', '=', 'CE']])->limit(12)->orderByRaw('date ASC')->pluck('ytd');
        return view('test',compact('monthCE','dataCE','monthCV','dataCV','targetrate','data_SHL_CE','data_SHL_CE_YTD'));
    }
}
