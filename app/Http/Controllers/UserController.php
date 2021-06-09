<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsersByName(Request $request) {
        $userId = auth()->user()->id;
        $searchName = '%' . $request->name . '%';

        $friendQuery = DB::table('friend_user')
            ->select('*')
            ->where('user_id', '=', $userId);

        return DB::table('users')
            ->join('friend_request as fr', 'fr.friend_id', '=', 'users.id', 'left')
            ->join('friend_request as f', 'f.user_id', '=', 'users.id', 'left')
            ->joinSub($friendQuery, 'fu', 'fu.friend_id', '=', 'users.id', 'left')
            ->select(DB::raw("users.id,
               users.name, users.profile_photo_path,
               CASE
                    WHEN fr.user_id = {$userId} THEN 2
                    WHEN f.friend_id = {$userId} THEN 3
                    WHEN fu.user_id = {$userId} THEN 1
                    ELSE 4
                END AS relationship"))
            ->where('users.id', '!=', $userId,)
            ->where('users.name', 'like', $searchName,)
            ->orderBy('relationship')
            ->orderBy('users.id')
            ->distinct()
            ->get();
    }

    public function getUserInfo() {
        return auth()->user()->id;
    }

    public function getFriendRequests() {
        return auth()->user()->friendRequests()->get();
    }

    public function getFriendRequestsOf() {
        return auth()->user()->friendRequestsOf()->get();
    }

    public function addFriendRequest($id) {
        $userFriends = auth()->user()->friendRequests();
        $userFriends->attach([$id]);
        return 'Request Added';
    }

    public function removeFriendRequest($id) {
        $userFriends = auth()->user()->friendRequests();
        $userFriends->detach([$id]);
        return 'Request Removed';
    }

    public function removeFriendRequestOf($id) {
        $userFriendsOf = auth()->user()->friendRequestsOf();
        $userFriendsOf->detach([$id]);
        return 'Request Removed';
    }

    public function acceptFriendRequest($id) {
        $userFriendsOf = auth()->user()->friendRequestsOf();
        $userFriendsOf->detach([$id]);
        $this->toggleFriend($id);
        return 'Request Accepted & Friend Added';
    }

    public function getFriends() {
        return auth()->user()->friends()->get();
    }

    public function toggleFriend($id) {
        $userFriends = auth()->user()->friends();
        $userFriendsOf = auth()->user()->friendsOf();

        if($userFriends->find($id)) {
            $userFriends->detach([$id]);
            $userFriendsOf->detach([$id]);
            return 'User Removed';
        }
        $userFriends->attach([$id]);
        $userFriendsOf->attach([$id]);
        return 'User Added';
    }
}
