<?php
/**
 * Constants for web.
 *
 * @author Truong Nghia<truong.van.nghia@crivercrane.vn>
 * @copyright Copyright (c) 2017 CriverCrane! Corporation. All Rights Reserved.
 * @version 1.0
 */

//Channel for slack
define('CHANNEL', [
    'horunba' => env('CHANNEL_HORUNBA', 'https://hooks.slack.com/services/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'),
]);

return [
    'MAX_READ_RECORD' => 100,
];
