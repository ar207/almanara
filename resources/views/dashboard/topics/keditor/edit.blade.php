<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{ asset('assets/dashboard/images/logo.png') }}">
    <meta name="apple-mobile-web-app-title" content="Smartend">
    <base href="{{ route("adminHome") }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/dashboard/images/logo.png') }}">

    <title>✏️ {{ $title }}</title>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/keditor/plugins/bootstrap-3.4.1/css/bootstrap.min.css') }}" data-type="keditor-style"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/keditor/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}"
          data-type="keditor-style"/>
    <!-- Start of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/dist/css/keditor.css') }}"
          data-type="keditor-style"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/dist/css/keditor-components.css') }}"
          data-type="keditor-style"/>
    <!-- End of KEditor styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/plugins/code-prettify/src/prettify.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/keditor/css/custom.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/dashboard/js/sweetalert/sweetalert.css') }}">
    <style>
        .keditor-topbar {
            background: {{Helper::GeneralSiteSettings("style_color2")}};
        }
        .keditor-topbar-btn.active, .keditor-topbar-btn:hover {
            background: {{Helper::GeneralSiteSettings("style_color1")}};
            color: #fff !important;
        }

        .keditor-section {
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="{{ @Helper::currentLanguage()->direction }}">
<div data-keditor="html">
    <div id="content-area">
        {!! $content !!}
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/keditor/plugins/jquery-1.11.3/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/plugins/bootstrap-3.4.1/js/bootstrap.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/plugins/ckeditor-4.11.4/ckeditor.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/formBuilder-2.5.3/form-builder.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/formBuilder-2.5.3/form-render.min.js') }}"></script>
<!-- Start of KEditor scripts -->
<script type="text/javascript" src="{{ asset('assets/keditor/dist/js/keditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/dist/js/keditor-components.js') }}"></script>
<!-- End of KEditor scripts -->
<script type="text/javascript" src="{{ asset('assets/keditor/plugins/code-prettify/src/prettify.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/js-beautify-1.7.5/js/lib/beautify.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/keditor/plugins/js-beautify-1.7.5/js/lib/beautify-html.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/keditor/js/custom.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/sweetalert/sweetalert.min.js') }}"></script>

<script type="text/javascript" data-keditor="script">
    $(function () {
        $('#content-area').keditor({
            snippetsUrl: '{{ route('keditorSnippets') }}',
            onContainerSettingShow: function (form, container) {
                // Add background color input
                form.prepend(
                    '<div class="form-group">' +
                    '<label>Background Color</label>' +
                    '<input type="color" class="form-control background-color" />' +
                    '</div>'
                );

                // Add background image input
                form.prepend(
                    '<div class="form-group">' +
                    '<label>Background Image</label>' +
                    '<input type="text" class="form-control background-image" />' +
                    '</div>'
                );

                // Set initial values
                form.find('.background-color').val(container.css('background-color') || '#ffffff');
                form.find('.background-image').val(container.css('background-image').replace(/url\(|\)|"|'/g, ''));

                // Update container on change
                form.on('change', '.background-color', function () {
                    var color = $(this).val();
                    container.css('background-color', color);
                });

                form.on('change', '.background-image', function () {
                    var imageUrl = $(this).val();
                    container.css('background-image', 'url(' + imageUrl + ')');
                });
            },
            onSave: function (content) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('keditorSave') }}",
                    data: {
                        "_token": '{{ csrf_token() }}',
                        "topic_id": '{{ $Topic->id }}',
                        "html_content": content,
                        "lang": '{{ $lang }}',
                    },
                    success: function (result) {
                        var obj_result = jQuery.parseJSON(result);
                        if (obj_result.stat == 'success') {
                            alert('Content saved successfully!');
                        } else {
                            alert('Error saving content.');
                        }
                    }
                });
            }
        });
    });
</script>
</body>
</html>
