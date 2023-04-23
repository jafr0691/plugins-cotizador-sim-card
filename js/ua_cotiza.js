(function($) {
    var touchEvent = 'ontouchstart' in window ? 'touchstart' : 'click';
    function planesmejorados() {
        jQuery("input[name='planmejorado']").change( function() {
            cotiszar();
        });
    };
    jQuery('#form_dias').keyup(cotiszar);
    jQuery('#form_card').keyup(cotiszar);
    jQuery('#form_envio').on(touchEvent,function(){
        cotiszar();
    })
    function cotiszar(){

        var mejor = jQuery('input:radio[name=planmejorado]:checked').val();
        var pais = $('#form-pises').val();
        jQuery.ajax({
            url: ua_cotiza.ua_cotizaajaxurl,
            type: "post",
            data: {idplanmejor:mejor,action:'ua_cotiza',acti:'mejorplan'},
            beforeSend: function() {
                // jQuery('.contenedor_carga_coti').css('display', 'inline-block');
            },
            success: function(dato) {
                var p = JSON.parse(dato);
                if (p) {
                    var form_dias = jQuery('#form_dias').val();
                    var form_card = jQuery('#form_card').val();
                    jQuery('#nplan').html(p['plan']);
                    jQuery('#nameplan').val(p['plan']);
                    jQuery('#descriptplan').val(p['descrip']);
                    var enviobtn = jQuery('#form_envio:checked').val();
                    var d = 0,t = Number(form_dias)+Number(form_card),totalprice = true,envio = Number(p['envio']),id_p=0;
                    p['entredias'].forEach(function(dia){
                        if (Number(form_dias)>=Number(dia.desde) && Number(form_dias)<=Number(dia.a)) {
                            var tt = Number(dia.diasprecio)*t;
                            jQuery('#tarifa_dias').val(Number(dia.diasprecio));
                            id_p = dia.id_variation;
                            jQuery('#diaria').html(Number(dia.diasprecio).toFixed(2)+' USD');
                            if(enviobtn=='1'){
                                tt = tt +  envio;
                                jQuery('#envio').html(envio+' USD');
                            }else{
                                jQuery('#envio').html('Sin envio');
                            }
                            jQuery('#total').html(Number(tt).toFixed(2)+' USD');
                            jQuery('#costtotal').val(Number(tt));
                            totalprice = false;
                        }else if(Number(form_dias)>=Number(dia.desde) && Number(dia.a)==10000){
                            var tt = Number(dia.diasprecio)*t;
                            jQuery('#tarifa_dias').val(Number(dia.diasprecio));
                            id_p = dia.id_variation;
                            jQuery('#diaria').html(Number(dia.diasprecio).toFixed(2)+' USD');
                            if(enviobtn=='1'){
                                tt = tt +  envio;
                                jQuery('#envio').html(envio+' USD');
                            }else{
                                jQuery('#envio').html('Sin envio');
                            }
                            jQuery('#total').html(Number(tt).toFixed(2)+' USD');
                            jQuery('#costtotal').val(Number(tt));
                            totalprice = false;
                        }
                    });
                    if (totalprice) {
                        var tt = Number(p['price'])*t;
                        id_p = p['id_plan'];
                        jQuery('#diaria').html(Number(p['price']).toFixed(2)+' USD');
                        if(enviobtn=='1'){
                            tt = tt +  envio;
                            jQuery('#envio').html(envio+' USD');
                        }else{
                            jQuery('#envio').html('Sin envio');
                        }
                        jQuery('#total').html(Number(tt).toFixed(2)+' USD');
                        jQuery('#costtotal').val(Number(tt));
                    }
                    jQuery('#id_plan').val(id_p);
                    jQuery('#form_cotizador').attr('action', location.href);
                    jQuery('#cantida_dias').val(form_dias);
                    jQuery('#cantida_card').val(form_card);
                    jQuery('#costo_plan').val(Number(p['price']));
                } else {
                    alert("Error: no se encontro ningun plan para este pais");
                }
                jQuery('.contenedor_carga_coti').css('display', 'none');
            }
        });

    }

    function planpais(){
        var pais = $('#form-pises').val();
        jQuery.ajax({
            url: ua_cotiza.ua_cotizaajaxurl,
            type: "post",
            data: {paises:pais,action:'ua_cotiza',acti:'pais'},
            beforeSend: function() {
                jQuery('.contenedor_carga_coti').css('display', 'inline-block');
            },
            success: function(dato) {
                var p = JSON.parse(dato);
                console.log(p);
                if (p) {
                    $pricemenor = 0;
                    var planes = p.sort((a, b) => a.price - b.price)
                    var i = 0,planmejorado=``,d=0;
                    var enviobtn = jQuery('#form_envio:checked').val();
                    var form_dias = jQuery('#form_dias').val();
                    var form_card = jQuery('#form_card').val();
                    var d = 0,t = Number(form_dias)+Number(form_card),totalprice = true,envio = 3,id_p=0;
                    planes.forEach(function(plan){
                        if(i==0){
                            jQuery('#plandescrip').html(`<input type="radio" value="`+plan['id_plan']+`" id="form-`+plan['id_plan']+`" name="planmejorado" style="display:none;" checked>`+plan['descrip']);
                            jQuery('#nplan').html(plan['plan']);
                            jQuery('#nameplan').val(plan['plan']);
                            jQuery('#descriptplan').val(plan['descrip']);
                            jQuery('#envio').html(plan['envio']+' USD');
                            var envio = Number(plan['envio']);
                                plan['entredias'].forEach(function(dia){
                                    if (Number(form_dias)>=Number(dia.desde) && Number(form_dias)<=Number(dia.a)) {
                                        var tt = Number(dia['diasprecio'])*t;
                                        jQuery('#tarifa_dias').val(Number(dia['diasprecio']));
                                        id_p = dia.id_variation;
                                        jQuery('#diaria').html(Number(dia['diasprecio']).toFixed(2)+' USD');
                                        if(enviobtn=='1'){
                                            tt = tt +  envio;
                                            jQuery('#envio').html(envio+' USD');
                                        }else{
                                            jQuery('#envio').html('Sin envio');
                                        }
                                        jQuery('#total').html(Number(tt).toFixed(2)+' USD');
                                        jQuery('#costtotal').val(Number(tt));
                                        totalprice = false;
                                    }else if(Number(form_dias)>=Number(dia.desde) && Number(dia.a)==10000){
                                        var tt = Number(dia['diasprecio'])*t;
                                        jQuery('#tarifa_dias').val(Number(dia['diasprecio']));
                                        id_p = dia.id_variation;
                                        jQuery('#diaria').html(Number(dia['diasprecio']).toFixed(2)+' USD');
                                        if(enviobtn=='1'){
                                            tt = tt +  envio;
                                            jQuery('#envio').html(envio+' USD');
                                        }else{
                                            jQuery('#envio').html('Sin envio');
                                        }
                                        jQuery('#total').html(Number(tt).toFixed(2)+' USD');
                                        jQuery('#costtotal').val(Number(tt));
                                        totalprice = false;
                                    }
                                });
                                if (totalprice) {
                                    var tt = Number(plan['price'])*t;
                                    id_p = plan['id_plan'];
                                    jQuery('#diaria').html(Number(plan['price']).toFixed(2)+' USD');
                                    if(enviobtn=='1'){
                                        tt = tt +  envio;
                                        jQuery('#envio').html(envio+' USD');
                                    }else{
                                        jQuery('#envio').html('Sin envio');
                                    }
                                    jQuery('#total').html(Number(tt).toFixed(2)+' USD');
                                    jQuery('#costtotal').val(Number(tt));
                                }
                                jQuery('#id_plan').val(id_p);
                                jQuery('#form_cotizador').attr('action', location.href);
                                jQuery('#cantida_dias').val(form_dias);
                                jQuery('#cantida_card').val(form_card);
                                jQuery('#costo_plan').val(Number(plan['price']));
                        }else{
                            planmejorado += `<div>
                    <div class="option-plan-mejorado"><span class="elementor-field-option"><input type="radio" value="`+plan['id_plan']+`" id="form-`+plan['id_plan']+`" name="planmejorado"> <label for="form-`+plan['id_plan']+`">`+plan['plan']+`</label></span></div>              </div>
                                <div class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_8b1ac50 elementor-col-100">
                    <p class="rplan">`+plan['descrip']+`</p>
                </div>`
                        }
                        i++;
                    });

                    jQuery('#plandescripmejorado').html(planmejorado);
                    planesmejorados();

                } else {
                    alert("Error: no se encontro ningun plan para este pais");
                }
                jQuery('.contenedor_carga_coti').css('display', 'none');
            }
        });
    }
    if(document.getElementById('form-pises')){
        planpais();
        jQuery('#form-pises').change(planpais);
    }

    jQuery('#form_cotizador').submit(function(e){
        var id_plan = $('#id_plan').val();
        var dias = jQuery('#cantida_dias').val();
        var card = jQuery('#cantida_card').val();
        jQuery.ajax({
            url: ua_cotiza.ua_cotizaajaxurl,
            type: "post",
            data: {dias:dias,card:card,id_plan:id_plan,action:'ua_cotiza',acti:'compra'},
            beforeSend: function() {
                jQuery('.contenedor_carga_coti').css('display', 'inline-block');
            },
            success: function(dato) {
                if(dato){
                    window.location=dato;
                }
                jQuery('.contenedor_carga_coti').css('display', 'none');
            }
        });
        e.preventDefault();
    });
    jQuery('#correo_form_cotizador').on(touchEvent,function(e){
        var name = jQuery('#correo_name').val();
        var email = jQuery('#correo_email').val();
        if(name!="" && email!=""){
            var id_plan = $('#id_plan').val();
            var destino = jQuery('#form-pises').val();
            var dias = jQuery('#cantida_dias').val();
            var tarifadias = jQuery('#tarifa_dias').val();
            var card = jQuery('#cantida_card').val();
            var costplan = jQuery('#costo_plan').val();
            var enviobtn = jQuery('#form_envio:checked').val();
            var costtotal = jQuery('#costtotal').val();
            var nameplan = jQuery('#nameplan').val();
            var descriptplan = jQuery('#descriptplan').val();
            var cantidad =Number(dias) + Number(card);
            var url = location.href+'?id='+id_plan+'&cantidad='+cantidad;
            jQuery.ajax({
                url: ua_cotiza.ua_cotizaajaxurl,
                type: "post",
                data: {dias:dias,card:card,id_plan:id_plan,nameplan:nameplan,descriptplan:descriptplan,costtotal:costtotal,name:name,email:email,costplan:costplan,destino:destino,tarifadias:tarifadias,envio:enviobtn,action:'ua_cotiza',acti:'correo'},
                beforeSend: function() {
                    jQuery('.contenedor_carga_coti').css('display', 'inline-block');
                },
                success: function(dato) {
                    console.log(dato);
                    if(dato){
                        jQuery('#formmodalemail').hide();
                    }
                    jQuery('.contenedor_carga_coti').css('display', 'none');
                }
            });

        }else{
            alert("Tiene que llenar los campos del formulario para enviar el correo.");
            jQuery('.contenedor_carga_coti').css('display', 'none');
        }
        e.preventDefault();
    });


})(jQuery);