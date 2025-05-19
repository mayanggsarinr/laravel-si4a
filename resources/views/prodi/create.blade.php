@extends('layout.main') @section('title', 'Prodi') @section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Nama Program Studi</div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('prodi.store')}}" method="POST">
                @csrf
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label"
                            >Nama Fakultas</label
                        >
                        <input type="text" class="form-control" name="nama"  value="{{ old('nama')}}"/>
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="singkatan" class="form-label"
                            >Singkatan</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="singkatan" value="{{ old('singkatan')}}"/>
                        @error('singkatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                   </div>
                   <div class="mb-3">
                      <label for="kaprodi" class="form-label">Kaprodi</label>
                      <input type="text" class="form-control" name="kaprodi" value="{{ old('kaprodi')}}"/>
                      @error('kaprodi')
                          <div class="text-danger">{{ $message }}</div>
                      @enderror
                   </div>
                   <div class="mb-3">
                      <label for="sekretaris" class="form-label"
                        >Sekretaris</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        name="sekretaris" value="{{ old('sekretaris')}}"/>
                        @error('sekretaris')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                   </div>

                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
@endsection
