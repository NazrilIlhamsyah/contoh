<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function hallo()
    {
        $f = 1;
        $total = $f * 100;
        if($total >= 1000){
            return 'di atas seribu';
        }else{
            return 'di bawah seribu';
        }
    }
    public function profile()
    {
        return view('about');
    }
    public function facebook($perkalian,$nama)
    {
        $calkulator = 1 + 5;
        $hasilperkalian = $calkulator * $perkalian;
        $jk = 10;
        return view('belajar',compact('nama','calkulator','hasilperkalian','jk'));
    }
    public function siswa()
    {
        $a=[
            array('id' => 1, 'name' => 'dadang', 'age' => 15, 'hobi' =>[
                'Membaca novel', 'push rank', 'bernyanyi',
            ]),
            array('id' => 2, 'name' => 'dudung', 'age' => 18, 'hobi' =>[
                'renang', 'futsal', 'mamcing','turu dek'
            ]),
        ];
        return view('pages.siswa',['siswa' => $a]);
    }
    public function beratbadan($berat,$tinggi,$umur)
    {
        $bmi1 =  ($tinggi / 100);
        $bmi2 = $berat/($bmi1 * $bmi1);

        if($umur >= 17){
            $umur2 ='anda sudah memiliki sim';
        }else{
            $umur2 ='anda belum memiliki sim';
        }
        return view('pages.berat',compact('bmi2','berat','tinggi','umur','umur2'));
    }
    public function dosen()
    {
        $b=[
            array('namadosen' => 'Ahmad', 'nipd' => 1001, 'mahasiswa' =>
            [
                ['nama' => 'Yusuf','jurusan'=>'ips','nipm' => 2001,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Asep','jurusan'=>'ips','nipm' => 2002,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'ucup','jurusan'=>'ips','nipm' => 2003,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Asun','jurusan'=>'ips','nipm' => 2004,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Emil','jurusan'=>'ips','nipm' => 2005,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ]
            ]
            ),
            array('namadosen' => 'Agus', 'nipd' => 1002, 'mahasiswa' =>
            [
                ['nama' => 'Mahmud','jurusan'=>'ips','nipm' => 2006,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Rehan','jurusan'=>'ips','nipm' => 2007,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Udin','jurusan'=>'ips','nipm' => 2008,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Aan','jurusan'=>'ips','nipm' => 2009,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Babu','jurusan'=>'ips','nipm' => 20010,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ]
            ]
            ),
            array('namadosen' => 'Solihin', 'nipd' => 1003, 'mahasiswa' =>
            [
                ['nama' => 'Mamat','jurusan'=>'ips','nipm' => 20011,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Imam','jurusan'=>'ips','nipm' => 20012,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Mumun','jurusan'=>'ips','nipm' => 20013,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Yayan','jurusan'=>'ips','nipm' => 20014,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ],
                ['nama' => 'Epul','jurusan'=>'ips','nipm' => 20015,'matakuliah' => 
                ['ipa','mtk','indonesia']
                ]
            ]
            ),
        ];
        return view('pages.dosen',['dosen' => $b]);
    }
    public function mahasiswa()
    {
        $c=[
            array('namadosen' => 'Yusuf Bachtiar', 'pel' => 'Pemrograman Mobile', 'mahasiswa' => 
            [
                [
                    'nama' => 'Muhammad soleh','nilai' => 78
                ],
                [
                    'nama' => 'Jujun junaedi','nilai' => 85 
                ],
                [
                    'nama' => 'Mamat Alkatiri','nilai' => 90 
                ]
            ]
            ),
            array('namadosen' => 'Yaris riyadi', 'pel' => 'Pemrograman Web', 'mahasiswa' => 
            [
                [
                    'nama' => 'Alfred McTomminay','nilai' => 67 
                ],
                [
                    'nama' => 'Bruno Kamsir','nilai' => 90 
                ]
            ]
            ),
        ];
        return view('pages.mahasiswa',['mahasiswa' => $c]);
    }
    public function murid()
    {
        $nilai1 = [
            
            array('name' => 'agus','jurusan' => 'TKR',
            'data' => 
            [
              ['mapel' => 'bahasa indonesia','nilai' => 40],
              ['mapel' => 'bahasa inggris','nilai' => 37],
              ['mapel' => 'produktif kejuruan','nilai' => 57],
              ['mapel' => 'matematika','nilai' => 60],

        ]
    ),

            array('name' => 'mahmud','jurusan' => 'TKR',
            'data' => 
            [
            ['mapel' => 'bahasa indonesia','nilai' => 78],
            ['mapel' => 'bahasa inggris','nilai' => 86],
            ['mapel' => 'produktif kejuruan','nilai' => 90],
            ['mapel' => 'matematika','nilai' => 67],

        ]
    ),

            array('name' => 'rendi','jurusan' => 'TSM',
            'data' => 
            [
            ['mapel' => 'bahasa indonesia','nilai' => 90],
            ['mapel' => 'bahasa inggris','nilai' => 50],
            ['mapel' => 'produktif kejuruan','nilai' => 65],
            ['mapel' => 'matematika','nilai' => 78],

        ]
    ),

            array('name' => 'firman','jurusan' => 'RPL',
            'data' => 
            [
            ['mapel' => 'bahasa indonesia','nilai' => 78],
            ['mapel' => 'bahasa inggris','nilai' => 90],
            ['mapel' => 'produktif kejuruan','nilai' => 56],
            ['mapel' => 'matematika','nilai' => 78],

        ]
    ),

    array('name' => 'abdul','jurusan' => 'RPL',
    'data' => 
    [
    ['mapel' => 'bahasa indonesia','nilai' => 89],
    ['mapel' => 'bahasa inggris','nilai' => 67],
    ['mapel' => 'produktif kejuruan','nilai' => 80],
    ['mapel' => 'matematika','nilai' => 90],

    ]
    )
        ];

        return view('pages.murid', ['nilai1' => $nilai1]);
    }
    public function belanja(){
        $belanja = [
            ['name'=>'ALFIAN',
            'beli'=>
          [
            ['produk' => 'sepatu',  'harga'=>250000],
            ['produk' => 'baju', 'harga'=>100000],
            ['produk' => 'celana', 'harga'=>150000],
            ['produk' => 'kupluk',  'harga'=>100000]
          ]  
        ],
        ['name'=>'DIDA',
        'beli'=>
        [
        ['produk' => 'sepatu',  'harga'=>250000],
        ['produk' => 'baju', 'harga'=>100000],
        ['produk' => 'celana', 'harga'=>150000] 
        ]
        ]
    ];
    return view('pages.belanja', ['belanja'=>$belanja]);
    }
}