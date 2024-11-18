<?php

namespace panchania83\UploadcareImage;

use Laravel\Nova\Fields\Field;

class UploadcareImage extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'uploadcare-image';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
    	parent::__construct($name, $attribute, $resolveCallback);

    	$this->key(config('uploadcare.publicKey'));
    }

    public function key($key)
    {
    	return $this->withMeta(['key' => $key ]);
    }
}
