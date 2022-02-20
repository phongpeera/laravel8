<x-themequiz title="">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card-body">
                        <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/product') }}" accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..."
                                    value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table d-none">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Price</th>
                                        <th>Cost</th>
                                        <th>Photo</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->content }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->cost }}</td>
                                            <td><img src="{{ url('storage/'.$item->photo )}}" width="100" /></td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>
                                                <a href="{{ url('/product/' . $item->id) }}"
                                                    title="View Product"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-eye" aria-hidden="true"></i>
                                                        View</button></a>
                                                <a href="{{ url('/product/' . $item->id . '/edit') }}"
                                                    title="Edit Product"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="POST" action="{{ url('/product' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Product"
                                                        onclick="return confirm('Confirm delete?')"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $product->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                        <div>
                            <div class="row">
                                <style>
                                    .card-img-top { width: 100%; height: 15vw; object-fit: contain; }
                                    .card-title  { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; }
                                </style>
                                @foreach($product as $item)
                                <div class="col-lg-4">
                                    <div class="card h-100" style="width: 18rem;">
                                        <img src="{{ url('storage/'.$item->photo )}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->title }}</h5>
                                            <p class="card-text text-danger">{{ $item->price }}</p>
                                            <a href="{{ url('/product/' . $item->id) }}" class="stretched-link"></a>
                                        </div>
                                        <!-- <div class="card-footer text-muted"> 2 days ago </div> -->
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="pagination-wrapper"> {!! $product->appends(['search' => Request::get('search')])->render() !!} </div>   
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-themequiz>
