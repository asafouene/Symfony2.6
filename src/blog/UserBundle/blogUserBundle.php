<?php

namespace blog\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class blogUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }

}
?>
