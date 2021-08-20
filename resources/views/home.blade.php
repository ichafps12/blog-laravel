@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-8 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('blog.create')}}" class="btn btn-md btn-success mb-3">Tambah Data Baru</a>

                    @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"><center>Gambar</center> </th>
                                <th scope="col"><center>Judul</center></th>
                                <th scope="col"><center>Content</center></th>
                                <th scope="col"><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($blogs as $blog) --}}
                            {{-- <tr>
                                <td>
                                  <center><img src="{{ url('/img/'.$blog->image) }}" class="rounded" style="width: 150px"></center> 
                                </td>
                                <td class="text-center">{{ $blog->title}}</td>
                                <td class="text-center">{!! $blog->content !!}</td>
                                <td class="text-center">
                                    <form action="{{ route('blog.destroy', $blog->id) }}" onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                    <a href="{{ route('blog.edit', $blog->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr> --}}
                            {{-- @empty
                                <div class="alert alert-danger">
                                    Data Blog Belum Tersedia
                                </div>
                            @endforelse --}}
                        </tbody>
                    </table>
                    {{-- {{ $blogs->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
