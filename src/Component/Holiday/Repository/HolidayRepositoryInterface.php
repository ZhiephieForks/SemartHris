<?php

namespace KejawenLab\Application\SemartHris\Component\Holiday\Repository;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
interface HolidayRepositoryInterface
{
    /**
     * @param \DateTimeInterface $date
     *
     * @return bool
     */
    public function isHoliday(\DateTimeInterface $date): bool;
}
