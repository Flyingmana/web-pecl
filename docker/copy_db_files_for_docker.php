<?php

$sourceDirectory = __DIR__ . '/../sql/';
$targetDirectory = __DIR__ . '/mysql/';

$tables = [
    '01' => 'aggregated_package_stats.sql',
    '02' => 'cvs_acl.sql',
    '03' => 'cvs_groups.sql',
    '04' => 'cvs_group_membership.sql',
    '05' => 'files.sql',
    '06' => 'karma.sql',
    '07' => 'package_acl.sql',
    '08' => 'maintains.sql',
    '09' => 'categories.sql',
    '10' => 'packages.sql',
    '11' => 'package_stats.sql',
    '12' => 'package_aliases.sql',
    '13' => 'releases.sql',
    '14' => 'deps.sql',
    '15' => 'notes.sql',
    '16' => 'users.sql',
];

foreach ($tables as $key=>$value) {
    $content = file_get_contents($sourceDirectory.$value);
    file_put_contents(__DIR__."/full.sql", $content, FILE_APPEND);
    copy(
        $sourceDirectory.$value,
        $targetDirectory.$key.'-'.$value
        );
}
