<?php

namespace VendorName\Skeleton;

use Kirschbaum\Loop\Concerns\Makeable;
use Kirschbaum\Loop\Contracts\Tool;
use Prism\Prism\Tool as PrismTool;

class SkeletonTool implements Tool
{
    use Makeable;

    public function build(): PrismTool
    {
        return app(PrismTool::class)
            ->as($this->getName())
            ->for('Example skeleton tool')
            ->withStringParameter(name: 'name', description: 'The name of the user', required: true)
            ->withIntegerParameter(name: 'age', description: 'The age of the user')
            ->using(function (string $name, ?int $age = null) {
                return sprintf('Hello, %s! You are %d years old.', $name, $age ?? 'unknown');
            });
    }

    public function getName(): string
    {
        return 'skeleton_tool';
    }
}
