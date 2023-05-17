@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">genres</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Khanzab</td>
                        <td>Arswendy Bening Swara, Rizky Hanggono, <br>Yasamin Jasem, Tika Bravani, Fuad Idris</td>
                        <td>5.3</td>
                        <td>Kisah kelam anak mantan dukun santet</td>
                        <td>19-April-2023</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>The Dark Knight</td>
                        <td>Crishtian Bale</td>
                        <td>9.7</td>
                        <td>The Dark Knight menceritakan pertarungan sengitantara Batman dan Joker yang <br> merupakan salah satu musuh terbesarnya.</td>
                        <td>18-Juli-2008</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Call</td>
                        <td>Park Shin-Hye</td>
                        <td>7.1</td>
                        <td>telepon teror dari masa lalu yang bisa <br>mengubah takdir. </td>
                        <td>27-November-2020</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ant-Man and the Wasp: Quantumania</td>
                        <td>Kathryn Newton</td>
                        <td>6.1</td>
                        <td>menceritakan tentang kehidupan keluarga superhero yang masuk ke dunia <br>Quantum karena alat buatan Cassie.</td>
                        <td>15-Februari-2023</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>The Dude in Me</td>
                        <td>Jung Jin-Young</td>
                        <td>6.9</td>
                        <td>seorang bos gangster bernama Pan Soo yang secara tidak sengaja jiwanya tertukar dengan Dong Hyun karena sebuah kejadian tak terduga.</td>
                        <td>13-Februari-2019</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection