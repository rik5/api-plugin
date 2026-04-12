<?php

use Rik5\ApiPlugin\Tests\WithoutPanelPrefix\TestCase as WithoutPanelPrefixTestCase;
use Rik5\ApiPlugin\Tests\WithPanelPrefix\TestCase as WithPanelPrefixTestCase;

uses(WithPanelPrefixTestCase::class)->in(__DIR__ . '/WithPanelPrefix');
uses(WithoutPanelPrefixTestCase::class)->in(__DIR__ . '/WithoutPanelPrefix');
