<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $alumni = Alumni::latest()->paginate(10);

        //render view with posts
        return view('alumni.index', compact('alumni'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('alumni.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //create post
        $data = Alumni::create([
            'nama'     => $request->nama,
            'th_lulus'   => $request->th_lulus,
            'jurusan'   => $request->jurusan,
            'alamat'   => $request->alamat,
            'no_hp'   => $request->no_hp,
        ]);
        // dd($data);
        $data->save();

        //redirect to index
        return redirect()->route('daftaralumni')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit($id)
    {
        $data = Alumni::find($id);
        return view('alumni.edit', compact('data'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, $id)
    {
        $data = Alumni::findOrFail($id);
        $data->nama = $request->nama;
        $data->th_lulus = $request->th_lulus;
        $data->jurusan = $request->jurusan;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        // dd($data);
        $data->save();

        //redirect to index
        return redirect()->route('daftaralumni')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {


        $data = Alumni::find($id);
        $data->delete();


        return redirect()->route('daftaralumni')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
