<?php
/**
 * PAYONE Prestashop Connector is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PAYONE Prestashop Connector is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PAYONE Prestashop Connector. If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 *
 * @author    patworx multimedia GmbH <service@patworx.de>
 * @copyright 2003 - 2018 BS PAYONE GmbH
 * @license   <http://www.gnu.org/licenses/> GNU Lesser General Public License
 * @link      http://www.payone.de
 */

namespace Payone\Payment\Methods\OnlineTransfer;

class IDeal extends OnlineTransfer
{

    /**
     * ID
     *
     * @var string
     */
    protected $sId = 'onlinetransfer_ideal';

    /**
     * ID of parent payment
     *
     * @var string
     */
    protected $sParentId = 'onlinetransfer';

    /**
     * Clearing type
     *
     * @var string
     */
    protected $sSubClearingType = 'IDL';

    /**
     * Array with whitelist country iso codes
     *
     * @var array
     */
    protected $aCountryWhitelist = array(# 'NL',
    );

    /**
     * Marker for sub payments
     *
     * @var boolean
     */
    protected $blHasSubPayments = false;

    /**
     * Bank groups
     *
     * @var array
     */
    protected $aBankGroups = array(
        'ABN_AMRO_BANK' => 'ABN Amro',
        'BUNQ_BANK' => 'Bunq',
        'ING_BANK' => 'ING Bank',
        'RABOBANK' => 'Rabobank',
        'SNS_BANK' => 'SNS Bank',
        'ASN_BANK' => 'ASN Bank',
        'SNS_REGIO_BANK' => 'Regio Bank',
        'TRIODOS_BANK' => 'Triodos Bank',
        'KNAB_BANK' => 'Knab',
        'VAN_LANSCHOT_BANKIERS' => 'van Lanschot',
    );
}
