<x-admin>
    <x-admin.layout.item.namepage namepage="Daftar Pengumuman" />
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <x-admin.button.add url="#" dta=".tambahmurid" dto="modal" />
                <div class="card-body">
                    <table id="datatable1" class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="row">No</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_murid as $murid)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $murid->nim }}</td>
                                    <td>
                                        <x-admin.button.edit url="#" dta="#editmurid{{ $murid->id }} "
                                            dto="modal" />
                                        <x-admin.button.delete id="{{ $murid->id }}" />
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
    <div class="modal fade tambahmurid" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/murid') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="nim" type="text" name="nim" placeholder="Nim Murid"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" name="password" placeholder="Passoword admin"
                                class="form-control" required>
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- edit --}}
    @foreach ($list_murid as $murid)
        <div class="modal fade " id="editmurid{{ $murid->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/murid', $murid->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 22px">
                                    <div class="form-group">
                                        <input id="nim" type="text" name="nim" placeholder="Nim murid"
                                            class="form-control" value="{{ $murid->nim }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password"
                                        placeholder="Masukkan Password Baru" class="form-control">
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

</x-admin>
