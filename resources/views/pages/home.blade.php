@extends('layout.main')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/switcher.css') }}">
@endpush

@section('content')
<div class="bg-secondary text-white container" style="padding-top: 2rem;">
    <div class="text-center">
        <h1>Jadwal Kelas</h1>
    </div>
    <div class="text-center">
        <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
        </label>
    </div>
    <div id="main_content">
        <div class="text-center"><h2>Jadwal Peminatan EBT</h2></div>
        
        <div class="text-center"><h1>Senin</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Riset Operasi</p>
            <p class="nojarak">09.00 - 11.15</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Pemograman Web & Web Service</p>
            <p class="nojarak">13.00 - 15.30</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Sistem Operasi</p>
            <p class="nojarak">17.00 - 18.15</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Strategi Perancangan E-Business</p>
            <p class="nojarak pb-3">18.30 - 21.00</p>
        </div>

        <div class="text-center"><h1>Selasa</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Digital Entrepreneurship</p>
            <p class="nojarak">09.00 - 12.00</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Manajemen Keuangan</p>
            <p class="nojarak pb-3">13.00 - 15.30</p>
        </div>

        <div class="text-center"><h1>Rabu</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Perilaku Berorganisasi</p>
            <p class="nojarak">13.00 - 15.30</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Sistem Operasi</p>
            <p class="nojarak">17.00 - 18.15</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Digital Marketing</p>
            <p class="nojarak">18.30 - 21.00</p>
        </div>

        <div class="text-center"><h1>Kamis</h1></div>
        <div class="d-flex justify-content-between pb-3">
            <p class="nojarak">Sistem Operasi</p>
            <p class="nojarak">13.00 - 15.30</p>
        </div>
    </div>

    <div id="secondary_content">
        <div class="text-center"><h2>Jadwal Peminatan EIS</h2></div>
        
        <div class="text-center"><h1>Senin</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Riset Operasi</p>
            <p class="nojarak">09.00 - 11.15</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Pemograman Web & Web Service</p>
            <p class="nojarak">13.00 - 15.30</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Sistem Operasi</p>
            <p class="nojarak">17.00 - 18.15</p>
        </div>

        <div class="text-center"><h1>Selasa</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Digital Entrepreneurship</p>
            <p class="nojarak">09.00 - 12.00</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Manajemen Keuangan</p>
            <p class="nojarak pb-3">13.00 - 15.30</p>
        </div>

        <div class="text-center"><h1>Rabu</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Manajemen Sistem Informasi Korporat</p>
            <p class="nojarak">09.00 - 12.00</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Perilaku Berorganisasi</p>
            <p class="nojarak">13.00 - 15.30</p>
        </div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Sistem Operasi</p>
            <p class="nojarak">17.00 - 18.15</p>
        </div>

        <div class="text-center"><h1>Kamis</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Sistem Operasi</p>
            <p class="nojarak">13.00 - 15.30</p>
        </div>

        <div class="text-center"><h1>Jumat</h1></div>
        <div class="d-flex justify-content-between">
            <p class="nojarak">Supply Chain Management</p>
            <p class="nojarak pb-3">07.30 - 10.00</p>
        </div>
    </div> 
</div>

<script>
    let mainContent = document.querySelector('#main_content');
    let secondaryContent = document.querySelector('#secondary_content');

    document.querySelector('.switch input').addEventListener('change', e => { 
    mainContent.style.display = e.target.checked ? 'block' : 'none';
    secondaryContent.style.display = e.target.checked ? 'none' : 'block';
    });
</script>
@endsection