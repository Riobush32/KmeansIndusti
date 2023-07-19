@extends('main')

@section('content')
<div
    class="card overflow-auto sm:rounded-lg bg-base-300 shadow-xl main-content w-[95vw] lg:w-[68vw] laptop:w-[95%] xl:w-[95%] h-[80vh]">
    <div class="px-4 py-5 sm:px-6">
        <div class="flex">
            <div class="grow">
                <h3 class="text-lg font-medium leading-6 ">{{ $judul }}</h3>
            </div>

            <a href="{{ url("/pengukur/$pengukur->id/info")}}" class="btn btn-outline btn-info btn-sm">
                <span class="material-symbols-sharp">
                    info
                </span>
            </a>

            <div class="ml-2">
                <a href="{{ url('/pengukur')}}" class="btn btn-outline btn-error btn-sm">
                    <span class="material-symbols-sharp">
                        arrow_back
                    </span>
                </a>
            </div>

        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="">
        <div class="border-t border-base-300">

            <div class="overflow-x-auto">

                <table class="table w-full">

                    <form action="{{ url("/pengukur/$pengukur->id") }}" method="POST">
                        @csrf @method('PATCH')
                        <!-- row 1 -->
                        <tr>
                            <th>NIP</th>
                            <td>
                                <input type="number" placeholder="Type here"
                                    class="input input-ghost w-full max-w-xs input-sm bg-transparent" name="nip"
                                    required value="{{ $pengukur->nip }}" />
                            </td>

                        </tr>
                        <!-- row 2 -->
                        <tr class="active">
                            <th>Nama</th>
                            <td>
                                <input type="text" placeholder="Type here"
                                    class="input input-ghost w-full max-w-xs input-sm bg-transparent" name="nama"
                                    required value="{{ $pengukur->nama }}" />
                            </td>
                        </tr>
                        <!-- row 1 -->
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>
                                <select class="select select-ghost w-full max-w-xs" name="jenis_kelamin">
                                    <option selected value="{{ $pengukur->jenis_kelamin }}">{{ $pengukur->jenis_kelamin }}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </td>

                        </tr>

                        <tr class="active">

                            <td>
                                <button type="submit" class="btn gap-2 btn-outline btn-primary">
                                    <span class="material-symbols-sharp">
                                        save
                                    </span>
                                    Save
                                </button>
                            </td>
                            <th></th>
                        </tr>
                    </form>
                </table>
            </div>
        </div>



    </div>




</div>
@endsection
