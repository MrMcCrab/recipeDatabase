<?php
  include 'header.php';
 ?>

  <body>

    <div class="container">

      <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">
          <div class="jumbotron">

          </div>
        </div>

        <div class="col-md-4">

        </div>

      </div>

      <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">
            <form action="postRecipe.php" method="post">
              <div class="form-group" id="form">
                <input class="form-control" id="input0" type="text" name="recipeName" placeholder="Reseptin nimi" value="">
                <input class="form-control" id="input1" type="text" name="recipe1" placeholder="Ensimmäinen ainesosa" value="">
              </div>
              <button class="btn btn-primary" type="submit" name="button">Tallenna resepti</button>
            </form>
        </div>

        <div class="col-md-4">
          <button class="btn btn-info" type="button" name="button" onclick="addIngredient()">Lisää ainesosa</button>
          <button class="btn btn-info" type="button" name="button" onclick="addTextArea()">Lisää ohje</button>
          <button class="btn btn-warning" type="button" name="button" onclick="removeLastField()">Poista viimeinen kenttä</button>
        </div>

      </div>

    </div>

    <script type="text/javascript">

    var i = 1;

      function addIngredient() {
        i++
        var input = document.createElement('input');
        input.setAttribute('class', 'form-control');
        input.setAttribute('placeholder', 'ainesosa');
        input.setAttribute('id', i);
        input.setAttribute('name', 'recipe' + i);
        var form = document.getElementById('form');
        form.appendChild(input);
      }

      function addTextArea(){
        i++
        var textArea = document.createElement('textarea');
        textArea.setAttribute('class', 'form-control');
        textArea.setAttribute('placeholder', 'Ohjeet')
        textArea.setAttribute('rows', 4);
        textArea.setAttribute('cols', 80);
        textArea.setAttribute('id', i)
        textArea.setAttribute('name', 'recipe' + i)
        var form = document.getElementById('form');
        form.appendChild(textArea);
      }

      function removeLastField() {
        var remove = document.getElementById(i);
        remove.parentNode.removeChild(remove)
        i--
      }

    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
