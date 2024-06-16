@extends('adminTemplate.layouts.main')
@section('container')
    @include('sweetalert::alert')
    <h3>{{ $title }}</h3>
    <hr>
    <a href="{{ URL::to('/companie/benefit/create') }}" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"
            aria-hidden="true"></i>
        Add</a>
    <table id="datatable1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Benefit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($benefits as $index => $benefit)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $benefit->benefit }}</td>
                    <td>
                        <div class="d-flex ">
                            <a href="{{ URL::to('companie/benefit/' . $benefit->id) }}"
                                class="btn btn-sm btn-info mr-2">Show</a>
                            <a href="{{ URL::to('companie/benefit/' . $benefit->id . '/edit') }}"
                                class="btn btn-sm btn-warning mr-2">Edit</a>
                            <form action="{{ URL::to('companie/benefit/' . $benefit->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Anda Yakin akan Menghapus {{ $benefit->id }}?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
