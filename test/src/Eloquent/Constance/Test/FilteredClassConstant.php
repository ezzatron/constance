<?php

/*
 * This file is part of the Constance package.
 *
 * Copyright © 2013 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Constance\Test;

class FilteredClassConstant extends AbstractClassWithConstantsConstant
{
    const CONSTANCE_PATTERN = '{^INT_}';
}
