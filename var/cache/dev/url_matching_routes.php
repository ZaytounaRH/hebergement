<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/entretiens' => [[['_route' => 'api_entretiens', '_controller' => 'App\\Controller\\ApiEntretienController::getEntretiens'], null, null, null, false, false, null]],
        '/update-entretien-date' => [[['_route' => 'update_entretien_date', '_controller' => 'App\\Controller\\ApiEntretienController::updateEntretienDate'], null, ['POST' => 0], null, false, false, null]],
        '/api/offres' => [[['_route' => 'api_offres', '_controller' => 'App\\Controller\\ApiOffreController::getOffres'], null, null, null, false, false, null]],
        '/update-offre-date' => [[['_route' => 'update_offre_date', '_controller' => 'App\\Controller\\ApiOffreController::updateOffreDate'], null, ['POST' => 0], null, false, false, null]],
        '/assurance' => [[['_route' => 'app_assurance_index', '_controller' => 'App\\Controller\\AssuranceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/assurance/new' => [[['_route' => 'app_assurance_new', '_controller' => 'App\\Controller\\AssuranceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/admin/budget' => [[['_route' => 'app_back_budget_index', '_controller' => 'App\\Controller\\BudgetBackController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/budget/new' => [[['_route' => 'app_back_budget_new', '_controller' => 'App\\Controller\\BudgetBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null]],
        '/calendarOffre' => [[['_route' => 'app_calendarOffre', '_controller' => 'App\\Controller\\CalendarOffreController::index'], null, null, null, false, false, null]],
        '/candidat' => [[['_route' => 'app_candidat_index', '_controller' => 'App\\Controller\\CandidatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/candidat/new' => [[['_route' => 'app_candidat_new', '_controller' => 'App\\Controller\\CandidatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entretien/merci' => [[['_route' => 'app_entretien_merci', '_controller' => 'App\\Controller\\CandidatEntretienController::merci'], null, ['GET' => 0], null, false, false, null]],
        '/candidats' => [[['_route' => 'app_candidats', '_controller' => 'App\\Controller\\CandidatEntretienController::afficherCandidats'], null, null, null, false, false, null]],
        '/certification' => [[['_route' => 'app_certification_index', '_controller' => 'App\\Controller\\CertificationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/certification/new' => [[['_route' => 'app_certification_new', '_controller' => 'App\\Controller\\CertificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, false, false, null]],
        '/chatbot' => [[['_route' => 'app_chatbot', '_controller' => 'App\\Controller\\ChatbotController::chatbot'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/commande' => [[['_route' => 'back_commande_index', '_controller' => 'App\\Controller\\CommandeBackController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/commande/new' => [[['_route' => 'back_commande_new', '_controller' => 'App\\Controller\\CommandeBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conge' => [[['_route' => 'app_conge_index', '_controller' => 'App\\Controller\\CongeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/conge/back' => [[['_route' => 'app_conge_indexback', '_controller' => 'App\\Controller\\CongeController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/conge/pdf' => [[['_route' => 'app_conge_pdf', '_controller' => 'App\\Controller\\CongeController::generatePdf'], null, ['GET' => 0], null, false, false, null]],
        '/conge/new' => [[['_route' => 'app_conge_new', '_controller' => 'App\\Controller\\CongeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conge/newback' => [[['_route' => 'app_conge_newback', '_controller' => 'App\\Controller\\CongeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/depense' => [[['_route' => 'app_depense_index', '_controller' => 'App\\Controller\\DepenseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/depense/new' => [[['_route' => 'app_depense_new', '_controller' => 'App\\Controller\\DepenseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employee' => [[['_route' => 'app_employee_index', '_controller' => 'App\\Controller\\EmployeeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/employee/new' => [[['_route' => 'app_employee_new', '_controller' => 'App\\Controller\\EmployeeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entretien' => [[['_route' => 'app_entretien_index', '_controller' => 'App\\Controller\\EntretienController::index'], null, ['GET' => 0], null, false, false, null]],
        '/entretien/entretien/trier-date' => [[['_route' => 'entretien_trier_date', '_controller' => 'App\\Controller\\EntretienController::trierParDate'], null, ['GET' => 0], null, false, false, null]],
        '/entretien/new' => [[['_route' => 'app_entretien_new', '_controller' => 'App\\Controller\\EntretienController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formation' => [[['_route' => 'app_formation_index', '_controller' => 'App\\Controller\\FormationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formation/new' => [[['_route' => 'app_formation_new', '_controller' => 'App\\Controller\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formation/formation/employe' => [[['_route' => 'app_formation_par_employe', '_controller' => 'App\\Controller\\FormationController::formationsParEmploye'], null, null, null, false, false, null]],
        '/formation/stats/formations' => [[['_route' => 'app_formation_stats', '_controller' => 'App\\Controller\\FormationController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/formation/formations/stats' => [[['_route' => 'app_formation_stats_view', '_controller' => 'App\\Controller\\FormationController::statsView'], null, ['GET' => 0], null, false, false, null]],
        '/formation/formations/export/excel' => [[['_route' => 'app_formation_export_excel', '_controller' => 'App\\Controller\\FormationController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/formation/employee/agenda-data' => [[['_route' => 'employee_agenda_data', '_controller' => 'App\\Controller\\FormationController::agendaData'], null, null, null, false, false, null]],
        '/formation/employee/agenda' => [[['_route' => 'employee_agenda', '_controller' => 'App\\Controller\\FormationController::agenda'], null, null, null, false, false, null]],
        '/formation/formation/send-satisfaction-emails' => [[['_route' => 'send_satisfaction_emails', '_controller' => 'App\\Controller\\FormationController::sendSatisfactionEmails'], null, null, null, false, false, null]],
        '/admin/fournisseur' => [[['_route' => 'back_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/fournisseur/new' => [[['_route' => 'back_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\LoginController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\LoginController::register'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/ocr' => [[['_route' => 'app_ocr', '_controller' => 'App\\Controller\\OCRController::index'], null, null, null, false, false, null]],
        '/export_pdf' => [[['_route' => 'export_pdf', '_controller' => 'App\\Controller\\OCRController::exportPDF'], null, null, null, false, false, null]],
        '/offreemploi' => [[['_route' => 'app_offreemploi_index', '_controller' => 'App\\Controller\\OffreemploiController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offreemploi/offreemploi/admin' => [[['_route' => 'app_offreemploi_back_index', '_controller' => 'App\\Controller\\OffreemploiController::indexBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offreemploi/new' => [[['_route' => 'app_offreemploi_new', '_controller' => 'App\\Controller\\OffreemploiController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/presence/qrcode' => [[['_route' => 'app_presence_qrcode', '_controller' => 'App\\Controller\\PresenceController::qrCode'], null, null, null, false, false, null]],
        '/presence/stats' => [[['_route' => 'app_presence_stats', '_controller' => 'App\\Controller\\PresenceController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/presence/employees' => [[['_route' => 'app_presence_employees', '_controller' => 'App\\Controller\\PresenceController::listEmployees'], null, ['GET' => 0], null, false, false, null]],
        '/presence/presenceback' => [[['_route' => 'app_presence_admin_index', '_controller' => 'App\\Controller\\PresenceController::adminIndex'], null, ['GET' => 0], null, false, false, null]],
        '/presence' => [[['_route' => 'app_presence_index', '_controller' => 'App\\Controller\\PresenceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/presence/new' => [[['_route' => 'app_presence_new', '_controller' => 'App\\Controller\\PresenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/presence/alertes-retards' => [[['_route' => 'app_alertes_retards', '_controller' => 'App\\Controller\\PresenceController::retards'], null, null, null, false, false, null]],
        '/presence/presence/departure' => [[['_route' => 'app_presence_departure', '_controller' => 'App\\Controller\\PresenceController::departure'], null, null, null, false, false, null]],
        '/presence/presence/today' => [[['_route' => 'app_presence_today', '_controller' => 'App\\Controller\\PresenceController::today'], null, null, null, false, false, null]],
        '/admin/produit' => [[['_route' => 'back_produit_index', '_controller' => 'App\\Controller\\ProduitBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produit/new' => [[['_route' => 'back_produit_new', '_controller' => 'App\\Controller\\ProduitBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rh' => [[['_route' => 'app_rh_index', '_controller' => 'App\\Controller\\RhController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rh/new' => [[['_route' => 'app_rh_new', '_controller' => 'App\\Controller\\RhController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\StaticPageController::team'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\StaticPageController::contact'], null, null, null, false, false, null]],
        '/statistique' => [[['_route' => 'app_offreemploi_statistique', '_controller' => 'App\\Controller\\StatistiqueController::statistique'], null, null, null, false, false, null]],
        '/test-mail' => [[['_route' => 'test_mail', '_controller' => 'App\\Controller\\TestMailerController::sendTestEmail'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recherche-assurance' => [[['_route' => 'app_recherche_assurance', '_controller' => 'App\\Controller\\RechercheAssuranceController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:133)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|ssurance/([^/]++)(?'
                        .'|(*:263)'
                        .'|/edit(*:276)'
                        .'|(*:284)'
                    .')'
                    .'|dmin/(?'
                        .'|budget/([^/]++)(?'
                            .'|(*:319)'
                            .'|/(?'
                                .'|edit(*:335)'
                                .'|delete(*:349)'
                            .')'
                        .')'
                        .'|commande/([^/]++)(?'
                            .'|(*:379)'
                            .'|/(?'
                                .'|edit(*:395)'
                                .'|delete(*:409)'
                                .'|pdf(*:420)'
                            .')'
                        .')'
                        .'|fournisseur/([^/]++)(?'
                            .'|(*:453)'
                            .'|/edit(*:466)'
                            .'|(*:474)'
                        .')'
                        .'|produit/(?'
                            .'|([^/]++)(?'
                                .'|(*:505)'
                                .'|/edit(*:518)'
                            .')'
                            .'|delete/([^/]++)(*:542)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|andidat/([^/]++)(?'
                        .'|(*:577)'
                        .'|/edit(*:590)'
                        .'|(*:598)'
                    .')'
                    .'|ertification/(?'
                        .'|([^/]++)(?'
                            .'|(*:634)'
                            .'|/edit(*:647)'
                            .'|(*:655)'
                        .')'
                        .'|certification/([^/]++)/pdf(*:690)'
                    .')'
                    .'|onge/([^/]++)(?'
                        .'|(*:715)'
                        .'|/edit(*:728)'
                        .'|(*:736)'
                    .')'
                .')'
                .'|/e(?'
                    .'|ntretien/(?'
                        .'|candidat/new/([^/]++)(*:784)'
                        .'|mes\\-entretiens/([^/]++)(*:816)'
                        .'|([^/]++)(?'
                            .'|(*:835)'
                            .'|/edit(*:848)'
                            .'|(*:856)'
                        .')'
                        .'|entretien/([^/]++)/changer\\-statut/([^/]++)(*:908)'
                    .')'
                    .'|mployee/([^/]++)(?'
                        .'|(*:936)'
                        .'|/edit(*:949)'
                        .'|(*:957)'
                    .')'
                .')'
                .'|/depense/([^/]++)(?'
                    .'|(*:987)'
                    .'|/edit(*:1000)'
                    .'|(*:1009)'
                .')'
                .'|/formation/([^/]++)(?'
                    .'|(*:1041)'
                    .'|/(?'
                        .'|certificat(*:1064)'
                        .'|edit(*:1077)'
                    .')'
                    .'|(*:1087)'
                .')'
                .'|/offreemploi/(?'
                    .'|([^/]++)(?'
                        .'|(*:1124)'
                        .'|/edit(*:1138)'
                    .')'
                    .'|admin/([^/]++)/edit(*:1167)'
                    .'|([^/]++)(?'
                        .'|(*:1187)'
                        .'|/show_back(*:1206)'
                    .')'
                .')'
                .'|/presence/(?'
                    .'|employee/([^/]++)(*:1247)'
                    .'|([^/]++)(?'
                        .'|(*:1267)'
                        .'|/edit(*:1281)'
                        .'|(*:1290)'
                    .')'
                    .'|check(?'
                        .'|in/([^/]++)(*:1319)'
                        .'|out/([^/]++)(*:1340)'
                    .')'
                    .'|edit\\-depart(*:1362)'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:1402)'
                            .'|/edit(*:1416)'
                            .'|(*:1425)'
                        .')'
                        .'|ponse/([^/]++)(?'
                            .'|(*:1452)'
                            .'|/edit(*:1466)'
                            .'|(*:1475)'
                        .')'
                    .')'
                    .'|h/([^/]++)(?'
                        .'|(*:1499)'
                        .'|/edit(*:1513)'
                        .'|(*:1522)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1550)'
                    .'|/edit(*:1564)'
                    .'|(*:1573)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        133 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        204 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        227 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        263 => [[['_route' => 'app_assurance_show', '_controller' => 'App\\Controller\\AssuranceController::show'], ['idA'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'app_assurance_edit', '_controller' => 'App\\Controller\\AssuranceController::edit'], ['idA'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        284 => [[['_route' => 'app_assurance_delete', '_controller' => 'App\\Controller\\AssuranceController::delete'], ['idA'], ['POST' => 0], null, false, true, null]],
        319 => [[['_route' => 'app_back_budget_show', '_controller' => 'App\\Controller\\BudgetBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_back_budget_edit', '_controller' => 'App\\Controller\\BudgetBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        349 => [[['_route' => 'app_back_budget_delete', '_controller' => 'App\\Controller\\BudgetBackController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        379 => [[['_route' => 'back_commande_show', '_controller' => 'App\\Controller\\CommandeBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        395 => [[['_route' => 'back_commande_edit', '_controller' => 'App\\Controller\\CommandeBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        409 => [[['_route' => 'back_commande_delete', '_controller' => 'App\\Controller\\CommandeBackController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        420 => [[['_route' => 'back_commande_pdf', '_controller' => 'App\\Controller\\CommandeBackController::downloadPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        453 => [[['_route' => 'back_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'back_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        474 => [[['_route' => 'back_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        505 => [[['_route' => 'back_produit_show', '_controller' => 'App\\Controller\\ProduitBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'back_produit_edit', '_controller' => 'App\\Controller\\ProduitBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [[['_route' => 'back_produit_delete', '_controller' => 'App\\Controller\\ProduitBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        577 => [[['_route' => 'app_candidat_show', '_controller' => 'App\\Controller\\CandidatController::show'], ['candidat_id'], ['GET' => 0], null, false, true, null]],
        590 => [[['_route' => 'app_candidat_edit', '_controller' => 'App\\Controller\\CandidatController::edit'], ['candidat_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        598 => [[['_route' => 'app_candidat_delete', '_controller' => 'App\\Controller\\CandidatController::delete'], ['candidat_id'], ['POST' => 0], null, false, true, null]],
        634 => [[['_route' => 'app_certification_show', '_controller' => 'App\\Controller\\CertificationController::show'], ['idCertif'], ['GET' => 0], null, false, true, null]],
        647 => [[['_route' => 'app_certification_edit', '_controller' => 'App\\Controller\\CertificationController::edit'], ['idCertif'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        655 => [[['_route' => 'app_certification_delete', '_controller' => 'App\\Controller\\CertificationController::delete'], ['idCertif'], ['POST' => 0], null, false, true, null]],
        690 => [[['_route' => 'app_certification_download_pdf', '_controller' => 'App\\Controller\\CertificationController::downloadPdf'], ['idCertif'], null, null, false, false, null]],
        715 => [
            [['_route' => 'app_conge_showBack', '_controller' => 'App\\Controller\\CongeController::showBack'], ['id_conge'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_conge_show', '_controller' => 'App\\Controller\\CongeController::show'], ['id_conge'], ['GET' => 0], null, false, true, null],
        ],
        728 => [[['_route' => 'app_conge_edit', '_controller' => 'App\\Controller\\CongeController::edit'], ['id_conge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        736 => [[['_route' => 'app_conge_delete', '_controller' => 'App\\Controller\\CongeController::delete'], ['id_conge'], ['POST' => 0], null, false, true, null]],
        784 => [[['_route' => 'app_candidat_entretien_new', '_controller' => 'App\\Controller\\CandidatEntretienController::new'], ['idOffre'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        816 => [[['_route' => 'app_candidat_mes_entretiens', '_controller' => 'App\\Controller\\CandidatEntretienController::mesEntretiens'], ['candidatId'], null, null, false, true, null]],
        835 => [[['_route' => 'app_entretien_show', '_controller' => 'App\\Controller\\EntretienController::show'], ['idEntretien'], ['GET' => 0], null, false, true, null]],
        848 => [[['_route' => 'app_entretien_edit', '_controller' => 'App\\Controller\\EntretienController::edit'], ['idEntretien'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        856 => [[['_route' => 'app_entretien_delete', '_controller' => 'App\\Controller\\EntretienController::delete'], ['idEntretien'], ['POST' => 0], null, false, true, null]],
        908 => [[['_route' => 'changer_statut_entretien', '_controller' => 'App\\Controller\\EntretienController::changerStatut'], ['id', 'statut'], null, null, false, true, null]],
        936 => [[['_route' => 'app_employee_show', '_controller' => 'App\\Controller\\EmployeeController::show'], ['employee_id'], ['GET' => 0], null, false, true, null]],
        949 => [[['_route' => 'app_employee_edit', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['employee_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        957 => [[['_route' => 'app_employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['employee_id'], ['POST' => 0], null, false, true, null]],
        987 => [[['_route' => 'app_depense_show', '_controller' => 'App\\Controller\\DepenseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1000 => [[['_route' => 'app_depense_edit', '_controller' => 'App\\Controller\\DepenseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1009 => [[['_route' => 'app_depense_delete', '_controller' => 'App\\Controller\\DepenseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1041 => [[['_route' => 'app_formation_show', '_controller' => 'App\\Controller\\FormationController::show'], ['idFormation'], ['GET' => 0], null, false, true, null]],
        1064 => [[['_route' => 'app_formation_certif_show', '_controller' => 'App\\Controller\\FormationController::showCertif'], ['idFormation'], ['GET' => 0], null, false, false, null]],
        1077 => [[['_route' => 'app_formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'], ['idFormation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1087 => [[['_route' => 'app_formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['idFormation'], ['POST' => 0], null, false, true, null]],
        1124 => [[['_route' => 'app_offreemploi_show', '_controller' => 'App\\Controller\\OffreemploiController::show'], ['idOffre'], ['GET' => 0], null, false, true, null]],
        1138 => [[['_route' => 'app_offreemploi_edit', '_controller' => 'App\\Controller\\OffreemploiController::edit'], ['idOffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1167 => [[['_route' => 'app_offreemploi_edit_back', '_controller' => 'App\\Controller\\OffreemploiController::editBack'], ['idOffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1187 => [[['_route' => 'app_offreemploi_delete', '_controller' => 'App\\Controller\\OffreemploiController::delete'], ['idOffre'], ['POST' => 0], null, false, true, null]],
        1206 => [[['_route' => 'app_offreemploi_show_back', '_controller' => 'App\\Controller\\OffreemploiController::showBack'], ['idOffre'], ['GET' => 0], null, false, false, null]],
        1247 => [[['_route' => 'app_presence_by_employee', '_controller' => 'App\\Controller\\PresenceController::showBackPresencesBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1267 => [
            [['_route' => 'app_presence_show', '_controller' => 'App\\Controller\\PresenceController::show'], ['id_presence'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_presence_showBack', '_controller' => 'App\\Controller\\PresenceController::showBack'], ['id_presence'], ['GET' => 0], null, false, true, null],
        ],
        1281 => [[['_route' => 'app_presence_edit', '_controller' => 'App\\Controller\\PresenceController::edit'], ['id_presence'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1290 => [[['_route' => 'app_presence_delete', '_controller' => 'App\\Controller\\PresenceController::delete'], ['id_presence'], ['POST' => 0], null, false, true, null]],
        1319 => [[['_route' => 'app_presence_checkin', '_controller' => 'App\\Controller\\PresenceController::checkIn'], ['id'], null, null, false, true, null]],
        1340 => [[['_route' => 'app_presence_checkout', '_controller' => 'App\\Controller\\PresenceController::checkOut'], ['id'], null, null, false, true, null]],
        1362 => [[['_route' => 'app_presence_edit_depart', '_controller' => 'App\\Controller\\PresenceController::editDepart'], [], null, null, false, false, null]],
        1402 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idR'], ['GET' => 0], null, false, true, null]],
        1416 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idR'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1425 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idR'], ['POST' => 0], null, false, true, null]],
        1452 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idRep'], ['GET' => 0], null, false, true, null]],
        1466 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idRep'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1475 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idRep'], ['POST' => 0], null, false, true, null]],
        1499 => [[['_route' => 'app_rh_show', '_controller' => 'App\\Controller\\RhController::show'], ['rh_id'], ['GET' => 0], null, false, true, null]],
        1513 => [[['_route' => 'app_rh_edit', '_controller' => 'App\\Controller\\RhController::edit'], ['rh_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1522 => [[['_route' => 'app_rh_delete', '_controller' => 'App\\Controller\\RhController::delete'], ['rh_id'], ['POST' => 0], null, false, true, null]],
        1550 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1564 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1573 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
