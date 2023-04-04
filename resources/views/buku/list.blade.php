<h1>Daftar Buku</h1>
<h2>{{$sub_judul}}</h2>
<!-- @foreach($buku as $b)
{{$b}}<br/>
@endforeach -->


<p>Perintah Kondisional</p>
@if($poin > 80 && $poin <= 100)
rating A <br>

@elseif($poin > 60 && $poin <= 80)
rating B <br>

@elseif($poin > 40 && $poin <= 60)
rating C <br>

@elseif($poin > 20 && $poin <= 40)
rating D <br>

@elseif($poin > 0 && $poin <= 40)
rating D <br>

@else 
Salah Nilai <br>
@endif


@foreach ($buku as $b)
{{$b}}<br/>
@endforeach




<p>perintah switch</p>
@switch($flag)
@case(1)
Jenis Pemrograman <br>
@break
@case(2)
jenis struktur data <br>
@break
@case(3)
Jenis basis data <br>
@default 
Bukan buku kompoter <br>
@endswitch