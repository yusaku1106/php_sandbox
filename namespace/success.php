<?php

require(__DIR__ . '/packageA/NamespacedSampleA.php');
require(__DIR__ . '/packageB/NamespacedSampleA.php');

use PackageA\NamespacedSampleA as SampleAInPackageA;
use PackageB\NamespacedSampleA as SampleAInPackageB;

$sampleAInPackageA = new SampleAInPackageA();
$sampleAInPackageB = new SampleAInPackageB();
