<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 10:29 22.06.2018
 */

namespace MagentoAPI;

class AbstractV1API extends AbstractAPI
{
    const URI = 'V1/';

    public function getBaseUri()
    {
        return parent::getBaseUri() . self::URI;
    }
}