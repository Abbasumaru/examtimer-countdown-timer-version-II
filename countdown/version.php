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

/**
 * The Exam Countdown plugin / block
 *
 * @package    examblock_countdown
 * @copyleft  Gregory Ekhator <greg_ekhator@yahoo.com>
 * @copyright  Yevhen Matasar <matasar.ei@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die('Direct access to this script is forbidden.');

$plugin->version   = 2022032302; // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2013111800; // Requires this Moodle version.
$plugin->release   = '1.0.5';
$plugin->maturity  = MATURITY_STABLE;
$plugin->component = 'block_countdown';
