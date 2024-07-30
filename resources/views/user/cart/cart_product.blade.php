@extends('front-layout.master')
@section('content')
<style>

.empty-div {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: auto;
        }

        .empty-msg {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .go-back {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .go-back:hover {
            background-color: #2de348;
        }
  .table-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        thead th {
            background-color: #007bff;
            color: #fff;
            text-align: center;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tbody td {
            vertical-align: middle;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .btn-danger {
            margin: 0;
            padding: 5px 10px;
        }

        .total-row td {
            font-weight: bold;
        }

        .checkout-container {
            text-align: center;
            margin-top: 20px;
        }

        .checkout-button {
            font-size: 18px;
            padding: 10px 20px;
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .checkout-button:hover {
            background-color: #0056b3;
            border-color: #004494;
            cursor: pointer;
        }

        .alert-success {
            text-align: center;
            margin-bottom: 20px;
        }
</style>
  @if(session('msg'))
   <h2 class="text-success">{{session('msg')}}</h2>
  @endif
  @if($userCart->isNotEmpty())
  <div class="table-container">
      <table class="table table-striped table-bordered">
          <thead>
              <tr>
                  <th>{{ __('lang.name') }}</th>
                  <th>{{ __('lang.description') }}</th>
                  <th>{{ __('lang.product') }}</th>
                  <th>{{ __('lang.price') }}</th>
                  <th>{{ __('lang.remove') }}</th>
              </tr>
          </thead>
          <tbody>
              @foreach($userCart as $userItem)
              <tr>
                  <td>{{ $userItem->logo ? $userItem->logo->name : 'N/A' }}</td>
                  <td>{{ $userItem->logo ? $userItem->logo->description : 'N/A' }}</td>
                  <td><img src="{{ $userItem->logo ? url('/image/' . $userItem->logo->logo_image) : 'N/A' }}" alt="Product Image"></td>
                  <td>{{ $userItem->logo ? $userItem->logo->price : 'N/A' }}</td>
                  <td>
                      <a href="{{ url(app()->getLocale() . '/remove-cart-logo?id=' . $userItem->id) }}" 
                         data-id="{{ $userItem->id }}" 
                         class="btn btn-danger btn-sm">
                         {{ __('lang.remove') }}
                      </a>
                  </td>
              </tr>
              @endforeach
              <tr class="total-row">
                  <td colspan="3">{{ __('lang.total_price') }}</td>
                  <td colspan="2">{{ $totalCartPrice }}</td>
              </tr>
          </tbody>
      </table>

      <div class="checkout-container">
          <form action="{{ route('check_out', ['locale' => app()->getLocale()]) }}" method="post">
              @csrf
              <button type="submit" class="btn checkout-button">{{ __('lang.checkout') }}</button>
          </form>
      </div>
  </div>
  @else
  <div class="empty-div">
    <p class="empty-msg">Your cart is empty. Please go shopping by clicking the link below:</p>
    <a href="/" class="go-back">Go to Shopping</a>
</div>
  @endif  
@endsection