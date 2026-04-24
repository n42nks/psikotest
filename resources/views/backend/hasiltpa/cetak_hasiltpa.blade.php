<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 15px;
            text-align: center;

        }
    </style>
    <style>
 div {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
  }
</style>
</head>
<body>
<div id="header" style="text-align: center;">
    <img src="{{asset('img/logo1.png')}}" style="margin-top: 20px;" id="img-logo">
    <h2>Hasil Test TPA</h2>
</div>
  <div id="content">
    <div id="article_1">
      <div id="article_header_1">
        <h3>NPM : {{$cetak[0]->npm}} </h3>
    </div>
     <div id="article_2">
      <div id="article_header_2">
      </div>
        <h3>Nama : {{$cetak[0]->nama}}</h3>
    </div>
  </div>
</div>
<table style="width: 100%">
  <tr>
    <th>Jumlah Soal</th>
    <th>Jumlah Benar</th>
    <th>Jumlah Salah</th>
  </tr>
  @foreach($cetak as $br)
  <tr>
    <td>{{$br->jumlah}}</td>
    <td>{{$br->hasil}}</td>
    <td>{{$br->salah}}</td>
  </tr>
  @endforeach
</table>
<br>
<br>
<br>
<br>
</body>
</html>