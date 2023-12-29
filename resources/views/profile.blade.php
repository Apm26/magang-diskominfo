@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Profil Diskominfo
                        <a href="{{ route('home') }}" class="float-right">Kembali ke Beranda</a>
                    </div>

                    <div class="card-body">
                        <p>Halaman yang berisi informasi tentang Diskominfo, termasuk sejarah, visi, misi, dan struktur organisasi.</p>

                        <!-- Tambahkan informasi sejarah, visi, misi, dan struktur organisasi sesuai kebutuhan -->
                        <p>Sejarah: ...</p>
                        <p>Visi: ...</p>
                        <p>Misi: ...</p>
                        <p>Struktur Organisasi: ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
