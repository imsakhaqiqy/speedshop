@extends('speedshop.app')

<!--start-content-->
<!--products-->
 <div class="products">
   <div class="container">
     <div class="products-grids">
       <div class="col-md-8 products-grid-left">
        {{ $products->links() }}
         <div class="products-grid-lft">
           @foreach($products as $product => $value)
           <div class="products-grd">
             <div class="p-one simpleCart_shelfItem prd">
               <a href="{{url('single?p=')}}{{$value->name}}">
                   <img src="front/images/tamengknalpotmio.jpg" alt="" class="img-responsive" />
               </a>

               <p><a class="item_add" href="{{url('single?p=')}}{{$value->name}}">
                 <h4>{{$value->name}}</h4>
                 <i class="glyphicon glyphicon-shopping-cart"></i> <span class="item_price valsa" style="color: #18C9D2;">{{ number_format($value->amount)}}</span></a></p>
               <!-- <div class="pro-grd">
                 <a href="{{url('single?p=')}}{{$value->name}}">Quick View</a>
               </div> -->
             </div>
           </div>
           @if(($product+1)%3 == 0)
           <div class="clearfix"> </div>
         </div>
         <div class="products-grid-lft">
           @endif
           @endforeach

         </div>

       </div>
                 <div class="col-md-4 products-grid-right">
         <div class="w_sidebar">
           <div class="w_nav1">
             <h4>All</h4>
             <ul>
               <li><a href="product.html">women</a></li>
               <li><a href="#">new fashions</a></li>
               <li><a href="#">trends</a></li>
               <li><a href="#">boys</a></li>
               <li><a href="#">girls</a></li>
               <li><a href="#">sale</a></li>
             </ul>
           </div>
           <section  class="sky-form">
             <h4>categories</h4>
             <div class="row1 scroll-pane">
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Men's Jackets</label>
               </div>
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Shoes</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Glases</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Watches</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Hand Bags</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Bags</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shirts</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>soluta nobis</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>molestiae</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>repudiandae sint</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>nobis est</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>assumenda est</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
               </div>
             </div>
           </section>
           <section  class="sky-form">
             <h4>brand</h4>
             <div class="row1 scroll-pane">
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lee</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
               </div>
               <div class="col col-4">
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
               </div>
             </div>
           </section>
         </div>
       </div>
       <div class="clearfix"></div>
     </div>
   </div>
 </div>
<!-- //products -->
