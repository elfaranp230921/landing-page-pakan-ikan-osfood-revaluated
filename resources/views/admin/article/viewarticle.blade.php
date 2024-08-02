@include('admin.layout.header')
@include('admin.layout.sidebar')
<main id="main" class="main">
<div class="pagetitle">
    <h1>Article</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Article</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
    <div class="row">
          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling overflow-auto">
            <div class="filter" style="right: 4%">
                <a href="{{ route('addarticle') }}" class="btn btn-warning">
                    <i class="bi bi-file-earmark-plus"></i> Add Data
                  </a>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Article <span>| Osfood Revaluated</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Preview</th>
                      <th scope="col">Title</th>
                      <th scope="col">Text</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($articles as $item)
                        <tr>
                            <td>
                                <img src="{{asset('articlephoto/'.$item->preview)}}"  style="max-width: 200px; max-height: 200px;" alt="Preview Acticle">
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->text }}</td>
                            <td>
                                <a href="{{ route('article.detail', $item->id) }}" class="btn btn-dark"><i class="bi bi-eye-fill"></i></a>
                                <a href="{{ route('article.edit', $item->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
                                <form action="{{ route('article.delete', $item->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">
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