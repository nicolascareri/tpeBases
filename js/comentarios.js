$(document).ready(function()
  {
    let templateComentarios;
    let templateComentario;
    let fecha_ultimo_comentario;
    let recarga;
    let notebook;
    let idComentario;

    $.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentarios = template);
    //asignando template de comentarios
    $.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentario = template);
    //asignando template de comentarios de usuario

    $('body').on('click','.btnComentarios',function()
    //carga de comentarios
      {
        fecha_ultimo_comentario=comentarios.fecha_ultimo_comentario;
        $('.user_coment').remove();
        cargando();
        clearInterval(recarga);
        notebook = $(this).data('idnotebook');
        cargarComentarios(notebook);
         // console.log(idNotebook);
      });

    function cargarComentarios(idNotebook)
    //llamada ajax a la api, devuelve los comentarios y los carga
      {
        let action = "api/comentarios?id_notebook="+idNotebook;
        if ((fecha_ultimo_comentario!=null)){
          action+="&fecha_ultimo_comentario="+fecha_ultimo_comentario;
          console.log(fecha_ultimo_comentario);
        }
        $.ajax(action)
            .done(function(comentarios)
              {
                $('.carga').remove();
                if (comentarios.fecha_ultimo_comentario != 0){
                  fecha_ultimo_comentario = comentarios.fecha_ultimo_comentario;
                }
                let rendered = Mustache.render(templateComentarios , comentarios);
                $('.comentarios').prepend(rendered);
              })
            .fail(function(){
                $('.comentarios').html('No se pudieron cargar los comentarios');
            });
      }

    $('body').on('click','.btn-review',function(event)
    //llamada ajax al formulario para hacer un comentario
      {
        event.preventDefault();
        let accion = this.href;
        // console.log(accion);
        $.ajax({
            url:accion,
            success: function(result){
                $(".comentar").html(result);
              },
            error: function(){
                $(".comentar").html("<h1>Error - Request Failed!</h1>");
              }
          });
      });

    $('body').on('submit','.publicarComentario',function(event)
    //recibe usuario y notebook y llama a crearComentario
      {
        event.preventDefault();
        let id_usuario = $(this).data('idusuario');

        grabarComentario(id_usuario);
        cargarComentarios(notebook)
        console.log(notebook);
      });

    function grabarComentario(id_usuario)
    //Crea un comentario con ajax, lo devuelve
      {
        let comentario =
          {
            "id_notebook": notebook,
            "id_usuario": id_usuario,
            "texto_comentario": $('#review').val(),
            "nota_comentario": $('input:radio[name=puntaje]:checked').val()
          };
          console.log(comentario);
        $.ajax(
          {
            method: "POST",
            url: "api/comentarios?id_notebook="+notebook,
            data: JSON.stringify(comentario)
          })
        .done(function(comentarios)
          {
            if (comentarios != null){
              fecha_ultimo_comentario = comentarios.fecha_ultimo_comentario;
            }
            let rendered = Mustache.render(templateComentario , comentarios);
            $('.comentar').prepend(rendered);
          })
        .fail(function(data)
          {
            console.log(data);
            alert('Imposible comentar');
          });
      }

      function borrarComentario(idComentario)
      //elimina comentario con ajax
        {
          $.ajax
            ({
              method: "DELETE",
              url: "api/comentarios/" + idComentario
            })
            .done(function(){
                $('#comentario'+idComentario).remove();
              })
            .fail(function(){
                alert('Imposible borrar el comentario');
              });
        }


      $('body').on('click', 'a.comentario-borrar', function(event)
      //llama a la funcion borrarComentario mandandole el id del mismo
        {
            event.preventDefault();
            idComentario = $(this).data('idcomentario');
            console.log(idComentario);
            borrarComentario(idComentario);
        });

      $('body').on('click','.rating',function()
      {
          $(this).parent('.rating').removeClass('fa-star-o');
          $(this).addClass('fa-star');
      });

      function cargando()
      {
          let load = '<i class="fa fa-spinner fa-pulse fa-3x fa-fw carga"></i>';
          $(".comentarios").html(load);
      }

  });
