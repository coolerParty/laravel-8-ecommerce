<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Coupon
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">All Coupon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body" >
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form action="" class="form-horizontal" wire:submit.prevent="storeCoupon">
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Coupon Code</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Coupon Code" Class="form-control input-md" wire:model="code"/>
                                @error('code')   <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Coupon Type</label>
                            <div class="col-md-4">
                                <select  class="form-control" wire:model="type">
                                    <option value="">Select</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percent">Percent</option>
                                </select>
                                @error('type')   <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Coupon Value</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Coupon Value" Class="form-control input-md" wire:model="value"/>
                                @error('value')   <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Cart Value</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Cart Value" Class="form-control input-md" wire:model="cart_value"/>
                                @error('cart_value')   <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Expiry Date</label>
                            <div class="col-md-4" wire:ignore>
                                <input type="text" id="expiry_date" placeholder="Expiry Date" Class="form-control input-md" wire:model="expiry_date"/>
                                @error('expiry_date')   <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            $('#expiry_date').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change',function(ev){
                var data = $('#expiry_date').val();
                @this.set('expiry_date',data);
            })
        });
    </script>
@endpush
