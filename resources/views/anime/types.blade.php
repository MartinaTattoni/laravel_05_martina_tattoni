<x-layout>



    <div class="container-fluid my-5">

        <div class="row">

            <div class="col-12">

                <h1 class="display-1 text-center">Tutti gli anime</h1>

            </div>

        </div>

    </div>


    <div class="container my-5">

        <div class="row justify-content-center">

            @foreach ($types as $type)

                <div class="col-12 col-md-2 m-2 d-flex justify-content-center">

                    <a class="text-dark" href="{{route('anime.bytype', ['type_id' => $type['mal_id'],'type_name' => $type['name'] ])}}">{{$type['name']}}</a>

                </div>
                
            @endforeach

        </div>

    </div>

</x-layout>