<?php

require '../src/FormBuilder.php';

use mylesduncanking\FormBuilder;

?>
<!-- FormBuilder::open(); -->
<pre><?php FormBuilder::open(); ?></pre>

<!-- FormBuilder::open('POST', 'foo/bar', true); -->
<pre><?php FormBuilder::open('POST', 'foo/bar', true); ?></pre>

<!--
FormBuilder::open('POST', 'foo/bar', true, [
    'class' => 'form form-horizontal'
]);
-->
<form action="foo/bar" method="POST" enctype="multipart/form-data" class="form form-horizontal">

<!-- FormBuilder::close(); -->
<pre><?php FormBuilder::close(); ?></pre>
