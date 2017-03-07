<?php

Swift::init(function () {
    $charset = Kohana::$charset;

    // Set the default character set for everything
    Swift_Preferences::getInstance()->setCharset($charset);
});
