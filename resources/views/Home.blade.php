@extends('layout.main')
@section('container')
    <!-- Header -->
    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>KOS JETIS 10</h1>
                <p>"Kos nyaman, hati tenang, masa depan cemerlang.".</p>
                <a href="{{ route('kursus') }}" class="btn btn-primary">Cek Kos</a>
            </div>
            <div class="header_right">
                <div class="header_right_img">
                    <img src="{{ Storage::url('images/gambar1.jpg') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </header>

    <!-- Konten 1 -->
    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Kategori</h1>
                <p>Ada banyak pilihan nih!, Mau Lihat ?</p>
                <a href="{{ route('kursus') }}" class="btn">Cek Kategori</a>
            </div>
            <div class="categories_right">
                <article class="category"> 
                    <h5>Fungsi Kos</h5>
                    <p>Di kos, seseorang bisa bertemu dengan berbagai orang yang memiliki latar belakang berbeda, memperluas jaringan sosial, dan belajar bekerja sama dengan orang lain. Ini adalah kesempatan untuk berinteraksi dengan teman-teman baru dan memperkaya pengalaman hidup..</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Konten 2 -->
    <section class="courses">
        <h2>Rekomendasi KOS KETINTANG</h2>
        <div class="container courses_container">
            <article class="course">
                <div class="course_image">
                  
                </div>
                <div class="course_info">
                    <h4>Kos Khusus Putri</h4>
                    <p>Lagi cari kos khusus cewek di sekitar daerah Ketintang? Yuk Cek Sekarang!.</p>
                    <a href="{{ route('kursus') }}" class="btn btn-primary">Lihat Kos</a>
                </div>
            </article>
            <article class="course">
                <div class="course_image">
                </div>
                <div class="course_info">
                    <h4>Kos Khusus Cowok</h4>
                    <p>Lagi cari kos khusus cowok di sekitar daerah Ketintang? Yuk Cek Sekarang!.</p>
                    <a href="{{ route('kursus') }}" class="btn btn-primary">Lihat Kos</a>
                </div>
            </article>
            <article class="course">
                <div class="course_image">
                </div>
                <div class="course_info">
                    <h4>Kos Keluarga</h4>
                    <p>Lagi cari kos untuk keluarga di sekitar daerah Ketintang? Yuk Cek Sekarang!.</p>
                    <a href="{{ route('kursus') }}" class="btn btn-primary">Lihat Kos</a>
                </div>
            </article>
        </div>
    </section>
@endsection
