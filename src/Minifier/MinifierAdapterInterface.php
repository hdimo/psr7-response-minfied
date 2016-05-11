<?php
/**
 * Created by PhpStorm.
 * User: jkhaled
 * Date: 5/10/16
 * Time: 10:34 AM
 */

namespace ResponseCompressor\Minifier;

interface MinifierAdapterInterface
{
    /**
     * minify file content
     *
     * @return mixed
     */
    public function minify();
}