<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    //
    function view(){
        // $data['transaksi'] = transaksi::all();
        return view ('transaksi');
    }

    function index(){
        $data['transaksi'] = transaksi::all();
        return view ('/viewtransaksi')->with($data);
    }


    function post(Request $req){
    $kode_barang = $req->kode_barang;
    $kode_peminjam = $req->kode_peminjam;
    $status = $req->status;
    $tanggal_pinjam = $req->tanggal_pinjam;

    transaksi::create([
        'kode_barang' =>$kode_barang,
        'kode_peminjam' =>$kode_peminjam,
        'status' => $status,
        'tanggal_pinjam' => $tanggal_pinjam,
    ]);

    return redirect('/viewtransaksi');
    }

    function add(){
        $data=[
            'action'=>url('transaksi/create'),
            'tombol'=>'simpan',
            'transaksi'=>(object)[
                'kode_barang' =>"",
                'kode_peminjam' =>"",
                'status' =>"",
                'tanggal_pinjam' =>"",
        ],
            ];

            return view('/transaksi',$data);

        }

        function create(Request $req){
            transaksi::create([
            'kode_barang' => $kode_barang,
            'kode_peminjam' => $kode_peminjam,
            'status' => $status,
            'tanggal_pinjam' => $tanggal_pinjam,
            ]);

            return redirect('/viewtransaksi');
        }

        //  function edit($id){
        //      $data['transaksi'] = transaksi::find($id);
        //      return view('formtransaksi',$data);
        //  }

        //  function update(Request $req){
        //  if ($req != null) {
        //      transaksi::where('id',$req->id)->update([
        //          'kode_barang' => $req->kode_barang,
        //         'kode_peminjam' => $req->kode_peminjam,
        //         'status' => $req->status,
        //    ]);

        // //    return redirect('/viewtransaksi');


        //   } else {

        //      transaksi::where('id',$req->id)->update([
        //          'kode_barang' => $req->kode_barang,
        //          'kode_peminjam' => $req->kode_peminjam,
        //          'status' => $req->status,
        //       ]);

        //     }
        //     return redirect('/viewtransaksi');
        //  }
         public function update_transaksi($id){
            transaksi::where('id',$id)->update([
                'status'=>'sudah dikembalikan'
            ]);
            return back();

         }
      }



