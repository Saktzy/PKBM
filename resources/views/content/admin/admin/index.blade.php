<x-admin>
    <x-admin.layout.item.namepage namepage="Daftar Pengumuman" />
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <x-admin.button.add url="#" dta=".tambahadmin" dto="modal" />
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
                            @foreach ($list_admin as $admin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->username }}</td>
                                    <td>
                                        <x-admin.button.edit url="#" dta="#editadmin{{ $admin->id }} "
                                            dto="modal" />
                                        <x-admin.button.delete id="{{ $admin->id }}" />
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
    <div class="modal fade tambahadmin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/admin') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="username" type="text" name="username" placeholder="Username Admin"
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
    @foreach ($list_admin as $admin)
        <div class="modal fade " id="editadmin{{ $admin->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel ">Large modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/admin', $admin->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 22px">
                                    <div class="form-group">
                                        <input id="username" type="text" name="username"
                                            placeholder="username Lengkap" class="form-control"
                                            value="{{ $admin->username }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" placeholder="Masukkan Password Baru"
                                        class="form-control">
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
