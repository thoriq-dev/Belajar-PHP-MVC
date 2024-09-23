<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/logo-wpu.png">
    <link rel="stylesheet" href="style.css">
    <title>Document: Pendahuluan PHP MVC WPU</title>
</head>

<body>
    <div class="heading">
        <div class="container">
            <h1>Pendahuluan PHP MVC</h1>
            <h2>Halaman Utama Website</h2>
            <p>Selamat datang di plylist kelas PHP MVC</p>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="main-content">
                <p>Content ini mengandung pembahasan</p>
                <li>Model</li>
                <ul>
                    <li>Representasi Pengetahuan</li>
                    <li>Mengelola Data</li>
                    <li>Logika Bisnis</li>
                </ul>
                <li>View</li>
                <ul>
                    <li>Output apa yang akan dilihat oleh user.</li>
                    <li>Representasi visual dari model.</li>
                    <li>Lapisan Presentasi</li>
                </ul>
                <li>Controller</li>
                <ul>
                    <li>Perantara antara model dan view.</li>
                    <li>Menangani pemrosesan pada aplikasi.</li>
                    <li>Menangani aksi dari user.</li>
                </ul>
                <p>Definisi dari PHP MVC adalah sebagai berikut:</p>
                <li><i>"Pola arsitektur pada perancangan perangkat lunak berorientasi objek"</i></li>
                <p>Tujuan dari MVC adalah sebagai berikut:</p>
                <li><i>"Untuk memisahkan antara <b>tampilan</b>, <b>data</b>, dan <b>proses</b>."</i></li>
                <img src="img/program-prosedural.png" alt="contoh-program-prosedural.png">
                <p>Dengan MVC kita akan memisahkan <b>Componen-component</b> halaman-halaman yang terdapat pada website kita.</p>
                <img src="img/diagram-alur-mvc.png" alt="gamabr-diagram-alur-mvc.png">
                <ul>
                    <li>Controller adalah sebuah komponen utama yang mengendalikan alur proses.</li>
                    <li>Model adalah sebuah kumpulan data-data yang akan ditampilkan</li>
                    <li>View adalah sebuah komponen yang dimana nantinya akan menyimpan sebuah template tampilan dari website kita.</li>
                </ul>
                <p>Berikut ini adalah beberapa alasan kenapa kita belajar konsep mvc :</p>
                <ul>
                    <li>Untuk organisasi dan struktur kode</li>
                    <li>Untuk Pemisahan logic dan tampilan</li>
                    <li>Untuk perawatan kode dimasa yang akan mendatang</li>
                    <li>Untuk mengimplementasikan konsep OOP yang sudah dipelajari</li>
                    <li>Digunakan oleh banyak Web Application Framework</li>
                </ul>
                <p>Berikut ini adalah table yang menenunjukkan framework yang menerapkan sistem mvc: </p>
                <table>
                    <tr>
                        <th>PHP</th>
                        <th>Java</th>
                        <th>Python</th>
                        <th>Ruby</th>
                        <th>Javascript</th>
                    </tr>
                    <tr>
                        <td>Codeigniter, Laravel, Yii, dan lain-lain.</td>
                        <td>Spring MVC, JSF, Struts, dan lain-lain.</td>
                        <td>Django, CherryPy, dan lain-lain</td>
                        <td>Ruby on rails, Sinatra, dan lain-lain</td>
                        <td>AngularJS, React JS, Backbone JS, dan lain-lain</td>
                    </tr>
                </table>
                <p>Harapannya adalah kita membuat dan menerapkan suatu aplikasi yang menerapkan konsep MVC dengan menggabungkan teori objek oriented programming sebelumnya.</p>
                <p>Controller Default -> Method Default</p>
                <p>Controller Default -> home/ -> method default -> index</p>
                <ul>
                    <li>Jika kita program kita mempunyai Controller dan Sebuah method default maka kita tidak akan perlu khawatir akan ada pesan kesalahan ketika seseorang mengakses halaman yang tidak ada pada website kita.</li>
                    <li>Apabila kita mengakses sebuah controller dan method maka nanti program akan menampilkan view yang akan ditampilkan</li>
                    <ul>
                        <li>Controller | Ada -> Method | Ada -> View | Ada</li>
                    </ul>
                    <li>Kita juga bisa mengirimkan data atau parameter ke dalam method.</li>
                    <ul>
                        <li><b><i>Note:</i></b> Sebernarnya Controller dan Method memiliki sebuah parameter sehingga kita dapat mengirimkan parameter. Apabila kita tidak mengirimkan sebuah parameter maka ada parameter default yang akan dikirimkan.</li>
                        <li>Dengan mengirimkan data atau parameter nantinya data akan ditampilkan di view.</li>
                        <li>Data yang akan ditampilkan nantinya bisa saja dari database sehingga kita membutuhkan <b><u>models</u></b>.</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="pagination">
        <div class="container">
            <div class="pagination">
                <li><a href="1.php">Halaman Selanjutnya | 1 </a></li>
            </div>
        </div>
    </div>
</body>

</html>