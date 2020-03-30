<?php
namespace MatthiasWeb\RealMediaLibrary\overrides\interfce\comp;

use MatthiasWeb\RealMediaLibrary\exception\OnlyInProVersionException;

// @codeCoverageIgnoreStart
defined('ABSPATH') or die('No script kiddies please!'); // Avoid direct file request
// @codeCoverageIgnoreEnd

interface IOverrideExImport {
    /**
     * Import a taxonomy with relationships.
     *
     * @param string $tax
     */
    public function importTaxonomy($tax);

    /**
     * Search the wp_realmedialibrary_posts table for importData contains ","
     * and then create the shortcuts for the splitted "," folders.
     */
    public function importShortcuts();

    /**
     * Import a tree with __children array and __metas array recursively.
     *
     * @param array $tree
     */
    public function import($tree);
}