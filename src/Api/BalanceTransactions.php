<?php

declare(strict_types=1);

/*
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    3.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2020, Cartalyst LLC
 * @link       https://cartalyst.com
 */

namespace Cartalyst\Stripe\Api;

class BalanceTransactions extends Api
{
    /**
     * Retrieves an existing balance transaction.
     *
     * @param string $transactionId
     *
     * @return \Cartalyst\Stripe\Api\ApiResponse
     */
    public function find(string $transactionId): ApiResponse
    {
        return $this->_get("balance_transactions/{$transactionId}");
    }

    /**
     * Lists all the balance transactions.
     *
     * @param array $parameters
     *
     * @return \Cartalyst\Stripe\Api\ApiResponse
     */
    public function all(array $parameters = []): ApiResponse
    {
        return $this->_get('balance_transactions', $parameters);
    }
}