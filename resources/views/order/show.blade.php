<x-themequiz title="">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">คำสั่งซื้อหมายเลข {{ $order->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/order/' . $order->id . '/edit') }}" title="Edit Order"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                แก้ไข</button></a>

                        <form method="POST" action="{{ url('order' . '/' . $order->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Order"
                                onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> ยกเลิก</button>
                        </form>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>หมายเลขคำสั่งซื้อ</th>
                                        <td>{{ $order->id }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th> User Id </th>
                                        <td> {{ $order->user_id }} </td>
                                    </tr> --}}
                                    <tr>
                                        <th> หมายเหตุ </th>
                                        <td> {{ $order->remark }} </td>
                                    </tr>
                                    <tr>
                                        <th> รวมราคา </th>
                                        <td> {{ $order->total }} บาท</td>
                                    </tr>
                                    <tr>
                                        <th> สถานะ </th>
                                        <td> {{ $order->status }} </td>
                                    </tr>
                                    <tr>
                                        <th> วันที่สั่งซื้อ </th>
                                        <td> {{ $order->checking_at }} </td>
                                    </tr>
                                    <tr>
                                        <th> วันที่ชำระ </th>
                                        <td> {{ $order->paid_at }} </td>
                                    </tr>
                                    <tr>
                                        <th> วันที่ยกเลิก </th>
                                        <td> {{ $order->cancelled_at }} </td>
                                    </tr>
                                    <tr>
                                        <th> วันที่ดำเนินการเสร็จ </th>
                                        <td> {{ $order->completed_at }} </td>
                                    </tr>
                                    <tr>
                                        <th> Tracking </th>
                                        <td> {{ $order->tracking }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                @php
                    $orderproduct = $order->order_products;
                @endphp

                <div class="card mt-4">
                    <div class="card-header">รายละเอียด Order {{ $order->id }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>หมายเลขคำสั่งซื้อ</th>
                                        <th>รหัสสินค้า</th>
                                        <th>ชื่อสมาชิก</th>
                                        <th>จำนวน</th>
                                        <th>ราคา</th>
                                        <th>รวม</th>
                                        <th>การดำเนินการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderproduct as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->order_id }}</td>
                                            {{-- <td>{{ $item->product_id }}</td> --}}
                                            <td>
                                                <div><img src="{{ url('storage/' . $item->product->photo) }}"
                                                        width="100" /> </div>
                                                <div>{{ $item->product->title }}</div>
                                            </td>
                                            {{-- <td>{{ $item->user_id }}</td> --}}
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>
                                                <a href="{{ url('/order-product/' . $item->id) }}"
                                                    title="View OrderProduct"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-eye" aria-hidden="true"></i>
                                                        ข้อมูล</button></a>
                                                {{-- <a href="{{ url('/order-product/' . $item->id . '/edit') }}"
                                                    title="Edit OrderProduct"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a> --}}

                                                <form method="POST"
                                                    action="{{ url('/order-product' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete OrderProduct"
                                                        onclick="return confirm('Confirm delete?')"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        ลบ</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-themequiz>
