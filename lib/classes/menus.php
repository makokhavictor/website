<?php
// require_once('Role.php');
class menus
{
	public $level = '';
	public $menu;
	public function admin_menu()
	{
		$menus = array (
			'home|home.png'						=>	'Home',
			'users|user.png'				=>	'Users',
			'employees|users.png'			=>	'Employees',
			'organizaion|orgn.png'				=>	'Organization',	
			'recruitment|interview.png'	    =>	'Recruitment',
			'payroll|payroll.png'			=>	'Payroll',
			'documents|docsfolder.png'		=>	'Documents',
			'calendar|date.png'				=>	'Calendar',	
			'training|trainings.png'		=>	'Training',
			'timesheets|timesheet.png'		=>	'Timesheet',
			'contacts|contact.png'					=>	'Contacts',
			'settings|settings.png'			=>	'Settings',	
			'reports|repts.png'			=>	'Reports',

			);
	// Return menus 
	return $menus;
	}

	public function employee_menu()
	{
		$menus = array (
			'homeLink|home.png'						=>	'Home',
			'atteandanceLink|attendance.png'		=>	'Attendance',
			'leavesLink|leaves.png'					=>	'Leaves',
			'timesheetLink|timesheet.png'			=>	'Timesheet',
			'projectsLink|projects.png'				=>	'Projects',	

			);
	// Return menus 
	return $menus;
	}

	public function construct_context_menu ( $level, $context_menu ) {
	// Check the passed menu array 
		if ( ! is_array( $context_menu ) ) {
			die('it is not an array');

		}
		
		else {
			
		
		// From the array, build up the menu 
			$menu = '';
			foreach ( $context_menu as $keys => $context_menu_title ) :
			/*$key = explode ( '|', $keys );
			$context_m_link = $key[0];
			$context_m_icon = $key[1];
			$icon_color = $key[2];*/
			
			
			list($link,$image) = explode('|',$keys); 
			$menu .= 	'    <div  class="col-lg-2 col-sm-3 col-xs-6"><a id="'.$link.'"  class="" href="'.DOMAIN.$link.'">
						<img src="'.DOMAIN.ASSETS.'images/img/'.$image.'"></img>
						<span>' . $context_menu_title . '</span>
						</a> </div>';

			endforeach;
		return $menu;
		}
	
	
	}

	public function create_context_menu ( $level, $custom = null ) {
		/*$joy = 'joyce';
         return $joy;*/
	if ( !isset ($level ) || $level == '' ) {
	die ( 'Missing menu array' );
	}
	
	// Check if the developer has superimposed other menus 
		if ( $custom !== null ) {
			// Then prioritise this menu and stop execution of pre-defined menus 
			if ( ! is_array ( $custom ) ) {
				die ( 'We could not understand the menu, please make sure is an array' );
			}
			
			else {
				$this->menu = $this->construct_context_menu ( $level, $custom );
				return $this->menu;
				die ();
				
			
			}
		}else {
			switch ( $level ) {
			case 'admin':
			$options = $this->admin_menu ();
			$this->menu = $this->construct_context_menu ( $level, $options );
			break;
			case 'employee':
			$options = $this->employee_menu ();
			$this->menu = $this->construct_context_menu ( $level, $options );
			break;


			}

			return $this->menu;

		}

	
}
}
?>