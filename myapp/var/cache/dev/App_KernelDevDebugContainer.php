<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6akxQi3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6akxQi3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6akxQi3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6akxQi3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6akxQi3\App_KernelDevDebugContainer([
    'container.build_hash' => '6akxQi3',
    'container.build_id' => 'fdadf0da',
    'container.build_time' => 1613992799,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6akxQi3');
