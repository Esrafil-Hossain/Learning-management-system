<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
   public function usersingup(Request $request)
   {
      $collection = collect([
         'name' => $request->name, 'email' => $request->email, 'phone' => $request->phone,
         'password' => ($request->password), 'role_id' => 3
      ]);
      User::create($collection->all());
      return redirect()->back();
   }
   public function logout(){
      Auth::logout();
      return redirect('/');
  }
}
