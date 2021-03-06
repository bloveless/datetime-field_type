<?php namespace Anomaly\DatetimeFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use Carbon\Carbon;

/**
 * Class DatetimeFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DatetimeFieldType
 */
class DatetimeFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The datetime field type.
     * This is for IDE hinting.
     *
     * @var DatetimeFieldType
     */
    protected $object;

    /**
     * Format the value.
     *
     * @param null $format
     * @return null|string
     */
    public function format($format = 'm/d/Y')
    {
        $value = $this->object->getValue();

        if ($value && $value instanceof Carbon) {
            return $value->format($format);
        }

        return null;
    }
}
