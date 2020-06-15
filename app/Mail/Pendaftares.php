<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;


use App\New_pendaftares as New_pendaftar;
use App\New_pendaftar_details as New_pendaftar_details;

class Pendaftares extends Mailable
{
    use Queueable, SerializesModels;

    protected $dt_pendaftaran;
    protected $detail;
    protected $detail2;
    protected $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nik)
    {
        //
        $pendaftar = New_pendaftar::where('xn1',$nik)->first();
        $detail = New_pendaftar_details::where('pendaftar_account_id',$nik)
                                            ->where('pendaftar_detail_type_id',1)->first();
        $detail2 = New_pendaftar_details::where('pendaftar_account_id',$nik)
                                            ->where('pendaftar_detail_type_id',2)->first();
        
        $this->dt_pendaftaran= $pendaftar;
        $this->detail= $detail;
        $this->detail2= $detail2;
        $this->id = Crypt::encryptString($nik);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('SDIT_nurulyaqin@mandiriteam.my.id')->subject('Verifikasi Pendaftaran Siswa')->view('emails.detail-pendaftar',['dt_pendaftaran'=>$this->dt_pendaftaran,
                                            'detail'=>$this->detail,
                                            'detail2'=>$this->detail2,
                                            'id'=>$this->id]);
    }
    public function register_detail(){
        return view('emails.detail-pendaftar',['dt_pendaftaran'=>$this->dt_pendaftaran,
                                            'detail'=>$this->detail,
                                            'detail2'=>$this->detail2,
                                            'id'=>$this->id]);
    }
}
