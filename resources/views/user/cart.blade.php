@extends('user.layout')
@section('title', 'Cart')
@section('content')
    <div class="cart-body">
        <div class="card-container">
            {{-- <h2 style="color: #5BC2AE">GIỎ HÀNG  </h2> --}}
            <div class="row">
                <div class="col-md-9 cart">
                    <div class="cart-title">
                        <div class="row">
                            <div class="col">
                                <h4 style="color: #5BC2AE; font-size: 34px;">GIỎ HÀNG </h4>
                            </div>
                            <div class="col align-self-center text-right text-muted">SL: {{ $count }}</div>
                        </div>
                    </div>

                    <div class="table-content ">
                        <table id="product-table">
                            <thead style="color: green;">
                                <tr class="table-header text-center">
                                    <th>Ảnh</th>
                                    <th>Tên thuốc</th>
                                    <th>Đơn giá</th>
                                    <th>SL</th>
                                    <th>Tổng</th>
                                    <th>Xóa</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr data-rowId="{{ $item->rowId }}">
                                        <td style="width: 80px;">
                                            {{-- nmbt --}}
                                            <img src="/assetUser/{{ $item->options->images }}" alt=""
                                                style="width: 90%">

                                        </td>
                                        <td style="width: 350px;">{{ $item->name }}</td>
                                        <td>{{ number_format(floatval($item->price), 0, ',', '.') }}</td>
                                        <td style="padding-top: 20px;">
                                            {{-- <button onclick="decreaseQuantity('{{ $item->rowId }}')">-</button>
                                            <input id="quantity_{{ $item->rowId }}" type="text"
                                                value="{{ $item->qty }}">
                                            <button onclick="increaseQuantity('{{ $item->rowId }}')">+</button> --}}

                                            <form action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                                <button type="submit" name="action" value="decrease">-</button>
                                                <span>{{ $item->qty }}</span>
                                                <button type="submit" name="action" value="increase">+</button>
                                            </form>
                                        </td>
                                        
                                        {{-- <td>{{ $item->price * $item->qty }}</td> --}}
                                        <td>
                                        {{ number_format(floatval($item->price * $item->qty), 0, ',', '.') }}
                                        </td>
                                        <td style="text-align: center; padding-top: 20px;">
                                            {{-- <img onclick="removeCart('{{ $item->rowId }}')"
                                                src="/assetUser/img/del-btn.png" style="width: 30px; height: 30px" />
                                                 --}}
                                            <p><a href="/cart/delete/{{ $item->rowId }}"><img
                                                        src="/assetUser/img/del-btn.png"
                                                        style="width: 30px; height: 30px" /></a></p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="row border-top border-bottom">
                    <div class="row cart-main align-items-center">
                        <div class="col-2"><img class="cart-img img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">&euro; 44.00 <span class="cart-close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="row cart-main align-items-center">
                        <div class="col-2"><img class="cart-img img-fluid" src="https://i.imgur.com/ba3tvGm.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">&euro; 44.00 <span class="cart-close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row cart-main align-items-center">
                        <div class="col-2"><img class="cart-img img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Shirt</div>
                            <div class="row">Cotton T-shirt</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">&euro; 44.00 <span class="cart-close">&#10005;</span></div>
                    </div>
                </div> --}}
                    <div class="cart-back-to-shop"><a href="/store">&leftarrow;<span class="text-muted">Back to
                                shop</span></a></div>
                </div>
                <div class="col-md-3 summary">
                    <div>
                        <h5><b style="color: white">Summary</b></h5>
                    </div>
                    <hr>
                    {{-- <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS 3</div>
                        <div class="col text-right">&euro; 132.00</div>
                    </div> --}}
                    <form>
                        <p style="color: black">GIAO HÀNG</p>
                        <select class="cart-select">
                            <option class="text-muted">Thường</option>
                            <option class="text-muted">Nhanh</option>
                        </select>
                        <p style="color: black">MÃ VOUCHER</p>
                        <input class="cart-input" id="cart-code" placeholder="Nhập mã">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        {{-- <div class="col">{{ $count }}</div> --}}
                        <div class="col text-right">{{ number_format(floatval($total), 0, ',', '.') }}.000 VNĐ</div>

                    </div>
                    <button class="cart-btn" style="background-color: #4a443b; box-shadow: 10px"><a href="/checkout"
                            style="color: white; font-size: 20px">THANH TOÁN</a> </button>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
