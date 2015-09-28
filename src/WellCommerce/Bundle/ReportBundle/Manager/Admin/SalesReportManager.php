<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ReportBundle\Manager\Admin;

use Doctrine\Common\Collections\Criteria;
use WellCommerce\Bundle\CoreBundle\Manager\Admin\AbstractAdminManager;

/**
 * Class SalesReportManager
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class SalesReportManager extends AbstractAdminManager implements SalesReportManagerInterface
{
    public function getSummaryStats(Criteria $criteria)
    {
        $collection = $this->repository->matching($criteria);

        return $collection->count();
    }
}
