<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Importa la clase Storage

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Asignar roles
        $user->roles()->sync($request->roles);

        // Actualizar foto del usuario
        if ($request->hasFile('photo')) {
            // Eliminar la foto anterior si existe
            if ($user->photo) {
                Storage::delete($user->photo);
            }

            // Almacenar la nueva foto en el sistema de archivos
            $photoPath = $request->file('photo')->store('public/profiles');

            // Guardar la ruta de la foto en el modelo User
            $user->photo = $photoPath;
        }

        // Guardar los cambios en el usuario
        $user->save();

        return redirect()->route('admin.users.edit', $user)->with('info', 'Role assigned and photo updated successfully');
    }


    public function destroy(User $user)
    {
        // Eliminar la foto del usuario si existe
        if ($user->photo) {
            Storage::delete($user->photo);
        }

        // Eliminar al usuario
        $user->delete();

        return Redirect::back()->with('success', 'Usuario eliminado correctamente.');
    }


    public function create()
    {
        $roles = Role::all(); // Suponiendo que los roles estén almacenados en un modelo Role
        return view('admin.users.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Ajusta según tus necesidades
        ]);

        // Almacenar imagen de perfil si se proporciona
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/profile_images', $imageName); // Ajusta según tus necesidades
        }

        // Crear el usuario
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            // Ajusta según tus necesidades para el ID y roles
        ]);

        // Asignar roles al usuario
        $user->roles()->sync($request->input('roles'));

        // Asignar imagen de perfil al usuario si se proporciona
        if (isset($imageName)) {
            $user->profile_image = $imageName;
            $user->save();
        }

        return redirect()->route('admin.users.create')->with('success', 'Usuario creado exitosamente.');
    }

    public function perfil()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        // Lógica para mostrar el perfil del usuario
        return view('admin.users.profile', compact('user'));
    }

    public function All_users()
    {
        $usersCount = User::count(); // Obtiene la cantidad total de usuarios
        return view('admin.index', [ 'usersCount' => $usersCount]);
    }
    
}
