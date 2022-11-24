@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="center">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <h4 class="pull-left page-title">Tata tertib</h4>
                    <ol class="breadcrumb pull-right">

                        <li class="active">Tata tertib</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('admin.tatatertib.create')}}" class="btn btn-primary btn-sm" > Buat</a>
    <!--  -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <p>Tata Tertib</p>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Tata tertib</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($tatatertib as $tatatertibs)
                            <tbody>
                                <tr>
                                    <td >{!! $tatatertibs->isi !!}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.tatatertib.edit', $tatatertibs->id )}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    </td>

                                </tr>
                            </tbody>
                            {{-- {!! $tatatertibs->isi !!}

                            <a href="{{route('admin.tatatertib.edit', $tatatertibs->id )}}" class="btn btn-warning">edit</a>
                            <a href="{{route('admin.tatatertib.delete', $tatatertibs->id )}}" class="btn btn-danger">delete</a> --}}
                        @endforeach
                    </table>


                </div>
                @if(session()->has('pesan'))
                <div class="alert alert-info">
                        {{ session('pesan') }}
                </div>
            @endif
            </div>
            </div>

        </div>

    </div>

    @endsection
