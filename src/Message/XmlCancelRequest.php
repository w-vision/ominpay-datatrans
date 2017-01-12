<?php
/**
 * w-vision
 *
 * LICENSE
 *
 * This source file is subject to the MIT License
 * For the full copyright and license information, please view the LICENSE.md
 * file that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2016 Woche-Pass AG (http://www.w-vision.ch)
 * @license    MIT License
 */

namespace Omnipay\Datatrans\Message;

/**
 * Class XmlCancelRequest
 *
 * @package Omnipay\Datatrans\Message
 */
class XmlCancelRequest extends XmlSettlementRequest
{
    /**
     * @return string
     */
    public function getRequestType()
    {
        return static::DATATRANS_REQUEST_TYPE_DOA;
    }
}
