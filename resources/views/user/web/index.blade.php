<div class="container">
    <div class="input-icon m-2">
        <input type="text" value="" class="form-control" placeholder="Search…">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                <path d="M21 21l-6 -6"></path>
            </svg>
        </span>
    </div>
    <div class="row mb-2">
        <div class="col-2 m-2">
            <div class="col-auto"><span class="avatar"
                    style="background-image: url({{ asset('./static/avatars/000m.jpg') }})"></span></div>
        </div>
        <div class="col-2 m-2">
            <div class="col-auto"><span class="avatar"
                    style="background-image: url({{ asset('./static/avatars/000m.jpg') }})"></span></div>
        </div>
        <div class="col-2 m-2">
            <div class="col-auto"><span class="avatar"
                    style="background-image: url({{ asset('./static/avatars/000m.jpg') }})"></span></div>
        </div>
    </div>
    <div class="img-responsive img-responsive-3x1 rounded-3 border"
        style="background-image: url({{ asset('./static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg') }})">
    </div>
    <div class="row g-2 mt-2 align-items-center">
        <div class="col">
            <h2 class="page-title">
                Best Seller
            </h2>
        </div>
    </div>
    <div class="d-flex mt-2"
        style="width: 100%; overflow-y: hidden; overflow-x: auto; white-space: nowrap; /* Menyebabkan elemen-elemen fleksibel tetap dalam satu baris */">

        @foreach ($makanans as  $makanan)
        <div class="card m-2" style="min-width: 180px;">
            <!-- Tambahkan kelas 'mr-2' untuk memberi jarak antar kartu -->
            <div class="card-body">
                <img class="mb-2" src="{{ asset('/storage/menu/'.$makanan->image) }}" alt="" style="width: 140px; height: 190px; object-fit: cover;">
                <h4 class="card-text">{{ $makanan->nama }}</h4>
                <p class="card-text">Rp. {{ $makanan->harga }}</p>
            </div>
            <div class="card-footer">
<button wire:click="addKeranjang({{ $makanan->id }})" class="btn btn-info" style="float: right;">+card</button>
            </div>
        </div>
        @endforeach
        <!-- Tambahkan lebih banyak kartu di sini -->
    </div>
    <div class="row g-2 mt-2 align-items-center">
        <div class="col">
            <h2 class="page-title">
                Best Seller
            </h2>
        </div>
    </div>
    <div class="d-flex mt-2"
        style="width: 100%; overflow-y: hidden; overflow-x: auto; white-space: nowrap; /* Menyebabkan elemen-elemen fleksibel tetap dalam satu baris */">

         @foreach ($minumans as  $minuman)
        <div class="card m-2" style="min-width: 180px;">
            <!-- Tambahkan kelas 'mr-2' untuk memberi jarak antar kartu -->
            <div class="card-body">
                <img class="mb-2" src="{{ asset('/storage/menu/'.$minuman->image) }}" alt="" style="width: 140px; height: 190px; object-fit: cover;">
                <h4 class="card-text">{{ $minuman->nama }}</h4>
                <p class="card-text">Rp. {{ $minuman->harga }}</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-info" style="float: right;">+card</button>
            </div>
        </div>
        @endforeach

</div>