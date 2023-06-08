<x-admin>
    <x-admin.layout.item.namepage namepage="Daftar Pengumuman" />
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <x-admin.button.add url="#" dta=".tambahguru" dto="modal" />
                <div class="card-body">
                    <table id="datatable1" class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="row">No</th>
                                <th>Nip</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_guru as $guru)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $guru->nip }}</td>
                                    <td>
                                        <x-admin.button.edit url="#" dta="#editguru{{ $guru->id }} "
                                            dto="modal" />
                                        <x-admin.button.delete id="{{ $guru->id }}" />
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
    <div class="modal fade tambahguru" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/guru') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="nip" type="text" name="nip" placeholder="nip Guru"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" name="password" placeholder="Passoword Guru"
                                class="form-control" required>
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- edit --}}
    @foreach ($list_guru as $guru)
        <div class="modal fade " id="editguru{{ $guru->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/guru', $guru->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 22px">
                                    <div class="form-group">
                                        <input id="nip" type="text" name="nip" placeholder="nip Lengkap"
                                            class="form-control" value="{{ $guru->nip }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" placeholder="Passoword guru"
                                        class="form-control" value="{{ $guru->password }}">
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
