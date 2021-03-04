@extends('layout.main')

@section('title', 'Biodata Lazuardi Adinegara')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Contoh for</h1>

                        @for($i = 0; $i < 10; $i++)
                            <?php 
                                echo "Website Lazuardi Adinegara";
                                echo "<br />";
                            ?>
                        @endfor

                    <?php 
                        $array = array("Merah", "Hijau", "Biru", "Ungu");
                    ?>
                        
                        @foreach($array as $value)
                            <?php
                                echo "Warna: $value <br>";
                            ?> 
                        @endforeach
            </div>
        </div>
    </div>
@endsection