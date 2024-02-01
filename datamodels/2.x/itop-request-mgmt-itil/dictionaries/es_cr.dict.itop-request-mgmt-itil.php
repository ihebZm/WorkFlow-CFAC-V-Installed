<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 * @traductor   Miguel Turrubiates <miguel_tf@yahoo.com> 
 */
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Menu:RequestManagement' => 'Administración de Requerimientos',
	'Menu:RequestManagement+' => 'Administración de Requerimientos',
	'Menu:RequestManagementProvider' => 'Proveedor de Mesa de Ayuda',
	'Menu:RequestManagementProvider+' => 'Proveedor de Mesa de Ayuda',
	'Menu:UserRequest:Provider' => 'Requerimientos Abiertos transferidos a Proveedor',
	'Menu:UserRequest:Provider+' => 'Requerimientos Abiertos transferidos a Proveedor',
	'Menu:UserRequest:Overview' => 'Resumen de Requerimientos',
	'Menu:UserRequest:Overview+' => 'Resumen de Requerimientos',
	'Menu:NewUserRequest' => 'Nuevo Requerimiento',
	'Menu:NewUserRequest+' => 'Nuevo Requerimiento',
	'Menu:SearchUserRequests' => 'Búsqueda de Requerimientos',
	'Menu:SearchUserRequests+' => 'Búsqueda de Requerimientos',
	'Menu:UserRequest:Shortcuts' => 'Acceso Rápido',
	'Menu:UserRequest:Shortcuts+' => 'Acceso Rápido',
	'Menu:UserRequest:MyRequests' => 'Requerimientos Asignados a Mí',
	'Menu:UserRequest:MyRequests+' => 'Requerimientos Asignados a Mí (como Analista)',
	'Menu:UserRequest:MySupportRequests' => 'Llamadas de Soporte Asignadas a Mí',
	'Menu:UserRequest:MySupportRequests+' => 'Llamadas de Soporte Asignadas a Mí (como Analista)',
	'Menu:UserRequest:EscalatedRequests' => 'Requerimientos Escalados',
	'Menu:UserRequest:EscalatedRequests+' => 'Requerimientos Escalados',
	'Menu:UserRequest:OpenRequests' => 'Requerimientos Abiertos',
	'Menu:UserRequest:OpenRequests+' => 'Requerimientos Abiertos',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Requerimientos asignados a Mí',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Requerimientos por Tipo de los Últimos 14 días',
	'UI-RequestManagementOverview-Last-14-days' => 'Número de Requerimientos de los Últimos 14 días',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Requerimientos Abiertos por Estatus',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Requerimientos Abiertos por Analista',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Requerimientos Abiertos por Tipo',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Requerimientos Abiertos por Cliente',
	'Class:UserRequest:KnownErrorList' => 'Errores Conocidos',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:UserRequest' => 'Requerimiento',
	'Class:UserRequest+' => 'Requerimiento',
	'Class:UserRequest/Attribute:status' => 'Estatus',
	'Class:UserRequest/Attribute:status+' => 'Estatus',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nuevo',
	'Class:UserRequest/Attribute:status/Value:new+' => 'Nuevo',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Escalado por Tiempo de Asignación',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => 'Escalado por Tiempo de Asignación',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Asignado',
	'Class:UserRequest/Attribute:status/Value:assigned+' => 'Asignado',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Escalado por Tiempo de Solución',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => 'Escalado por Tiempo de Solución',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Esperando Aprobación',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => 'Esperando Aprobación',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Aprobado',
	'Class:UserRequest/Attribute:status/Value:approved+' => 'Aprobado',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rechazado',
	'Class:UserRequest/Attribute:status/Value:rejected+' => 'Rechazado',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Pendiente',
	'Class:UserRequest/Attribute:status/Value:pending+' => 'Pendiente',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Solucionado',
	'Class:UserRequest/Attribute:status/Value:resolved+' => 'Solucionado',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Cerrado',
	'Class:UserRequest/Attribute:status/Value:closed+' => 'Cerrado',
	'Class:UserRequest/Attribute:request_type' => 'Tipo de Reporte',
	'Class:UserRequest/Attribute:request_type+' => 'Tipo de Reporte',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Requerimiento de Servicio',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Requerimiento de Servicio',
	'Class:UserRequest/Attribute:impact' => 'Impacto',
	'Class:UserRequest/Attribute:impact+' => 'Impacto',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Un Departamento',
	'Class:UserRequest/Attribute:impact/Value:1+' => 'Un Departamento',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Un Servicio',
	'Class:UserRequest/Attribute:impact/Value:2+' => 'Un Servicio',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Una Persona',
	'Class:UserRequest/Attribute:impact/Value:3+' => 'Una Persona',
	'Class:UserRequest/Attribute:priority' => 'Prioridad',
	'Class:UserRequest/Attribute:priority+' => 'Prioridad',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Crítica',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'Crítica',
	'Class:UserRequest/Attribute:priority/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Baja',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'Baja',
	'Class:UserRequest/Attribute:urgency' => 'Urgencia',
	'Class:UserRequest/Attribute:urgency+' => 'Urgencia',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Crítica',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'Critica',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Baja',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'Baja',
	'Class:UserRequest/Attribute:origin' => 'Origen',
	'Class:UserRequest/Attribute:origin+' => 'Origen',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Correo-e',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'Correo-e',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Monitoreo',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'Monitoreo',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Teléfono',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'Teléfono',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Portal',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'Portal',
	'Class:UserRequest/Attribute:approver_id' => 'Aprobador',
	'Class:UserRequest/Attribute:approver_id+' => 'Aprobador',
	'Class:UserRequest/Attribute:approver_email' => 'Correo Electrónico del Aprobador',
	'Class:UserRequest/Attribute:approver_email+' => 'Correo Electrónico del Aprobador',
	'Class:UserRequest/Attribute:service_id' => 'Servicio',
	'Class:UserRequest/Attribute:service_id+' => 'Servicio',
	'Class:UserRequest/Attribute:service_name' => 'Servicio',
	'Class:UserRequest/Attribute:service_name+' => 'Servicio',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Subcategoría',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => 'Subcategoría',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Subcategoría',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => 'Subcategoría de Servicio',
	'Class:UserRequest/Attribute:escalation_flag' => 'Bandera de Escalamiento',
	'Class:UserRequest/Attribute:escalation_flag+' => 'Bandera de Escalamiento',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Si',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Si',
	'Class:UserRequest/Attribute:escalation_reason' => 'Motivo de Escalamiento',
	'Class:UserRequest/Attribute:escalation_reason+' => 'Motivo de Escalamiento',
	'Class:UserRequest/Attribute:assignment_date' => 'Fecha de Asignación',
	'Class:UserRequest/Attribute:assignment_date+' => 'Fecha de Asignación',
	'Class:UserRequest/Attribute:resolution_date' => 'Fecha de Solución',
	'Class:UserRequest/Attribute:resolution_date+' => 'Fecha de Solución',
	'Class:UserRequest/Attribute:last_pending_date' => 'Última Fecha de Espera',
	'Class:UserRequest/Attribute:last_pending_date+' => 'Última Fecha de Espera',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Espera Acumulada',
	'Class:UserRequest/Attribute:cumulatedpending+' => 'Espera Acumulada',
	'Class:UserRequest/Attribute:tto' => 'TDA - Tiempo de Asignación',
	'Class:UserRequest/Attribute:tto+' => 'Tiempo de Asignación',
	'Class:UserRequest/Attribute:ttr' => 'TDS - Tiempo de Solución',
	'Class:UserRequest/Attribute:ttr+' => 'Tiempo de Solución',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'Límite de Tiempo de Asignación',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => 'Límite de Tiempo de Asignación',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA de Tiempo de Asignanción Cumplido',
	'Class:UserRequest/Attribute:sla_tto_passed+' => 'SLA de Tiempo de Asignanción Cumplido',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA de Tiempo de Asignación Excedído',
	'Class:UserRequest/Attribute:sla_tto_over+' => 'SLA de Tiempo de Asignación Excedído',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'Límite de Tiempo de Solución',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => 'Límite de Tiempo de Solución',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA de Tiempo de Solución Cumplido',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => 'SLA de Tiempo de Solución Cumplido',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA de Tiempo de Solución Excedído',
	'Class:UserRequest/Attribute:sla_ttr_over+' => 'SLA de Tiempo de Solución Excedído',
	'Class:UserRequest/Attribute:time_spent' => 'Tiempo Utilizado',
	'Class:UserRequest/Attribute:time_spent+' => 'Tiempo Utilizado',
	/*
	'Class:UserRequest/Attribute:resolution_code' => 'Código de Solución',
	'Class:UserRequest/Attribute:resolution_code+' => 'Código de Solución',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Asistencia',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'Asistencia',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Falla Corregida',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'Falla Corregida',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Reparación de Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'Reparación de Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'Otro',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'Otro',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Parche de Software',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'Parche de Software',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'Actualización de Sistema',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'Actualización de Sistema',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Capacitación',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'Capacitación',
	*/
	// ^ START HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:resolution_code' => 'resolution code',
	'Class:UserRequest/Attribute:resolution_code+' => 'resolution code',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider' => 'To Validate',
	'Class:UserRequest/Attribute:resolution_code/Value:a valider+' => 'To Validate',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente' => 'On Hold',
	'Class:UserRequest/Attribute:resolution_code/Value:en attente+' => 'On Hold',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire' => 'To Redo',
	'Class:UserRequest/Attribute:resolution_code/Value:a refaire+' => 'To Redo',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer' => 'To Close',
	'Class:UserRequest/Attribute:resolution_code/Value:a cloturer+' => 'To Close',
	// ^ END HERE Customization CFAC resolution de demande
	'Class:UserRequest/Attribute:solution' => 'Solución',
	'Class:UserRequest/Attribute:solution+' => 'Solución',
	'Class:UserRequest/Attribute:pending_reason' => 'Motivo Pendiente',
	'Class:UserRequest/Attribute:pending_reason+' => 'Motivo Pendiente',
	'Class:UserRequest/Attribute:parent_request_id' => 'Requerimiento Padre',
	'Class:UserRequest/Attribute:parent_request_id+' => 'Requerimiento Padre',
	'Class:UserRequest/Attribute:parent_incident_id' => 'Incidente Padre',
	'Class:UserRequest/Attribute:parent_incident_id+' => 'Incidente Padre',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref. Requerimiento',
	'Class:UserRequest/Attribute:parent_request_ref+' => 'Ref. Requerimiento',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Problema Padre',
	'Class:UserRequest/Attribute:parent_problem_id+' => 'Problema Padre',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref. Problema',
	'Class:UserRequest/Attribute:parent_problem_ref+' => 'Ref. Problema',
	'Class:UserRequest/Attribute:parent_change_id' => 'Cambio Padre',
	'Class:UserRequest/Attribute:parent_change_id+' => 'Cambio Padre',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref. Cambio',
	'Class:UserRequest/Attribute:parent_change_ref+' => 'Ref. Cambio',
	'Class:UserRequest/Attribute:parent_incident_ref' => 'Ref. Inciente Padre',
	'Class:UserRequest/Attribute:parent_incident_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => 'Requerimientos Hijo',
	'Class:UserRequest/Attribute:related_request_list+' => 'Requerimientos Hijo',
	'Class:UserRequest/Attribute:public_log' => 'Bitácora Pública',
	'Class:UserRequest/Attribute:public_log+' => 'Bitácora Pública',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Satisfacción del Usuario',
	'Class:UserRequest/Attribute:user_satisfaction+' => 'Satisfacción del Usuario',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Muy Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Muy Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Satisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Insatisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Insatisfecha',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Muy Insatisfecho',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Muy Insatisfecho',
	'Class:UserRequest/Attribute:user_comment' => 'Comentarios del Usuario',
	'Class:UserRequest/Attribute:user_comment+' => 'Comentarios del Usuario',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Stimulus:ev_assign' => 'Asignar',
	'Class:UserRequest/Stimulus:ev_assign+' => 'Asignar',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Reasignar',
	'Class:UserRequest/Stimulus:ev_reassign+' => 'Reasignar',
	'Class:UserRequest/Stimulus:ev_approve' => 'Aprobar',
	'Class:UserRequest/Stimulus:ev_approve+' => 'Aprobar',
	'Class:UserRequest/Stimulus:ev_reject' => 'Rechazar',
	'Class:UserRequest/Stimulus:ev_reject+' => 'Rechazar',
	'Class:UserRequest/Stimulus:ev_pending' => 'Pendiente',
	'Class:UserRequest/Stimulus:ev_pending+' => 'Pendiente',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Solución Automática',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => 'Solución Automática',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Cierre Automático',
	'Class:UserRequest/Stimulus:ev_autoclose+' => 'Cierre Automático',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Marcar como Solucionado',
	'Class:UserRequest/Stimulus:ev_resolve+' => 'Marcar como Solucionado',
	'Class:UserRequest/Stimulus:ev_close' => 'Cerrar este Ticket',
	'Class:UserRequest/Stimulus:ev_close+' => 'Cerrar este Ticket',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Reabrir',
	'Class:UserRequest/Stimulus:ev_reopen+' => 'Reabrir',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Esperando Aprobación',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => 'Esperando Aprobación',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'No puede asignarse el requerimiento Padre a si mismo',

	'Class:UserRequest/Method:ResolveChildTickets' => 'Resolver tickets hijos',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascadear la solución a los tickets hijos (ev_autoresolve), y alinear las siguientes características: servicio, equipo, agente, información de solución',
));


Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Organization:Overview:UserRequests' => 'Requerimientos para esta Organización',
	'Organization:Overview:MyUserRequests' => 'Mis Requerimientos para esta Organización',
	'Organization:Overview:Tickets' => 'Tickets para esta Organización',
));
