<!-- 
NIM : 202410101017
Nama : Elsadora Dwiyanita Rahmadhani -->
<?= 
// pengidentifikasian variabel
$nama = '<em>Elsadora Dwiyanita Rahmadhani</em>';
$nim = '<em>202410101017</em>';
$title = '<strong>Terinspirasi Drama Korea A Business Proposal, <br>Ini 5 Cara PDKT ala Kang Tae Moo</strong>';
$tanggal = 'Senin, 04 April 2022 | 11:22 WIB';
$penulis = 'Zulfah Ariyani';
$image = 'https://thumb.suara.com/3JK8a6iA-lDGcv2PUgPa3yxfGOM=/653x366/https://media.suara.com/pictures/653x366/2022/04/04/52640-a-business-proposal-instagram.jpg';
$content = 'Drama Korea yang berjudul <strong>A Business Proposal</strong> kini tengah ramai diperbincangkan. K-Drama dengan genre komedi romantis tersebut berhasil meraih 
rating tinggi. A Business Proposal digandrungi oleh penikmat K-Drama dari segala umur. Hal ini bukan tanpa alasan, karena K-Drama tersebut menyajikan 
alur cerita yang unik. Yaitu tentang kisah cinta antara CEO perusahaan dengan karyawan perusahaan tersebut. Beragam usaha dilakukan oleh <strong>Kang Tae Moo</strong>
untuk meluluhkan hati Shin Ha Ri.<br>
<br>Berikut 5 cara PDKT ala Kang Tae Moo dalam drama A Business Proposal.<br>
<br><strong>1. Jujur dan Terbuka Tentang Perasaanmu</strong><br>
Kang Tae Moo merupakan tipe pria yang cuek dan cenderung jual mahal. Ia tidak mau mengakui perasaannya pada Shin Ha Ri bahwa ia telah jatuh cinta pada Shin Ha Ri. Namun, 
seiring berjalannya waktu, Kang Tae Moo sadar bahwa ia begitu mencintai Shin Ha Ri dan ingin terus bersamanya. Karena adanya dorongan dalam dirinya tersebut, akhirnya 
Kang Tae Moo mulai memberanikan dirinya untuk menyatakan perasaan pada Shin Ha Ri. <br>
<br><strong>2. Mencari Tahu Hal yang Disukai Gebetan</strong><br>
Meskipun Kang Tae Moo terkesan cuek, namun ia berusaha melakukan segala cara untuk meluluhkan hati Shin Ha Ri. Salah satunya adalah dengan cara mencari tahu semua hal 
yang disukai Shin Ha Ri. Kamu bisa mencontoh sikap Kang Tae Moo ini. Jika kamu merasa kesulitan tentang apa yang disukai gebetan, kamu bisa bertanya secara langsung. 
Kamu bisa menanyakan makanan apa yang ia sukai atau tempat seperti apa yang ingin ia kunjungi. Kalau kamu sudah mengetahuinya, kamu bisa mengajaknya ke tempat 
tersebut atau makan makanan yang ia inginkan.<br>
<br><strong>3. Tunjukkan Bakatmu</strong><br>
Kang Tae Moo bukan hanya pria tampan, namun ia juga pria berbakat. Ia sangat mahir memainkan piano. Ia pun tak ragu menunjukkan kebolehannya tersebut pada Shin Ha Ri 
pada saat makan malam bersama. Alhasil Shin Ha Ri dibuat terpukau olehnya. Begitu juga dengan kamu jika memiliki suatu bakat, kamu bisa menunjukkannya pada gebetan. 
Hal ini akan membuat gebetan semakin terpukau dan jatuh cinta padamu.<br>
<br><strong>4. Berikan Kesan Baik</strong><br>
Dalam masa PDKT, kamu dan gebetan akan berusahan untuk saling mengenal satu sama lain. Oleh karena itu, penting bagimu untuk memberikan kesan yang baik pada gebetan. 
Mulai dari penampilan, sikap yang kamu miliki, ataupun gaya bicara. Dengan bersikap baik maka akan membuat citramu baik juga di mata gebetan. Seperti halnya yang 
dilakukan Kang Tae Moo pada Shin Ha Ri.<br>
<br><strong>5. Setia dan Punya Pendirian</strong><br>
Pada mulanya Shin Ha Ri tak begitu tertarik dengan Kang Tae Moo. Namun, Kang Tae Moo tak menyerah begitu saja. Ia tetap berusaha untuk mengambil hati Shin Ha Ri. 
Begitu juga dengan kamu, meskipun gebetan terlihat cuek terhadapmu kamu perlu memiliki usaha lebih untuk bisa meluluhkan hatinya dan jangan berpaling dengan yang lain. <br>
<br>Keteguhan dan usaha yang dilakukan oleh Kang Tae Moo untuk meluluhkan hati Shin Ha Ri bisa kamu tiru. Apakah kamu tertarik menirunya?<br>
<br>'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Tugas Index Page</title>

</head>
<body>
    <!-- responsif -->
    <main class="container my-3">
    <!-- tag untuk nama, nim, tanggal -->
    <div class="text-center">
        <h7><?= $nama . "-" . $nim?></h7>
        <p class="text-end"><?= $tanggal?></p>
    </div>
    <!-- tag untuk judul, penulis, gambar -->
    <div class="text-center mt-5">
        <h2 class="text-center"><?= $title?></h2>
        <p><?= $penulis ?></p>
        <img src="<?= $image ?>" alt="image korean drama busines proposal">
    </div>
    <!-- tag untuk isi artikel -->
    <div class="my-3">
        <p><?= $content ?></p>
    </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>