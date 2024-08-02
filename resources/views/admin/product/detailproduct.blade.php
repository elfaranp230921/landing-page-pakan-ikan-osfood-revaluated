@include('admin.layout.header')
@include('admin.layout.sidebar')
<main id="main" class="main">
<div class="pagetitle">
    <h1>Add Product</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
            <li class="breadcrumb-item active">Detail Product</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
    <section class="section">
        <!-- Card with an image on top -->
            <div class="card">
                <!-- Use Blade syntax to dynamically load the image URL -->
                    <img src="{{ asset('productphoto/' . $product->preview) }}" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <!-- Use Blade syntax to display product details -->
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->information }}</p>
                         <!-- Button div outside the card but still within the section -->
                         <div class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('product') }}" class="btn btn-secondary"> Back </a>           
                        </div>
                    </div>          
                    </div>
                </div><!-- End Card with an image on top -->
            </div>
    </section>
</main><!-- End #main -->

@include('admin.layout.footer')