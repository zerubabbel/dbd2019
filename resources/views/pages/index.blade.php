
@extends('layouts.app')

@section('content')
    <main role="main" class="mt-5">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Designer Bags Depot</h1>
          <p class="lead text-muted">Operating internationally to give you awesome deals and extensive selections</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Store</a>
            <a href="#" class="btn btn-secondary my-2">Personal Shopping Service</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">  
                <div class="d-block d-md-none">
                  <br/>
                </div>      
                <div class="d-none d-md-block d-lg-none">
                  <br/>
                </div> 
                <div class="text-center d-block d-lg-none">
                  <span class="text-nowrap"><h3>Shopper Solutions</h3></span>
                </div>    
                <div class="text-center d-none d-lg-block">
                  <span class="text-nowrap"><h1>Shopper Solutions</h1></span>
                </div>               
                  <div class="text-center">
	
                  	<i class="fas fa-store-alt fa-9x p-4"></i>
				          </div>
				        <p class="card-text text-center">Let us do the hard work for you</p>
                <div class="d-block d-md-none">
                  <hr />
                </div>
            </div>
			<div class="col-md-4">
                <div class="text-center d-block d-lg-none">
                  <span class="text-nowrap"><h3 class="mt-4">Resellers</h3></span>
                </div>    
                <div class="text-center d-none d-lg-block">
                  <span class="text-nowrap"><h1>Resellers</h1></span>
                </div>  
                  <div class="text-center">
                  	<i class="fas fa-handshake fa-9x p-4"></i>
				          </div>
				        <p class="card-text text-center">Partner with us</p>
              <div class="d-block d-md-none">
                <hr />
              </div>
            </div>
            <div class="col-md-4">
            	<div class="text-center d-block d-lg-none">
                  <span class="text-nowrap"><h3 class="mt-4">Online Store</h3></span>
                </div>    
                <div class="text-center d-none d-lg-block">
                  <span class="text-nowrap"><h1>Online Store</h1></span>
                </div>                   
                  <div class="text-center responsive">
                  	<i class="fas fa-cart-plus fa-9x p-4"></i>
				          </div>
				  <p class="card-text text-center">Take a look at our online selection</p>
            </div>
          </div>
        </div>
      </div>

    </main>
@endsection