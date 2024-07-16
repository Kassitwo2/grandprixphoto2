<div>
    <div>

        <div>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title" style="float: left;">Add New Students</h5>
                            </div>
                            <div class="card-body">
                                @if (session()->has('message'))
                                    <div class="alert alert-success text-center">{{ session('message') }}</div>
                                @endif
        
        
                                <form wire:submit.prevent="save">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" wire:model="name" autocomplete="off" />
                                        {{-- for validation --}}
                                        @error('name')
                                            <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" wire:model="email" autocomplete="off" />
                                        {{-- for validation --}}
                                        @error('email')
                                            <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        @enderror
                                    </div>
        
        
                                    <div class="form-group mb-5">
                                        <label for="phone">Phone</label>
                                        <input type="phone" class="form-control" wire:model="phone" autocomplete="off" />
                                        {{-- for validation --}}
                                        @error('phone')
                                            <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-sm w-50">Add Student</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
       .rate {
           float: left;
           height: 46px;
           padding: 0 10px;
           }
           .rate:not(:checked) > input {
           position:absolute;
           display: none;
           }
           .rate:not(:checked) > label {
           float:right;
           width:1em;
           overflow:hidden;
           white-space:nowrap;
           cursor:pointer;
           font-size:30px;
           color:#ccc;
           }
           .rated:not(:checked) > label {
           float:right;
           width:1em;
           overflow:hidden;
           white-space:nowrap;
           cursor:pointer;
           font-size:30px;
           color:#ccc;
           }
           .rate:not(:checked) > label:before {
           content: '★ ';
           }
           .rate > input:checked ~ label {
           color: #ffc700;
           }
           .rate:not(:checked) > label:hover,
           .rate:not(:checked) > label:hover ~ label {
           color: #deb217;
           }
           .rate > input:checked + label:hover,
           .rate > input:checked + label:hover ~ label,
           .rate > input:checked ~ label:hover,
           .rate > input:checked ~ label:hover ~ label,
           .rate > label:hover ~ input:checked ~ label {
           color: #c59b08;
           }
           .star-rating-complete{
              color: #c59b08;
           }
           .rating-container .form-control:hover, .rating-container .form-control:focus{
           background: #fff;
           border: 1px solid #ced4da;
           }
           .rating-container textarea:focus, .rating-container input:focus {
           color: #000;
           }
           .rated {
           float: left;
           height: 46px;
           padding: 0 10px;
           }
           .rated:not(:checked) > input {
           position:absolute;
           display: none;
           }
           .rated:not(:checked) > label {
           float:right;
           width:1em;
           overflow:hidden;
           white-space:nowrap;
           cursor:pointer;
           font-size:30px;
           color:#ffc700;
           }
           .rated:not(:checked) > label:before {
           content: '★ ';
           }
           .rated > input:checked ~ label {
           color: #ffc700;
           }
           .rated:not(:checked) > label:hover,
           .rated:not(:checked) > label:hover ~ label {
           color: #deb217;
           }
           .rated > input:checked + label:hover,
           .rated > input:checked + label:hover ~ label,
           .rated > input:checked ~ label:hover,
           .rated > input:checked ~ label:hover ~ label,
           .rated > label:hover ~ input:checked ~ label {
           color: #c59b08;
           }
  </style>  
  
                                  <div class="container">
                                      <div class="row">
                                         <div class="col mt-4">
                                               <p class="font-weight-bold ">Review</p>
                                               <div class="form-group row">
                                                  <input type="hidden" name="booking_id" value="">
                                                  <div class="col">
                                                     <div class="rated">
                                                     
                                                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                        <label class="star-rating-complete" title="text">5 stars</label>
                                                        <label class="star-rating-complete" title="text">5 stars</label>
                                                        <label class="star-rating-complete" title="text">5 stars</label>
                                                        <label class="star-rating-complete" title="text">5 stars</label>
                                                        <label class="star-rating-complete" title="text">5 stars</label>

                                                      
                                                      </div>
                                                  </div>
                                               </div>
                                               <div class="form-group row mt-4">
                                                  <div class="col">
                                                      <p></p>
                                                  </div>
                                               </div>
                                         </div>
                                      </div>
                                   </div>





                                   <div class="container">
                                      <div class="row">
                                         <div class="col mt-4">
                                            <form class="py-2 px-4"  style="box-shadow: 0 0 10px 0 #d64949;" method="POST" autocomplete="off">
                                               @csrf
                                               <p class="font-weight-bold ">Review</p>
                                               <div class="form-group row">
                                                  <input type="hidden" name="booking_id" value="">
                                                  <div class="col">
                                                     <div class="rate">
                                                        <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                                        <label for="star1" title="text">1 star</label>
                                                     </div>
                                                  </div>
                                               </div>
                                               <div class="form-group row mt-4">
                                                  <div class="col">
                                                     <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                                                  </div>
                                               </div>
                                               <div class="mt-3 text-right">
                                                  <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                                  </button>
                                               </div>
                                            </form>
                                         </div>
                                      </div>
                                   </div>
     </div>
</div>
