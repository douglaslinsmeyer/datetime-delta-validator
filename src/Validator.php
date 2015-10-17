<?php

/**
 * File Validator.php
 *
 * @author Douglas Linsmeyer <douglas.linsmeyer@nerdery.com>
 */

namespace DLinsmeyer\DateTimeDeltaValidator;

/**
 * Class Validator
 *
 * @author Douglas Linsmeyer <douglas.linsmeyer@nerdery.com>
 */
class Validator
{
    /**
     * Validate
     *
     * Check if two dates are within an arbitrary number of minutes of one another.
     *
     * @param \DateTime $dateAlpha
     * @param \DateTime $dateBravo
     * @param int $minutes
     *
     * @return bool
     */
    public function validate(\DateTime $dateAlpha, \DateTime $dateBravo, $minutes)
    {
        $difference = abs($dateAlpha->getTimestamp() - $dateBravo->getTimestamp()) / 60;

        return $difference <= $minutes;
    }
}
