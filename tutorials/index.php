<?php include_once 'includes/utilities.php'; ?>
<?php include_once 'includes/header.php'; ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>CSS3 <small> - Just a Taste</small></h1>
    <blockquote>
      A brief overview of the <strong><a href="#box-orient">box-orient</a></strong>, <strong><a href="#box-sizing">box-sizing</a></strong>, <strong><a href="#box-pack">box-pack</a></strong>, &amp; <strong><a href="#box-shadow">box-shadow</a></strong> CSS attributes.
    </blockquote>
  </div>
</div>

<div class="container">
  <p class="alert alert-success">
    If you want to dig deeper, I highly recommend perusing some of the <strong><a href="#links">Links for Thought</a></strong> listed at the bottom of this article.
  </p>
</div>
<!--
  - - Section: box-orient
-->

<hr>

<div class="container">
  <h2 id="box-orient">box-orient</h2>
  <div class="row">
    <div class="col-md-6">
      <p class="lead">
        Values: horizontal | vertical | inline-axis | block-axis | inherit
        <br>
        Syntax: 'box-orient: <em>value</em>'
      </p>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">box-orient</h3>
        </div>
        <div class="panel-body">
<pre>
<code data-language="css">
.box-orient {
  box-orient: value;
  -webkit-box-orient: value;
  -moz-box-orient: value;
  -ms-box-orient: value;
  box-orient: value;
}
</code>
</pre>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-md-8">
      <strong>orient-horizontal</strong>
      <div class="orient-horizontal">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>
      <strong>orient-vertical</strong>
      <div class="orient-vertical">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>
    </div>

    <div class="col-md-4">
      <h4>Using the Same HTML</h4>
<pre>
<code data-language="html">
<div class="orient-horizontal">
  [...]
  <div class="color-block"></div>
  [...]
</div>
<!-- and -->
<div class="orient-vertical">
  [...]
  <div class="color-block"></div>
  [...]
</div>
</code>
</pre>
    </div>

  </div>

</div>

<!--
  - - Section: box-sizing
-->

<hr>

<div class="container">
  <h2 id="box-sizing">box-sizing</h2>
  <div class="row">
    <div class="col-md-6">
      <p class="lead">
        Values: content-box | padding-box | border-box
        <br>
        Syntax: 'box-sizing: <em>value</em>'
      </p>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">box-sizing</h3>
        </div>
        <div class="panel-body">

<pre>
<code data-language="css">
.box-sizing {
  -webkit-box-sizing: value;
  -moz-box-sizing: value;
  -ms-box-sizing: value;
  box-sizing: value;
}
</code>
</pre>



        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-md-8">
      <strong>Default box-sizing <em>(content-box)</em></strong>
      <div class="border-children">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>

      <div class="clearfix"></div>

      <strong>Using border-box</strong>
      <div class="border-children sizing">
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
        <div class="color-block"></div>
      </div>
    </div>

    <div class="col-md-4">
      <h4>Using the Same HTML</h4>
<pre>
<code data-language="html">
<div class="border-children">
  [...]
  <div class="color-block"></div>
  [...]
</div>
<!-- and -->
<div class="border-children sizing">
  [...]
  <div class="color-block"></div>
  [...]
</div>
</code>
</pre>
    </div>

  </div>

  <div class="row">
  </div>


</div>

<!--
  - - Section: box-pack
-->

<hr>

<div class="container">
  <h2 id="box-pack">box-pack</h2>
  <div class="row">
    <div class="col-md-6">
      <p class="lead">
        Values: start | center | end | justify
        <br>
        Syntax: 'box-pack: <em>value</em>'
      </p>
    </div>

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">box-pack</h3>
        </div>
        <div class="panel-body">

<pre>
<code data-language="css">
.box-pack {
  -webkit-box-pack: value;
  -moz-box-pack: value;
  -ms-box-pack: value;
  box-pack: value;
}
</code>
</pre>



        </div>
      </div>
    </div>
  </div>

  <div class="row">

        <div class="col-md-6">
          <div class="pack-wrapper pack-start">
            <div class="color-block"></div>
            <div class="color-block"></div>
            <div class="color-block"></div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="pack-wrapper pack-center">
            <div class="color-block"></div>
            <div class="color-block"></div>
            <div class="color-block"></div>
          </div>
        </div>

  </div>
  <hr>
  <div class="row">

        <div class="col-md-6">
          <div class="pack-wrapper pack-end">
            <div class="color-block"></div>
            <div class="color-block"></div>
            <div class="color-block"></div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="pack-wrapper pack-justify">
            <div class="color-block"></div>
            <div class="color-block"></div>
            <div class="color-block"></div>
          </div>
        </div>


  </div>

</div>

<!--
  - - Section: box-shadow
-->

<hr>

<div class="container">
  <h2 id="box-shadow">box-shadow</h2>
  <div class="row">
    <div class="col-md-6">
      <p class="lead">
        Values: inset, offset-x/y, blur-radius, spread-radius, color
        <br>
        Syntax: 'box-shadow: <em> none | [inset? &amp;&amp; [ offset-x offset-y blur-radius? spread-radius? color? ] ]</em>'
      </p>
    </div>

      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">box-shadow</h3>
          </div>
          <div class="panel-body">

<pre>
<code data-language="css">
.box-shadow {
  -webkit-box-shadow: value;
  box-shadow: value;
}
</code>
</pre>



          </div>
        </div>
      </div>

    </div>

  <div class="row">

    <div class="col-md-3">
      <div class="color-block shadow"></div>
    </div>

    <div class="col-md-3">
      <div class="color-block shadow-inset"></div>
    </div>

    <div class="col-md-3">
      <div class="color-block shadow-hover transition"></div>
    </div>

    <div class="col-md-3">
      <div class="color-block shadow" style="background: rgba(0,0,0,0.0); "></div>
    </div>

  </div>

</div>


<!--
 - - Links and Stuff
 -->

 <hr>

<div class="container">
  <h2 id="links">Resources &amp; Notes</h2>
  <div class="row">
    <div class="col-md-12">
      <div class="list-group">
        <div class="list-group-item">
          <h4 class="list-group-item-heading">Some Links for Thought</h4>
        </div>
        <a target="_blank" href="http://html5please.com/#flexbox" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> HTML5Please - FlexBox</a>
        <a target="_blank" href="http://css-tricks.com/old-flexbox-and-new-flexbox/" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> Chris Coyier (CSSTricks.com) on FlexBox</a>
        <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/box-shadow" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> MDN - box-shadow</a>
        <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/box-sizing" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> MDN - box-sizing</a>
        <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/box-orient" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> MDN - box-orient</a>
        <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/-moz-box-pack" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> MDN - box-pack</a>
        <a target="_blank" href="http://css3gen.com/box-shadow/" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> CSS3 Box Shadow Generator</a>
        <a target="_blank" href="http://www.paulirish.com/2012/box-sizing-border-box-ftw/" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> Paul Irish on boxsizing: border-box</a>
        <a target="_blank" href="http://www.html5rocks.com/en/tutorials/flexbox/quick/" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> HTML5Rocks on Flex Box</a>
        <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Flexible_boxes?redirectlocale=en-US&redirectslug=CSS%2FTutorials%2FUsing_CSS_flexible_boxes" class="list-group-item"><span class="glyphicon glyphicon-new-window"></span> MDN - Flex Box</a>
      </div>
    </div>
  </div>
</div>


<?php include_once 'includes/footer.php'; ?>