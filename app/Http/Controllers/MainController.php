<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Services\Operations;
use App\Http\Requests\NewNoteRequest;

class MainController extends Controller
{

    private function getUserData() : array
    {
        $id = \session('user.id');
        $user = User::find($id)->toArray();
        $notes =  User::find($id)->notes()->get()->toArray();
        return ['user' => $user, 'notes' => $notes];
    }

    public function index()
    {
        $userData = $this->getUserData();
        return \view('home', ['user' => $userData['user'], 'notes' => $userData['notes']]);
    }

    public function newNote() : View
    {
        $userData = $this->getUserData();
        return \view('newNote', ['user' => $userData['user']]);
    }

    public function editNote(Request $r) : string|Redirect
    {
        $resultID = Operations::decriptID($r->id);
        \dd($resultID);
        return 'Editing ' . $resultID;
    }

    public function deleteNote(Request $r) : string|Redirect
    {
        $resultID = Operations::decriptID($r->id);
        return 'Deleting ' . $resultID;
    }

    public function newNoteSubmit(NewNoteRequest $request)
    {
        // $request->validated();
        \dd($request->all());
    }


}
