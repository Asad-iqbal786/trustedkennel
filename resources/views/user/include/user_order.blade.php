@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')


        </div>

    </header>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-3">
                @include('user.include.sidebar')
            </div>
            <div class="col-9">
                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mt-2 mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="h3">Order Puppies</h1>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($getUserCart as $cart)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{   $cart['vendors']['kennel_name'] }}</td>
                                    <td>{{   $cart['products'] ['sire_name'] }}</td>
                                    <td>{{   $cart['grand_total'] }}</td>
                                    <td><span class="badge badge-primary">{{   $cart['status'] }}</span></td>
                                    <td>  <a href="{{route('shippingAddress', $cart['id'])}}" target="_blank">Checkout</a>  </td>

                                </tr>
                                @empty
                                    {{-- <p>No Puppy found</p> --}}
                                @endforelse
                               
                             
                            </tbody>
                        </table>
                    </div>


                    
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush




@push('scripts')
    <script>
        // show courier name and Teracking Number
        $("#if_yes").hide();
        //order status
        $(".show_hide").on("click", function() {
            if (this.value == "yes_surrendered") {

                $("#if_yes").show();
            } else if (this.value == "no_surrendered") {
                $("#if_yes").hide();
            } else {

            }
        });
    </script>
@endpush
