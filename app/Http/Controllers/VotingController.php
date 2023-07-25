<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tb_pilih;
use App\Models\Tb_kandidat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
    public function vote(Request $request, $id)
    {
        $kandidat = Tb_kandidat::findOrFail($id);

        // Check if the user has already voted for this post
        $data = Tb_pilih::where('id_calon', $id)
                            ->where('id_user', $request->user()->id)
                            ->first();

        if ($data) {
            return redirect('/pemilsos/gagal');
        }

        User::where('id', $request->user()->id)->update([
            'keterangan' => "hadir",
            'id_calon' => $id,
            'voting' => true,
          ]);


        Tb_kandidat::where('id', $id)->increment('suara');
        // Create a new vote
        $kandidat = new Tb_pilih();
        $kandidat->id_calon = $id;
        $kandidat->id_user = $request->user()->id;
        $kandidat->save();

        return redirect('/pemilsos/succes');
    }
}
