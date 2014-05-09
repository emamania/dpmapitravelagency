var paramsChat = 'location=0,status=0,scrollbars=0,width=430,height=500';
var paramsSkype = 'location=0,status=0,scrollbars=0,width=450,height=350';
  
(function($) {
  
  // Popup Plugin
  $.fn.popup = function(params, href) {
    href = (typeof href == 'undefined') ? $(this).attr('href') : href;
    function clickHandler(e) {
      if (e.ctrlKey || e.shiftKey || e.metaKey)
        return;
      var w = window.open(href, '_blank', params);
      if (w && !w.closed) {
        w.focus();
        e.preventDefault();
      }
    }
    this
      .bind('click', clickHandler);
    return this;
  };

  var sharebarHandler = function() {
    ventana = $(window).width();
    // co es el tamanio de el espacio a cada lado del centro y se le resta 83 por el tamanio del sharebar
    // 83 es el tamanio de Share bar y 960 es el tamanio de #main
    co = parseInt((ventana-960)/2) - 88;
    // Posicionamos el Sharebar
    $('#sharebar').css('left', co);
  };

  Drupal.behaviors.qelluchaska = {
    attach: function (context) {

      //Tour prices tables.
      $.ajax({
        url: "/sites/all/themes/qellucart/get.php",
        type:"GET",
        success:  function(cambio){
          $(".fprice", context).each(function(){
            $(this).css({"font-size":"11px","font-weight":"bold"});
            price=0;
            price=parseInt($(this).text());
            // Opera y reemplaza precios
            $(this).text("USD "+price).next("td").text("S/."+parseInt(price*cambio)).css("font-size","11px"); 
          });
        }
      });

      // Popup.
      $('.live-chat', context).popup(paramsChat);
      $('.live-skype', context).popup(paramsSkype);


      // Hide Blocks.
      $('#welcome .hide', context).click(function() {
        $('#welcome', context).hide('slow');
        return false;
      }) ;

      $('#sharebar-links .hide', context).click(function() {
        $('#sharebar-links', context).hide('slow');
        $('#sharebar-show', context).show('slow');
        return false;
      }) ;

      $('#sharebar-show .hide', context).click(function() {
        $('#sharebar-show', context).hide('slow');
        $('#sharebar-links', context).show('slow');
        return false;
      }) ;

      sharebarHandler();
      
      // Premio.
      var header_inner = $('#header-inner');
      var banner = $('<img src="http://media.perunoticias.net/images/logos/empresaperuana.png" alt="Premio mejor empresa de Viajes y Turismo">');
      var div_banner = $('<div id="premio"></div>');
      var text = $('<p><span>Premio Mejor<br />Agencia de Viajes y Turismo en Per&uacute;</span></p>');
      text.appendTo(div_banner);
      banner.appendTo(div_banner);
      div_banner.appendTo(header_inner);
      div_banner.click(function() {
        location.href = 'http://www.machupicchu.biz/mejor-agencia-de-viajes-y-turismo-en-peru-machu-picchu-travel';
      });

      // Visa.
      var form = $('.add-to-cart form', context);
      var template_button = $('<button type="button" id="do-payment"></button>');
      var the_input = $('#edit-varprice');
      var the_amount = $('#the-amount');

      template_button.text(Drupal.t('Make Payment'));

      template_button.click(function(e) {
        e.preventDefault();
        if(the_amount.val() === '') {
          alert('Ingresa un monto válido');
          the_amount.focus();
          return false;
        }
        the_input.val(the_amount.val());
        form.submit();
      });

      template_button.appendTo('.bar-visa');

      form.css({display: 'none'});

      $('.visa-popup', context).popup('location=0,status=0,scrollbars=0,width=606,height=402');

    }
  };

  $(window).resize(function() {
    sharebarHandler();
  });

})(jQuery);
