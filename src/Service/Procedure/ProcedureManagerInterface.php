<?php

namespace Accessap\YousignComponent\Service\Procedure;

use Accessap\YousignComponent\Model\Procedure;

interface ProcedureManagerInterface
{
    public function create(Procedure $procedure): Procedure;
    public function delete($procedureId);
}
