<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '名稱:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intro', '簡介:') !!}
    {!! Form::textarea('intro', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', '圖像:') !!}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
        <label class="custom-file-label" for="image">Choose file</label>
    </div>
    <div class="img-preview-cover mt-2">
        @if ($teamInfo->image ?? null)
            <p for="">預覽</p>
            <img src="{{ env('APP_URL', 'https://yueyuewash.powerchi.com.tw') . '/uploads/' . $teamInfo->image }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>
<div class="clearfix"></div>

@push('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/1ugon3r0i7rnpx6jhdz4moygn9knxfai212wbqlixzr9hpi8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
@endpush
@push('page_scripts')
<script>
    $(document).ready(function() {
        $(document).on('change', '#image', function () {
            let fileInput = this;
            let fileReader = new FileReader();

            fileReader.onload = function(e) {
                let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                $(fileInput).closest('.form-group').find('.img-preview-cover').html(previewHtml);
            };

            fileReader.readAsDataURL(fileInput.files[0]);
        });
        // $(document).on('change', '[id^="plan_style_"]', function () {
        //     let fileInput = this;
        //     let fileReader = new FileReader();
        //     let id = $(fileInput).attr('id'); // 獲取元素的ID
        //     let previewClass = `.img-preview-s${id.split('_').pop()}`; // 根據ID動態生成對應的預覽class

        //     fileReader.onload = function (e) {
        //         let previewHtml = `<p>預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
        //         $(fileInput).closest('.form-group').find(previewClass).html(previewHtml);
        //     };

        //     fileReader.readAsDataURL(fileInput.files[0]);
        // });
    });
</script>
@endpush
