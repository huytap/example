<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/backend/css/bootstrap-timepicker.css" />


<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.ba-bbq.js"></script>
<!--<![endif]-->

<!--[if IE]>
    <script type="text/javascript">
     window.jQuery || document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->
<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/bootstrap.min.js"></script>
<!--[if lte IE 8]>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/excanvas.min.js"></script>
    <![endif]-->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/bootbox.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.gritter.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/spin.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.dataTables.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/chosen.jquery.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/fuelux/fuelux.spinner.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/date-time/moment.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/date-time/daterangepicker.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.knob.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.autosize-min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/bootstrap-tag.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/markdown/markdown.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/markdown/bootstrap-markdown.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.hotkeys.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/bootbox.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/jquery.PrintArea.js_4.js"></script>

<!--ace scripts-->

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/ace-elements.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/backend/js/ace.min.js"></script>
<script type="text/javascript">
    $(function() {
        
        $('#id-disable-check').on('click', function() {
            var inp = $('#form-input-readonly').get(0);
            if(inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly' , 'true');
                inp.removeAttribute('disabled');
                inp.value="This text field is readonly!";
            }
            else {
                inp.setAttribute('disabled' , 'disabled');
                inp.removeAttribute('readonly');
                inp.value="This text field is disabled!";
            }
        });
            
            
        $(".chzn-select").chosen(); 
                
        $('[data-rel=tooltip]').tooltip({container:'body'});
        $('[data-rel=popover]').popover({container:'body'});
                
        $('textarea[class*=autosize]').autosize({append: "\n"});
        $('textarea[class*=limited]').each(function() {
            var limit = parseInt($(this).attr('data-maxlength')) || 100;
            $(this).inputlimiter({
                "limit": limit,
                remText: '%n character%s remaining...',
                limitText: 'max allowed : %n.'
            });
        });
                
        $.mask.definitions['~']='[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
                
                
                
        $( "#input-size-slider" ).css('width','200px').slider({
            value:1,
            range: "min",
            min: 1,
            max: 6,
            step: 1,
            slide: function( event, ui ) {
                var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
            }
        });
            
        $( "#input-span-slider" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 11,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                $('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
            }
        });
                
                
        $( "#slider-range" ).css('height','200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [ 17, 67 ],
            slide: function( event, ui ) {
                var val = ui.values[$(ui.handle).index()-1]+"";
            
                if(! ui.handle.firstChild ) {
                    $(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('a').on('blur', function(){
            $(this.firstChild).hide();
        });
                
        $( "#slider-range-max" ).slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });
                
        $( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
            // read initial values from markup and remove that
            var value = parseInt( $( this ).text(), 10 );
            $( this ).empty().slider({
                value: value,
                range: "min",
                animate: true
                        
            });
        });
            
                
        $('.id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
                
        $('#id-input-file-3').ace_file_input({
            style:'well',
            btn_choose:'Drop files here or click to choose',
            btn_change:null,
            no_icon:'icon-cloud-upload',
            droppable:true,
            thumbnail:'small'
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
                //Check an example below
                //or examples/file-upload.html
                return true;
            }*/
            /**,before_remove : function() {
                return true;
            }*/
            ,
            preview_error : function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }
            
        }).on('change', function(){
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });
                
            
        //dynamically change allowed formats by changing before_change callback function
        $('#id-file-format').removeAttr('checked').on('change', function() {
            var before_change
            var btn_choose
            var no_icon
            if(this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "icon-picture";
                before_change = function(files, dropped) {
                    var allowed_files = [];
                    for(var i = 0 ; i < files.length; i++) {
                        var file = files[i];
                        if(typeof file === "string") {
                            //IE8 and browsers that don't support File Object
                            if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
                        }
                        else {
                            var type = $.trim(file.type);
                            if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                || ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                        ) continue;//not an image so don't keep this file
                        }
                                
                        allowed_files.push(file);
                    }
                    if(allowed_files.length == 0) return false;
            
                    return allowed_files;
                }
            }
            else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "icon-cloud-upload";
                before_change = function(files, dropped) {
                    return files;
                }
            }
            var file_input = $('#id-input-file-3');
            file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
            file_input.ace_file_input('reset_input');
        });
            
            
            
            
        $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
        .on('change', function(){
            //alert(this.value)
        });
        $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
        $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
            
            
                
        $('.date-picker').datepicker().next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        $('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
            $(this).next().focus();
        });
                
        $('.timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        })

                
        $('#colorpicker1').colorpicker();
        $('#simple-colorpicker-1').ace_colorpicker();
            
                
        $(".knob").knob();
                
                
        //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
        var tag_input = $('#form-field-tags');
        if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
            tag_input.tag({placeholder:tag_input.attr('placeholder')});
        else {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
            //$('#form-field-tags').autosize({append: "\n"});
        }
        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
        $('#id-input-file-3').ace_file_input({
            style:'well',
            btn_choose:'Drop files here or click to choose',
            btn_change:null,
            no_icon:'icon-cloud-upload',
            droppable:true,
            thumbnail:'small'
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
                //Check an example below
                //or examples/file-upload.html
                return true;
            }*/
            /**,before_remove : function() {
                return true;
            }*/
            ,
            preview_error : function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }
                    
        }).on('change', function(){
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });
                
        /////////
        $('#modal-form input[type=file]').ace_file_input({
            style:'well',
            btn_choose:'Drop files here or click to choose',
            btn_change:null,
            no_icon:'icon-cloud-upload',
            droppable:true,
            thumbnail:'large'
        })
                
        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        //                $('#modal-form').on('show', function () {
        ////                     'width': 900
        ////                    $(this).find('.chzn-container').each(function(){
        ////                        $(this).find('a:first-child').css('width' , '200px');
        ////                        $(this).find('.chzn-drop').css('width' , '210px');
        ////                        $(this).find('.chzn-search input').css('width' , '200px');
        ////                    });
        //                })
        /**
        //or you can activate the chosen plugin after modal is shown
        //this way select element has a width now and chosen works as expected
        $('#modal-form').on('shown', function () {
            $(this).find('.modal-chosen').chosen();
        })
         */



            

    });
