@if($top_alert)
    <div class="alert tp-alert" role="alert" id="box-tp-alert">
        <p class="tp-alert__message">{{$top_alert}}</p>
        <button class="tp-alert__action" data-bs-dismiss="alert" aria-label="Close" id="btn-close-tp-alert">بستن اعلان</button>
    </div>
@endif