@props(['id', 'label','data' => null,'width' => 12, 'value' => false ,'ajaxUrl' => '' ,'multiple' => false , 'key' => 'id' , 'text' => 'text','required' => false])
<div class="form-group  col-12 col-md-{{$width}}" wire:ignore>
    <label for="{{$id}}"> {{$label}} <span {{ ! $required ? 'hidden' : '' }} class="text-danger">*</span></label>
    <div class=" d-flex align-items-center">
        <select  id="{{$id}}" multiple
                 class="form-control select2 "  >
            @if($data && is_array($data) && sizeof($data) > 0)
                @if($multiple)
                    @foreach($data as $item)
                        <option selected value="{{ $item[$key] }}">{{$item[$text] ?? '' }}</option>
                    @endforeach
                @else
                    <option selected value="{{ $data[$key] }}">{{$data[$text] ?? '' }}</option>
                @endif
            @endif

        </select>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(() => {
            $('#{{$id}}').select2({
                placeholder: "select",
                allowClear: true,
                multiple: '{{$multiple}}',
                ajax:{
                    url:  '{{$ajaxUrl}}',
                    data: function (params) {
                        var query = {
                            search: params.term,
                            type: 'public'
                        }
                        return query;
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    }
                }
            })

            $('#{{$id}}').on('change', function (e) {
                var data = $('#{{$id}}').select2("val");
            @this.set('{{$attributes->wire("model")->value}}', data);
            });


            $('#{{$id}}').val($('#{{$id}}').select2("val"));
            $('#{{$id}}').trigger('change');

            $('#clear{{$id}}').on('click', function (e) {
                $('#{{$id}}').empty();
            @this.set('{{$attributes->wire("model")->value}}', null);
            });
        })
    </script>
@endpush
