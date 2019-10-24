<?php

namespace LaravelTreeView;

trait TreeViewTrait
{
    // protected $parent_id;

    protected function getParentIdField()
    {
        return 'parent_id';
    }
    /**
     * Sign on model events.
     */
    /* public static function boot()
    {
    } */

    public function saveAsRoot()
    {
        $this->makeRoot()->save();
        return $this;
    }

    public function makeRoot()
    {
        $this->{$this->getParentIdField()} = null;
        return $this;
    }

}
