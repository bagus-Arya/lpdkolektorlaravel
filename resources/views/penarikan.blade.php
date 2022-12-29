<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Laporan Setoran</title>
  </head>
  <body>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nasabah</th>
            <th scope="col">No.Buku</th>
            <th scope="col">Kolektor</th>
            <th scope="col">Nominal</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $showlistpenarikan)
            <tr>
                <th scope="row">1</th>
                <td>{{ $showlistpenarikan->tgl_transaksi }}</td>
                <td>{{ $showlistpenarikan->bukutabungan->nasabah->fullname }}</td>
                <td>{{ $showlistpenarikan->bukutabungan->no_tabungan }}</td>
                <td>{{ $showlistpenarikan->bukutabungan->nasabah->kolektor->fullname }}</td>
                <td>Rp. {{ number_format($showlistpenarikan->nominal, 0, ',', '.') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>