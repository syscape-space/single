<?php

namespace Ahmedjoda\Single;

use Ahmedjoda\Single\Traits\DataTable;
use Ahmedjoda\Single\Traits\FormFields;

class Single extends JodaSingle
{
    use FormFields,DataTable;
    protected $guarded = [];
    protected $view = 'single::master';

}
