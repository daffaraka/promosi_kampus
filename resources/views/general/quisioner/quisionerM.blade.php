@extends('general.layouts.frontlayout')

@section('title', 'Quisioner')
@section('content')

    <section>

        <div class="page-header min-vh-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column mx-auto">
                        <div class="card  mt-1">
                            <div class="card-header pb-0 text-left bg-primary">
                                @if (Session::get('status') == 'error')
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <h3 class="font-weight-bolder text-light ">Kriteria Promosi </h3>
                            </div>


                            <div class="card-body">
                                <ol class="mb-0">Terdapat 4 Kriteria Promosi Di Politeknik Negeri Subang diantaranya
                                    adalah sebagai berikut:

                                    <li>Jangkauan</li>
                                    <li>Menarik</li>
                                    <li>Informatif</li>
                                    <li>Efektifitas</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container position-sticky z-index-sticky top-0 ">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <nav
                        class="navbar navbar-expand-lg blur blur-rounded navbar-primary bg-primary  top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                        <div class="container-fluid pe-0 min-vh-15">
                            <h6>Kriteria manakah
                                yang menurut anda lebih penting dalam menentukan media promosi?</h6>
                        </div>
                    </nav>

                    <!-- End Navbar -->
                </div>
            </div>
        </div>

        <div class="min-vh-25"></div>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column mx-auto">

                        {{-- 1 --}}
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center bg-white">
                                            <h6 class=" mb-0">Perbandingan Antara:</h6> {{-- <h6>Berdasarkan Pertanyaan diatas, Lebih penting mana</h6> --}}
                                            <div class="row form-group col-12 col-lg-10 mb-0">
                                                <th>Kriteria</th>
                                                <th>Nilai</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">0</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">1</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">2</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">3</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">4</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">5</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">6</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">7</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">8</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">9</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>

                                                    <label for="p-1" class="form-label col-12 col-lg-2">Jangkauan
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-1" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-1" data-p="1"
                                                        data-k="2" oninput="$('#s-1').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label for="p-2" class="form-label col-12 col-lg-2">Menarik
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-2" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-2" data-p="2"
                                                        data-k="1" oninput="$('#s-2').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center bg-white">
                                            <h6 class=" mb-0">Perbandingan Antara:</h6> {{-- <h6>Berdasarkan Pertanyaan diatas, Lebih penting mana</h6> --}}
                                            <div class="row form-group col-12 col-lg-10 mb-0">
                                                <th>Kriteria</th>
                                                <th>Nilai</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">0</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">1</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">2</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">3</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">4</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">5</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">6</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">7</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">8</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">9</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>

                                                    <label for="p-3" class="form-label col-12 col-lg-2">Jangkauan
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-3" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-3" data-p="3"
                                                        data-k="4" oninput="$('#s-3').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label for="p-4" class="form-label col-12 col-lg-2">Informatif
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-4" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-4" data-p="4"
                                                        data-k="3" oninput="$('#s-4').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center bg-white">
                                            <h6 class=" mb-0">Perbandingan Antara:</h6> {{-- <h6>Berdasarkan Pertanyaan diatas, Lebih penting mana</h6> --}}
                                            <div class="row form-group col-12 col-lg-10 mb-0">
                                                <th>Kriteria</th>
                                                <th>Nilai</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">0</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">1</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">2</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">3</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">4</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">5</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">6</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">7</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">8</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">9</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>

                                                    <label for="p-5" class="form-label col-12 col-lg-2">Jangkauan
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-5" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-5" data-p="5"
                                                        data-k="6" oninput="$('#s-5').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label for="p-6" class="form-label col-12 col-lg-2">Efektifitas
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-6" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-6" data-p="6"
                                                        data-k="5" oninput="$('#s-6').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- 4 --}}
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center bg-white">
                                            <h6 class=" mb-0">Perbandingan Antara:</h6> {{-- <h6>Berdasarkan Pertanyaan diatas, Lebih penting mana</h6> --}}
                                            <div class="row form-group col-12 col-lg-10 mb-0">
                                                <th>Kriteria</th>
                                                <th>Nilai</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">0</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">1</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">2</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">3</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">4</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">5</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">6</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">7</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">8</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">9</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>

                                                    <label for="p-7" class="form-label col-12 col-lg-2">Menarik
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-7" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-7" data-p="7"
                                                        data-k="8" oninput="$('#s-7').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label for="p-8" class="form-label col-12 col-lg-2">Informatif
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-8" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-8" data-p="8"
                                                        data-k="7" oninput="$('#s-8').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- 5 --}}
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center bg-white">
                                            <h6 class=" mb-0">Perbandingan Antara:</h6> {{-- <h6>Berdasarkan Pertanyaan diatas, Lebih penting mana</h6> --}}
                                            <div class="row form-group col-12 col-lg-10 mb-0">
                                                <th>Kriteria</th>
                                                <th>Nilai</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">0</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">1</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">2</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">3</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">4</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">5</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">6</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">7</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">8</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">9</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>

                                                    <label for="p-9" class="form-label col-12 col-lg-2">Menarik
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-9" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-9" data-p="9"
                                                        data-k="10" oninput="$('#s-9').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label for="p-10" class="form-label col-12 col-lg-2">Efektifitas
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-10" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-10" data-p="10"
                                                        data-k="9" oninput="$('#s-10').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- 6 --}}
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center bg-white">
                                            <h6 class=" mb-0">Perbandingan Antara:</h6> {{-- <h6>Berdasarkan Pertanyaan diatas, Lebih penting mana</h6> --}}
                                            <div class="row form-group col-12 col-lg-10 mb-0">
                                                <th>Kriteria</th>
                                                <th>Nilai</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">0</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">1</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">2</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">3</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">4</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">5</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">6</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">7</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">8</th>
                                                <th style="padding: 0.75rem 1.5rem 0.75rem 0rem">9</th>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>

                                                    <label for="p-11" class="form-label col-12 col-lg-2">Informatif
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-11" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-11" data-p="11"
                                                        data-k="12" oninput="$('#s-11').val(this.value)"
                                                        onchange="gets(this)">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label for="p-12" class="form-label col-12 col-lg-2">Efektifitas
                                                    </label>
                                                </td>
                                                <td>
                                                    <output id="s-12" class="col-1 col-lg-1">0</output>
                                                </td>
                                                <td colspan="10">

                                                    <input type="range" value="0" class="form-range w-100"
                                                        min="0" max="9" id="p-12" data-p="12"
                                                        data-k="11" oninput="$('#s-12').val(this.value)"
                                                        onchange="gets(this)">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-end ">
                        <div class="col-lg-1 col-3">
                            <a type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0"
                                href="{{ url('/quisioner/2') }}">Next</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection @section('script_footer')

    <script type="text/javascript">
        function gets(dataa) {
            var v = $(dataa).val();
            var p = parseInt($(dataa).attr('data-p'));
            var k = parseInt($(dataa).attr('data-k'));

            if (p > k) {
                p = p - 1;

                document.getElementById('p-' + p).value = 0;
                document.getElementById('s-' + p).value = 0;

            } else {
                p = p + 1;


                document.getElementById('p-' + p).value = 0;
                document.getElementById('s-' + p).value = 0;

            }
        }
        // const radioButtons = document.querySelectorAll('input[name="p1"]');

        // radioButtons.forEach(function(radioButton) {
        //     radioButton.addEventListener('change', function() {
        //         const selectedValue = this.value;

        //         if (selectedValue === '1') {

        //             document.getElementById('p1_2_1').checked = true;
        //         }
        //     });
        // });

        // const radioButtons2 = document.querySelectorAll('input[name="p2"]');

        // radioButtons2.forEach(function(radioButton) {
        //     radioButton.addEventListener('change', function() {
        //         const selectedValue = this.value;

        //         if (selectedValue === '2') {

        //             document.getElementById('p1_1').checked = true;
        //         } else {

        //         }
        //     });
        // });
    </script>
@endsection
