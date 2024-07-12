<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Perbandingan;
use App\Models\Hasil;
use App\Models\SubCriteria;
use Illuminate\Support\Facades\DB;

class AhpController extends Controller
{

    public function indexbobot()
    {
        DB::table('hasils')->delete();
        return view('admin/package/ahp/bobot');
    }

    public function indexperhitungan()
    {
        return view('admin/package/ahp/perhitungan');
    }

    public function indexhasil()
    {
        return view('admin/package/ahp/hasil');
    }

    public function tampilalternative()
    {
        $data_rumah = Alternative::get();
        $data_crt = SubCriteria::select('name')->distinct()->get();
        return view('admin/package/alternative/index', [
            'data_rumah' => $data_rumah,
            'data_crt' => $data_crt
        ]);
    }

    public function postbobot(Request $request)
    {
        // proses matriks
        $h = 1;
        $g = 1;
        $s = 1;
        $k = 1;
        $l = 1;
        $hg = $request->cbhg;
        $hs = $request->cbhs;
        $hk = $request->cbhk;
        $hl = $request->cbhl;
        $gh = $request->cbgh;
        $gs = $request->cbgs;
        $gk = $request->cbgk;
        $gl = $request->cbgl;
        $sh = $request->cbsh;
        $sg = $request->cbsg;
        $sk = $request->cbsk;
        $sl = $request->cbsl;
        $kh = $request->cbkh;
        $kg = $request->cbkg;
        $ks = $request->cbks;
        $kl = $request->cbkl;
        $lh = $request->cblh;
        $lg = $request->cblg;
        $lk = $request->cblk;
        $ls = $request->cbls;

        // bentuk kolom kiri -> kanan
        (float) $k1 = $l;
        (float) $k2 = $kl / $lk;
        (float) $k3 = $sl / $ls;
        (float) $k4 = $hl / $lh;
        (float) $k5 = $gl / $lg;
        (float) $k6 = $lk / $kl;
        (float) $k7 = $k;
        (float) $k8 = $sk / $ks;
        (float) $k9 = $hk / $kh;
        (float) $k10 = $gk / $kg;
        (float) $k11 = $ls / $sl;
        (float) $k12 = $ks / $sk;
        (float) $k13 = $s;
        (float) $k14 = $hs / $sh;
        (float) $k15 = $gs / $sg;
        (float) $k16 = $lh / $hl;
        (float) $k17 = $kh / $hk;
        (float) $k18 = $sh / $hs;
        (float) $k19 = $h;
        (float) $k20 = $gh / $hg;
        (float) $k21 = $lg / $gl;
        (float) $k22 = $kg / $gk;
        (float) $k23 = $sg / $gs;
        (float) $k24 = $hg / $gh;
        (float) $k25 = $g;
        (float) $k26 = $k1 + $k6 + $k11 + $k16 + $k21;
        (float) $k27 = $k2 + $k7 + $k12 + $k17 + $k22;
        (float) $k28 = $k3 + $k8 + $k13 + $k18 + $k23;
        (float) $k29 = $k4 + $k9 + $k14 + $k19 + $k24;
        (float) $k30 = $k5 + $k10 + $k15 + $k20 + $k25;

        return view('admin/package/ahp/index', [
            'k1' => $k1,
            'k2' => $k2,
            'k3' => $k3,
            'k4' => $k4,
            'k5' => $k5,
            'k6' => $k6,
            'k7' => $k7,
            'k8' => $k8,
            'k9' => $k9,
            'k10' => $k10,
            'k11' => $k11,
            'k12' => $k12,
            'k13' => $k13,
            'k14' => $k14,
            'k15' => $k15,
            'k16' => $k16,
            'k17' => $k17,
            'k18' => $k18,
            'k19' => $k19,
            'k20' => $k20,
            'k21' => $k21,
            'k22' => $k22,
            'k23' => $k23,
            'k24' => $k24,
            'k25' => $k25,
            'k26' => $k26,
            'k27' => $k27,
            'k28' => $k28,
            'k29' => $k29,
            'k30' => $k30
        ]);
    }

