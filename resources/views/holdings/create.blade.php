@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/holdings/{{Auth()->id()}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row"><h1>Add new Holding</h1></div>
                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">Date Input</label>
                        <div class="col-md-6">
                        <input id="date"
                               type="text"
                               class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}"
                               autocomplete="date" autofocus>

                        @error('date')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>
                    </div>

                    <div class="form-group row">
                        <label for="Holding_Name" class="col-md-4 col-form-label text-md-right">{{ __('Holding Name') }}</label>

                        <div class="col-md-6">
                            <input id="Holding_Name" type="text" class="form-control @error('Holding_Name') is-invalid @enderror" name="Holding_Name" value="{{ old('Holding_Name') }}"  autocomplete="Holding_Name" autofocus>

                            @error('Holding_Name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Code_Units" class="col-md-4 col-form-label text-md-right">{{ __('Code Units') }}</label>

                        <div class="col-md-6">
                            <input id="Code_Units" type="text" class="form-control @error('Code_Units') is-invalid @enderror" name="Code_Units" value="{{ old('Code_Units') }}"  autocomplete="Code_Units" autofocus>

                            @error('Code_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Registered_Units" class="col-md-4 col-form-label text-md-right">{{ __('Registered Units') }}</label>

                        <div class="col-md-6">
                            <input id="Registered_Units" type="text" class="form-control @error('Registered_Units') is-invalid @enderror" name="Registered_Units" value="{{ old('Registered_Units') }}"  autocomplete="Registered_Units" autofocus>

                            @error('Registered_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Available_Units" class="col-md-4 col-form-label text-md-right">{{ __('Available Units') }}</label>

                        <div class="col-md-6">
                            <input id="Available_Units" type="text" class="form-control @error('Available_Units') is-invalid @enderror" name="Available_Units" value="{{ old('Available_Units') }}"  autocomplete="Available_Units" autofocus>

                            @error('Available_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Reversed_Units" class="col-md-4 col-form-label text-md-right">{{ __('Reversed Units') }}</label>

                        <div class="col-md-6">
                            <input id="Reversed_Units" type="text" class="form-control @error('Reversed_Units') is-invalid @enderror" name="Reversed_Units" value="{{ old('Reversed_Units') }}"  autocomplete="Reversed_Units" autofocus>

                            @error('Reversed_Units')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Purchase_Price" class="col-md-4 col-form-label text-md-right">{{ __('Purchase Price') }}</label>

                        <div class="col-md-6">
                            <input id="Purchase_Price" type="text" class="form-control @error('Purchase_Price') is-invalid @enderror" name="Purchase_Price" value="{{ old('Purchase_Price') }}"  autocomplete="Purchase_Price" autofocus>

                            @error('Purchase_Price')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Total_Value" class="col-md-4 col-form-label text-md-right">{{ __('Total Value') }}</label>

                        <div class="col-md-6">
                            <input id="Total_Value" type="text" class="form-control @error('Total_Value') is-invalid @enderror" name="Total_Value" value="{{ old('Total_Value') }}"  autocomplete="Total_Value" autofocus>

                            @error('Total_Value')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn btn-primary">Add new Holding</button>
                    </div>


                </div>
            </div>



        </form>
    </div>
@endsection
