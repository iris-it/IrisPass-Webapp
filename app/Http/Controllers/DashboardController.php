<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\OrganizationRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $organizationRepository;
    private $organization;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(OrganizationRepositoryInterface $organizationRepository)
    {
        $this->middleware('auth');

        $this->organizationRepository = $organizationRepository;

        $this->organization = Auth::user()->organization()->first();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization = $this->organization;
        $groups = null;
        $users = null;

        if ($organization != null) {
            $groups = $this->organization->groups()->get();
            $users = $this->organization->users()->get();
        }

        return view('pages.users.dashboard')->with(compact('organization', 'groups', 'users'));
    }
}
