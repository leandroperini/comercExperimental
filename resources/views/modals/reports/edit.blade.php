<!-- Modal Default -->
<div class="modal fade" data-id="0" id="modalEditReport" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Edit Number') }}</h4>
            </div>
            <div class="modal-body">
                <form class="col-md-12" method="POST" action="{{route('updateReport')}}">
                @csrf
                    <input type="hidden" value="" name="id">
                    <div class="input-group m-b-20 col-md-12">
                        <div class="fg-line">
                            <input id="name" type="text" class="form-control"
                                   placeholder="{{ __('Name') }}" name="name" value="" required
                                   autofocus>
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <div class="fg-line">
                            <input id="value" type="text" class="form-control" placeholder="{{ __('Value') }}"
                                   name="value" value="" required>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" onclick="General.modals.events.modal_report_edit_save()">{{ __('Save') }}</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>