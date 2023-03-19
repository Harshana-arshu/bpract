<html>
<head>
<form action="{{url('create/store')}}" method="post">{{csrf_field()}}
<table>
<label>Invoice Number:</label>
<input type="text" name="invoice_num">&nbsp;
<label>Invoice date:</label>
<input type="date-local"
       name="in_date" value="{{ Carbon\Carbon::now()->formatLocalized('%d/%m/%Y') }}">
<label>Customer Name:</label>
<select name="customer_id">
@foreach($cust as $orgs)
<option value="{{$orgs->id}}">{{$orgs->name}}</option>
@endforeach
</select>
<label>Total:</label>
<input type="text" name="total">&nbsp;
<label>Invoice Id:</label>
<input type="text" name="invoice_id" >&nbsp;
<label>Product Name:</label>
<select name="product_id[]">
@foreach($product as $orgs)
<option value="{{$orgs->id}}">{{$orgs->name}}</option>
@endforeach
</select>&nbsp;
<label>Rate:</label>
<input type="text" name="rate[]">&nbsp;
<label>Quantity:</label>
<input type="text" name="quantity[]">&nbsp;
<label>Amount:</label>
<input type="text" name="amount[]" value="">&nbsp;
<label>Product Name:</label>
<select name="product_id[]">
@foreach($product as $orgs)
<option value="{{$orgs->id}}">{{$orgs->name}}</option>
@endforeach
</select>&nbsp;
<label>Rate:</label>
<input type="text" name="rate[]">&nbsp;
<label>Quantity:</label>
<input type="text" name="quantity[]">&nbsp;
<label>Amount:</label>
<input type="text" name="amount[]">&nbsp;

<button type="submit">save</button>
</table>
</form></head></html>