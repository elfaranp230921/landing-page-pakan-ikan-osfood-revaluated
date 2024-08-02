@include('admin.layout.header')
@include('admin.layout.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
                <li class="breadcrumb-item active">Add Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Product Form</h5>

          <!-- Multi Columns Form -->
          <form class="row g-3" method="post" action="{{ route('products.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
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
            <div class="row mb-3">
                <label for="preview" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="preview" name="preview">
                </div>
             </div>    
            <div class="col-md-12">
              <label for="title" class="form-label">Tittle</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-12">
              <label for="information" class="form-label">Information</label>
              <input type="text" class="form-control" id="information" name="information">
            </div>
            <div class="text-center" style="margin-top: 30px;">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="{{ route('product') }}" class="btn btn-secondary"> Back </a>           
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>
</main><!-- End #main -->
@include('admin.layout.footer')