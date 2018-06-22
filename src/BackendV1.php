<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 9:39 22.06.2018
 */

namespace MagentoAPI;


class BackendV1 extends AbstractV1API
{
    public function getModules($onlyData = true)
    {
        return $this->response($this->get('modules'), $onlyData);
    }
}