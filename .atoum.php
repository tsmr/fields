<?php

$tests_dir = __DIR__ . '/tests/';
$coverage_dir = $tests_dir . 'code-coverage/';

if (!file_exists($coverage_dir)) {
    mkdir($coverage_dir);
}

$coverageField = new atoum\report\fields\runner\coverage\html(
    'GLPi Fields Plugin',
    $coverage_dir
);
$coverageField->setRootUrl('file://' . realpath($coverage_dir));

$script
    ->addDefaultReport()
    ->addField($coverageField);

$script
    ->noCodeCoverageForClasses('CommonGLPI')
    ->noCodeCoverageForClasses('CommonDBTM');
