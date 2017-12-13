<!DOCTYPE HTML>
<html>
<head>
<style>
  .col-md-12{
    width:100%;
  }
  .table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  .table tr:nth-child(even){background-color: #f2f2f2;}
  .table tr:hover {background-color: #ddd;}
  th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }
  td,th{
    border: 1px solid #ddd;
    padding: 8px;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="col-md-12">
      <h3>Order ID : {{ $data_order->order_id }}</h3>
      <p>Hello {{ $data_customer->name }}</p>
      <p>Terima kasih telah berbelanja di Icon SpeedShop</p>
      <p>Order Details :</p>
      <table class="table">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th style="width:5%">Quantity</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php $total = 0; ?>
          @foreach($data_order_detail as $dod)
          <tr>
            <td >{{ \DB::table('products')->where('id',$dod->product_id)->value('name') }}</td>
            <td>{{ \DB::table('products')->where('id',$dod->product_id)->value('description') }}</td>
            <td>IDR {{ number_format($dod->price_per_item) }}</td>
            <td>{{ $dod->quantity }}</td>
            <td>
              IDR {{ number_format($dod->price_per_item*$dod->quantity) }}
              <?php $total += $dod->price_per_item*$dod->quantity; ?>
            </td>
          </tr>
          @endforeach
          <tr>
            <td colspan="4" align="right">Item Total :</td>
            <td>IDR {{ number_format($total) }}</td>
          </tr>
          <tr>
            <td colspan="4" align="right">Shipping and Handling :</td>
            <td>
              <?php $jnt = 'j&t'; $delivery_method = 0;?>
              @if($data_order->delivery_method == 'jne')
              IDR 9.000
              <?php $delivery_method = 9000; ?>
              @elseif($data_order->delivery_method == $jnt)
              IDR 10.000
              <?php $delivery_method = 10000; ?>
              @elseif($data_order->delivery_method == 'gojek')
              IDR 15.000
              <?php $delivery_method = 15000; ?>
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="4" align="right">Discount :</td>
            <td>0</td>
          </tr>
          <tr>
            <td colspan="4" align="right">Total :</td>
            <td>IDR {{ number_format($total+$delivery_method) }}</td>
          </tr>
        </tbody>
      </table>
      <p>Shipping Carrier : {{ $data_order->delivery_method }}</p>
      <table class="table">
        <thead>
          <tr>
            <th>Delivery Address</th>
            <th>Billing Address</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $data_address }}</td>
            <td>{{ $data_address }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
