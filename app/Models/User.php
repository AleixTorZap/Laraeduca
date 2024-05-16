<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage; // Importa la clase Storage aquí

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // RELACION 1:M
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Método para obtener la imagen del usuario para AdminLTE
    public function adminlte_image()
    {
        if ($this->photo) {
            return Storage::url($this->photo);
        } else {
            return asset('assets/images/default-profile-image.jpg');
        }
    }
    public function adminlte_desc()
    {
        // Obtener los nombres de los roles del usuario
        $roles = $this->getRoleNames()->toArray();

        // Si el usuario tiene roles asignados
        if (!empty($roles)) {
            // Devolver los roles como una cadena separada por comas
            return implode(', ', $roles);
        } else {
            // Si el usuario no tiene roles asignados, devolver un mensaje predeterminado o lo que prefieras
            return 'No roles assigned';
        }
    }
    // Dentro de la clase User
    public function adminlte_profile_url()
    {
        // Suponiendo que tienes una columna llamada 'username' en tu tabla de usuarios
        return route('perfil', ['username' => $this->username]);
    }
    public function Total_Usuarios()
{
    $usersCount = User::count(); // Obtiene la cantidad total de usuarios
    return view('admin.index', compact('usersCount'));
}
}
