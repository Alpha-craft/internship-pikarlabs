<?php
    $versi = [
        [
            'versi'=>'v1.php',
            'img' => 'v1.png',
            'id' => 'v1',
            'isi' => 'berisi portofolio,riwayat pendidikan dan form untuk mengirim email'
        ],
        [
            'versi'=>'v2.php',
            'img' =>'v2.png',
            'id' => 'v2',
            'isi' => 'sama seperti v1 namun dengan layout yang berbeda'
        ]
    ];
    $nav_item = [
        'Profil','Portofolio','Contact'
    ];
    $keahlian = [
        ['bahasa' => 'HTML', 'value' => 22,'color' => 'orange'],
        ['bahasa' => 'Python', 'value' => 19,'color' => 'yellow'],
        ['bahasa' => 'PHP', 'value' => 12,'color' => 'lightblue']

    ];
    $bio = "
    Pelajar dari SMKN2 Surabaya yang sedang duduk di bangku kelas 11 dan menempuh program keahlian SIJA(Sistem Informatika Jaringan Dan Aplikasi)
    Yang saat ini Sedang melaksanakan Prakerin(Praktek Kerja Industri) di Pikar Labs,Selain itu saya Juga membuat project kecil-kecilan menggunakan
    Bahasa Pemrograman Python,PHP dan SQL(untuk keperluan Database)
    ";

    $pendidikan = [
        [
            'sekolah' => 'MI.Raden Rahmat Alas malang Surabaya',
            'file' => '',
            'tahun'=>'2010-2016'
        ],
        [
            'sekolah' => 'SMP Negeri 26 Surabaya',
            'file' => '',
            'tahun'=>'2016-2019'
        ],
        [
            'sekolah' => 'SMKN 2 Surabaya', 
            'file' => '', 
            'tahun'=>'2019-sekarang'
        ],
    ];

    $portofolio = [
        [
            'judul' => 'Svvebs',
            'desc' => 'Web untuk berbagi gambar/ foto digital yang dibangun menggunakan HTML,CSS,JS dan PHP',
            'link' => 'http://svvebs.great-site.net/',
            'img' =>    'svvebs.png',
            'imgs' => [
                'svvebs2.png',
                'svvebs3.png',
                'svvebsaplod.png',
                'svvebsdark.png',
                'svvebsregist.png',
                'login.png'
            ],
            'id' => 'svvebs',
            'tahun' => 2020,
        ],
        [
            'judul' => 'Web Portofolio',
            'desc' => 'Web Portofolio Yang Dibangun menggunakan HTML,CSS',
            'link' => 'https://ainurahman.vercel.app/',
            'img' => 'portofolio.png',
            'imgs' => [
                'portofolio2.png',
                'portofolio3.png'
            ],
            'id' => 'porto',
            'tahun' => 2020,
        ]
    ];

    
    $modal_msg = "Terimakasih atas tanggapan anda";


?>