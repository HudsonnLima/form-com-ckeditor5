<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./ckeditor5/ckeditor5.css">
 
  <!--BOOTSTRAP 5.0.2-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--//BOOTSTRAP 5.0.2-->

  <!--ICONES-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/fontawesome.min.css">
  <script src="https://kit.fontawesome.com/7305dbe23e.js" crossorigin="anonymous"></script>
  <!--//ICONES-->

  <script type="text/javascript" src="js/jquery-3.7.1.js"></script>
  <title>Formulário com CK Editor</title>
</head>

<body>
  <br /><br />
  <div class="container">


    <form name="formulario" action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <input type="file" name="post_cover[]" class="form-control" id="upload-img" multiple>
        <label id="foto" for="upload-img"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Selecionar imagem</label>
      </div>

      <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>


      <br />
      <div class="form-floating mb-2">
        <input type="text" name="post_title" class="form-control" id="floatingInput" value="<?php if (isset($post['post_title'])) echo $post['post_title']; ?>">
        <label for="floatingInput">Titulo:</label>
      </div>

      <div class="form-group">
        <textarea id="editor" name="post_content" class="form-control"><?php if (isset($post['post_content'])) echo htmlspecialchars($post['post_content']); ?></textarea>
      </div><br />

      <div class="row g-2">
        <div class="form-group col-md-4">
          <div class="form-floating">
            <input type="datetime-local" class="form-control" name="post_date" value="<?php
                                                                                      if (isset($post['post_date'])):
                                                                                        echo date('Y-m-d\TH:i', strtotime($post['post_date']));
                                                                                      else:
                                                                                        echo date('Y-m-d\TH:i');
                                                                                      endif;
                                                                                      ?>">

            <label for="floatingInputGrid">Data:</label>
          </div>
        </div>


        <div class="form-group col-md-4">
          <div class="form-floating ">
            <select class="form-select" name="post_category" id="floatingSelectGrid" aria-label="Floating label select example">
              <option value=""> Selecione a categoria: </option>

            </select>
            <label for="floatingSelectGrid">Postar em: &nbsp;&nbsp;</label>
          </div>
        </div>


        <div class="form-group col-md-4">
          <div class="form-floating">
            <input type="text" readonly="readonly" class="form-control" name="post_author" value="Pega o autor, conforme usuário logado">
            <label for="floatingInputGrid">Autor:</label>

          </div>
        </div>

      </div><br />
      <input type="submit" value="Cadastrar" name="SendPostForm" class="btn btn-primary" />
      <input type="submit" value="Cadastrar e Publicar" name="SendPostForm" class="btn btn-primary" />

    </form>




  </div>
  <script type="importmap">
    {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.3.1/"
                }
            }
        </script>
  <script type="module">

  </script>
  <!-- A friendly reminder to run on a server, remove this during the integration. -->

  <script src="js/ckeditor.js" type="module"></script>
  <script src="js/imagepreview.js"></script>

</body>

</html>