<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('layouts.auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function loginproses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            Alert::error('error', 'Login failed')->autoclose(2000)->toToast();
            return redirect(route('login'));
        }
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            Alert::success('success', 'Login successful')->autoclose(2000)->toToast();
            return redirect(route('dashboard'));
        } else {
            Alert::error('error', 'Invalid credentials')->autoclose(2000)->toToast();
            return redirect(route('login'));
        }
    }

    // public function loginproses(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
    //         Alert::success('Success', 'Anda berhasil login')->autoclose(2000)->toToast();
    //         return redirect()->route('dashboard');
    //     } else {
    //         Alert::error('Error', 'Email atau Password Salah')->autoclose(2000)->toToast();
    //         return redirect()->route('login');
    //     }
    // }


    // public function registerproses(Request $request)
    // {

    //     $data = $request->validate([
    //         'name' => 'required',
    //         'no_unik' => 'required',
    //         'email' => 'required|email',
    //         'prodi' => 'required',
    //         'nohp' => 'required',
    //         'password' => 'required',
    //     ]);
    //     $user = User::create([
    //         'name' => $data['name'],
    //         'no_unik' => $data['no_unik'],
    //         'email' => $data['email'],
    //         'prodi' => $data['prodi'],
    //         'nohp' => $data['nohp'],
    //         'password' => Hash::make($data['password']),
    //         'remember_token' => Str::random(60),
    //         'is_admin' => false,
    //         'is_dekan' => false,
    //         'is_wakil_dekan_I' => false,
    //         'is_wakil_dekan_II' => false,
    //         'is_dosen' => false,
    //         'is_mahasiswa' => true,
    //     ]);

    //     Mahasiswa::create([
    //         'user_id' => $user->id,
    //         'no_unik' => $user->no_unik,
    //         'name' => $user->name,
    //         'email' => $user->email,
    //         'nohp' => $user->nohp,
    //         'prodi' => $user->prodi,
    //     ]);

    //     Alert::success('success', 'register successfully')->autoclose(2000)->toToast();
    //     return redirect(route('login'));
    // }

    public function passwordemail(Request $request)
    {
        // Validate that the email is required and in the correct format
        $request->validate(['email' => 'required|email']);

        // Attempt to send the password reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Check if the email was sent successfully
        if ($status === Password::RESET_LINK_SENT) {
            // Show success message if email was sent
            Alert::success('Success', 'Lupa Password Berhasil di Kirim ke Email')->autoclose(3000)->toToast();
        } else {
            // Show error message if email was not sent (e.g., email doesn't exist)
            Alert::error('Error', 'Email Tidak Terdaftar')->autoclose(3000)->toToast();
        }

        // Redirect back to the previous page
        return back();
    }

    public function showUpdatePasswordForm($id)
    {
        $user = User::findOrFail($id);
        return view('auth.reset_password', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        // Validasi password
        $request->validate([
            'password' => 'required|string|min:8|confirmed', // Pastikan password minimal 8 karakter dan terkonfirmasi
        ]);

        $user = User::findOrFail($id);

        // Hash dan update password
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::success('Berhasil', 'Password berhasil diperbarui')->autoclose(2000)->toToast();

        return redirect()->route('user.index');
    }

}
