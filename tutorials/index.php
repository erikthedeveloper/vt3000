<?php include_once 'includes/utilities.php'; ?>
<?php include_once 'includes/header.php'; ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Concept Presentation 1</h1>
    <p>
      What a great presentation... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, rem suscipit quod blanditiis eum eos!
    </p>

    <div class="row">

      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">box-sizing</h3>
          </div>
          <div class="panel-body">

            <pre class="prettyprint language-css">
            <code>
.box-sizing {
  -webkit-box-sizing: value;
  -moz-box-sizing: value;
  -ms-box-sizing: value;
  box-sizing: value;
}
            </code>
            </pre>

            <a class="btn btn-primary btn-lg pull-right">Learn more &raquo;</a>

          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">box-orient</h3>
          </div>
          <div class="panel-body">

            <pre class="prettyprint language-css">
            <code class="">
.box-orient {
  box-orient: value;
  -webkit-box-orient: value;
  -moz-box-orient: value;
  -ms-box-orient: value;
  box-orient: value;
}
            </code>
            </pre>

            <a class="btn btn-primary btn-lg pull-right">Learn more &raquo;</a>
        </div>
      </div>
    </div>

      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">box-shadow</h3>
          </div>
          <div class="panel-body">

            <pre class="prettyprint language-css">
            <code class="">
.box-shadow {
  -webkit-box-shadow: value;
  box-shadow: value;
}
            </code>
            </pre>

            <a class="btn btn-primary btn-lg pull-right">Learn more &raquo;</a>

          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">box-pack</h3>
          </div>
          <div class="panel-body">

            <pre class="prettyprint language-css">
            <code class="">
.box-pack {
  -webkit-box-pack: value;
  -moz-box-pack: value;
  -ms-box-pack: value;
  box-pack: value;
}
            </code>
            </pre>

            <a class="btn btn-primary btn-lg pull-right">Learn more &raquo;</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--
  - - Section: box-orient
-->
<div class="container">
  <h2>box-orient</h2>
  <div class="row">

    <div class="col-sm-9">
      <div class="orient-horizontal">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="orient-vertical">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>
    </div>

  </div>

</div>

<!--
  - - Section: box-sizing
-->
<div class="container">
  <h2>box-sizing</h2>
  <div class="row">

    <div class="col-sm-8">
      <div class="border-children">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>

      <div class="clearfix"></div>

      <div class="border-children sizing">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>
    </div>

    <div class="col-sm-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, minima cum id omnis ut officiis.
    </div>

  </div>

  <div class="row">
  </div>


</div>

<!--
  - - Section: box-pack
-->
<div class="container">
  <h2>box-pack</h2>
  <div class="row">

    <div class="col-sm-8">
      <div class="row">

        <div class="col-sm-4">
          <div class="pack-wrapper">
          <div class="color-block"></div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="pack-wrapper">
          <div class="color-block"></div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="pack-wrapper">
          <div class="color-block"></div>
          </div>
        </div>

      </div>
    </div>

    <div class="col-sm-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, porro, debitis nostrum beatae omnis error!
    </div>
  </div>

</div>

<!--
  - - Section: box-shadow
-->
<div class="container">
  <h2>box-shadow</h2>
  <div class="row">

    <div class="col-sm-3">
      <div class="color-block shadow"></div>
    </div>

    <div class="col-sm-3">
      <div class="color-block shadow"></div>
    </div>

    <div class="col-sm-3">
      <div class="color-block shadow"></div>
    </div>

    <div class="col-sm-3">
      <div class="color-block shadow"></div>
    </div>

  </div>

</div>


<!--
<div class="container">
  <div class="row">
    <div class="col-sm-12">

      <h2>The Chessboard</h2>
        <div class="chessboard" id="chessboard">

            <?php
            foreach ($rows as $row): ?>
                <div class="row">
                <?php foreach ($row as $col):
                $is_white = preg_match('/w-/', $col);
                $piece_class = "piece";
                $piece_class .= $is_white ? " white" : " black";
                ?>
                    <div class="square draggable" draggable="true"><div class="<?php echo $piece_class; ?>"><?php echo $pieces[$col]; ?></div></div>
                <?php endforeach ?>
                </div>
            <?php endforeach ?>

        </div>

    </div>
  </div>
</div>
-->


<?php include_once 'includes/footer.php'; ?>