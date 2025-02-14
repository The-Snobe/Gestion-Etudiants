<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CodeIgniter\Pager\PagerRenderer;

 /**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(0);

if ($pager->hasPrevious())
{
	echo '<link rel="prev" href="<?=base_url()?>/' . $pager->getPrevious() . '">' . PHP_EOL;
}

echo '<link rel="canonical" href="<?=base_url()?>/' . $pager->getCurrent() . '">' . PHP_EOL;

if ($pager->hasNext())
{
	echo '<link rel="next" href="<?=base_url()?>/' . $pager->getNext() . '">' . PHP_EOL;
}
