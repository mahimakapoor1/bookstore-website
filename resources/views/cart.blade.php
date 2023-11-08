@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            In Your Shopping Cart: <span> {{ count(session('cart', [])) }} items</span>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Image</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col" class="text-center">Delete</th>
                        <th scope="col" class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart', []) as $pdt)
                        <tr>
                            <td class="text-center">
                                <label for="name">{{ $pdt['product']->name }}</label>
                            </td>

                            <td class="text-center">
                                <img src="{{ $pdt['product']->image }}" alt="" width="40px" height="40px">
                            </td>

                            <td class="text-center">
                                <label for="price">Rs. {{ $pdt['product']->price }}</label>
                            </td>

                            <td class="text-center">
                            <a href="{{ route('cart.decr', ['id' =>$pdt['product']->id, 'qty' => $pdt['qty'] ]) }}" 
                            class="btn btn-outline-primary">-</a>
                                <input title="Qty" type="number" value="{{ $pdt['qty'] }}" max="99" min="1" readonly>
                                <a href="{{ route('cart.incr', ['id' =>$pdt['product']->id, 'qty' => $pdt['qty']]) }}"
                                   class="btn btn-outline-primary">+</a>
                            </td>

                            <td class="text-center">
                                <a href="{{ route('cart.delete', ['id' => $pdt['product']->id]) }}"
                                   class="glyphicon glyphicon-trash btn btn-outline-danger"></a>
                            </td>

                            <td class="text-center">Rs. {{ $pdt['product']->price  * $pdt['qty'] }}</td>
                        </tr>
                    @endforeach

                    @if(count(session('cart', [])) == 0)
                        <tr>
                            <th colspan="6" class="text-center">No product in cart</th>
                        </tr>
                    @else
                        <tr>
                            <th colspan="4" class="text-center"></th>
                            <th class="text-center">Total Price:</th>
                            <td class="text-center">Rs. {{ array_sum(array_map(function($pdt) {
                                return $pdt['product']->price * $pdt['qty'];
                            }, session('cart', []))) }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @if(count(session('cart', [])) != 0)
        <div class="text-center gap">
            <a href="{{ route('cart.pay') }}" class="btn btn-success btn-lg">Pay for Products</a>
        </div>
    @endif
</div>
@endsection
