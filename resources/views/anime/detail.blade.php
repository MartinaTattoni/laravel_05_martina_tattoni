<x-layout>

    <div class="container-fluid my-5">
        
        <div class="row">
            
            <div class="col-12">
                
                <h1 class="display-1 text-center">Dettaglio dell'anime {{$anime['title']}}</h1>
                
            </div>
            
        </div>
        
    </div>


    <div class="container my-5">
        
        <div class="row">
            
           

            
            <div class="col-12 col-md-6 my-2">

                <img src="{{$anime['images']['jpg']['large_image_url']}}" class="card-img-top" alt="...">
                
            </div>

            <div class="col-12 col-md-6">

                <h1>Title: {{$anime['title']}}</h1>
            </div>
            
            
        
            
        </div>
        
    </div>
    

</x-layout>