    public function postmatriks(Request $request)
    {
        $t1 = $request->k1;
        $t2 = $request->k2;
        $t3 = $request->k3;
        $t4 = $request->k4;
        $t5 = $request->k5;
        $t6 = $request->k6;
        $t7 = $request->k7;
        $t8 = $request->k8;
        $t9 = $request->k9;
        $t10 = $request->k10;
        $t11 = $request->k11;
        $t12 = $request->k12;
        $t13 = $request->k13;
        $t14 = $request->k14;
        $t15 = $request->k15;
        $t16 = $request->k16;
        $t17 = $request->k17;
        $t18 = $request->k18;
        $t19 = $request->k19;
        $t20 = $request->k20;
        $t21 = $request->k21;
        $t22 = $request->k22;
        $t23 = $request->k23;
        $t24 = $request->k24;
        $t25 = $request->k25;
        $t26 = $request->k26;
        $t27 = $request->k27;
        $t28 = $request->k28;
        $t29 = $request->k29;
        $t30 = $request->k30;

        // Data Buat kolom
        (float) $k1 = $t1 / $t26;
        (float) $k2 = $t2 / $t27;
        (float) $k3 = $t3 / $t28;
        (float) $k4 = $t4 / $t29;
        (float) $k5 = $t5 / $t30;
        (float) $k6 = $t6 / $t26;
        (float) $k7 = $t7 / $t27;
        (float) $k8 = $t8 / $t28;
        (float) $k9 = $t9 / $t29;
        (float) $k10 = $t10 / $t30;
        (float) $k11 = $t11 / $t26;
        (float) $k12 = $t12 / $t27;
        (float) $k13 = $t13 / $t28;
        (float) $k14 = $t14 / $t29;
        (float) $k15 = $t15 / $t30;
        (float) $k16 = $t16 / $t26;
        (float) $k17 = $t17 / $t27;
        (float) $k18 = $t18 / $t28;
        (float) $k19 = $t19 / $t29;
        (float) $k20 = $t20 / $t30;
        (float) $k21 = $t21 / $t26;
        (float) $k22 = $t22 / $t27;
        (float) $k23 = $t23 / $t28;
        (float) $k24 = $t24 / $t29;
        (float) $k25 = $t25 / $t30;
        $k26 = $k1 + $k6 + $k11 + $k16 + $k21;
        $k27 = $k2 + $k7 + $k12 + $k17 + $k22;
        $k28 = $k3 + $k8 + $k13 + $k18 + $k23;
        $k29 = $k4 + $k9 + $k14 + $k19 + $k24;
        $k30 = $k5 + $k10 + $k15 + $k20 + $k25;

        return view('admin/package/ahp/index2', [
            'k1' => $k1,
            'k2' => $k2,
            'k3' => $k3,
            'k4' => $k4,
            'k5' => $k5,
            'k6' => $k6,
            'k7' => $k7,
            'k8' => $k8,
            'k9' => $k9,
            'k10' => $k10,
            'k11' => $k11,
            'k12' => $k12,
            'k13' => $k13,
            'k14' => $k14,
            'k15' => $k15,
            'k16' => $k16,
            'k17' => $k17,
            'k18' => $k18,
            'k19' => $k19,
            'k20' => $k20,
            'k21' => $k21,
            'k22' => $k22,
            'k23' => $k23,
            'k24' => $k24,
            'k25' => $k25,
            'k26' => round($k26),
            'k27' => round($k27),
            'k28' => round($k28),
            'k29' => round($k29),
            'k30' => round($k30)
        ]);
    }

    public function postmatriks2(Request $request)
    {
        $t1 = $request->k1;
        $t2 = $request->k2;
        $t3 = $request->k3;
        $t4 = $request->k4;
        $t5 = $request->k5;
        $t6 = $request->k6;
        $t7 = $request->k7;
        $t8 = $request->k8;
        $t9 = $request->k9;
        $t10 = $request->k10;
        $t11 = $request->k11;
        $t12 = $request->k12;
        $t13 = $request->k13;
        $t14 = $request->k14;
        $t15 = $request->k15;
        $t16 = $request->k16;
        $t17 = $request->k17;
        $t18 = $request->k18;
        $t19 = $request->k19;
        $t20 = $request->k20;
        $t21 = $request->k21;
        $t22 = $request->k22;
        $t23 = $request->k23;
        $t24 = $request->k24;
        $t25 = $request->k25;
        $t26 = $request->k26;
        $t27 = $request->k27;
        $t28 = $request->k28;
        $t29 = $request->k29;
        $t30 = $request->k30;

        // Data Buat kolom
        (float) $k1 = $t1;
        (float) $k2 = $t2;
        (float) $k3 = $t3;
        (float) $k4 = $t4;
        (float) $k5 = $t5;
        (float) $k6 = $t6;
        (float) $k7 = $t7;
        (float) $k8 = $t8;
        (float) $k9 = $t9;
        (float) $k10 = $t10;
        (float) $k11 = $t11;
        (float) $k12 = $t12;
        (float) $k13 = $t13;
        (float) $k14 = $t14;
        (float) $k15 = $t15;
        (float) $k16 = $t16;
        (float) $k17 = $t17;
        (float) $k18 = $t18;
        (float) $k19 = $t19;
        (float) $k20 = $t20;
        (float) $k21 = $t21;
        (float) $k22 = $t22;
        (float) $k23 = $t23;
        (float) $k24 = $t24;
        (float) $k25 = $t25;
        $k26 = $t26;
        $k27 = $t27;
        $k28 = $t28;
        $k29 = $t29;
        $k30 = $t30;
        $k31 = ($k1 + $k2 + $k3 + $k4 + $k5) / 5;
        $k32 = ($k6 + $k7 + $k8 + $k9 + $k10) / 5;
        $k33 = ($k11 + $k12 + $k13 + $k14 + $k15) / 5;
        $k34 = ($k16 + $k17 + $k18 + $k19 + $k20) / 5;
        $k35 = ($k21 + $k22 + $k23 + $k24 + $k25) / 5;

        // Disini ngitung matriks nya....
        $h1 = ($k1*$k31)+($k2*$k32)+($k3*$k33)+($k4*$k34)+($k5*$k35);
        $h2 = ($k6*$k31)+($k7*$k32)+($k8*$k33)+($k9*$k34)+($k10*$k35);
        $h3 = ($k11*$k31)+($k12*$k32)+($k13*$k33)+($k14*$k34)+($k15*$k35);
        $h4 = ($k16*$k31)+($k17*$k32)+($k18*$k33)+($k19*$k34)+($k20*$k35);
        $h5 = ($k21*$k31)+($k22*$k32)+($k23*$k33)+($k24*$k34)+($k25*$k35);

        // // Menghitung lambda max dulu ges
        $lambdamax = ($h1+$h2+$h3+$h4+$h5)/5;

        // // Menghitung CI
        $ci = ($lambdamax-5)/(5-1);

        // // Menghitung CR
        $cr = $ci/5;

        return view('admin/package/ahp/index3', [
            'k1' => $k1,
            'k2' => $k2,
            'k3' => $k3,
            'k4' => $k4,
            'k5' => $k5,
            'k6' => $k6,
            'k7' => $k7,
            'k8' => $k8,
            'k9' => $k9,
            'k10' => $k10,
            'k11' => $k11,
            'k12' => $k12,
            'k13' => $k13,
            'k14' => $k14,
            'k15' => $k15,
            'k16' => $k16,
            'k17' => $k17,
            'k18' => $k18,
            'k19' => $k19,
            'k20' => $k20,
            'k21' => $k21,
            'k22' => $k22,
            'k23' => $k23,
            'k24' => $k24,
            'k25' => $k25,
            'k26' => round($k26),
            'k27' => round($k27),
            'k28' => round($k28),
            'k29' => round($k29),
            'k30' => round($k30),
            'k31' => $k31,
            'k32' => $k32,
            'k33' => $k33,
            'k34' => $k34,
            'k35' => $k35
        ]);
    }

