<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.request.index', function ($trail) {
    $trail->push('View Request', route('admin.request.index'));
});

Breadcrumbs::for('admin.request.show', function ($trail, $id) {
    $trail->push('View Request', route('admin.request.show', $id));
});

Breadcrumbs::for('admin.request.edit', function ($trail, $id) {
    $trail->push('Edit Request', route('admin.request.edit', $id));
});
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
