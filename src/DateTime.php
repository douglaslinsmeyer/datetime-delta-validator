<?php
/**
 * File DateTime.php
 *
 * @author Douglas Linsmeyer <douglas.linsmeyer@nerdery.com>
 */

namespace DLinsmeyer\DateTimeDeltaValidator;

use DateInterval;

/**
 * Class DateTime
 *
 * @author Douglas Linsmeyer <douglas.linsmeyer@nerdery.com>
 */
class DateTime extends \DateTime
{
    const UNIX_EPOCH = '1970-01-01 00:00:00';

    /**
     * Set DateTime from a Pic DateTime format
     *
     * @param int $daysSinceUnixEpoch
     * @param int $secondsSinceMidnight
     *
     * @return DateTime
     */
    public static function createFromPickDateTime($daysSinceUnixEpoch, $secondsSinceMidnight)
    {
        $dateTime = new \DateTime(self::UNIX_EPOCH, new \DateTimeZone('UTC'));
        $interval = new DateInterval(sprintf(
            'P%dDT%dS',
            $daysSinceUnixEpoch,
            $secondsSinceMidnight
        ));
        $dateTime->add($interval);

        return $dateTime;
    }
}
