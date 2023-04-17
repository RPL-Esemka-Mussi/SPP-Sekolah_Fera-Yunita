<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Pembayaran</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="text-center py-3">
        <H3><b>LAPORAN PEMABAYARAN</b></H3>
    </div>
    <div class="container mt-3">
     <div class="d-flex justify-content-center align-items-center">
                <div class="me-2"><b>NIS :{{ $siswa->nis }}</b></div>
                <div class="me-2"><b>Nama :{{ $siswa->user->name }}</b></div>
                <div class="me-2"><b>Kelas:{{ $siswa->kelas->kelas }}</b></div>
            </div>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <td><b>No</b></td>
                    <td><b>Petugas</b></td>
                    <td><b>Tanggal</b></td>
                    <td><b>SPP</b></td>
                    <td><b>Jumlah Bayar</b></td>
                </tr>
            </thead>
            <tbody>
                @if ($pembayaran->count() == 0)
                    <tr class="text-center">
                        <td colspan="7"><b>KOSONG</b></td>
                    </tr>
                @else
                    @foreach ($pembayaran as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->tanggal_bayar }}</td>
                            <td>{{ $data->spp->tahun }}</td>
                            <td>{{ 'Rp.' . $data->jumlah_bayar }}</td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>
