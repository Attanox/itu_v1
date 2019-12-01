@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-row justify-content-center">
        <div class="col-12 col-lg-8 ">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div id="vehicles">
                <h3 class="text-left">Vozidlá<button type="button" class="btn btn-primary float-right">Nová Evidencia</button></h3>
                
                @if (is_object($data['vehicles']))
                    @if (count($data['vehicles']) > 0)
                        @foreach ($data['vehicles'] as $vehicle)
                            <div class="row text-white bg-dark border-bottom border-secondary">
                                <div class="col-sm-1 col md-3">
                                    @if ( $vehicle->registered == 'registered')
                                        <div class="status reg">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        {{-- <strong class="status">evidované</strong> --}}
                                    @endif
                                    @if ( $vehicle->registered == 'not registered')
                                        <div class="status nreg">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        {{-- <strong class="status">neevidované</strong> --}}
                                    @endif
                                    @if ( $vehicle->registered == 'pending')
                                        <div class="status pen">
                                            <i class="fas fa-exchange-alt"></i>
                                        </div>
                                        {{-- <strong class="status">neevidované</strong> --}}
                                    @endif
                                </div>
                                <div class="col-sm-11 col-md-9">
                                    <div class="text-left p-2">
                                        <span>{{ $vehicle->plate }}</span>
                                    </div>
                                    <div class="text-left p-2">
                                        <span>{{ $vehicle->registration_number }}</span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div id="{{$vehicle->id}}-vehicle" class="row text-white bg-dark list-group list-group-flush" style="transform-origin: top; transform: scaleY(0); display:none; transition:cubic-bezier(0.075, 0.82, 0.165, 1) 1s;" >
                                <span class="list-group-item bg-dark">Evidenčné č.: <strong>{{ $vehicle['registration number'] }}</strong></span>
                                <span class="list-group-item bg-dark">STK do: <strong>{{ $vehicle->stk }}</strong></span>
                                <span class="list-group-item bg-dark">EK do: <strong>{{ $vehicle->ek }}</strong></span>    
                   
                            </div> --}}
                        @endforeach
                    @else
                        <h4 class="text-center">Žiadne nájdené Vozidlá</h4>
                    @endif
                @endif
            </div>  
            
            <div id="violations">
                @if (count($data['violations']) > 0)
                    <h3 class="text-left">Priestupky</h3>
                    <div class="row text-white bg-dark rounded-top border-bottom border-secondary">
                        <div class="text-center col border-right py-2 px-0">
                            <strong>ID</strong>
                        </div>
                        <div class="text-center col border-right py-2 px-0">
                            <strong>&nbsp;</strong>
                        </div>
                        <div class="text-center col-2 custom-control custom-checkbox py-2 px-0">
                            &nbsp;
                            {{-- <input type="checkbox" class="custom-control-input" id="vehicleCheck" value={{ $vehicle->id }}>
                            <label class="custom-control-label" for="vehicleCheck"></label> --}}
                        </div>
                    </div>
                    @foreach ($data['violations'] as $violation)
                        <div class="row text-white bg-dark border-bottom border-secondary">
                            <div class="text-center col border-right py-2 px-0">
                                <span>{{ $violation->id }}</span>
                            </div>
                            <div class="text-center col border-right py-2 px-0">
                                <span style="cursor:pointer;" onclick="document.getElementById('{{$violation->id}}-violation').classList.toggle('__max_height')">Detail</span>
                            </div>
                            <div class="text-center col-2 custom-control custom-checkbox py-2 px-0">
                                <input type="checkbox" class="custom-control-input" id="violationCheck-{{ $violation->id }}" value={{ $violation->id }}>
                                <label class="custom-control-label" for="violationCheck-{{ $violation->id }}"></label>
                            </div>                
                        </div>
                        {{-- <div id="{{$violation->id}}-violation" class="row text-white bg-dark list-group list-group-flush" style="transform-origin: top; transform: scaleY(0); display:none; transition:cubic-bezier(0.075, 0.82, 0.165, 1) 1s;" >
                            <span class="list-group-item bg-dark">Miesto: <strong>{{ $violation['happened at'] }}</strong></span>
                            <span class="list-group-item bg-dark">Čas: <strong>{{ $violation['happened on'] }}</strong></span>    
                        </div> --}}
                    @endforeach
                @endif
            </div>
            
        
        </div>
    </div>
</div>
@endsection
