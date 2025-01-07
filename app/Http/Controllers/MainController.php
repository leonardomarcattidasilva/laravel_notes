<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Services\Operations;
use App\Http\Requests\NewNoteRequest;
use App\Models\NotesModel;
use Illuminate\Http\RedirectResponse;

class MainController extends Controller
{

   private function getUserData(): array
   {
      $id = \session('user.id');
      $user = User::find($id)->toArray();
      $notes =  User::find($id)->notes()->orderBy('id', 'desc')->get()->toArray();
      return ['user' => $user, 'notes' => $notes];
   }

   public function index()
   {
      $userData = $this->getUserData();
      return \view('home', ['user' => $userData['user'], 'notes' => $userData['notes']]);
   }

   public function newNote(): View
   {
      $userData = $this->getUserData();
      return \view('newNote', ['user' => $userData['user']]);
   }

   public function editNote(Request $r): View|RedirectResponse
   {
      $id = Operations::decriptID($r->id);
      if ($id) {
         $note = NotesModel::find($id);
         $userData = $this->getUserData();
         return \view('editNote', ['note' => $note, 'user' => $userData['user'], 'id' => $r->id]);
      }
      return \redirect()->route('home');
   }

   public function confirmDeleteNote(Request $r): View|RedirectResponse
   {
      $id = Operations::decriptID($r->id);
      if ($id) {
         $note = NotesModel::find($id);
         $userData = $this->getUserData();
         return view('confirmDelete', ['user' => $userData['user'], 'note' => $note]);
      }
      return \redirect()->route('home');
   }

   public function newNoteSubmit(NewNoteRequest $request): RedirectResponse
   {
      $request->validated();
      $data = $request->all();
      $data['user_id'] = \session('user.id');
      $model = new NotesModel();
      $model::create($data);
      return \redirect()->route('home');
   }

   public function editNoteSubmit(NewNoteRequest $request): RedirectResponse
   {
      $request->validated();
      $data = $request->all();
      $noteID = Operations::decriptID($data['id']);
      NotesModel::find($noteID)->update(['title' => $data['title'], 'text' => $data['text']]);
      return \redirect()->route('home');
   }


   public function deleteNote(Request $request)
   {
      $id = Operations::decriptID($request->id);
      if ($id) {
         NotesModel::find($id)->delete();
         return \redirect()->route('home');
      }
   }
}
