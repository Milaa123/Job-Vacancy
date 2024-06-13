@extends ('adminTemplate.layouts.main')
@section('container')
@include('sweetalert::alert')

     <h3> {{ $title }} </h3>
     <hr>
<div class="row mt-3">
        @foreach($configurations as $configuration)
        <div class="col-6 ms-5">
            <img src="{{ URL::to('storage/'. $configuration->logo) }}" alt="{{ $configuration->company_name }}" width="300px">
        </div>

        <div class="col-6">
            <div class="col-12">
               <div class="form-group">
                <label for="name">Nama Perusahaan</label>
                <input type="email" id="email" name="email"  value="{{ $configuration->company_name }}"
                    class="form-control @error('email')is-invalid @enderror" readonly>
            </div>
            </div>

            <div class="col-12">
               <div class="form-group">
                <label for="name">Deskripsi Perusahaan</label>
                <textarea  class="form-control" readonly>{{ $configuration->description }}</textarea>
            </div>
            </div>

            <div class="col-12">
               <div class="form-group">
                <label for="name">Email Perusahaan</label>
                <input type="email" id="email" name="email"  value="{{ $configuration->email}}"
                    class="form-control @error('email')is-invalid @enderror" readonly>
            </div>
            </div>
            
            <div class="col-12">
               <div class="form-group">
                <label for="name">Nomer Telpon Perusahaan</label>
                <input type="email" id="email" name="email"  value="{{ $configuration->phone }}"
                    class="form-control @error('email')is-invalid @enderror" readonly>
             </div>
            </div>
            
             <div class="col-12">
               <div class="form-group">
                <label for="name">Alamat Perusahaan</label>
                <input type="email" id="email" name="email"  value="{{ $configuration->company_addres }}"
                    class="form-control @error('email')is-invalid @enderror" readonly>
            </div>
            </div>

        </div>
       <form action="{{URL::to('configuration/' . $configuration->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-md btn-danger m-2"
            onclick="return confirm('apakah Yakin Ingin Menghapus {{ $configuration->company_id }}')">
                Hapus
            </button>
            </form>
        <a href="{{ URL::to('/admin/configuration/' . $configuration->id . '/edit')}}" class="btn btn-warning btn-md m-2">Edit</a>
   @endforeach

</div>
@endsection