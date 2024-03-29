<?php
/**
 * This file was automatically generated by the compiler on 2023-03-16 12:14:26 -- DO NOT EDIT
 */

define('COMPILATION_TIMESTAMP', '1678965266.039');
/**
 * Data model from the delta file
 */


/* Resource access control abstraction. Can be herited by abstract resource access control classes. Generaly controlled using UR_ACTION_MODIFY access right. */
abstract class AbstractResource extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => '',
			'key_type' => 'autoincrement',
			'name_attcode' => '',
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array(),
			'db_table' => '',
			'db_key_field' => 'id',
			'db_finalclass_field' => 'finalclass',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



;
	}


}

/* AdminTools menu access control. */
abstract class ResourceAdminMenu extends AbstractResource
{
	public static function Init()
	{
		$aParams = array(			'category' => 'grant_by_profile',
			'key_type' => 'autoincrement',
			'name_attcode' => '',
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array(),
			'db_table' => '',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



;
	}


}

/* RunQueriesMenu menu access control. */
abstract class ResourceRunQueriesMenu extends AbstractResource
{
	public static function Init()
	{
		$aParams = array(			'category' => 'grant_by_profile',
			'key_type' => 'autoincrement',
			'name_attcode' => '',
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array(),
			'db_table' => '',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



;
	}


}

/* System menu access control. */
abstract class ResourceSystemMenu extends AbstractResource
{
	public static function Init()
	{
		$aParams = array(			'category' => 'grant_by_profile',
			'key_type' => 'autoincrement',
			'name_attcode' => '',
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array(),
			'db_table' => '',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



;
	}


}
//
// Menus
//
class MenuCreation_application extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['WelcomeMenu'] = new MenuGroup('WelcomeMenu', 10, 'fas fa-home' , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['MyShortcuts'] = new ShortcutContainerMenuNode('MyShortcuts', $__comp_menus__['WelcomeMenu']->GetIndex(), 20 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['AdminTools'] = new MenuGroup('AdminTools', 80, 'fas fa-tools' , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['UserManagement'] = new TemplateMenuNode('UserManagement', '', $__comp_menus__['AdminTools']->GetIndex(), 10 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['UserAccountsMenu'] = new OQLMenuNode('UserAccountsMenu', "SELECT User", $__comp_menus__['UserManagement']->GetIndex(), 11, true , 'User', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['ProfilesMenu'] = new OQLMenuNode('ProfilesMenu', "SELECT URP_Profiles", $__comp_menus__['UserManagement']->GetIndex(), 12, true , 'URP_Profiles', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['AuditCategories'] = new OQLMenuNode('AuditCategories', "SELECT AuditCategory", $__comp_menus__['AdminTools']->GetIndex(), 20, true , 'AuditCategory', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['Queries'] = new TemplateMenuNode('Queries', '', $__comp_menus__['AdminTools']->GetIndex(), 30 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['RunQueriesMenu'] = new WebPageMenuNode('RunQueriesMenu', utils::GetAbsoluteUrlAppRoot()."pages/run_query.php", $__comp_menus__['Queries']->GetIndex(), 31 , 'ResourceRunQueriesMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['QueryMenu'] = new OQLMenuNode('QueryMenu', "SELECT Query", $__comp_menus__['Queries']->GetIndex(), 32, true , 'Query', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['ExportMenu'] = new WebPageMenuNode('ExportMenu', utils::GetAbsoluteUrlAppRoot()."webservices/export-v2.php?interactive=1", $__comp_menus__['Queries']->GetIndex(), 33 , 'ResourceAdminMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['DataModelMenu'] = new WebPageMenuNode('DataModelMenu', utils::GetAbsoluteUrlAppRoot()."pages/schema.php", $__comp_menus__['AdminTools']->GetIndex(), 40 , 'ResourceRunQueriesMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['UniversalSearchMenu'] = new WebPageMenuNode('UniversalSearchMenu', utils::GetAbsoluteUrlAppRoot()."pages/UniversalSearch.php", $__comp_menus__['Queries']->GetIndex(), 35 , 'ResourceAdminMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['ConfigurationTools'] = new MenuGroup('ConfigurationTools', 90, 'fas fa-cog' , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['DataSources'] = new OQLMenuNode('DataSources', "SELECT SynchroDataSource", $__comp_menus__['ConfigurationTools']->GetIndex(), 20, true , 'SynchroDataSource', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['NotificationsMenu'] = new WebPageMenuNode('NotificationsMenu', utils::GetAbsoluteUrlAppRoot()."pages/notifications.php", $__comp_menus__['ConfigurationTools']->GetIndex(), 40 , 'Trigger', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
	}
} // class MenuCreation_application

/**
 * Portal(s) definition(s) extracted from the XML definition at compile time
 */
class PortalDispatcherData
{
	protected static $aData = array (
  'itop-portal' => 
  array (
    'rank' => 1.0,
    'handler' => 'PortalDispatcher',
    'url' => 'pages/exec.php?exec_module=itop-portal-base&exec_page=index.php&portal_id=itop-portal',
    'allow' => 
    array (
    ),
    'deny' => 
    array (
    ),
  ),
  'backoffice' => 
  array (
    'rank' => 2.0,
    'handler' => 'PortalDispatcher',
    'url' => 'pages/UI.php',
    'allow' => 
    array (
    ),
    'deny' => 
    array (
      0 => 'Portal user',
    ),
  ),
);

	public static function GetData($sPortalId = null)
	{
		if ($sPortalId === null) return self::$aData;
		if (!array_key_exists($sPortalId, self::$aData)) return array();
		return self::$aData[$sPortalId];
	}
}

/**
 * Modules parameters extracted from the XML definition at compile time
 */
class ModulesXMLParameters
{
	protected static $aData = array (
  'authent-local' => 
  array (
    'password_validation.pattern' => '^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[^\\da-zA-Z]).{8,}$',
    'password_validation.message' => 
    array (
    ),
  ),
  'itop-portal' => 
  array (
    'lazy_loading_threshold' => '500',
    'enable_formmanager_content_check' => true,
  ),
  'itop-hub-connector' => 
  array (
    'url' => 'https://www.itophub.io',
    'route_landing' => '/my-instances/landing-from-remote',
    'route_landing_stateless' => '/stateless-remote-itop/landing-from-remote-stateless',
    'route_fetch_unread_messages' => '/api/messages',
    'route_mark_all_messages_as_read' => '/api/messages/mark-all-as-read',
    'route_view_all_messages' => '/messages',
    'setup_url' => '../pages/exec.php?exec_module=itop-hub-connector&exec_page=launch.php&target=inform_after_setup',
    'rgpd_url' => 'https://www.itophub.io/page/data-privacy',
  ),
  'itop-tickets' => 
  array (
    'relation_context' => 
    array (
      'UserRequest' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => '
										SELECT FCI, I
										FROM FunctionalCI AS FCI
												 JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
												 JOIN Incident AS I ON L.ticket_id = I.id
										WHERE (I.status NOT IN (\'closed\', \'resolved\'))
										  AND (L.impact_code != \'not_impacted\')
										  AND (I.id != :this->id)
										',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
              1 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\', \'rejected\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.id != :this->id)
                    ',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              2 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.id != :this->id)
                      AND (C.end_date < NOW() AND C.end_date > DATE_SUB(NOW(), INTERVAL 3 DAY ))
                    ',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
            ),
          ),
        ),
      ),
      'Incident' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => '
										SELECT FCI, I
										FROM FunctionalCI AS FCI
												 JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
												 JOIN Incident AS I ON L.ticket_id = I.id
										WHERE (I.status NOT IN (\'closed\', \'resolved\'))
										  AND (L.impact_code != \'not_impacted\')
										  AND (I.id != :this->id)
										',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
              1 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\', \'rejected\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.id != :this->id)
                    ',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              2 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.id != :this->id)
                      AND (C.end_date < NOW() AND C.end_date > DATE_SUB(NOW(), INTERVAL 3 DAY ))
                    ',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
            ),
          ),
        ),
      ),
      'Change' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => '
										SELECT FCI, I
										FROM FunctionalCI AS FCI
												 JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
												 JOIN Incident AS I ON L.ticket_id = I.id
										WHERE (I.status NOT IN (\'closed\', \'resolved\'))
										  AND (L.impact_code != \'not_impacted\')
										  AND (I.id != :this->id)
										',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
              1 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\', \'rejected\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.id != :this->id)
                    ',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              2 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.id != :this->id)
                      AND (C.end_date < NOW() AND C.end_date > DATE_SUB(NOW(), INTERVAL 3 DAY ))
                    ',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'itop-config-mgmt' => 
  array (
    'relation_context' => 
    array (
      'FunctionalCI' => 
      array (
        'impacts' => 
        array (
          'down' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => '
										SELECT FCI, I
										FROM FunctionalCI AS FCI
												 JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
												 JOIN Incident AS I ON L.ticket_id = I.id
										WHERE (I.status NOT IN (\'closed\', \'resolved\'))
										  AND (L.impact_code != \'not_impacted\')
										',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
              1 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\', \'rejected\'))
                      AND (L.impact_code != \'not_impacted\')
                    ',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              2 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status IN (\'closed\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.end_date < NOW() AND C.end_date > DATE_SUB(NOW(), INTERVAL 3 DAY ))
                    ',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
            ),
          ),
          'up' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'oql' => '
										SELECT FCI, I
										FROM FunctionalCI AS FCI
												 JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
												 JOIN Incident AS I ON L.ticket_id = I.id
										WHERE (I.status NOT IN (\'closed\', \'resolved\'))
										  AND (L.impact_code != \'not_impacted\')
										',
                'dict' => 'Tickets:Related:OpenIncidents',
                'icon' => 'itop-incident-mgmt-itil/images/incident-red.png',
                'default' => 'yes',
              ),
              1 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status NOT IN (\'closed\', \'rejected\'))
                      AND (L.impact_code != \'not_impacted\')
                    ',
                'dict' => 'Tickets:Related:OpenChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-ongoing.png',
              ),
              2 => 
              array (
                'oql' => '
                    SELECT FCI, C
                    FROM FunctionalCI AS FCI
                           JOIN lnkFunctionalCIToTicket AS L ON L.functionalci_id = FCI.id
                           JOIN Change AS C ON L.ticket_id = C.id
                    WHERE (C.outage = \'yes\')
                      AND (C.status IN (\'closed\'))
                      AND (L.impact_code != \'not_impacted\')
                      AND (C.end_date < NOW() AND C.end_date > DATE_SUB(NOW(), INTERVAL 3 DAY ))
                    ',
                'dict' => 'Tickets:Related:RecentChanges',
                'icon' => 'itop-change-mgmt-itil/images/change-done.png',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'combodo-webhook-integration' => 
  array (
    'prefer_asynchronous' => false,
    'timeout' => 5,
    'certificate_check' => true,
    'ca_certificate_file' => '',
  ),
);

	public static function GetData($sModuleId = null)
	{
		if ($sModuleId === null) return self::$aData;
		if (!array_key_exists($sModuleId, self::$aData)) return array();
		return self::$aData[$sModuleId];
	}
}

/**
 * Relations
 */
MetaModel::RegisterRelation('impacts');
