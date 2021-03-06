<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Component\Tests\Product;

use Sonata\ProductBundle\Entity\BaseProductCollection;

class ProductCollection extends BaseProductCollection
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;
    }
}
