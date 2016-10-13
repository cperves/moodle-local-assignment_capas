# local_assignment_capas : control/restrict the use of a assignment type while editing/creating an assignment within a context
this is a local plugin that enable to control/restrict the use of a assignment type while editing/creating an assignment within a context


#installation
it is composed of a local plugin and a patch on moodle core code

## plugin
install assignment_capas directory in the local directory of your moodle
### add custom capabilities for the assignment plugin type you wan't to control
in local/assignment_capas/db/access.php add capability for the plugin you wan't to control with the name
'local/assignment_capas:assign_submission_'.$plugin.'_addinstance'
where $plugin is ne name of the plugin
for example : 
'local/assignment_capas:assign_submission_onlinepoodll_addinstance' => array(

				'captype' => 'read',
				'contextlevel' => CONTEXT_MODULE,
				'archetypes' => array(
						'editingteacher' => CAP_INHERIT,
						'manager' => CAP_ALLOW
				)
		),
		
Only roles that have local/assignment_capas:assign_submission_onlinepoodll_addinstance will be able to put onlinepooddl assignment type while editing the assignment edition page

## patch
place the mod_assign_locallib.patch in patch_path directory 
apply the patch by executing the following command :
patch -p1 /moodle_path/mod/assign/locallib.php < /patch_path/mod_assign_locallib.patch

## launch moodle notifications
to apply new capability

##define capability for concerned role
allow the added capability for concerned role in the proper context


## in case of new capability need for an other assignment plugin type
in case of new capability needs add a new entry in access.php, change version number in version.php and launch upgrade notifications

#example usage
* you wan't to only autorize usage of a submission type on a context (category for example)
* add a capability defintion with correct form (see above) to db/access.php file for example with inherit permission for the concerned role
* change plugin version number
* upgrade
* change the previous defined permission to allow for a given catagory for a particular role
* in a course while creating an assignment the assignment type will be only available for the role in the given category

explore all context possibility usages 
 


 

