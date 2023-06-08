<x-admin>
    <x-admin.layout.item.namepage namepage="Daftar Pengumuman" />
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <x-admin.button.add url="#" dta=".tambahjelajah" dto="modal" />
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
                            @foreach ($list_jelajah as $jelajah)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jelajah->nama }}</td>
                                    <td>
                                        <x-admin.button.show url="#" dta="#showjelajah{{ $jelajah->id }}"
                                            dto="modal" />
                                        <x-admin.button.edit url="#" dta="#editjelajah{{ $jelajah->id }} "
                                            dto="modal" />
                                        <x-admin.button.delete id="{{ $jelajah->id }}" />
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
    <div class="modal fade tambahjelajah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/jelajah') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="nama" type="text" name="nama" placeholder="Judul Jelajah"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input id="link" type="text" name="link" placeholder="Link Jelajah"
                                class="form-control" required>
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- edit --}}
    @foreach ($list_jelajah as $jelajah)
        <div class="modal fade " id="editjelajah{{ $jelajah->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/jelajah', $jelajah->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12"
                                    style="float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0; ">
                                    <iframe width="770" height="440" src="{{ url($jelajah->link) }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                </div>
                                <hr>
                                <div class="col-md-12" style="margin-top: 22px">
                                    <div class="form-group">
                                        <input id="nama" type="text" name="nama" placeholder="Nama Lengkap"
                                            class="form-control" value="{{ $jelajah->nama }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="link" type="text" name="link" placeholder="Link Video"
                                            class="form-control" value="{{ $jelajah->link }}">
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
    @foreach ($list_jelajah as $jelajah)
        <div class="modal fade" id="showjelajah{{ $jelajah->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12"
                                style="float: none; clear: both; width: 100%; position: relative; padding-bottom: 56.25%; padding-top: 25px; height: 0; ">
                                <iframe width="770" height="440" src="{{ url($jelajah->link) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="col-xl-8">
                                    Judul Pengumuman : {{ $jelajah->nama }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
</x-admin>
