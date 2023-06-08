<x-admin>
    <x-admin.layout.item.namepage namepage="Daftar Pengumuman" />
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <x-admin.button.add url="#" dta=".tambahberanda" dto="modal" />
                <div class="card-body">
                    <table id="datatable1" class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="row">No</th>
                                <th>Judul Pengumuman</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_beranda as $beranda)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $beranda->nama }}</td>
                                    <td>
                                        <x-admin.button.show url="#" dta="#showberanda{{ $beranda->id }}"
                                            dto="modal" />
                                        <x-admin.button.edit url="#" dta="#editberanda{{ $beranda->id }} "
                                            dto="modal" />
                                        <x-admin.button.delete id="{{ $beranda->id }}" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    {{-- create --}}
    <div class="modal fade tambahberanda" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/beranda') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="nama" type="text" name="nama" placeholder="Judul Pengumuman"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <textarea id="nama" type="text" name="deskripsi" placeholder="deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- edit --}}
    @foreach ($list_beranda as $beranda)
        <div class="modal fade " id="editberanda{{ $beranda->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/beranda', $beranda->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                    <div class="card">
                                        <img src="{{ url("public/$beranda->foto") }}">
                                    </div>
                                </div>

                                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                    <div class="form-group">
                                        <input id="nama" type="text" name="nama" placeholder="Nama Lengkap"
                                            class="form-control" value="{{ $beranda->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="nama" type="text" name="deskripsi" placeholder="deskripsi" class="form-control">{{ $beranda->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="foto">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="mt-4 btn btn-primary float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- show  --}}
    @foreach ($list_beranda as $beranda)
        <div class="modal fade" id="showberanda{{ $beranda->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                <div class="card">
                                    <img src="{{ url("public/$beranda->foto") }}">
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                <div class="col-xl-8">
                                    Judul Pengumuman : {{ $beranda->nama }}
                                </div>
                                <hr>
                                <div class="col-xl-8">
                                    Deskripsi : {{ $beranda->deskripsi }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-admin>