    public function cekkonsistensi(Request $request)
    {
        $t1 = $request->k1;
        $t2 = $request->k2;
        $t3 = $request->k3;
        $t4 = $request->k4;
        $t5 = $request->k5;
        $t6 = $request->k6;
        $t7 = $request->k7;
        $t8 = $request->k8;
        $t9 = $request->k9;
        $t10 = $request->k10;
        $t11 = $request->k11;
        $t12 = $request->k12;
        $t13 = $request->k13;
        $t14 = $request->k14;
        $t15 = $request->k15;
        $t16 = $request->k16;
        $t17 = $request->k17;
        $t18 = $request->k18;
        $t19 = $request->k19;
        $t20 = $request->k20;
        $t21 = $request->k21;
        $t22 = $request->k22;
        $t23 = $request->k23;
        $t24 = $request->k24;
        $t25 = $request->k25;
        $t26 = $request->k26;
        $t27 = $request->k27;
        $t28 = $request->k28;
        $t29 = $request->k29;
        $t30 = $request->k30;

        // Data Buat kolom
        (float) $k1 = $t1;
        (float) $k2 = $t2;
        (float) $k3 = $t3;
        (float) $k4 = $t4;
        (float) $k5 = $t5;
        (float) $k6 = $t6;
        (float) $k7 = $t7;
        (float) $k8 = $t8;
        (float) $k9 = $t9;
        (float) $k10 = $t10;
        (float) $k11 = $t11;
        (float) $k12 = $t12;
        (float) $k13 = $t13;
        (float) $k14 = $t14;
        (float) $k15 = $t15;
        (float) $k16 = $t16;
        (float) $k17 = $t17;
        (float) $k18 = $t18;
        (float) $k19 = $t19;
        (float) $k20 = $t20;
        (float) $k21 = $t21;
        (float) $k22 = $t22;
        (float) $k23 = $t23;
        (float) $k24 = $t24;
        (float) $k25 = $t25;
        $k26 = $t26;
        $k27 = $t27;
        $k28 = $t28;
        $k29 = $t29;
        $k30 = $t30;
        $k31 = ($k1 + $k2 + $k3 + $k4 + $k5) / 5;
        $k32 = ($k6 + $k7 + $k8 + $k9 + $k10) / 5;
        $k33 = ($k11 + $k12 + $k13 + $k14 + $k15) / 5;
        $k34 = ($k16 + $k17 + $k18 + $k19 + $k20) / 5;
        $k35 = ($k21 + $k22 + $k23 + $k24 + $k25) / 5;

        // Disini ngitung matriks nya....
        $h1 = ($k1 * $k31) + ($k2 * $k32) + ($k3 * $k33) + ($k4 * $k34) + ($k5 * $k35);
        $h2 = ($k6 * $k31) + ($k7 * $k32) + ($k8 * $k33) + ($k9 * $k34) + ($k10 * $k35);
        $h3 = ($k11 * $k31) + ($k12 * $k32) + ($k13 * $k33) + ($k14 * $k34) + ($k15 * $k35);
        $h4 = ($k16 * $k31) + ($k17 * $k32) + ($k18 * $k33) + ($k19 * $k34) + ($k20 * $k35);
        $h5 = ($k21 * $k31) + ($k22 * $k32) + ($k23 * $k33) + ($k24 * $k34) + ($k25 * $k35);

        // Menghitung lambda max dulu ges
        $lambdamax = ($h1 + $h2 + $h3 + $h4 + $h5) / 5;

        // Menghitung CI
        $ci = ($lambdamax - 5) / (5 - 1);

        // Menghitung CR
        $cr = $ci / 5;

        return view('admin/package/ahp/index4', [
            'k1' => $k1,
            'k2' => $k2,
            'k3' => $k3,
            'k4' => $k4,
            'k5' => $k5,
            'k6' => $k6,
            'k7' => $k7,
            'k8' => $k8,
            'k9' => $k9,
            'k10' => $k10,
            'k11' => $k11,
            'k12' => $k12,
            'k13' => $k13,
            'k14' => $k14,
            'k15' => $k15,
            'k16' => $k16,
            'k17' => $k17,
            'k18' => $k18,
            'k19' => $k19,
            'k20' => $k20,
            'k21' => $k21,
            'k22' => $k22,
            'k23' => $k23,
            'k24' => $k24,
            'k25' => $k25,
            'k26' => round($k26),
            'k27' => round($k27),
            'k28' => round($k28),
            'k29' => round($k29),
            'k30' => round($k30),
            // Ini yang di ambil
            'k31' => $k31,
            'k32' => $k32,
            'k33' => $k33,
            'k34' => $k34,
            'k35' => $k35,
            'cr' => $cr
        ]);
    }

