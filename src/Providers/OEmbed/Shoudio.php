<?php

namespace Embed\Providers\OEmbed;

class Shoudio extends EndPoint implements EndPointInterface
{
    protected static $pattern = 'https?://shoudio.com/*';
    protected static $endPoint = 'http://shoudio.com/api/oembed';
}