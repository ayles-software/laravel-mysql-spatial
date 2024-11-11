<?php

namespace Grimzy\LaravelMysqlSpatial\Schema;

use Illuminate\Database\Schema\Blueprint as IlluminateBlueprint;
use Illuminate\Database\Schema\ColumnDefinition;

class Blueprint extends IlluminateBlueprint
{
    /**
     * Add a geometry column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function geometry($column, $subtype = null, $srid = 0): ColumnDefinition
    {
        return $this->addColumn('geometry', $column, compact('srid'));
    }

    /**
     * Add a point column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function point($column, $srid = null): ColumnDefinition
    {
        return $this->addColumn('point', $column, compact('srid'));
    }

    /**
     * Add a linestring column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function lineString($column, $srid = null): ColumnDefinition
    {
        return $this->addColumn('linestring', $column, compact('srid'));
    }

    /**
     * Add a polygon column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function polygon($column, $srid = null): ColumnDefinition
    {
        return $this->addColumn('polygon', $column, compact('srid'));
    }

    /**
     * Add a multipoint column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function multiPoint($column, $srid = null): ColumnDefinition
    {
        return $this->addColumn('multipoint', $column, compact('srid'));
    }

    /**
     * Add a multilinestring column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function multiLineString($column, $srid = null): ColumnDefinition
    {
        return $this->addColumn('multilinestring', $column, compact('srid'));
    }

    /**
     * Add a multipolygon column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function multiPolygon($column, $srid = null): ColumnDefinition
    {
        return $this->addColumn('multipolygon', $column, compact('srid'));
    }

    /**
     * Add a geometrycollection column on the table.
     *
     * @param string   $column
     * @param null|int $srid
     *
     * @return ColumnDefinition
     */
    public function geometryCollection($column, $srid = null): ColumnDefinition
    {
        return $this->addColumn('geometrycollection', $column, compact('srid'));
    }

    /**
     * Specify a spatial index for the table.
     *
     * @param string|array $columns
     * @param string       $name
     *
     * @return ColumnDefinition
     */
    public function spatialIndex($columns, $name = null): ColumnDefinition
    {
        return $this->indexCommand('spatial', $columns, $name);
    }

    /**
     * Indicate that the given index should be dropped.
     *
     * @param string|array $index
     *
     * @return ColumnDefinition
     */
    public function dropSpatialIndex($index): ColumnDefinition
    {
        return $this->dropIndexCommand('dropIndex', 'spatial', $index);
    }
}