    // public function hasilrekomendasi(Request $request){
    public function posthasilrekomendasi(Request $request)
    {
        // Select data dulu
        $jenis_pengiriman = Perbandingan::select('jenis_pengiriman')->orderBY('toko_online', 'asc')->get();
        $harga_produk = Perbandingan::select('harga_produk')->orderBY('toko_online', 'asc')->get();
        $kualitas_produk = Perbandingan::select('kualitas_produk')->orderBY('toko_online', 'asc')->get();
        $keamanan_transaksi = Perbandingan::select('keamanan_transaksi')->orderBY('toko_online', 'asc')->get();
        $proses_transaksi = Perbandingan::select('proses_transaksi')->orderBY('toko_online', 'asc')->get();

        // variabel penampung nilai kedalam array
        $datajenis_pengirimanarr = [];
        $dataharga_produkarr = [];
        $datakualitas_produkarr = [];
        $datakeamanan_transaksiarr = [];
        $dataproses_transaksiarr = [];

        // buat masukin data kedalam bentuk array
        foreach ($jenis_pengiriman as $itemh) {
            $datajenis_pengirimanarr[] = $itemh->jenis_pengiriman;
        }

        foreach ($harga_produk as $iteml) {
            $dataharga_produkarr[] = $iteml->harga_produk;
        }

        foreach ($kualitas_produk as $items) {
            $datakualitas_produkarr[] = $items->kualitas_produk;
        }

        foreach ($keamanan_transaksi as $itemk) {
            $datakeamanan_transaksiarr[] = $itemk->keamanan_transaksi;
        }

        foreach ($proses_transaksi as $itemg) {
            $dataproses_transaksiarr[] = $itemg->proses_transaksi;
        }

        // buat manggil data arraynya
        // dd($datajenis_pengirimanarr, $dataharga_produkarr, $datakualitas_produkarr, $datakeamanan_transaksiarr, $dataproses_transaksiarr);

        $t31 = $request->k31;
        $t32 = $request->k32;
        $t33 = $request->k33;
        $t34 = $request->k34;
        $t35 = $request->k35;

        // kriteria jenis pengiriman
        $hasilh = [];
        $hasiljmlh = 0;
        $j = 0;
        $n = 0;
        $i = 0;
        // $z = 0;
        $D = 0;
        for ($m = 0; $m < (sizeof($datajenis_pengirimanarr) * sizeof($datajenis_pengirimanarr)) + (sizeof($datajenis_pengirimanarr) - 1); $m++) {
            if ($i < sizeof($datajenis_pengirimanarr)) {
                $hasilh[$n] = $datajenis_pengirimanarr[$i] / $datajenis_pengirimanarr[$j];
                $i++;
                $n++;
            } else if ($j < sizeof($datajenis_pengirimanarr)) {
                $j++;
                $i = 0;
            } else {
                // Do nothing
            }
        }

        // Jumlah kolom dan baris
        $barish = sizeof($datajenis_pengirimanarr);
        $kolomh = sizeof($datajenis_pengirimanarr);
        $data2Dh = array();

        // konversi jadi array 2d
        $counter = 0;
        for ($i = 0; $i < $barish; $i++) {
            for ($j = 0; $j < $kolomh; $j++) {
                $data2Dh[$i][$j] = $hasilh[$counter];
                $counter++;
            }
        }

        // menghitung jumlah
        $hasiljmlh = array();
        for ($i = 0; $i < $kolomh; $i++) {
            $jumlah = 0;
            for ($j = 0; $j < $barish; $j++) {
                $jumlah += $data2Dh[$j][$i];
            }
            $hasiljmlh[] = $jumlah;
        }

        // Menghitung normalisasi matriks
        $z = 0;
        $hasilbgh = [];
        $i = 0;
        for ($m = 0; $m < (sizeof($datajenis_pengirimanarr) * sizeof($datajenis_pengirimanarr)) + (sizeof($datajenis_pengirimanarr) - 1); $m++) {
            if ($i < sizeof($datajenis_pengirimanarr)) {
                $hasilbgh[$z] = $hasilh[$z] / $hasiljmlh[$i];
                $i++;
                $z++;
            } else {
                $i = 0;
            }
        }

        $counter = 0;
        for ($i = 0; $i < $barish; $i++) {
            for ($j = 0; $j < $kolomh; $j++) {
                $data2Dbgh[$i][$j] = $hasilbgh[$counter];
                $counter++;
            }
        }

        // Perkalian dengan hasil sebelumnya
        $z = 0;
        $hasiltmh = [];
        $i = 0;
        for ($j = 0; $j < $barish; $j++) {
            $jumlah = 0;
            for ($i = 0; $i < $kolomh; $i++) {
                $jumlah += $data2Dbgh[$j][$i];
            }
            $hasiltmh[] = $jumlah;
        }

        for ($i = 0; $i < sizeof($datajenis_pengirimanarr); $i++) {
            $jumlah = $hasiltmh[$i] / sizeof($datajenis_pengirimanarr);
            $hasilpmh[] = $jumlah;
        }

        // Perkalian (asli)
        for ($i = 0; $i < sizeof($datajenis_pengirimanarr); $i++) {
            $jumlah = $hasilpmh[$i] * $t34;
            $hasilppmh[] = $jumlah;
        }


        // kriteria harga produk
        $hasill = [];
        $j = 0;
        $n = 0;
        $i = 0;
        for ($m = 0; $m < (sizeof($dataharga_produkarr) * sizeof($dataharga_produkarr)) + (sizeof($dataharga_produkarr) - 1); $m++) {
            if ($i < sizeof($dataharga_produkarr)) {
                $hasill[$n] = $dataharga_produkarr[$i] / $dataharga_produkarr[$j];
                $i++;
                $n++;
            } else {
                if ($j < sizeof($dataharga_produkarr)) {
                    $j++;
                    $i = 0;
                }
            }
        }

        // Jumlah kolom dan baris
        $barisl = sizeof($dataharga_produkarr);
        $koloml = sizeof($dataharga_produkarr);
        $data2Dl = array();

        // konversi jadi array 2d
        $counter = 0;
        for ($i = 0; $i < $barisl; $i++) {
            for ($j = 0; $j < $koloml; $j++) {
                $data2Dl[$i][$j] = $hasill[$counter];
                $counter++;
            }
        }

        // menghitung jumlah
        $hasiljmll = array();
        for ($i = 0; $i < $koloml; $i++) {
            $jumlah = 0;
            for ($j = 0; $j < $barisl; $j++) {
                $jumlah += $data2Dl[$j][$i];
            }
            $hasiljmll[] = $jumlah;
        }

        // Menghitung normalisasi matriks
        $z = 0;
        $hasilbgl = [];
        $i = 0;
        for ($m = 0; $m < (sizeof($dataharga_produkarr) * sizeof($dataharga_produkarr)) + (sizeof($dataharga_produkarr) - 1); $m++) {
            if ($i < sizeof($dataharga_produkarr)) {
                $hasilbgl[$z] = $hasill[$z] / $hasiljmll[$i];
                $i++;
                $z++;
            } else {
                $i = 0;
            }
        }

        $counter = 0;
        for ($i = 0; $i < $barisl; $i++) {
            for ($j = 0; $j < $koloml; $j++) {
                $data2Dbgl[$i][$j] = $hasilbgl[$counter];
                $counter++;
            }
        }

        // Perkalian dengan hasil sebelumnya
        $z = 0;
        $hasiltml = [];
        $i = 0;
        for ($j = 0; $j < $barisl; $j++) {
            $jumlah = 0;
            for ($i = 0; $i < $koloml; $i++) {
                $jumlah += $data2Dbgl[$j][$i];
            }
            $hasiltml[] = $jumlah;
        }

        for ($i = 0; $i < sizeof($dataharga_produkarr); $i++) {
            $jumlah = $hasiltml[$i] / sizeof($dataharga_produkarr);
            $hasilpml[] = $jumlah;
        }

        // Perkalian (asli)
        for ($i = 0; $i < sizeof($dataharga_produkarr); $i++) {
            $jumlah = $hasilpml[$i] * $t31;
            $hasilppml[] = $jumlah;
        }

        // kriteria kualitas produk
        $hasils = [];
        $j = 0;
        $n = 0;
        $i = 0;
        for ($m = 0; $m < (sizeof( $datakualitas_produkarr) * sizeof( $datakualitas_produkarr)) + (sizeof( $datakualitas_produkarr) - 1); $m++) {
            if ($i < sizeof( $datakualitas_produkarr)) {
                $hasils[$n] =  $datakualitas_produkarr[$i] /  $datakualitas_produkarr[$j];
                $i++;
                $n++;
            } else {
                if ($j < sizeof( $datakualitas_produkarr)) {
                    $j++;
                    $i = 0;
                }
            }
        }

        // Jumlah kolom dan baris
        $bariss = sizeof( $datakualitas_produkarr);
        $koloms = sizeof( $datakualitas_produkarr);
        $data2Ds = array();

        // konversi jadi array 2d
        $counter = 0;
        for ($i = 0; $i < $bariss; $i++) {
            for ($j = 0; $j < $koloms; $j++) {
                $data2Ds[$i][$j] = $hasils[$counter];
                $counter++;
            }
        }

        // menghitung jumlah
        $hasiljmls = array();
        for ($i = 0; $i < $koloms; $i++) {
            $jumlah = 0;
            for ($j = 0; $j < $bariss; $j++) {
                $jumlah += $data2Ds[$j][$i];
            }
            $hasiljmls[] = $jumlah;
        }

        // Menghitung normalisasi matriks
        $z = 0;
        $hasilbgs = [];
        $i = 0;
        for ($m = 0; $m < (sizeof( $datakualitas_produkarr) * sizeof( $datakualitas_produkarr)) + (sizeof( $datakualitas_produkarr) - 1); $m++) {
            if ($i < sizeof( $datakualitas_produkarr)) {
                $hasilbgs[$z] = $hasils[$z] / $hasiljmls[$i];
                $i++;
                $z++;
            } else {
                $i = 0;
            }
        }

        $counter = 0;
        for ($i = 0; $i < $bariss; $i++) {
            for ($j = 0; $j < $koloms; $j++) {
                $data2Dbgs[$i][$j] = $hasilbgs[$counter];
                $counter++;
            }
        }

        // Perkalian dengan hasil sebelumnya
        $z = 0;
        $hasiltms = [];
        $i = 0;
        for ($j = 0; $j < $bariss; $j++) {
            $jumlah = 0;
            for ($i = 0; $i < $koloms; $i++) {
                $jumlah += $data2Dbgs[$j][$i];
            }
            $hasiltms[] = $jumlah;
        }

        for ($i = 0; $i < sizeof( $datakualitas_produkarr); $i++) {
            $jumlah = $hasiltms[$i] / sizeof( $datakualitas_produkarr);
            $hasilpms[] = $jumlah;
        }

        // Perkalian (asli)
        for ($i = 0; $i < sizeof( $datakualitas_produkarr); $i++) {
            $jumlah = $hasilpms[$i] * $t33;
            $hasilppms[] = $jumlah;
        }

        // kriteria keamanan transaksi
        $hasilk = [];
        $j = 0;
        $n = 0;
        $i = 0;
        for ($m = 0; $m < (sizeof($datakeamanan_transaksiarr) * sizeof($datakeamanan_transaksiarr)) + (sizeof($datakeamanan_transaksiarr) - 1); $m++) {
            if ($i < sizeof($datakeamanan_transaksiarr)) {
                $hasilk[$n] = $datakeamanan_transaksiarr[$i] / $datakeamanan_transaksiarr[$j];
                $i++;
                $n++;
            } else {
                if ($j < sizeof($datakeamanan_transaksiarr)) {
                    $j++;
                    $i = 0;
                }
            }
        }

        // Jumlah kolom dan baris
        $barisk = sizeof($datakeamanan_transaksiarr);
        $kolomk = sizeof($datakeamanan_transaksiarr);
        $data2Dk = array();

        // konversi jadi array 2d
        $counter = 0;
        for ($i = 0; $i < $barisk; $i++) {
            for ($j = 0; $j < $kolomk; $j++) {
                $data2Dk[$i][$j] = $hasilk[$counter];
                $counter++;
            }
        }

        // menghitung jumlah
        $hasiljmlk = array();
        for ($i = 0; $i < $kolomk; $i++) {
            $jumlah = 0;
            for ($j = 0; $j < $barisk; $j++) {
                $jumlah += $data2Dk[$j][$i];
            }
            $hasiljmlk[] = $jumlah;
        }

        // Menghitung normalisasi matriks
        $z = 0;
        $hasilbgk = [];
        $i = 0;
        for ($m = 0; $m < (sizeof($datakeamanan_transaksiarr) * sizeof($datakeamanan_transaksiarr)) + (sizeof($datakeamanan_transaksiarr) - 1); $m++) {
            if ($i < sizeof($datakeamanan_transaksiarr)) {
                $hasilbgk[$z] = $hasilk[$z] / $hasiljmlk[$i];
                $i++;
                $z++;
            } else {
                $i = 0;
            }
        }

        $counter = 0;
        for ($i = 0; $i < $barisk; $i++) {
            for ($j = 0; $j < $kolomk; $j++) {
                $data2Dbgk[$i][$j] = $hasilbgk[$counter];
                $counter++;
            }
        }

        // Perkalian dengan hasil sebelumnya
        $z = 0;
        $hasiltmk = [];
        $i = 0;
        for ($j = 0; $j < $barisk; $j++) {
            $jumlah = 0;
            for ($i = 0; $i < $kolomk; $i++) {
                $jumlah += $data2Dbgk[$j][$i];
            }
            $hasiltmk[] = $jumlah;
        }

        for ($i = 0; $i < sizeof($datakeamanan_transaksiarr); $i++) {
            $jumlah = $hasiltmk[$i] / sizeof($datakeamanan_transaksiarr);
            $hasilpmk[] = $jumlah;
        }

        // Perkalian (asli)
        for ($i = 0; $i < sizeof($datakeamanan_transaksiarr); $i++) {
            $jumlah = $hasilpmk[$i] * $t32;
            $hasilppmk[] = $jumlah;
        }

        // kriteria proses transaksi
        $hasilg = [];
        $j = 0;
        $n = 0;
        $i = 0;
        for ($m = 0; $m < (sizeof($dataproses_transaksiarr) * sizeof($dataproses_transaksiarr)) + (sizeof($dataproses_transaksiarr) - 1); $m++) {
            if ($i < sizeof($dataproses_transaksiarr)) {
                $hasilg[$n] = $dataproses_transaksiarr[$i] / $dataproses_transaksiarr[$j];
                $i++;
                $n++;
            } else {
                if ($j < sizeof($dataproses_transaksiarr)) {
                    $j++;
                    $i = 0;
                }
            }
        }

        // Jumlah kolom dan baris
        $barisg = sizeof($dataproses_transaksiarr);
        $kolomg = sizeof($dataproses_transaksiarr);
        $data2Dg = array();

        // konversi jadi array 2d
        $counter = 0;
        for ($i = 0; $i < $barisg; $i++) {
            for ($j = 0; $j < $kolomg; $j++) {
                $data2Dg[$i][$j] = $hasilg[$counter];
                $counter++;
            }
        }

        // menghitung jumlah
        $hasiljmlg = array();
        for ($i = 0; $i < $kolomg; $i++) {
            $jumlah = 0;
            for ($j = 0; $j < $barisg; $j++) {
                $jumlah += $data2Dg[$j][$i];
            }
            $hasiljmlg[] = $jumlah;
        }

        // Menghitung normalisasi matriks
        $z = 0;
        $hasilbgg = [];
        $i = 0;
        for ($m = 0; $m < (sizeof($dataproses_transaksiarr) * sizeof($dataproses_transaksiarr)) + (sizeof($dataproses_transaksiarr) - 1); $m++) {
            if ($i < sizeof($dataproses_transaksiarr)) {
                $hasilbgg[$z] = $hasilg[$z] / $hasiljmlg[$i];
                $i++;
                $z++;
            } else {
                $i = 0;
            }
        }

        $counter = 0;
        for ($i = 0; $i < $barisg; $i++) {
            for ($j = 0; $j < $kolomg; $j++) {
                $data2Dbgg[$i][$j] = $hasilbgg[$counter];
                $counter++;
            }
        }

        // Perkalian dengan hasil sebelumnya
        $z = 0;
        $hasiltmg = [];
        $i = 0;
        for ($j = 0; $j < $barisg; $j++) {
            $jumlah = 0;
            for ($i = 0; $i < $kolomg; $i++) {
                $jumlah += $data2Dbgg[$j][$i];
            }
            $hasiltmg[] = $jumlah;
        }

        for ($i = 0; $i < sizeof($dataproses_transaksiarr); $i++) {
            $jumlah = $hasiltmg[$i] / sizeof($dataproses_transaksiarr);
            $hasilpmg[] = $jumlah;
        }

        // Perkalian (asli)
        for ($i = 0; $i < sizeof($dataproses_transaksiarr); $i++) {
            $jumlah = $hasilpmg[$i] * $t35;
            $hasilppmg[] = $jumlah;
        }

        // dd(
        //     $hasilh,
        //     $hasill,
        //     $hasils,
        //     $hasilk,
        //     $hasilg,
        //     $hasiljmlh,
        //     $hasiljmll,
        //     $hasiljmls,
        //     $hasiljmlk,
        //     $hasiljmlg,
        //     $hasilbgh,
        //     $hasilbgl,
        //     $hasilbgs,
        //     $hasilbgk,
        //     $hasilbgg,
        //     $hasiltmh,
        //     $hasiltml,
        //     $hasiltms,
        //     $hasiltmk,
        //     $hasiltmg,
        //     $hasilpmh,
        //     $hasilpml,
        //     $hasilpms,
        //     $hasilpmk,
        //     $hasilpmg
        // );


        // Insert data ke table hasils
        $toko_online = Alternative::select('toko_online')->get();
        $toko_online = DB::table('alternatives')
            ->select('toko_online')
            ->get();

        $hargat = DB::table('alternatives')
            ->select('jenis_pengiriman')
            ->get();
        $lantait = DB::table('alternatives')
            ->select('harga_produk')
            ->get();
        $kamart = DB::table('alternatives')
            ->select('keamanan_transaksi')
            ->get();
        $luast = DB::table('alternatives')
            ->select('kualitas_produk')
            ->get();
        $garasit = DB::table('alternatives')
            ->select('proses_transaksi')
            ->get();
        $gambart = DB::table('alternatives')
            ->select('gambar')
            ->get();

        for ($i = 0; $i < sizeof($jenis_pengirimanarr); $i++) {
            $hasiltoko_online[] = $toko_online[$i]->toko_online;
        }

        for ($i = 0; $i < sizeof($jenis_pengirimanarr); $i++) {
            $hasiljumlah[] = $hasilppmh[$i] + $hasilppml[$i] + $hasilppmk[$i] + $hasilppms[$i] + $hasilppmg[$i];
        }

        for ($i = 0; $i < sizeof($jenis_pengirimanarr); $i++) {
            Hasil::create([
                'toko_online' => $toko_online[$i]->toko_online,
                'harga_produk' => $harga_produkt[$i]->harga_produk,
                'keamanan_transaksi' => $keamanan_transaksit[$i]->keamanan_transaksi,
                'kualitas_produk' => $kualitas_produkt[$i]->kualitas_produk,
                'jenis_pengiriman' => $jenis_pengirimant[$i]->jenis_pengiriman,
                'proses_transaksi' => $proses_transaksit[$i]->proses_transaksi,
                'gambar' => $gambart[$i]->gambar,
                'ahp' => $hasiljumlah[$i]
            ]);
        }

        // dd(
        //     $toko_online[0]->toko_online,
        //     $hasiltoko_online,
        //     $hasiljumlah,
        //     $json_toko_online,
        //     $json_jenis_pengiriman,
        //     $json_harga_produk,
        //     $json_keamanan_transaksi,
        //     $json_kualitas_produk,
        //     $json_proses_transaksi,
        //     $hasilppmh,
        //     $hasilppml,
        //     $hasilppmk,
        //     $hasilppms,
        //     $hasilppmg,
        //     $toko_online
        // );

        $datahasil = DB::table('hasils')
            ->orderBy('ahp', 'desc')
            ->get();

        $datamax = DB::table('hasils')
            ->orderBy('ahp', 'desc')
            ->limit(1)
            ->get();

        return view('admin/package/ahp/hasil', [
            'data_hasil' => $datahasil,
            'data_max' => $datamax
        ]);
    }


