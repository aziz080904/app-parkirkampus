<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Halaman Dashboard</x-slot> 
<x-slot name="card_title">Dashboard Admin</x-slot> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4 class="text-center mt-4"><b> Selamat Datang di Web Admin Parkir Kampus STT Nurul Fikri</b> <br><i>"Kendaraan Anda Aman, Kami Ikut Senang"</i> <br> <br><img src="{{ asset('assets/img/sttnf.png') }}" alt="logo" width="400px"> </h4>
</body>
</html>

</x-layout>