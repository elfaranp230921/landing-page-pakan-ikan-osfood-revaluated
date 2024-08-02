@include('admin.layout.header')
@include('admin.layout.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Article</li>
                <li class="breadcrumb-item active">Edit Article</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Article Form</h5>

          <!-- Multi Columns Form -->
          <form class="row g-3" method="post" action="{{ route('article.update', $articles->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')        
            <div class="row mb-3">
                <!-- Include your form fields with the current values here -->
            </div>
                @if ($errors->any())
                      <div class="alert alert-danger">
                        <div class="alert-title"><h4>Whoops!</h4></div>
                          There are some problems with your input.
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div> 
                    @endif

                    @if (session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                      <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                <div class="col-md-12">
                    <label for="preview" class="form-label">Preview</label>
                    <input type="file" class="form-control" id="preview" name="preview">
                    @if ($articles->preview)
                        <img src="{{ asset('articlephoto/' . $articles->preview) }}" style="max-width: 500px; max-height: 500px;" alt="Preview">
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $articles->title) }}">
                </div>
                <div class="col-12">
                    <label for="text" class="form-label">Text</label>
                    <input type="text" class="form-control" id="text" name="text" value="{{ old('text', $articles->text) }}">
                </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('article') }}" class="btn btn-secondary"> Back </a>           
                    </div>
                </form><!-- End Multi Columns Form -->

            </div>
      </div>

    </div>
</main><!-- End #main -->
@include('admin.layout.footer')