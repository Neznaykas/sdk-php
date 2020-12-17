<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Workflow;

use Temporal\Client\Internal\Marshaller\Meta\Marshal;

/**
 * WorkflowType identifies a workflow type.
 */
class WorkflowType
{
    /**
     * @psalm-allow-private-mutation
     * @readonly
     * @var string
     */
    #[Marshal(name: 'Name')]
    public string $name = '';
}