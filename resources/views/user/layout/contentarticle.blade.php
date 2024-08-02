<main id="main">

    <div class="container" style="margin-top: 150px; margin-bottom: 75px;">
      
      <h1 class="text-center mb-4">{{ $article->title }}</h1>
    
      <div class="row">
        
        <div class="col-md-4">
          <center>
            <img src="{{ url('articlephoto/' . $article->preview) }}" style="max-width: 100%; height: auto;" alt="Gambar Artikel">
          </center>
        </div>
    
        <div class="col-md-8">
          <p>
            {{ $article->text }}
          </p>
    
        </div>
      </div>
    </div>
  
  </main>