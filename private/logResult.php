<?php
//
// Description
// -----------
// This function will log a health check result into the database, and
// generate an alert.
//
// Arguments
// ---------
// user_id: 		The user making the request
// 
// Returns
// -------
//
function ciniki_healthchecks_logResult($ciniki, $business_id, $ref_uid, $alert, $incident, $attachments) {

	//
	// FIXME: Add code to log result to ciniki_healthcheck_logs table
	//

	ciniki_core_loadMethod($ciniki, 'ciniki', 'alerts', 'private', 'addUpdateIncidentAttachments');
	$rc = ciniki_alerts_addUpdateIncidentAttachments($ciniki, $business_id, $alert, $incident, $attachments);
	return $rc;
}
