$(document).ready(function ()
  {
      //establece la imagen activa al cargar pagina
      $('.img-notebook').attr('src',$('.active').attr('src'));

      //pone activa la imagen clikeada
      $('body').on('click','.mininotebook',function(event)
        {
          event.preventDefault();
          $('.mininotebook').removeClass('active');
          $(this).addClass('active');
          $('.img-notebook').attr('src',$(this).children().attr('src'));
        });

      //cambia imagen de perfil con partial render
      $('body').on('submit','.submitFotoPerfil',function(event)
        {
            event.preventDefault();
            let form_data = new FormData(this);
            $.ajax(
              {
                url:"cambiarFotoPerfil",
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function(data)
                  {
                    if (data.length>1)
                      {
                        $('.datos-perfil').children('img').remove();
                        $('.datos-perfil').prepend(data);
                      }
                  }
            });
        });


  });
