<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4qsjWQ2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4qsjWQ2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4qsjWQ2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4qsjWQ2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container4qsjWQ2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '4qsjWQ2',
    'container.build_id' => '05a81175',
    'container.build_time' => 1592513635,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4qsjWQ2');
