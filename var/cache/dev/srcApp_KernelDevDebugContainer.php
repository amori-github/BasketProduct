<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHzpNzsu\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHzpNzsu/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHzpNzsu.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHzpNzsu\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHzpNzsu\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HzpNzsu',
    'container.build_id' => '93383905',
    'container.build_time' => 1590088821,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHzpNzsu');
