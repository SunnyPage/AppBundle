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

namespace WellCommerce\Plugin\Unit\Repository;

/**
 * Interface UnitRepositoryInterface
 *
 * @package WellCommerce\Plugin\Unit\Repository
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface UnitRepositoryInterface
{
    const POST_DELETE_EVENT = 'unit.repository.post_delete';
    const PRE_SAVE_EVENT    = 'unit.repository.pre_save';
    const POST_SAVE_EVENT   = 'unit.repository.post_save';

    /**
     * Returns all unites as a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Returns a unit model
     *
     * @param $id
     *
     * @return \WellCommerce\Plugin\Unit\Model\Unit
     */
    public function find($id);

    /**
     * Adds or updates a unit
     *
     * @param array $data
     * @param null  $id
     *
     * @return mixed
     */
    public function save(array $data, $id = null);

    /**
     * Deletes a unit
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * Returns Collection as ke-value pairs ready to use in selects
     *
     * @return mixed
     */
    public function getAllUnitToSelect();
}