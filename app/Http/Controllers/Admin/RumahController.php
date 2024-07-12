<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternative;
use App\Models\Perbandingan;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RumahController extends Controller
{
    public function tampilform()
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name', 'Harga_Produk')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name', 'Keamanan_Trnsaksi')->get();
        $data_crtsz = SubCriteria::select('nilaik')->where('name', 'Luas')->get();
        $data_crtpr = SubCriteria::select('nilaik')->where('name', 'Harga')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name', 'Proses_Transaksi')->get();
        
        return view('admin/package/rumah/create', [
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            'data_crtsz' => $data_crtsz,
            'data_crtpr' => $data_crtpr,
            'data_crtgr' => $data_crtgr
        ]);
    }

    public function index()
    {
        $data_rumah = Alternative::all();
        return view('admin/package/rumah/index', ['data_rumah' => $data_rumah]);
    }

    public function tampiledittoko($id)
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name', 'Harga_Produk')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name', 'Keamanan_Trnsaksi')->get();
        $data_crtsz = SubCriteria::select('nilaik')->where('name', 'Luas')->get();
        $data_crtpr = SubCriteria::select('nilaik')->where('name', 'Harga')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name', 'Proses_Transaksi')->get();
        $data_rumah = DB::table('alternatives')->where('id', $id)->first();
        
        return view('admin/package/rumah/update', [
            'data_rumah' => $data_rumah,
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            'data_crtsz' => $data_crtsz,
            'data_crtpr' => $data_crtpr,
            'data_crtgr' => $data_crtgr
        ]);
    }

    public function posttoko(Request $request)
    {
        $this->validate($request, [
            'toko_online' => 'required',
            'cbharga_produk' => 'required',
            'cbkeamanan_transaksi' => 'required',
            'kualitas_produk' => 'required',
            'jenis_pengiriman' => 'required',
            'cbproses_transaksi' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image'
        ]);

        $tujuan_upload = 'data_file';

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);

            $kualitas_produkc = $this->getSubCriteriaValue('Kualitas_Produk', $request->kualitas_produk);
            $jenis_pengirimanc = $this->getSubCriteriaValue('Jenis_Pengiriman', $request->jenis_pengiriman);
            $cbproses_transaksic = $this->getSubCriteriaValue('Proses_Transaksi', $request->cbproses_transaksi);

            Alternative::create([
                'toko_online' => $request->toko_online,
                'harga_produk' => $request->cbharga_produk,
                'keamanan_transaksi' => $request->cbkeamanan_transaksi,
                'kualitas_produk' => $request->kualitas_produk,
                'jenis_pengiriman' => $request->jenis_pengiriman,
                'proses_transaksi' => $request->cbproses_transaksi,
                'keterangan' => $request->keterangan,
                'gambar' => $nama_file
            ]);

            Perbandingan::create([
                'toko_online' => $request->toko_online,
                'harga_produk' => $request->cbharga_produk,
                'keamanan_transaksi' => $request->cbkeamanan_transaksi,
                'kualitas_produk' => $kualitas_produkc,
                'jenis_pengiriman' => $jenis_pengirimanc,
                'proses_transaksi' => $cbproses_transaksic
            ]);

            return redirect('/admin/rumah')->with('success', 'Data berhasil ditambahkan');
        }
    }

    public function updatetoko(Request $request)
    {
        $this->validate($request, [
            'toko_online' => 'required',
            'cbharga_produk' => 'required',
            'cbkeamanan_transaksi' => 'required',
            'kualitas_produk' => 'required',
            'jenis_pengiriman' => 'required',
            'cbproses_transaksi' => 'required',
            'keterangan' => 'required',
            'gambar' => 'sometimes|image'
        ]);

        $tujuan_upload = 'data_file';

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);

            DB::table('alternatives')->where('toko_online', $request->toko_online)->update([
                'harga_produk' => $request->cbharga_produk,
                'keamanan_transaksi' => $request->cbkeamanan_transaksi,
                'kualitas_produk' => $request->kualitas_produk,
                'jenis_pengiriman' => $request->jenis_pengiriman,
                'proses_transaksi' => $request->cbproses_transaksi,
                'keterangan' => $request->keterangan,
                'gambar' => $nama_file,
            ]);

            $kualitas_produkc = $this->getSubCriteriaValue('Kualitas_Produk', $request->kualitas_produk);
            $jenis_pengirimanc = $this->getSubCriteriaValue('Jenis_Pengiriman', $request->jenis_pengiriman);
            $cbproses_transaksic = $this->getSubCriteriaValue('Proses_Transaksi', $request->cbproses_transaksi);

            DB::table('perbandingan')->where('toko_online', $request->toko_online)->update([
                'harga_produk' => $request->cbharga_produk,
                'keamanan_transaksi' => $request->cbkeamanan_transaksi,
                'kualitas_produk' => $kualitas_produkc,
                'jenis_pengiriman' => $jenis_pengirimanc,
                'proses_transaksi' => $cbproses_transaksic
            ]);

            return redirect('/admin/rumah')->with('success', 'Data berhasil diubah');
        }
    }

    public function deltoko($toko_online)
    {
        DB::table('perbandingan')->where('toko_online', $toko_online)->delete();
        DB::table('hasils')->where('toko_online', $toko_online)->delete();
        DB::table('alternatives')->where('toko_online', $toko_online)->delete();
        
        return redirect('/admin/rumah')->with('success', 'Data berhasil dihapus');
    }

    private function getSubCriteriaValue($criteriaName, $criteriaValue)
    {
        $subCriteria = SubCriteria::where('name', $criteriaName)->where('nilaik', $criteriaValue)->first();
        return $subCriteria ? $subCriteria->nilaib : null;
    }
}
