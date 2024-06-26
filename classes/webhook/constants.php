<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace local_trigger\webhook;

defined('MOODLE_INTERNAL') || die();

/**
 *
 * This is a class containing functions for sending triggers
 * @package   local_trigger
 * @copyright 2016 Poodll Co. Ltd (https://poodll.com)
 * @author    Justin Hunt
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class constants
{
const WEBHOOK_NONE =0;
const WEBHOOK_TABLE = 'local_trigger_webhooks';
const ACTION_TABLE = 'local_trigger_actions';
const SAMPLE_TABLE = 'local_trigger_sample';
const SAMPLE_EVENTS=['\core\event\user_created',
    '\core\event\user_updated',
    '\core\event\user_enrolment_created',
    '\mod_quiz\event\attempt_submitted',
    '\core\event\course_completed',
    '\core\event\user_enrolment_deleted',
    '\block_xp\event\user_leveledup',
    '\core\event\user_updated'
];
const PROTOCOLS=['put'=>'PUT','post'=>'POST','get'=>'GET'];
}