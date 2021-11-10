@component('mail::message')
# Laporan Diterima

Anda berhasil mendaftar layanan online pengajuan website dengan nomor tiket sebagai berikut.
@component('mail::button', ['url' => ''])
    {{$no}}
@endcomponent
Laporan anda akan segera ditindak lanjuti oleh petugas kami.<br>
Untuk melihat status proses pengajuan website, silahkan salin nomor tiket ini lalu tempelkan pada Menu Pantauan.<br>
Terima kasih<br>
@endcomponent
