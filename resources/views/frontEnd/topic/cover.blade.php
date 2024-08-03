<style>
    .bg-cover-page {
        width: 100%;
        height: 500px;
        text-align: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-image: url('{{ $category_image }}');
        background-color: {{ Helper::GeneralSiteSettings("style_color2") }}

    }

    @media (max-width: 700px) {
        .bg-cover-page {
            width: 100%;
            height: 500px;
            text-align: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url('{{ !empty($mobile_category_image) ? $mobile_category_image : $category_image }}');
            background-color: {{ Helper::GeneralSiteSettings("style_color2") }}

        }
    }
</style>
<div id="page-cover" class="page-cover bg-cover-page"></div>
