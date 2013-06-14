<?php
/*
 * This file is part of the Bolt skeleton package.
 *
 * (c) Richard Hinkamp <richard@hinkamp.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!extension_loaded('intl')) {
    dl('intl.so');
}

require_once( '../vendor/bolt/bolt/app/bootstrap.php' );

if ($app['debug']) {
    $app->run();
} else {
    /** @var $cache \Silex\HttpCache */
    $cache = $app['http_cache'];
    $cache->run();
}