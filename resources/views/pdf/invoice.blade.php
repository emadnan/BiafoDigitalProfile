<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Subscription Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .invoice {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
    }
    .invoice h1 {
      text-align: center;
    }
    .invoice img{
        /* img in center */
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .invoice .info {
      margin-top: 20px;
      text-align: center;
    }
    .invoice .info div {
      display: inline-block;
      margin-right: 20px;
      text-align: center;
    }
    .invoice .item-list {
      margin-top: 40px;
    }
    .invoice .item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .invoice .item .description {
      flex-grow: 1;
    }
    .invoice .item .quantity,
    .invoice .item .price {
      flex-basis: 100px;
      text-align: right;
    }
    .invoice .total {
      margin-top: 20px;
      text-align: right;
    }
    .invoice .subscription-details {
      margin-top: 40px;
      font-size: 14px;
    }
    .invoice .stamp{
      margin-top: 40px;
      text-align: right;
    }
  </style>
</head>
<body>
  <div class="invoice">
    <img src="./frontend/img/cardify_logo_footer.png" alt="Cardify Logo" width="200">
    <h1>Subscription Invoice</h1>
    <div class="info">
      <div>{{$subscription_invoice->company->company_name}}</div>
      <div>{{$subscription_invoice->company->address}}</div>
      <div>{{$subscription_invoice->company->country->name}}</div>
      <div>{{auth()->user()->email}}</div>
    </div>
    <div class="item-list">
      <div class="item">
        <div class="description">{{$subscription_invoice->subscription->name}}</div>
        <div class="price">${{$subscription_invoice->subscription->amount}}</div>
      </div>
    </div>
    <div class="total">
      Total: ${{$subscription_invoice->subscription->amount}}
    </div>
    <div class="subscription-details">
      <p>Subscription Details:</p>
      <p>- Subscription Start Date: {{$subscription_invoice->start_date}}</p>
      <p>- Subscription End Date: {{$subscription_invoice->end_date}}</p>
      <p>- Payment Method: Credit Card</p>
      <p>- Payment Due Date: {{$subscription_invoice->start_date}}
      </p>
    </div>
    <div class="stamp">
    <img src="./frontend/img/stamp.png" alt="Cardify Logo" width="150">
    </div>
  </div>
</body>
</html>
