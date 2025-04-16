<x-layout>
    
    <div class="container-fluid my-5">
        
        <div class="row">
            
            <div class="col-12">
                
                <h1 class="display-1 text-center">{{$type_name}}</h1>
                
            </div>
            
        </div>
        
    </div>
    
    
    <div class="container my-5">
        
        <div class="row">
            
            @foreach ($animes as $anime)

            
                <div class="col-12 col-md-3 my-2">

                    <div class="card" style="width: 18rem;">

                        <img src="{{$anime['images']['jpg']['image_url']}}" class="card-img-top" alt="...">

                        <div class="card-body">
                            
                          <h5 class="card-title">{{$anime['title']}}</h5>

                          <p class="card-text">Numero di episodi: {{$anime['episodes']}}</p>

                          <a href="{{route('anime.detail', ['id' => $anime['mal_id']])}}" class="btn btn-dark">Dettaglio</a>

                        </div>

                    </div>
                
                
                </div>
            
            
            @endforeach
            
        </div>
        
    </div>
    
    
</x-layout>