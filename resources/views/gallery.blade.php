@extends('layouts/bootstrap')

@section('title', 'APPM - Aplikasi Pelayanan Pengaduan Masyarakat')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center">
    @for ($i = 0; $i < 3; $i++)    
    <div class="row row-cols-auto">
        <div class="col">
            <img src="{{ asset('images/pegasia.jpg')}}" alt="image" style="max-width: 200px">
        </div>
        <div class="col">
            <img src="{{ asset('images/pegasia.jpg')}}" alt="image" style="max-width: 200px">
        </div>
        <div class="col">
            <img src="{{ asset('images/pegasia.jpg')}}" alt="image" style="max-width: 200px">
        </div>
    </div>
    @endfor
</div>

   {{-- Histori --}}
   <section class="my-5 min-vh-100 d-flex flex-column justify-content-center" id="histori">
        <div class="row">
            <div class="col">
                <h1>Histori</h1>
            </div>
        </div>

        <div class="row bg-body-tertiary">
            <div class="col">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">FOTO</th>
                            <th scope="col">JUDUL</th>
                            <th scope="col">KATEGORI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pengaduan as $post)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('storage/pengaduan/' . $post->foto) }}" class="rounded"
                                        style="width: 150px">
                                </td>
                                <td>{{ $post->nama_laporan }}</td>
                                <td>{{ $post->kategori }}</td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                                Belum ada laporan.
                            </div>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{ $pengaduan->links() }}
                </div>
            </div>
        </div>

    </section>


@endsection
