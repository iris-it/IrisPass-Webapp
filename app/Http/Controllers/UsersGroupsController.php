<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\UserGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Laracasts\Flash\Flash;

class UsersGroupsController extends Controller
{

    private $organization;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('hasOrganization');

        $this->organization = Auth::user()->organization()->first();

    }

    /**
     * Add an user to a specified group
     * @param $userId
     * @param $groupId
     * @return \Illuminate\Http\Response
     */
    public function addUserToGroup($groupId, $userId)
    {

        $group = UserGroup::find($groupId);
        $group->users()->attach($userId);

        Flash::success(Lang::get('users_groups.update-success'));

        return redirect(action('UsersManagementController@index').'#orgagroupsaccess');

    }

    /**
     * Remove user from a specified group
     *
     * @param $userId
     * @param $groupId
     * @return \Illuminate\Http\Response
     */
    public function removeUserFromGroup($groupId, $userId)
    {
        $group = UserGroup::find($groupId);
        $group->users()->detach($userId);

        Flash::success(Lang::get('users_groups.update-success'));

        return redirect(action('UsersManagementController@index').'#orgagroupsaccess');

    }


}
