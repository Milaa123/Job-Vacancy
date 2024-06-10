<?php

namespace App\Http\Controllers\Company;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $company = Company::where('id', $user->id)->first();
        $data = ([
            "title" => "Profile Perusahaan",
            "company" => $company
        ]);
        //dd($company);
        if (!$company) {
            return view('company.profil-Company.form');
        }
        return view('company.profil-Company.index', $data);
    }

    public function store(Request $request)
    {

    }
}
