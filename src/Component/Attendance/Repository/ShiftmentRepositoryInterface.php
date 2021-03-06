<?php

namespace KejawenLab\Application\SemartHris\Component\Attendance\Repository;

use KejawenLab\Application\SemartHris\Component\Attendance\Model\ShiftmentInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
interface ShiftmentRepositoryInterface
{
    /**
     * @return ShiftmentInterface[]
     */
    public function findAll(): array;
}
