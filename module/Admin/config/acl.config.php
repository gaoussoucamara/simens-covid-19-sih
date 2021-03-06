<?php
return array(
    
		'acl' => array(
        
				'roles' => array(
        		
						'guest'   => null,
						'admin' => 'guest',
						'medecin'     => 'guest',
						'superAdmin'  => 'medecin',
				),

				'resources' => array(
				
						'allow' => array(
				
								/***
								 * AdminController
				                 */
				
								'Admin\Controller\Admin' => array(
										'login' => 'guest',
										'logout' => 'guest',
										'bienvenue' => 'guest',
										'modifier-password' => 'guest',
										'verifier-password' => 'guest',
										'mise-a-jour-user-password' => 'guest',
											
										'utilisateurs' => 'superAdmin',
										'liste-utilisateurs-ajax' => 'superAdmin',
										'modifier-utilisateur' => 'superAdmin',
										'liste-agent-personnel-ajax' => 'superAdmin',
										'visualisation' => 'superAdmin',
										'nouvel-utilisateur' => 'superAdmin',
										'verifier-username' => 'superAdmin',
				
										'parametrages' => 'superAdmin',
										'gestion-des-hopitaux' => 'superAdmin',
										'liste-hopitaux-ajax' => 'superAdmin',
										'get-departements' => 'superAdmin',
										'ajouter-hopital' => 'superAdmin',
										'get-infos-hopital' => 'superAdmin',
										'get-infos-modification-hopital' => 'superAdmin',
											
										'gestion-des-batiments' => 'superAdmin',
										'gestion-des-services' => 'superAdmin',
										'liste-services-ajax' => 'superAdmin',
										'get-infos-service' => 'superAdmin',
										'get-infos-modification-service' => 'superAdmin',
										'ajouter-service' => 'superAdmin',
										'supprimer-service' => 'superAdmin',
											
										'gestion-des-actes' => 'superAdmin',
										'liste-actes-ajax' => 'superAdmin',
										'get-infos-acte' => 'superAdmin',
										'get-infos-modification-acte' => 'superAdmin',
										'ajouter-acte' => 'superAdmin',
										'supprimer-acte'  => 'superAdmin',
				
								),
				
								/***
								 * PersonnelController
								 */
				
								'Personnel\Controller\Personnel' => array(
				
										'liste-personnel' => array('admin','superAdmin'),
										'liste-personnel-ajax' => array('admin','superAdmin'),
										'info-personnel' => array('admin','superAdmin'),
										'supprimer' => array('admin','superAdmin'),
										'modifier-dossier' => array('admin','superAdmin'),
										'dossier-personnel' => array('admin','superAdmin'),
											
										'transfert' => array('admin','superAdmin'),
										'liste-personnel-transfert-ajax' => array('admin','superAdmin'),
										'popup-agent-personnel' => array('admin','superAdmin'),
										'vue-agent-personnel' => array('admin','superAdmin'),
										'services' => array('admin','superAdmin'),
											
										'liste-transfert' => array('admin','superAdmin'),
										'liste-transfert-ajax' => array('admin','superAdmin'),
										'supprimer-transfert' => array('admin','superAdmin'),
											
										'intervention' => array('admin','superAdmin'),
										'liste-personnel-intervention-ajax' => array('admin','superAdmin'),
										'liste-intervention' => array('admin','superAdmin'),
										'liste-intervention-ajax' => array('admin','superAdmin'),
										'supprimer-transfert' => array('admin','superAdmin'),
										'info-personnel-intervention' => array('admin','superAdmin'),
										'vue-intervention-agent' => array('admin','superAdmin'),
										'supprimer-intervention' => array('admin','superAdmin'),
										'supprimer-une-intervention' => array('admin','superAdmin'),
										'save-intervention' => array('admin','superAdmin'),
										'modifier-intervention-agent' => array('admin','superAdmin'),
								),
				
								 
				
								/***
								 * ConsultationController
								 */
				
								'Consultation\Controller\Consultation' => array(
										'liste-consultations' => 'medecin',
										'creer-dossier' => 'medecin',
										'liste-dossiers-patients' => 'medecin',
										'liste-dossiers-patients-ajax' => 'medecin',
										'infos-patient' => 'medecin',
										'modifier-dossier' => 'medecin',
										'liste-patients-admettre' => 'medecin',
										'liste-patients-admettre-ajax' => 'medecin',
										'admettre-patient-vue' => 'medecin',
										'admettre-patient' => 'medecin',
										'liste-patients-admis' => 'medecin',
										'liste-patients-admis' => 'medecin',
										'liste-patients-admis-ajax' => 'medecin',
										'supprimer-admission-patient' => 'medecin',
										'liste-consultations-ajax' => 'medecin',
										'consulter' => 'medecin',
    								    'liste-historique-consultations'  => 'medecin',
	
								        'auto-signalement' => 'medecin',
								        'liste-auto-signalement-ajax' => 'medecin',
								        'liste-vue-details-infos-patient-auto-signalement' => 'medecin',
								        'signifier-infos-patient-vue' => 'medecin',
										'nbre-infos-patient-non-vue' => 'medecin',
										'enregistrement-symptomes' => 'medecin',
								),
						),
				),
    		
        )
);