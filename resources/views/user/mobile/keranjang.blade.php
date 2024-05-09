<div>
    {{-- {{ dd($keranjangs) }} --}}

        {{-- <button  wire:click='hapuskeranjang({{ $keranjang->id }})' class="btn btn-dangger">hapus</button> --}}


    <div class="container-xl">
                    <h4 m-1 mb-3>
                        Keranjang
                    </h4>
                    @foreach ($keranjangs as $keranjang)
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                                <div class="col-5">
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('/storage/menu/'.$keranjang->image) }}"
                                            class="card-img-top"></a>
                                </div>
                                <div class="col-5">
                                    <div class="row">
                                        <h4>{{ $keranjang->nama}}</h4>
                                        <div class="col d-flex gap-1">
                                            <div class="card d-flex"
                                                style="justify-content:center ; align-items: center;">
                                                <svg wire:click='kurangikeranjang({{ $keranjang->id }})' xmlns="http://www.w3.org/2000/svg" width="24" height="24"                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-minus">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M5 12l14 0" />
                                                </svg>
                                            </div>
                                            <div class="card d-flex"
                                                style="justify-content:center ; align-items: center;">
                                                <h4 class="p-2 m-auto">{{ $keranjang->jumlah}}</h4>
                                            </div>
                                            <div wire:click='tambahkeranjang({{ $keranjang->id }})' class="card d-flex"
                                                style="justify-content:center ; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 5l0 14" />
                                                    <path d="M5 12l14 0" />
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-1">
                                    <svg wire:click='hapuskeranjang({{ $keranjang->id }})' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        <div class="container card" style="position:sticky;">
            <div class="row d-flex">
                <div class="col-2 m-2 d-flex justify-content-center align-items-center">
                    <input class="form-check-input" style="width: 25px; height: 25px;" type="checkbox">
                </div>
                <div class="col m-2 ">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <h3 style="margin: 0; padding: 0;">Total: <strong>Rp{{ $total }}</strong></h3>
                    </div>
                </div>
                <div class="col m-2">
                    <div class="card">
                        <button class="btn btn-primary">Cekout</button>
                    </div>
                </div>
            </div>
        </div>
</div>