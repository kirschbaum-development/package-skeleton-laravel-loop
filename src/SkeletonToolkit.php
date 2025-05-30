<?php

namespace VendorName\Skeleton;

use Kirschbaum\Loop\Collections\ToolCollection;
use Kirschbaum\Loop\Concerns\Makeable;
use Kirschbaum\Loop\Contracts\Toolkit;
use VendorName\Skeleton\SkeletonTool;

class SkeletonToolkit implements Toolkit
{
    use Makeable;

    public function getTools(): ToolCollection
    {
        return new ToolCollection([
            SkeletonTool::make(),
        ]);
    }
}
