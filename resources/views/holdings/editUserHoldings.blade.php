@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body"><h1>Edit User Holdings</h1>

                    </div>
                    <div class="card-body">
                        <div>Client Name: {{$user1->email}}</div>
                        <div>Account Number: {{$user1->account_number ?? 'N/A'}} </div>
                        <div>Holdings:</div>
                        <div>{{$user1->holding}}</div>
                    </div>
                    <div class="card-body">   <a href="/holdings/{{auth()->id()}}">Back</a></div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center pt-4"><h1>Add - Remove </h1></div>
        <div class="row justify-content-center">
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >No</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Date</div>
            <div class="col-xs-2 col-sm-2 col-lg-2 border" >Name</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Code Units</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Registered Units</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Available Units</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Reversed Units</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Purchase Price</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Total Value</div>
            <div class="col-xs-1 col-sm-1 col-lg-1 border" >Add/Remove</div>

        </div>

        @can('create', App\Holding::class)
            @if($removeHoldings !=null)
            @foreach($removeHoldings as $holding1)

                <div class="row justify-content-center">
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->id}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Date}}</div>

                    <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{$holding1->Holding_Name}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Code_Units}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Registered_Units}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Available_Units}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Reversed_Units}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Purchase_Price}}</div>
                    <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding1->Total_Value}}</div>

                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >
                            <store-table removestatus="true" user-Id="{{$user1->id}}" holding-Id="{{$holding1->id}}"></store-table></div>
                </div>
            @endforeach
            @endif
                @foreach($addHoldings as $holding2)

                    <div class="row justify-content-center" >
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->id}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->Date}}</div>
                        <div class="col-xs-2 col-sm-2 col-lg-2 border" >{{$holding2->Holding_Name}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->Code_Units}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->Registered_Units}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->Available_Units}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->Reversed_Units}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->Purchase_Price}}</div>
                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >{{$holding2->Total_Value}}</div>

                        <div class="col-xs-1 col-sm-1 col-lg-1 border" >


                            <store-table removestatus="false" user-Id="{{$user1->id}}" holding-Id="{{$holding2->id}}"></store-table></div>
                    </div>
                @endforeach
        @endcan
    </div>
@endsection
