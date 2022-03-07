<x-themequiz title="">
    <div class="container">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">รายงานการขายรายวัน</div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('/order-product/reportdaily') }}" accept-charset="UTF-8">
                            <div class="form-row">
                                <div class="col-4">
                                    <input type="date" class="form-control" name="date" placeholder="ค้นหา..."
                                        value="{{ request('date') }}">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-search"></i> ค้นหา
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">รายงานวันที่ : {{ request('date') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>วันที่ดำเนินการเสร็จ</th>
                                        <th>หมายเลขคำสั่งซื้อ</th>
                                        <th>รหัสสินค้า</th>
                                        <th>จำนวน</th>
                                        <th>ราคา</th>
                                        <th>รวม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderproduct as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->completed_at }}</td>
                                            <td>{{ $item->order_id }}</td>
                                            <td>
                                                <div><img src="{{ url('storage/' . $item->product->photo) }}"
                                                        width="100" /> </div>
                                                <div>{{ $item->product->title }}</div>
                                            </td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h2>รวมราคาสินค้า {{ number_format($orderproduct->sum('total')) }} บาท</h2>




                    </div>
                </div>
            </div>
        </div>
    </div>
</x-themequiz>
