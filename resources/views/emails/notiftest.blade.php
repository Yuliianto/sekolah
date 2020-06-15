
@component('mail::message')
# Introduction

Selemat pendaftaran anda kini telah terverifikasi oleh tim 
penyelenggara pendaftaran. anda kini dapat menyelesaikan 
tahap selanjutnya yaitu tahap seleksi test ujian online.
masukan kode enrol berikut untuk dapat bergabung pada kelas 
ujian online


<p style="text-align: center;">
{{ $enrol }}
</p>



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
