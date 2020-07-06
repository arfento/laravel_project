@extends('layout/main')
@section('title','About Pages')
@section('container')
    <div class="container">
        <div class="col-10">
            <h1 class= mt-3>Halaman, 
            <?php echo $nama ?>  
            <br>
            <?= $nama ?>
            <br>
            <!--   pemanggilan variabel --> 
            
            {{$nama}} <!-- pemanggilan variabel-->
            
            </h1>
        </div>
    </div>
@endsection