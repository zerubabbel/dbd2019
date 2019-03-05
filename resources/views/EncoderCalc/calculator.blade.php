@extends('layouts.app')

@section('content')
      
	      <div class="container pt-5">

          <div class="row">
            <div class="col-md-6" >
              <div id="inputFieldsArea">
                <div class="inputBlock number1">
                  <strong>Item Price</strong>
                  <div class="input-group mb-3 mr-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control itemPrice" id="itemPrice" aria-label="Item Price">
                    <div class="input-group-append mr-2">
                      <span class="input-group-text rounded-right"></span>
                    </div>
                    <button class="btn-danger rounded remove"><i class="fa fa-trash"></i></button>
                  </div> 
                </div> 
              </div><!--#inputFieldsArea-->

              <div class="shippingBlock">
                  <strong>Shipping Cost</strong>
                  <div class="input-group mb-3 mr-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">₱</span>
                    </div>
                    <input type="number" class="form-control shippingCost" aria-label="Shipping Price" required>
                    <div class="input-group-append mr-2">
                      <span class="input-group-text rounded-right"></span>
                    </div>
                    <button class="btn-primary rounded"><i class="fas fa-truck"></i></button>
                  </div> 
                </div> 

              <div>
                <button class="btn btn-primary" id="addToListButton" type="submit">Add more items</button>
              </div>
              <br />
              <br />
              <div>
                <button type="submit" id="calculateButton" class="btn btn-outline-primary btn-lg btn-block">Calculate Total<span class="glyphicon glyphicon-chevron-right"></span></button>
              </div>
              <br />
              <br />
            </div><!--col-md-6-->

            <!--SECOND COLUMN STARTS-->
            <div class="col-md-6">
              
              <div class="details-list">
                <div class="mt-1 mb-3">
                  <h1 class="text-center">Total Cost: ₱ <span class=totalCost> </span></h1>
                  <hr style="width:85%"/>
                </div>
                <ul class="ml-1">
                  <!--Dollar Entries-->
                  <li><i class="far fa-dot-circle p-2"></i></i>Cost of items: $ <span class="itemsCost"> </span></li>
                  <li><i class="far fa-dot-circle p-2"></i></i>Tax: $ <span class="tax"> </span></li>
                  <li><i class="far fa-dot-circle p-2"></i></i>Cost of Items with Tax: $ <span class="costWithTax"> </span></li>
                  <li><i class="far fa-dot-circle p-2"></i></i>Service Charge: $ <span class="serviceCharge"> </span></li>
                  <li><i class="far fa-dot-circle p-2"></i></i>Subtotal: $ <span class="subtotalDollar"> </span></li>
                  <li><i class="far fa-dot-circle p-2"></i></i>Subtotal: ₱ <span class="subtotalPeso"> </span></li>
                  <li><i class="far fa-dot-circle p-2"></i></i>Shipping: ₱ <span class="shipping"> </span></li>
                </ul>
              </div>
            </div>
            <br /><br />
          </div><!--row-->

        </div><!--container-->



@endsection