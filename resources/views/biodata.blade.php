
<h2> Tambahkan Biodata Anda</h2>
<table>
    <form action="{{url('biodata-submit')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input name="Nama" type="nama" size=20/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input name="Email" type="email" size=20/></td>
        </tr>
        <tr>
            <td>No.Hp</td>
            <td>:</td>
            <td><input name="No_hp" type="num"   size=20/></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="kirim"/></td>
        </tr>
    </form>
</table>