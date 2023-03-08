@extends('layout.master')
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <table class="table table-hover table-centered mb-0">
                    <tr>
                        <th>#</th>
                        <th>Tên sách</th>
                        <th>Tác giả</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td class="id">1</td>
                        <td>Something Book</td>
                        <td>Someone</td>
                        <td>
                            <button id="decre">-</button>
                            <input type="text" class="quantity" value=1>
                            <button id="incre">+</button>
                        </td>
                        <td class="price">12.99</td>
                        <td class="sum-price">12.99</td>
                        <td>
                            <form action="" method="delete">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>

                    {{-- <tr>
                        <td>2</td>
                        <td>Something Book2</td>
                        <td>Someone2</td>
                        <td>
                            <button id="decre">-</button>
                            <input type="text" class="quantity" name="quantity" value=1>
                            <button id="incre">+</button>
                        </td>
                        <td class="price">9.99</td>
                        <td class="sum-price">9.99</td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr> --}}
                </table>
            </div>
            <div></div>
            <p class="mb-0 me-5 d-flex align-items-center">
            <h4>Tổng tiền:</h4> <span class="total-price">12.99</span>
            </p>
        </div>

    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#decre', function() {
                minus();
                sum_price();
            });

            $(document).on('click', '#incre', function() {
                var a = $(this).closest("tr").find('.price').html();
                console.log(a);
                add();
                sum_price();
            });

            function add() {
                var val = parseInt($(this).closest("tr").find('.quantity').val());
                if (!isNaN(val)) {
                    $(this).closest("tr").find('.quantity').val(val + 1);
                }
            }

            function sum_price() {
                var val = parseInt($(this).closest("tr").find('.quantity').val());
                var price = parseFloat($(this).closest("tr").find('.price').html());
                console.log(price);
                var sum_price = (val * price).toFixed(2);
                $(this).closest("tr").find('.sum-price').html(sum_price);
            }

            function minus() {
                var val = parseInt($(this).closest("tr").find('.quantity').val());
                if (!isNaN(val) && val > 0) {
                    $(this).closest("tr").find('.quantity').val(val - 1);
                }
            }
            $(document).on('click', '.btn-delete', function() {
                // var id = $(this).closest("tr").find(".id").html();
                $(this).closest("tr").remove();
                $.ajax({
                    url: 'laravel_demo.test/cart',
                    type: 'DELETE',
                    success: function() {
                        console.log("success");
                    },
                    error: function() {
                        console.log("error");
                    }
                });
            });
        });
    </script>
@endsection
