<?php
/**
 * Folder plugin version information
 *
 * @package  
 * @subpackage 
 * @copyright  2014 unistra  {@link http://unistra.fr}
 * @author Celine Perves <cperves@unistra.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @license    http://www.cecill.info/licences/Licence_CeCILL_V2-en.html
 */
defined('MOODLE_INTERNAL') || die();

$capabilities = array(

		'local/assignment_capas:assign_submission_onlinepoodll_addinstance' => array(

				'captype' => 'read',
				'contextlevel' => CONTEXT_MODULE,
				'archetypes' => array(
						'editingteacher' => CAP_INHERIT,
						'manager' => CAP_ALLOW
				)
		),
		);
