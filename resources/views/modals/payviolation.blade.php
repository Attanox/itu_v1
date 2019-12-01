  
<!-- Modal -->
<div class="modal fade" id="payviolation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @foreach ($data['violations'] as $violation)
                <div class="row text-white bg-dark border-bottom border-secondary">
                    <div class="text-center col border-right py-2 px-0">
                        <span>{{ $violation->id }}</span>
                    </div>
                    <div class="text-center col-2 custom-control custom-checkbox py-2 px-0">
                        <input type="checkbox" class="custom-control-input" id="violationCheck-{{ $violation->id }}" value={{ $violation->id }}>
                        <label class="custom-control-label" for="violationCheck-{{ $violation->id }}"></label>
                    </div>                
                </div>
                <div id="{{$violation->id}}-violation" class="row text-white bg-dark list-group list-group-flush" style="transform-origin: top; transform: scaleY(0); display:none; transition:cubic-bezier(0.075, 0.82, 0.165, 1) 1s;" >
                    <span class="list-group-item bg-dark">Miesto: <strong>{{ $violation['happened at'] }}</strong></span>
                    <span class="list-group-item bg-dark">Čas: <strong>{{ $violation['happened on'] }}</strong></span>    
                </div>
            @endforeach
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>