
@component('mail::message')
# Introduction

Selemat pendaftaran anda kini telah terverifikasi oleh tim 
penyelenggara pendaftaran. anda kini dapat menyelesaikan 
tahap selanjutnya yaitu tahap seleksi test ujian online.
masukan kode enrol berikut untuk dapat bergabung pada kelas 
ujian online <br>

silakan login dengan menggunakan nik


<p style="text-align: center;">
<table border="0">
	<tr>
		<td><b>Enrol Key</b></td>
		<td>{{ $data['enrol'] }}</td>
	</tr>
</table>



</p>



@component('mail::button', ['url' => 'http://localhost:8000/ujian'])
Start test
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
