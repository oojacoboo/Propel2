<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license MIT License
 */

namespace Propel\Tests\Generator\Behavior\AddClass;

use Propel\Tests\Bookstore\Behavior\AddClassEntityFooClass;
use Propel\Tests\TestCaseFixtures;

/**
 * Tests the generated classes by behaviors.
 *
 * @author Francois Zaninotto
 */
class AddClassBehaviorTest extends TestCaseFixtures
{
    public function testClassExists()
    {
        $t = new AddClassEntityFooClass();
        $this->assertTrue($t instanceof AddClassEntityFooClass, 'behaviors can generate classes that are autoloaded');
    }
}
