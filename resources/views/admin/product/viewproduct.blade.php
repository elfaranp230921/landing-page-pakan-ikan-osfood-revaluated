@include('admin.layout.header')
@include('admin.layout.sidebar')
<main id="main" class="main">
<div class="pagetitle">
    <h1>Product</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
    <div class="row">
          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling overflow-auto">
            <div class="filter" style="right: 4%">
                <a href="{{ route('addproduct') }}" class="btn btn-warning">
                    <i class="bi bi-file-earmark-plus"></i> Add Data
                  </a>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Product <span>| Osfood Revaluated</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Preview</th>
                      <th scope="col">Title</th>
                      <th scope="col">Information</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>
                                <img src="{{asset('productphoto/'.$item->preview)}}"  style="max-width: 200px; max-height: 200px;" alt="Preview Product">
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->information }}</td>
                            <td>
                                <a href="{{ route('product.detail', $item->id) }}" class="btn btn-dark"><i class="bi bi-eye-fill"></i></a>
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
                                <form action="{{ route('products.delete', $item->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Top Selling -->

        </div>
      </div><!-- End Left side columns -->

  </section>
</main><!-- End #main -->
@include('admin.layout.footer')