    public function postalt(Request $request)
    {
        $data_rumah = Alternative::get();
        $name = $request->cbname;
        $data_altl = "";
        $data_crt = "";
        // dd($name);
        if ($name == 'Jenis_Pengiriman') {
            $data_alth = Alternative::orderBy('jenis_pengiriman', 'asc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('admin/package/alternative/index', [
                'data_pilih' => $data_alth,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Keamanan_Transaksi') {
            $data_altk = Alternative::orderBy('keamanan_transaksi', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('admin/package/alternative/index', [
                'data_pilih' => $data_altk,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Harga_Produk') {
            $data_altl = Alternative::orderBy('harga_produk', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('admin/package/alternative/index', [
                'data_pilih' => $data_altl,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Proses_Transaksi') {
            $data_altg = Alternative::orderBy('proses_Transaksi', 'asc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('admin/package/alternative/index', [
                'data_pilih' => $data_altg,
                'data_crt' => $data_crt
            ]);
        } else {
            $data_alts = Alternative::orderBy('kualitas_produk', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('admin/package/alternative/index', [
                'data_pilih' => $data_alts,
                'data_crt' => $data_crt
            ]);
        }
        return view('admin/package/alternative/index', [
            'data_rumah' => $data_rumah,
            'data_crt' => $data_crt,
            'data_alth' => $data_alth,
            'data_altk' => $data_altk,
            'data_altl' => $data_altl,
            'data_altg' => $data_altg,
            'data_alts' => $data_alts,
            'data_name' => $name
        ]);
    }

    public function postaltuser(Request $request)
    {
        $data_rumah = Alternative::get();
        $name = $request->cbname;
        $data_altl = "";
        $data_crt = "";
        // dd($name);
        if ($name == 'Jenis_Pengiriman') {
            $data_alth = Alternative::orderBy('jenis_pengiriman', 'asc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/index', [
                'data_rumah' => $data_alth,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Keamanan_Transaksi') {
            $data_altk = Alternative::orderBy('keamanan_transaksi', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/index', [
                'data_rumah' => $data_altk,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Harga_Produk') {
            $data_altl = Alternative::orderBy('harga_produk', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/index', [
                'data_rumah' => $data_altl,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Proses_Transaksi') {
            $data_altg = Alternative::orderBy('proses_transaksi', 'asc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/index', [
                'data_rumah' => $data_altg,
                'data_crt' => $data_crt
            ]);
        } else {
            $data_alts = Alternative::orderBy('kualitas_produk', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/index', [
                'data_rumah' => $data_alts,
                'data_crt' => $data_crt
            ]);
        }
        return view('customer/package/index', [
            'data_rumah' => $data_rumah,
            'data_crt' => $data_crt,
            'data_alth' => $data_alth,
            'data_altk' => $data_altk,
            'data_altl' => $data_altl,
            'data_altg' => $data_altg,
            'data_alts' => $data_alts,
            'data_name' => $name
        ]);
    }

    public function postaltuserlogin(Request $request)
    {
        $data_rumah = Alternative::get();
        $name = $request->cbname;
        $data_altl = "";
        $data_crt = "";
        // dd($name);
        if ($name == 'Jenis_Pengiriman') {
            $data_alth = Alternative::orderBy('jenis_pengiriman', 'asc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/indexlogin', [
                'data_rumah' => $data_alth,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Keamanan_Transaksi') {
            $data_altk = Alternative::orderBy('keamanan_transaksi', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/indexlogin', [
                'data_rumah' => $data_altk,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Harga_Produk') {
            $data_altl = Alternative::orderBy('harga_produk', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/indexlogin', [
                'data_rumah' => $data_altl,
                'data_crt' => $data_crt
            ]);
        } else if ($name == 'Proses_Transaksi') {
            $data_altg = Alternative::orderBy('proses_transaksi', 'asc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/indexlogin', [
                'data_rumah' => $data_altg,
                'data_crt' => $data_crt
            ]);
        } else {
            $data_alts = Alternative::orderBy('kualitas_produk', 'desc')
                ->orderBy('jenis_pengiriman', 'asc')
                ->orderBy('proses_transaksi', 'asc')
                ->orderBy('keamanan_transaksi', 'desc')
                ->orderBy('harga_produk', 'desc')
                ->orderBy('kualitas_produk', 'desc')
                ->paginate(3);
            $data_crt = SubCriteria::select('name')->distinct()->get();
            return view('customer/package/indexlogin', [
                'data_rumah' => $data_alts,
                'data_crt' => $data_crt
            ]);
        }
        return view('customer/package/indexlogin', [
            'data_rumah' => $data_rumah,
            'data_crt' => $data_crt,
            'data_alth' => $data_alth,
            'data_altk' => $data_altk,
            'data_altl' => $data_altl,
            'data_altg' => $data_altg,
            'data_alts' => $data_alts,
            'data_name' => $name
        ]);
    }
}
