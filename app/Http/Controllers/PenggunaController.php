<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;
use App\Models\DataPemda;
use App\Models\Pengguna;
use App\Models\User;
use App\Repositories\PenggunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Flash;
use Response;

class PenggunaController extends AppBaseController
{
    /** @var PenggunaRepository $penggunaRepository*/
    private $penggunaRepository;

    public function __construct(PenggunaRepository $penggunaRepo)
    {
        $this->penggunaRepository = $penggunaRepo;
    }

    /**
     * Display a listing of the Pengguna.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $penggunas = $this->penggunaRepository;

        if (Auth()->user()->role == 'Admin') {
            $penggunas = Pengguna::paginate(10);
        } elseif (Auth()->user()->role == 'Perwakilan BPKP') {
            $penggunas = Pengguna::where(['kd_pwk' => Auth()->user()->kd_pwk])->paginate(10);
        } else {
            $penggunas = Pengguna::where(['id' => Auth()->user()->id])->paginate(10);
        }

        return view('penggunas.index')
            ->with('penggunas', $penggunas);
    }

    /**
     * Show the form for creating a new Pengguna.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::user()->role == 'Admin') {
            $pemda = DataPemda::all('nm_pemda');
            $kd_pwk = User::get('kd_pwk');
        } else {
            $pemda = DataPemda::where(['kd_pwk' => Auth::user()->kd_pwk])->get('nm_pemda');
            $kd_pwk = User::get('kd_pwk');
        }
        
        return view('penggunas.create')->with(['pemda' => $pemda , 'kd_pwk' => $kd_pwk]);
    }

    /**
     * Store a newly created Pengguna in storage.
     *
     * @param CreatePenggunaRequest $request
     *
     * @return Response
     */
    public function store(CreatePenggunaRequest $request)
    {
        $pengguna = $this->penggunaRepository->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            'kd_pwk' => $request['kd_pwk'] ?? Auth::user()->kd_pwk,
            'nm_pemda' => $request['nm_pemda'],
        ]);

        Flash::success('Pengguna saved successfully.');

        return redirect(route('penggunas.index'));
    }

    /**
     * Display the specified Pengguna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        return view('penggunas.show')->with('pengguna', $pengguna);
    }

    /**
     * Show the form for editing the specified Pengguna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        if ($pengguna->role == 'Admin') {
            $pemda = DataPemda::all('nm_pemda');
            $kd_pwk = User::groupBy('kd_pwk')->get('kd_pwk');
        } else {
            $pemda = DataPemda::where(['kd_pwk' => $pengguna->kd_pwk])->get('nm_pemda');
            $kd_pwk = User::groupBy('kd_pwk')->get('kd_pwk');
        }

        return view('penggunas.edit')->with(['pengguna' => $pengguna, 'pemda' => $pemda, 'kd_pwk' => $kd_pwk]);
    }

    /**
     * Update the specified Pengguna in storage.
     *
     * @param int $id
     * @param UpdatePenggunaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePenggunaRequest $request)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        $pengguna = $this->penggunaRepository->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            'kd_pwk' => $request['kd_pwk'] ?? Auth::user()->kd_pwk,
            'nm_pemda' => $request['nm_pemda'],
        ], $id);

        Flash::success('Pengguna updated successfully.');

        return redirect(route('penggunas.index'));
    }

    /**
     * Remove the specified Pengguna from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengguna = $this->penggunaRepository->find($id);

        if (empty($pengguna)) {
            Flash::error('Pengguna not found');

            return redirect(route('penggunas.index'));
        }

        $this->penggunaRepository->delete($id);

        Flash::success('Pengguna deleted successfully.');

        return redirect(route('penggunas.index'));
    }
}
