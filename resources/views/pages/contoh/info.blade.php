@extends('main')

@section('content')


<!-- This example requires Tailwind CSS v2.0+ -->
<div
    class="card overflow-hidden sm:rounded-lg bg-base-300 shadow-xl main-content w-[95vw] lg:w-[68vw] laptop:w-[95%] xl:w-[95%] h-[80vh]">
    <div class="px-4 py-5 sm:px-6">
        <form action="{{ url("/pengukur/$pengukur->id") }}" method="POST" class="flex">
            @csrf @method('DELETE')
            <div class="grow">
                <h3 class="text-lg font-medium leading-6 ">{{ $judul }}</h3>
            </div>
            {{-- edit --}}
            <a href="{{ url("/pengukur/$pengukur->id/edit") }}"
                class="btn btn-outline btn-warning btn-sm ml-2">
                <span class="material-symbols-sharp">
                    edit
                </span>
            </a>
            
            {{-- btn delete  --}}

            <label for="my-modal" class="btn btn-error btn-outline  btn-sm">
                <span class="material-symbols-sharp">
                    delete
                </span>
            </label>

            
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
            
            {{-- cancel --}}

            <div class="ml-2">
                <a href="{{ url('/pengukur')}}" class="btn btn-outline btn-sm">
                    <span class="material-symbols-sharp">
                        arrow_back
                    </span>
                </a>
            </div>

        </form>

    </div>
    <div class="flex">
        <div class="border-t border-base-300 flex-1">
            <dl>
                <div class="bg-base-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium ">NIP</dt>
                    <dd class="mt-1 text-sm  sm:col-span-2 sm:mt-0">{{ $pengukur->nip }}</dd>
                </div>
                <div class="bg-base-200 px-4 py-5 md:py-[30px] sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium ">Nama</dt>
                    <dd class="mt-1 text-sm  sm:col-span-2 sm:mt-0">{{ $pengukur->nama }}</dd>
                </div>
                <div class="bg-base-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium ">Janis Kelamin</dt>
                    <dd class="mt-1 text-sm  sm:col-span-2 sm:mt-0">{{ $pengukur->jenis_kelamin }}</dd>
                </div>
            </dl>
        </div>

        
    </div>

</div>



@endsection
