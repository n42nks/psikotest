<div class="box">
    <div class="box-header">
        <b>Data Hasil Seluruh Peserta</b>
    </div>

    <div class="box-body">

        <table class="table table-bordered table-striped text-center">
            <thead style="background:#243A6B; color:white;">
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Soal</th>
                    <th>Benar</th>
                    <th>Salah</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $i => $d)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $d['npm'] }}</td>
                    <td>{{ $d['nama'] }}</td>
                    <td>{{ $d['total'] }}</td>
                    <td style="color:green; font-weight:bold;">{{ $d['benar'] }}</td>
                    <td style="color:red; font-weight:bold;">{{ $d['salah'] }}</td>
                    <td><b>{{ $d['nilai'] }}</b></td>
                    <td>
                        @if($d['nilai'] >= 70)
                            <span class="label label-success">LULUS</span>
                        @else
                            <span class="label label-danger">TIDAK</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>
