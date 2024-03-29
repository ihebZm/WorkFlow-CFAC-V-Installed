<?php
//
// File generated by ... on the 2023-03-16T12:14:26+0100
// Please do not edit manually
//

/**
 * Classes and menus for approval-base (version 3.2.2)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


/**
          * An approval process associated to an object
          * Derive this class to implement an approval process
          * - A few abstract functions have to be defined to implement parallel and/or serialize approvals
          * - Advanced behavior can be implemented by overloading some of the methods (e.g. GetDisplayStatus to change the way it is displayed) 
          *    
          **/
abstract class ApprovalScheme extends _ApprovalScheme_
{
	public static function Init()
	{
		$aParams = array(			'category' => 'application',
			'key_type' => 'autoincrement',
			'name_attcode' => array('obj_class', 'obj_key'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('label'),
			'db_table' => 'approval_scheme',
			'db_key_field' => 'id',
			'db_finalclass_field' => 'finalclass',
			'style' =>  new ormStyle(null, null, null, null, null, null),
			'indexes' => array (
  1 => 
  array (
    0 => 'obj_class',
    1 => 'obj_key',
  ),
),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("obj_class", array("allowed_values"=>null, "sql"=>'obj_class', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeObjectKey("obj_key", array("class_attcode"=>'obj_class', "allowed_values"=>null, "sql"=>'obj_key', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("started", array("allowed_values"=>null, "sql"=>'started', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("ended", array("allowed_values"=>null, "sql"=>'ended', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDeadline("timeout", array("allowed_values"=>null, "sql"=>'timeout', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeInteger("current_step", array("allowed_values"=>null, "sql"=>'current_step', "default_value"=>'0', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("status", array("allowed_values"=>new ValueSetEnum("ongoing,accepted,rejected"), "display_style"=>'list', "sql"=>'status', "default_value"=>'ongoing', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("last_error", array("allowed_values"=>null, "sql"=>'last_error', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("abort_comment", array("allowed_values"=>null, "sql"=>'abort_comment', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("abort_user_id", array("targetclass"=>'User', "allowed_values"=>null, "sql"=>'abort_user_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDateTime("abort_date", array("allowed_values"=>null, "sql"=>'abort_date', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("label", array("allowed_values"=>null, "sql"=>'label', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("steps", array("allowed_values"=>null, "sql"=>'steps', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



;
	}


	/**
            * Called when an object is entering a new state (or just created), and before it gets saved
            * The approval scheme should be prepared depending on the target object:
            * 	find the relevant approvers
            * 	perform parallel approval (several approvers in one step)
            * 	perform serialized approval (several steps)
            * 	tune the timeouts
            * Available helpers:
            * 	AddStep(aApprovers, iTimeoutSec, bApproveOnTimeout)
            * 		 	 	 	 	 	 	 
            * @param object oObject  The object concerned
            * @param string sReachingState The state that this object has just reached
            * @return null if no approval process is needed, an instance of ApprovalScheme otherwise
            */
	public static function GetApprovalScheme($oObject, $sReachingState)
            {
            return null;
            }

	/**
            * Called when the form is being created for a given approver
            * 	 
            * @param string sContactClass The approver object class
            * @param string iContactId The approver object id
            * @return string The form body in HTML
            */
	public function GetFormBody($sContactClass, $iContactId)
	{
		return 'this is the form body... to be overriden!';
	}

	/**
            * Called when the approval is being completed with success
            * 	 
            * @param object oObject The object being under approval process
            * @return void The object can be modified within this handler, it will be saved later on
            */
	abstract public function DoApprove(&$oObject);

	/**
            * Called when the approval is being completed with failure
            * 	 
            * @param object oObject The object being under approval process
            * @return void The object can be modified within this handler, it will be saved later on
            */
	abstract public function DoReject(&$oObject);

	/**
            * Optionaly override this verb to change the way object details are displayed
            * Appeared in Version 1.2 of the module 	 
            *
            * @return void
            */
	public function DisplayObjectDetails($oPage, $oApprover, $oObject, $oSubstitute = null)
	{
		if ($this->IsLoginMandatoryToSeeObjectDetails($oApprover, $oObject))
		{
			require_once(APPROOT.'/application/loginwebpage.class.inc.php');
			LoginWebPage::DoLoginEx(); // Check user rights and prompt if needed
		}
		$oObject->DisplayBareProperties($oPage/*, $bEditMode = false*/);
	}

	/**
            * Optionaly override this verb to change the way the changes are tracked in the object history and in the case log (if the comment are copied there)
            * Appeared in Version 1.2 of the module 	 
            *
            * @return void
            */
	public function GetIssuerInfo($bApproved, $oApprover, $oSubstitute = null)
	{
		if ($oSubstitute)
		{
			if ($bApproved)
			{
				$sRes = Dict::Format('Approval:Approved-On-behalf-of', $oSubstitute->Get('friendlyname'), $oApprover->Get('friendlyname'));
			}
			else
			{
				$sRes = Dict::Format('Approval:Rejected-On-behalf-of', $oSubstitute->Get('friendlyname'), $oApprover->Get('friendlyname'));
			}
		}
		else
		{
			if ($bApproved)
			{
				$sRes = Dict::Format('Approval:Approved-By', $oApprover->Get('friendlyname'));
			}
			else
			{
				$sRes = Dict::Format('Approval:Rejected-By', $oApprover->Get('friendlyname'));
			}
		}
		return $sRes;
	}

	/**
            * Optionaly override this verb to change the way working hours will be computed
            * Appeared in Version 1.1 of the module 	 
            * 	 
            * @return string Name of a class implementing the interface iWorkingTimeComputer
            */
	protected function GetWorkingTimeComputer()
	{
		// This class is provided as the default way to compute the active time, aka 24x7, 24 hours a day!
		return 'DefaultWorkingTimeComputer';
	}

	/**
            * Overridable helper to store the replier comment	
            * Actually, it does record something even if the comment is left empty, which is the expected behavior
            */
	protected function RecordComment($sComment, $sIssuerInfo)
	{
		$sAttCode = MetaModel::GetModuleSetting('approval-base', 'comment_attcode');
		if ($sAttCode != '')
		{
			if (MetaModel::IsValidAttCode($this->Get('obj_class'), $sAttCode))
			{
				if ($oObject = MetaModel::GetObject($this->Get('obj_class'), $this->Get('obj_key'), false, true))
				{
					$value = $oObject->Get($sAttCode);
					$oAttDef = MetaModel::GetAttributeDef($this->Get('obj_class'), $sAttCode);
					if ($oAttDef instanceof AttributeCaseLog)
					{
						$sHtml = utils::TextToHtml($sComment);
						$value->AddLogEntry('<b>'.$sIssuerInfo.'</b><br>'.$sHtml );
					}
					else
					{
						// Cumulate into the given (hopefully) text attribute
						$sDate = date(AttributeDateTime::GetFormat());
						$value .= "\n$sDate - ".$sIssuerInfo." :";
						$value .= "\n".$sComment;
					}
					$oObject->Set($sAttCode, $value);
					$oObject->DBUpdate();
				}
			}
		}
	}

	/**
        *	Helper to make the URL to approve/reject the ticket
        */
	public function MakeReplyUrl($sContactClass, $iContactId, $bFromGUI = true)
	{
		$sPassCode = $this->GetContactPassCode($sContactClass, $iContactId);
		if (is_null($sPassCode))
		{
			$sReplyUrl = null;
		}
		else
		{
			if ($bFromGUI)
			{
				$sApprovalUI = 'specific';
			}
			else
			{
				// Redirect EVERY user to the portal, as soon as they have a valid login
				$oSearch = new DBObjectSearch('User');
				$oSearch->AddCondition('contactid', $iContactId);
				$oSearch->AddCondition('status', 'enabled');
				$oSearch->AllowAllData();
				$oSet = new DBObjectSet($oSearch);
				$iCount = $oSet->Count();
				if ($iCount > 0)
				{
					$sApprovalUI = 'portal';
				}
				else
				{
					$sApprovalUI = 'specific';
				}
			}
			switch ($sApprovalUI)
			{
				case 'specific':
					$sToken = $this->GetKey().'-'.$this->Get('current_step').'-'.$sContactClass.'-'.$iContactId.'-'.$sPassCode;
					$sReplyUrl = utils::GetAbsoluteUrlModulesRoot().'approval-base/approve.php?token='.$sToken;
					if ($bFromGUI)
					{
						$sReplyUrl .= '&from=object_details';
					}
					break;
				case 'portal':
					$sPortalId = 'itop-portal';
					$sReplyUrl = utils::GetAbsoluteUrlModulesRoot() . $sPortalId . '/index.php/approval/approvals';
					break;
			}
		}
		return $sReplyUrl;
	}

	/**
            * Helper to determine if a given user is expected to give her answer
            */
	public function IsActiveApprover($sContactClass, $iContactId)
	{
		$sPassCode = $this->GetContactPassCode($sContactClass, $iContactId);
		return (!is_null($sPassCode));
	}	  	

	/**
            * Helper to make the URL to abort the process
            */
	public function MakeAbortUrl($bFromGUI = true)
	{
		$sAbortUrl = utils::GetAbsoluteUrlModulesRoot().'approval-base/approve.php?abort=1&approval_id='.$this->GetKey();
		if ($bFromGUI)
		{
			$sAbortUrl .= '&from=object_details';
		}
		return $sAbortUrl;
	}	 	

	/**
            * Build and send the message for a given approver (can be a forwarded approval request)
            */
	public function SendApprovalRequest($oToPerson, $oObj, $sPassCode, $oSubstituteTo = null, $bReminder = false)
	{
		$sReplyUrl = $this->MakeReplyUrl(get_class($oToPerson), $oToPerson->GetKey(), false);
		$sReplyLink = '<a href="'.$sReplyUrl.'">'.Dict::S('Approval:Action-ApproveOrReject').'</a>';

		$aContext = array(
			'this->object()' => $oObj,
			'approval_scheme->object()' => $this,
			'approval_step' => $this->Get('current_step') + 1,
			'approver->object()' => $oToPerson,
			'approver_type' => is_null($oSubstituteTo) ? 'main' : 'substitute',
			'approval_url' => $sReplyUrl,
			'approval_link' => $sReplyLink,
			'message_type' => $bReminder ? 'reminder' : 'initial',
		);
		if (!is_null($oSubstituteTo))
		{
			$aContext['on_behalf_of->object()'] = $oSubstituteTo;
		}

		IssueLog::Trace('SendApprovalRequest', 'notifications', [
		    'bReminder' => $bReminder,
		    'is_null($oSubstituteTo)' => is_null($oSubstituteTo),
        'email approver' => $aContext['approver->object()']->Get('email'),
      ]);

		$sClassList = implode("', '", MetaModel::EnumParentClasses(get_class($oObj), ENUM_PARENT_CLASSES_ALL));
		$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT TriggerOnApprovalRequest AS t WHERE t.target_class IN ('$sClassList')"));
		while ($oTrigger = $oSet->Fetch())
		{
			$oTrigger->DoActivate($aContext);
		}
	}

	/**
            * Overridable to determine the approver email address in a different way	
            */
	public function GetApproverEmailAddress($oApprover)
	{
		// Find out which attribute is the email attribute
		//
		$sEmailAttCode = 'email';
		foreach(MetaModel::ListAttributeDefs(get_class($oApprover)) as $sAttCode => $oAttDef)
		{
			if ($oAttDef instanceof AttributeEmailAddress)
			{
				$sEmailAttCode = $sAttCode;
			}
		}
		$sAddress = $oApprover->Get($sEmailAttCode);
		return $sAddress;
	}

	/**
            * Overridable to disable the link to view more information on the object
            */
	public function IsAllowedToSeeObjectDetails($oApprover, $oObject)
	{
		if (get_class($oApprover) != 'Person')
		{
			return false;
		}

		$oSearch = DBObjectSearch::FromOQL_AllData("SELECT User WHERE contactid = :approver_id");
		$oSet = new DBObjectSet($oSearch, array(), array('approver_id' => $oApprover->GetKey()));
		if ($oSet->Count() > 0)
		{
			// The approver has a login: show the link!
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
            * Overridable to force the login when viewing object details
            */
	public function IsLoginMandatoryToSeeObjectDetails($oApprover, $oObject)
            {
            return false;
            }

	/**
            * Overridable to implement the abort feature
            * @param oUser (implicitely the current user if null)	 
            * Return true if the given user is allowed to abort	 
            */
	public function IsAllowedToAbort($oUser = null)
            {
            return false;
            }

}


          /**
          * Sent when an object enters the waiting for approval state
          *
          * @see ApprovalScheme::SendApprovalRequest
          *
          * @since 3.2.0 This class is now defined using XML instead of PHP
          */
        
class TriggerOnApprovalRequest extends TriggerOnObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'core/cmdb,application,grant_by_profile',
			'key_type' => 'autoincrement',
			'name_attcode' => array('description'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('description'),
			'db_table' => 'priv_trigger_onapprovalrequest',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, null),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeEnum("target_approval_request", array("allowed_values"=>new ValueSetEnum("both,approvers,substitutes"), "display_style"=>'list', "sql"=>'target_approval_request', "default_value"=>'both', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'description',
  1 => 'target_class',
  2 => 'filter',
  3 => 'action_list',
  4 => 'target_approval_request',
));
		MetaModel::Init_SetZListItems('default_search', array (
  0 => 'target_class',
  1 => 'description',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'finalclass',
  1 => 'target_class',
  2 => 'description',
));
;
	}




	/**
	 * @param array{
	 *    'this->object()': DBObject,
	 *    'approval_scheme->object()': DBObject,
	 *    approval_step: int,
	 *    'approver->object()': DBObject,
	 *    approver_type: string,
	 *    approval_url: string,
	 *    approval_link: string,
	 *    message_type: string,
	 *    on_behalf_of: DBObject,
   * } $aContextArgs
	 *
	 * @throws \ArchivedObjectException
	 * @throws \CoreException
	 */
	public function DoActivate($aContextArgs)
	{
	  $sTargetApprovalRequest = $this->Get('target_approval_request');
	  if ($sTargetApprovalRequest !== 'both') {
        $bSubstitueTrigger = array_key_exists('on_behalf_of', $aContextArgs)
            || array_key_exists('on_behalf_of->object()', $aContextArgs); // `->object()` was added in approval-base 3.2.2 (e7805ded)
        if ((false === $bSubstitueTrigger) && ($sTargetApprovalRequest === 'substitutes')) {
          return;
        }
        if (($bSubstitueTrigger) && ($sTargetApprovalRequest === 'approvers')) {
          return;
        }
	  }
	  IssueLog::Trace('TriggerOnApprovalRequest DoActivate will fire', 'notifications', [
	      'target_approval_request' => $sTargetApprovalRequest,
	      'email dest' => $aContextArgs['approver->object()']->Get('email'),
      ]);

	  parent::DoActivate($aContextArgs);
	}

}