@extends('app')

@section('page_title', 'Data IR')
@section('header_title', 'Data IR')

@section('main_content')
    <div class="card">
        <!-- card header  -->
        <div class="card-header bg-white  py-4">
            <h4 class="mb-0">Data IR/h4>
        </div>
        <!-- table  -->
        <div class="table-responsive">
            <table class="table text-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Tanggal IR</th>
                        <th>Total IR</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ir as $i => $data)
                        <tr>
                            <td>{{ $data-> }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- card footer  -->
        <div class="card-footer bg-white text-center">
            <a href="#" class="link-primary">View All Projects</a>

        </div>
    </div>
@endsection
