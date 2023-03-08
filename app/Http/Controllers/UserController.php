<?php

namespace App\Http\Controllers;

use App\Events\UserRegisteredEvent;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('q');

        $users = User::query()
            ->where('name', 'like', '%' . $search . '%')
            ->paginate(5);

        return view('users.index', [
            'users' => $users,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }


    public function store(StoreRequest $request)
    {
        $user = new User();
        $user->fill($request->except(['_token', 'password']));
        $user->fill([
            'password' => Hash::make($request->get('password'))
        ]);
        $user->save();

        return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', [
            'user' => $user,
        ]);
    }


    public function update(UpdateRequest $request, User $user)
    {
        $user->update($request->except([
                '_token',
                '_method',
            ])
        );

        return redirect()->route('users.index');
    }


    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        return redirect()->route('users.index');
    }

}
