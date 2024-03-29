<?php


namespace Syscape\Single\Scaffold\Fields;


use Illuminate\Support\Facades\Storage;

class Image extends Field
{
    protected $field_view = 'single::fields.image';
    protected $multiple = false;

    public static function make($title,$name = null) : self
    {
        return new self($title,$name);
    }
    public function indexLabel($item)
    {
        return 
        $item->getOriginal($this->getName()) ? 
        "<img width=100 src='".Storage::disk(config('single.app.filesystem-disk'))->url($item->getOriginal($this->getName()))."'>"
        : '';
    }
    public function isFile(): bool
    {
        return true;
    }

    public function multiple($value) : self
    {
        $this->multiple = $value;
        return $this;
    }

    public function isMultiple() : bool
    {
        return $this->multiple;
    }
}
