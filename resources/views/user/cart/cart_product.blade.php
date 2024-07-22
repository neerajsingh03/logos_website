@extends('front-layout.master')
@section('content')
<center>
  @if(session('msg'))
   <h2 class="text-success">{{session('msg')}}</h2>
  @endif
<table class="table table-striped table-bordered" style="width:900px">
    <thead>
      <tr>
        <th>{{__('lang.name')}}</th>
        <th>{{__('lang.description')}}</th>
        <th>{{__('lang.product')}}</th>
        <th>{{__('lang.price')}}</th>
        <th>{{__('lang.remove')}}</th>
      </tr>
    </thead>
    {{-- <tbody>
      @foreach($userCart as $userItem)
      <tr>
        <td style="width:300px">{{$userItem->logo->name}}</td>
        <td style="width:300px">{{$userItem->logo->description}}</td>
        <td style="width:200px"><img src="{{ url('/image/' . $userItem->logo->logo_image) }}" alt=""></td>
        <td style="width:300px">{{$userItem->logo->price}}</td>
        <td><a href="{{url(app()->getLocale().'/remove-cart-logo?id=' .$userItem->id)}}" class="btn btn-danger btn btn-sm">{{__('lang.remove')}}</a></td>
      </tr>
      @endforeach
      <td colspan="3"><b>{{__('lang.total_price')}}</b></td>
      <td colspan="2"><b>{{$totalCartPrice}}</b></td>
    </tbody>
  </table> --}}
  <tbody>
    <form action="">
      @csrf
    @foreach($userCart as $userItem)
    <tr>
      <td style="width:300px">{{$userItem->logo ? $userItem->logo->name : 'N/A'}}</td>
      <td style="width:300px">{{$userItem->logo ? $userItem->logo->description : 'N/A'}}</td>
      <td style="width:200px"><img src="{{ $userItem->logo ?url('/image/' .  $userItem->logo->logo_image) : 'N/A' }}" alt=""></td>
      <td style="width:300px">{{ $userItem->logo ? $userItem->logo->price : 'N/A'}}</td>
      <td><a href="{{url(app()->getLocale().'/remove-cart-logo?id=' .$userItem->id)}}" data-id={{ $userItem->id}} id="remove_btn" class="btn btn-danger btn btn-sm">{{__('lang.remove')}}</a></td>
      {{-- <td><a href="javascript:void(0)" data-id={{ $userItem->id}} id="remove_btn" class="btn btn-danger btn btn-sm">{{__('lang.remove')}}</a></td> --}}
    </tr>
    @endforeach
    </form>
    <td colspan="3"><b>{{__('lang.total_price')}}</b></td>
    <td colspan="2"><b>{{$totalCartPrice}}</b></td>
  </tbody>
</table>
  <form action="{{route('check_out',['locale'=>app()->getLocale()])}}" method="post">
    @csrf
    <button class="btn btn-primary mb-5">{{__('lang.checkout')}}</button>
  </form>
</center>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
    $('#remove_btn').on('click',function(e){
      e.preventDefault();
      var id = $(this).data('id');
      var url = "{{ url(app()->getLocale().'/') }}";
      window.location.href = url;
    })
  })

</script> --}}
@endsection