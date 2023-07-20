@extends('main')

@section('content')


<div class="card  bg-base-100 shadow-xl main-content w-[95vw] lg:w-[68vw] laptop:w-[95%] xl:w-[95%] h-[80vh]">
    <div class="card-body overflow-auto ">
        <div class="md:flex md:flex-warp ">
            <div class="md:w-2/3 w-full">
                <h2 class="card-title">Data Industri: </h2>
            </div>
            <div class="flex mt-4 md:mt-0">
                <div class="form-control">
                    <form action="{{ route('industri.store') }}" class="input-group" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="file-input file-input-bordered file-input-primary w-full max-w-xs" name="excel"/>
                        <input type="number" placeholder="Tahun.." class="input input-bordered input-primary w-28 max-w-xs" name="tahun"/>
                        <button class="btn btn-active btn-primary w-10" type="submit">
                            <span class="material-symbols-sharp bg-transparent">
                                note_add
                            </span>
                        </button>
                        
                    </form>
                </div>
            </div>

        </div>

        <div class="h-full mt-8">

            <div class="overflow-x-auto">
                <table class="table table-compact w-full">

                    <thead>
                        <tr>
                            <th></th>
                            <th>Kecamatan</th>
                            <th>BerIzin</th>
                            <th>Tidak Berizin</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($data as $item)
                        <tr>
                            <th>{{ $no }}</th>
                            <td>{{ $item->kecamatan }}</td>
                            <td>{{ $item->berizin }}</td>
                            <td>{{ $item->tidak_berizin }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                <form action="{{ url("/data/industri/$item->id") }}" method="POST">
                                    @csrf @method('DELETE')

                                    {{-- <a href="{{ url("/data/industri/$item->id/info")}}"
                                        class="btn btn-outline btn-info btn-sm">
                                        <span class="material-symbols-sharp">
                                            info
                                        </span>
                                    </a>

                                    <a href="{{ url("/data/industri/$item->id/edit") }}"
                                        class="btn btn-outline btn-warning btn-sm">
                                        <span class="material-symbols-sharp">
                                            edit
                                        </span>
                                    </a> --}}
                                    {{-- delete button --}}
                                    <!-- The button to open modal -->
                                    {{-- <label for="my-modal" class="btn btn-error btn-outline  btn-sm">
                                        <span class="material-symbols-sharp">
                                            delete
                                        </span>
                                    </label> --}}

                                    <!-- Put this part before </body> tag -->
                                    <input type="checkbox" id="my-modal" class="modal-toggle" />
                                    <div class="modal">
                                        <div class="modal-box bg-warning">
                                            <h3 class="font-bold text-lg">
                                                <span class="material-symbols-sharp">
                                                    warning
                                                </span>
                                                Warning!
                                            </h3>
                                            <p class="py-4">yakin hapus data ini?!</p>
                                            <div class="modal-action">
                                                <label for="my-modal" class="btn btn-sm  btn-outline">cancel</label>
                                                <button type="submit" class="btn btn-error btn-outline  btn-sm">
                                                    <span class="material-symbols-sharp">
                                                        delete
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach



                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Kecamatan</th>
                            <th>BerIzin</th>
                            <th>Tidak Berizin</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>


            </div>

        </div>
        <div class="justify-end">
            <div class="laptop:hidden">{{ $data->links('pagination::simple-tailwind') }}</div>
            <div class="hidden laptop:block">{{ $data->links('pagination::tailwind') }}</div>
        </div>
    </div>
</div>

<script src="./src/js/alert.js"></script>

@endsection