</script>
<script type="text/javascript">
    var $request = {
        ajaxSubmit: function($btn, $callback) {
            _form = $btn.closest('form');
            _action = _form.attr('action');
            data = _form.serialize();
            $.ajax({
                url: _action,
                type: _form.attr('method'),
                data: data,
                dataType: "html",
                success: function(result) {
                    //$request.fetchData(result);
                    if (typeof($callback) === "function")
                    {
                        $callback(result);
                    }
                },
                error: function() {
                    //window.location.reload();
                }
            });
        },
        ajaxData: function($link, $data, $callback, $method) {
            if (typeof($method) === 'undefined') {
                $method = 'GET';
            }
            $.ajax({
                url: $link,
                type: $method,
                data: $data,
                dataType: "html",
                success: function(result) {
                    $request.fetchData(result);
                    if (typeof($callback) === "function")
                    {
                        $callback(result);
                    }
                }
            });
        },
        fetchData: function(result) {
            if (result) {
                for (var item in result)
                {
                    $(item).replaceWith(result[item]);
                }
            }
        }
    };
    $(function() {

                

        var oTable1 = $('#sample-table-2').dataTable(
        {
            "aaSorting": []
            //                                    "aoColumns": [
            //                                        { "bSortable": false },
            //                                        null, null,null, null, null,
            //                                            { "bSortable": false }
            //                                    ] 
        }              
    );

        //            $("#bootbox-regular").on(ace.click_event, function() {
        //                    bootbox.prompt("What is your name?", function(result) {
        //                            if (result === null) {
        //                                    //Example.show("Prompt dismissed");
        //                            } else {
        //                                    //Example.show("Hi <b>"+result+"</b>");
        //                            }
        //                    });
        //            });

                
                
        $('table th input:checkbox').on('click' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
            .each(function(){
                this.checked = that.checked;
                $(this).closest('tr').toggleClass('selected');
            });
                        
        });
                
                


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();
            
            var off2 = $source.offset();
            var w2 = $source.width();
            
            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }
    });
    function bindEvent() {
        var a ;
        var img;
        $('.tools-bottom .icon-check-empty').on("click",function(){
            $('.icon-check-empty').show().next('.icon-check').hide();
            $('.tools-bottom').removeClass('check-thumb');
            $(this).hide().next('.icon-check').show();
            a = $(this).parent().parent().addClass('check-thumb').attr('id-gallery');
            img =$(this).parent().parent().parent().find('.ace-thumbnails').html();
        });
        $('.save-gallery').on("click",function(){
            if($('#Product_gallery_id').length){
                parent.$('#Product_gallery_id').val(a);
                parent.$('#tmpGallery').val(img);
                parent.$('#gallary-tmp').html(img);

                $('#modal-form').modal('hide');
                parent.$('#Product_gallery_id_em_').hide();    
            }
            
            
            if($('#Cms_gallery_id').length){
                parent.$('#Cms_gallery_id').val(a);
                parent.$('#tmpGallery').val(img);
                parent.$('#gallary-tmp').html(img);

                $('#modal-form').modal('hide');
                parent.$('#Cms_gallery_id_em_').hide();    
            }

        });
    }
    $(document).ready(function () {
        bindEvent();
    })
    $('#sidebar .nav li a').each(function() {
        if ($(this).parent().hasClass('open')) {
            $($(this)).next().find('li a').each(function() {
                if ($($(this))[0].href == String(window.location)) {
                    $(this).parent().parent().parent().addClass('active');
                }
            })
        } else {
            if ($($(this))[0].href == String(window.location)) {
                $(this).parent().addClass('active');
                if($(this).parent().parent().prev().attr('href') == '#'){
                    $(this).parent().parent().show();
                }
            }
        }
    });
</script>
<script type="text/javascript">
    $(function(){
        if($('#Menu_parent_id').length){
            $('#Menu_parent_id').change(function(){
                if($(this).val() == ''){
                    $('#showLink').show()
                }else{
                    $('#showLink').hide()
                }
            });
        }
    })
</script>
</body>
</html>	
