<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
class UserController extends Controller
{

    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }
    public function create(){
        $kelasModel = new Kelas();
        $Kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $Kelas
        ];

        return view('create_user', $data);
    }

    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
          

        return redirect()->to('/user');
    }
    // Form edit
    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $kelas = Kelas::all();
        return view('edit_user', ['title' => 'Edit User', 'user' => $user, 'kelas' => $kelas]);
    }

    // Update user
   public function update(Request $request, $id)
{
    // validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|string|max:20|unique:user,nim,' . $id, // gunakan nama tabel 'user'
        'kelas_id' => 'required|integer',
    ]);

    // cari data user berdasarkan id
    $user = UserModel::findOrFail($id);

    // update data user
    $user->update([
        'nama' => $request->input('nama'),
        'nim' => $request->input('nim'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    // redirect kembali ke halaman daftar user
    return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui!');
}

    // Hapus user
    public function destroy($id)
{
    $user = UserModel::findOrFail($id);
    $user->delete();

    return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus!');
}

    
}