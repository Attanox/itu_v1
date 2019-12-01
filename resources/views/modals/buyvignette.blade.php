  
<!-- Modal -->
<div class="modal fade" id="buyvignette" tabindex="-1" role="dialog" aria-labelledby="buyvignetteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="buyvignetteLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @foreach ($data['vehicles'] as $vehicle)
                <div class="row text-white bg-dark border-bottom border-secondary">
                    <div class="text-center col border-right py-2 px-0">
                        <span>{{ $vehicle->plate }}</span>
                    </div>
                    <div class="text-center col-2 custom-control custom-checkbox py-2 px-0">
                        <input type="checkbox" class="custom-control-input" id="vehicleCheck-{{ $vehicle->id }}" value={{ $vehicle->id }}>
                        <label class="custom-control-label" for="vehicleCheck-{{ $vehicle->id }}"></label>
                    </div>                
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