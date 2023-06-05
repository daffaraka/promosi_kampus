@extends('general.layouts.frontlayout')

@section('title', 'Quisioner')
@section('content')
    <section>
        <div class="page-header min-vh-75">
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

                                    <li>Banyak Dijangkau Masyarakat</li>
                                    <li>Mudah Di Dapatkan</li>
                                    <li>Menarik</li>
                                    <li>Biayanya Terjangkau</li>

                                </ol>
                            </div>
                        </div>
                        <div class="card  mt-1">
                            <div class="card-header pb-0 text-left bg-transparent">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder ">
                                                    Kriteria</th>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    Tidak</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    9</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    8</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    7
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    6
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    5
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    4
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    3
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    2
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    1
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                Kritera promosi manakah yang lebih penting? banyak dijangkau masyarakat atau
                                                mudah di dapatkan?
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Banyak Dijangkau Masyarakat</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p1_1" name="p1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2" name="p1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_3" name="p1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_4" name="p1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_5" name="p1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_6" name="p1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_7" name="p1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_8" name="p1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_9" name="p1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_10" name="p1" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Mudah di dapatkan</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p1_2_1" name="p2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_2" name="p2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_3" name="p2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_4" name="p2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_5" name="p2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_6" name="p2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_7" name="p2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_8" name="p2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_9" name="p2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p1_2_10" name="p2" value="2">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                {{-- <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign
                                        up</a>
                                </p> --}}
                            </div>
                        </div>
                        <div class="card  mt-1">
                            <div class="card-header pb-0 text-left bg-transparent">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder ">
                                                    Kriteria</th>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    Tidak</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    9</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    8</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    7
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    6
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    5
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    4
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    3
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    2
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    1
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                Kritera promosi manakah yang lebih penting? banyak dijangkau masyarakat atau
                                                menarik?
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Banyak Dijangkau Masyarakat</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p2_1" name="p2-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-2" name="p2-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-3" name="p2-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-4" name="p2-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-5" name="p2-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-6" name="p2-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-7" name="p2-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-8" name="p2-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-9" name="p2-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-10" name="p2-1" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Menarik</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p2_2" name="p2-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-2" name="p2-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-3" name="p2-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-4" name="p2-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-5" name="p2-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-6" name="p2-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-7" name="p2-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-8" name="p2-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-9" name="p2-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-2-10" name="p2-2" value="2">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">

                            </div>
                        </div>
                        <div class="card  mt-1">
                            <div class="card-header pb-0 text-left bg-transparent">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder ">
                                                    Kriteria</th>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    Tidak</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    9</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    8</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    7
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    6
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    5
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    4
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    3
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    2
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    1
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                Kritera promosi manakah yang lebih penting? banyak dijangkau masyarakat atau
                                                biayanya terjangkau?
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Banyak Dijangkau Masyarakat</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p3_1" name="p3-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-2" name="p3-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-3" name="p3-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-4" name="p3-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-5" name="p3-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-6" name="p3-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-7" name="p3-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-8" name="p3-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-9" name="p3-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-10" name="p3-1" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Biaya Terjangkau</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p3_2" name="p3-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-2" name="p3-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-3" name="p3-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-4" name="p3-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-5" name="p3-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-6" name="p3-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-7" name="p3-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-8" name="p3-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-9" name="p3-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-3-10" name="p3-2" value="2">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                {{-- <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign
                                        up</a>
                                </p> --}}
                            </div>
                        </div>
                        <div class="card  mt-1">
                            <div class="card-header pb-0 text-left bg-transparent">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder ">
                                                    Kriteria</th>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    Tidak</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    9</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    8</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    7
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    6
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    5
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    4
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    3
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    2
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    1
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                Kritera promosi manakah yang lebih penting? Mudah di dapat atau menarik?

                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Mudah Didapat</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p4_1" name="p4-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-2" name="p4-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-3" name="p4-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-4" name="p4-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-5" name="p4-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-6" name="p4-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-7" name="p4-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-8" name="p4-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-9" name="p4-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-10" name="p4-1" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Menarik</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p4_2" name="p4-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-2" name="p4-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-3" name="p4-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-4" name="p4-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-5" name="p4-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-6" name="p4-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-7" name="p4-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-8" name="p4-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-9" name="p4-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-10" name="p4-2" value="2">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                {{-- <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign
                                        up</a>
                                </p> --}}
                            </div>
                        </div>
                        <div class="card  mt-1">
                            <div class="card-header pb-0 text-left bg-transparent">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder ">
                                                    Kriteria</th>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    Tidak</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    9</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    8</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    7
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    6
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    5
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    4
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    3
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    2
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    1
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                Kritera promosi manakah yang lebih penting? Mudah di dapat atau biayanya
                                                terjangkau?

                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Mudah Didapat</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p5_1" name="p5-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-2" name="p5-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-3" name="p5-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-4" name="p5-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-5" name="p5-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-6" name="p5-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-7" name="p5-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-8" name="p5-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-9" name="p5-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-10" name="p5-1" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Biaya Terjangkau</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p5_2" name="p5-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-2" name="p5-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-3" name="p5-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-4" name="p5-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-5" name="p5-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-6" name="p5-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-7" name="p5-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-8" name="p5-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-5-9" name="p5-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-4-10" name="p5-2" value="2">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                {{-- <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign
                                        up</a>
                                </p> --}}
                            </div>
                        </div>
                        <div class="card  mt-1">
                            <div class="card-header pb-0 text-left bg-transparent">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder ">
                                                    Kriteria</th>
                                                <th class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    Tidak</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    9</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    8</th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    7
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    6
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    5
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    4
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    3
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    2
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    1
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                Kritera promosi manakah yang lebih penting? Menarik atau biayanya
                                                terjangkau?

                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Menarik</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p6_1" name="p6-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-2" name="p6-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-3" name="p6-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-4" name="p6-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-5" name="p6-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-6" name="p6-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-7" name="p6-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-8" name="p6-1" value="1">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-9" name="p6-1" value="1">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-10" name="p6-1" value="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder"
                                                    style="s">
                                                    Biaya Terjangkau</td>
                                                <td class="text-uppercase text-dark text-md font-weight-bolder  ps-2">
                                                    <input type="radio" id="p6_2" name="p6-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-2" name="p6-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-3" name="p6-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-4" name="p6-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-5" name="p6-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-6" name="p6-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-7" name="p6-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-8" name="p6-2" value="2">
                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-9" name="p6-2" value="2">

                                                </td>
                                                <td
                                                    class="text-center text-uppercase text-dark text-md font-weight-bolder ">
                                                    <input type="radio" id="p-6-10" name="p6-2" value="2">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-end   pt-0 px-lg-2">
                                <button class="btn btn-primary bg-gradient-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        const radioButtons = document.querySelectorAll('input[name="p1"]');

        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '1') {

                    document.getElementById('p1_2_1').checked = true;
                }
            });
        });

        const radioButtons2 = document.querySelectorAll('input[name="p2"]');

        radioButtons2.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '2') {

                    document.getElementById('p1_1').checked = true;
                } else {

                }
            });
        });


        const radioButtons3 = document.querySelectorAll('input[name="p2-1"]');

        radioButtons3.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '1') {

                    document.getElementById('p2_2').checked = true;
                }
            });
        });

        const radioButtons4 = document.querySelectorAll('input[name="p2-2"]');

        radioButtons4.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '2') {

                    document.getElementById('p2_1').checked = true;
                } else {

                }
            });
        });

        const radioButtons5 = document.querySelectorAll('input[name="p3-1"]');

        radioButtons5.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '1') {

                    document.getElementById('p3_2').checked = true;
                }
            });
        });

        const radioButtons6 = document.querySelectorAll('input[name="p3-2"]');

        radioButtons6.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '2') {

                    document.getElementById('p3_1').checked = true;
                } else {

                }
            });
        });

        const radioButtons7 = document.querySelectorAll('input[name="p4-1"]');

        radioButtons7.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '1') {

                    document.getElementById('p4_2').checked = true;
                }
            });
        });

        const radioButtons8 = document.querySelectorAll('input[name="p4-2"]');

        radioButtons8.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '2') {

                    document.getElementById('p4_1').checked = true;
                } else {

                }
            });
        });

        const radioButtons9 = document.querySelectorAll('input[name="p5-1"]');

        radioButtons9.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '1') {

                    document.getElementById('p5_2').checked = true;
                }
            });
        });

        const radioButtons10 = document.querySelectorAll('input[name="p5-2"]');

        radioButtons10.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '2') {

                    document.getElementById('p5_1').checked = true;
                } else {

                }
            });
        });

        const radioButtons11 = document.querySelectorAll('input[name="p6-1"]');

        radioButtons11.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '1') {

                    document.getElementById('p6_2').checked = true;
                }
            });
        });

        const radioButtons12 = document.querySelectorAll('input[name="p6-2"]');

        radioButtons12.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const selectedValue = this.value;

                if (selectedValue === '2') {

                    document.getElementById('p6_1').checked = true;
                } else {

                }
            });
        });
    </script>
@endsection
