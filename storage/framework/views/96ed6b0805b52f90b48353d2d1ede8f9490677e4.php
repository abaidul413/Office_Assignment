<!DOCTYPE html>
<html>

  <head>
    <!-- meta -->
    <meta charset="utf-8">

    <title>D3js Bar Graph</title>

    <!-- CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <?php echo e(Html::style('css/stylesheet.css')); ?>


    <!-- D3.js CDN source -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js" charset="utf-8"></script>

  </head>

  <body>

    <!-- Title -->
    <h1 style="text-align:center;">Bar Graph Example - 2012 GDP by Nation</h1>

    <!-- Your D3 code for bar graph -->
    <script type="text/javascript" src="gdpBarGraph.js"></script>

    <!-- Info -->
    <p><strong>Created by: </strong>Abir</p>
   <?php echo Html::script('js/gdpBarGraph.js'); ?>

  </body>

</html>
