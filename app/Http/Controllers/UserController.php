<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6'],
            'is_admin'       => ['nullable', 'boolean'],
            'is_interviewer' => ['nullable', 'boolean'],
            'is_timtes'      => ['nullable', 'boolean'],
        ]);
        
        $isAdmin       = $request->has('is_admin') ? 1 : 0;
        $isInterviewer = $request->has('is_interviewer') ? 1 : 0;
        $isTimtes      = $request->has('is_timtes') ? 1 : 0;

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => $isAdmin,
            'is_interviewer' => $isInterviewer,
            'is_timtes' => $isTimtes,
        ]);
        Alert::success('Success', 'Pengguna berhasil ditambahkan')->autoclose(2000)->toToast();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $request->is_admin ? 1 : 0,
            'is_interviewer' => $request->is_interviewer ? 1 : 0,
            'is_timtes' => $request->is_timtes ? 1 : 0,
        ]);

        if ($request->password) {
            $user->password = Hash::make($request->password);
            $user->save();
        }
        Alert::success('Success', 'Pengguna berhasil diubah')->autoclose(2000)->toToast();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Success', 'Pengguna berhasil dihapus')->autoclose(2000)->toToast();
        return redirect()->route('user.index');
    }

    public function showUpdatePasswordForm($id)
    {
        $users = User::findOrFail($id);
        return view('user.updatePassword', compact('users'));
    }
    
    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->password = Hash::make($request->new_password);
        $user->save();
        Alert::success('Success', 'Password berhasil diubah')->autoclose(2000)->toToast();
        return redirect()->route('user.index');
    }

    public function import(Request $request)
    {
        $file = $request->file('excel_file');
        Excel::import(new UserImport, $file);
        Alert::success('Success', 'Data telah berhasil diimpor')->autoclose(2000)->toToast();
        return redirect()->route('user.index');
    }

}
