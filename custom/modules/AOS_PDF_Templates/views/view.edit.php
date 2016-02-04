<?php
require_once("modules/AOS_PDF_Templates/views/view.edit.php");
class CustomAOS_PDF_TemplatesViewEdit extends AOS_PDF_TemplatesViewEdit {
    function displayTMCE(){
        require_once("include/SugarTinyMCE.php");
        global $locale, $current_user;

        $tiny = new SugarTinyMCE();
        $tinyMCE = $tiny->getConfig();

        $js =<<<JS
        <script language="javascript" type="text/javascript">
        $tinyMCE
        var df = '{$locale->getPrecedentPreference('default_date_format')}';

        tinyMCE.init({
            theme : tinyConfig.theme,
            theme_advanced_toolbar_align : tinyConfig.theme_advanced_toolbar_align,
            mode: tinyConfig.mode,
            elements : "description",
            theme_advanced_toolbar_location : tinyConfig.theme_advanced_toolbar_location,
            theme_advanced_buttons1: tinyConfig.theme_advanced_buttons1,
            theme_advanced_buttons2: tinyConfig.theme_advanced_buttons2,
            theme_advanced_buttons3: tinyConfig.theme_advanced_buttons3,
            theme_advanced_fonts:"Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Helvetica Neu=helveticaneue,sans-serif;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats",
            plugins : "advhr,insertdatetime,table,paste,searchreplace,directionality,style,pagebreak,openmanager,inlinepopups",
            height: tinyConfig.height,
            width: tinyConfig.width ,
            inline_styles : true,
            directionality : "ltr",
            remove_redundant_brs : true,
            entity_encoding: 'raw',
            cleanup_on_startup : true,
            strict_loading_mode : true,
            convert_urls : false,
            plugin_insertdate_dateFormat : '{DATE '+df+'}',
            pagebreak_separator : "<pagebreak />",
            extended_valid_elements : "textblock",
            custom_elements: "textblock",
            file_browser_callback : tinyConfig.file_browser_callback,
            open_manager_upload_path : tinyConfig.open_manager_upload_path ,

        });

        tinyMCE.init({
            theme : tinyConfig.theme,
            theme_advanced_toolbar_align : tinyConfig.theme_advanced_toolbar_align,
            mode: tinyConfig.mode,
            elements : "pdfheader,pdffooter",
            theme_advanced_toolbar_location : tinyConfig.theme_advanced_toolbar_location,
            theme_advanced_buttons1: tinyConfig.theme_advanced_buttons1,
            theme_advanced_buttons2 : "",
            theme_advanced_buttons3 : "",
            theme_advanced_fonts:"Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Helvetica Neu=helveticaneue,sans-serif;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats",
            plugins : "advhr,insertdatetime,table,paste,searchreplace,directionality,style",
            width: tinyConfig.width,
            inline_styles : true,
            directionality : "ltr",
            entity_encoding: 'raw',
            cleanup_on_startup : true,
            strict_loading_mode : true,
            convert_urls : false,
            remove_redundant_brs : true,
            plugin_insertdate_dateFormat : '{DATE '+df+'}',
            extended_valid_elements : "textblock",
            custom_elements: "textblock",
        });

        </script>

JS;
        echo $js;
    }
}
