<?php
/**
 * @copyright 2017
 * @author Stefan "eFrane" Graupner <stefan.graupner@gmail.com>
 * @license MIT
 */

namespace Tests;

/**
 * Base test case class
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Create a data provider array from an item list
     *
     * @param array $items
     **/
    protected function listDataProvider(...$items)
    {
        return array_map(function ($item) {
            return [$item];
        }, $items);
    }
}
