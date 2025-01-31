<?php

return array(
	'action' => array(
		'finish' => 'Acabar l’installacion',
		'fix_errors_before' => 'Mercés de corregir las errors seguentas abans de contunhar.',
		'keep_install' => 'Gardar la configuracion precedenta',
		'next_step' => 'Anar a l’estapa seguenta',
		'reinstall' => 'Reïnstallar FreshRSS',
	),
	'auth' => array(
		'form' => 'Formulari (tradicional, demanda JavaScript)',
		'http' => 'HTTP (per utilizaires avançats amb HTTPS)',
		'none' => 'Cap (perilhós)',
		'password_form' => 'Senhal API<br /><small>(ex. : per la connexion via formulari)</small>',
		'password_format' => 'Almens 7 caractèrs',
		'type' => 'Mòde d’autentification',
	),
	'bdd' => array(
		'_' => 'Basa de donadas',
		'conf' => array(
			'_' => 'Configuracion de la basa de donadas',
			'ko' => 'Verificatz las informacions de la basa de donadas.',
			'ok' => 'La configuracion de la basa de donadas es salvagarda.',
		),
		'host' => 'Òste',
		'password' => 'Senhal de la basa de donadas',
		'prefix' => 'Prefixe de tabla',
		'type' => 'Tipe de basa de donadas',
		'username' => 'Nom d’utilizaire de la basa de donadas',
	),
	'check' => array(
		'_' => 'Verificacions',
		'already_installed' => 'Sembla que FreshRSS es ja installat !',
		'cache' => array(
			'nok' => 'Volgatz verificar los dreches sul repertòri <em>%s</em>. Lo servidor HTTP deu poder escriure dedins.',
			'ok' => 'Los dreches sul cache son bons.',
		),
		'ctype' => array(
			'nok' => 'Impossible de trobar una bibliotèca per la verificacion del tipe de caractèrs (php-ctype).',
			'ok' => 'Avètz la bibliotèca per la verificacion del tipe de caractèrs (ctype).',
		),
		'curl' => array(
			'nok' => 'Impossible de trobar la bibliotèca curl ( paquet php-curl).',
			'ok' => 'Avètz la bibliotèca cURL.',
		),
		'data' => array(
			'nok' => 'Volgatz verificar los dreches sul repertòri <em>%s</em>. Lo servidor HTTP deu poder escriure dedins.',
			'ok' => 'Los dreches sul repertòri data son bons.',
		),
		'dom' => array(
			'nok' => 'Impossible de trobar una bibliotèca per percórrer lo DOM.',
			'ok' => 'Avètz la bibliotèca per percórrer lo DOM.',
		),
		'favicons' => array(
			'nok' => 'Volgatz verificar los dreches sul repertòri <em>%s</em>. Lo servidor HTTP deu poder escriure dedins.',
			'ok' => 'Los dreches sul repertòri dels favicons son bons.',
		),
		'fileinfo' => array(
			'nok' => 'Avètz pas PHP fileinfo (paquet fileinfo).',
			'ok' => 'Avètz la bibliotèca fileinfo.',
		),
		'json' => array(
			'nok' => 'Impossible de trobar l’extension recomandada JSON (paquet php-json).',
			'ok' => 'Avètz l’exension recomandada JSON.',
		),
		'mbstring' => array(
			'nok' => 'Impossible de trobar la bibliotèca recomandada mbstring per Unicode.',
			'ok' => 'Avètz la bibliotèca recomandada mbstring per Unicode.',
		),
		'pcre' => array(
			'nok' => 'Impossible de trobar una bibliotèca per las expressions regulara (php-pcre).',
			'ok' => 'Avètz la bibliotèca per las expressions regularas (PCRE).',
		),
		'pdo' => array(
			'nok' => 'Impossible de trobar PDO o un dels drivers compatibles (pdo_mysql, pdo_sqlite, pdo_pgsql).',
			'ok' => 'Avètz PDO e almens un des drivers compatibles (pdo_mysql, pdo_sqlite, pdo_pgsql).',
		),
		'php' => array(
			'nok' => 'Vòstra version PHP es la %s mas FreshRSS demanda almens la version %s.',
			'ok' => 'Vòstra version PHP es %s, qu’es compatibla amb FreshRSS.',
		),
		'reload' => 'Revérifier',
		'tmp' => array(
			'nok' => 'Volgatz verificar los dreches sul repertòri <em>%s</em>. Lo servidor HTTP deu poder escriure dedins.',
			'ok' => 'Las permissions sul repertòri temporari son bonas.',
		),
		'unknown_process_username' => 'desconegut',
		'users' => array(
			'nok' => 'Volgatz verificar los dreches sul repertòri <em>%s</em>. Lo servidor HTTP deu poder escriure dedins.',
			'ok' => 'Los dreches sul repertòri dels utilizaires son bons.',
		),
		'xml' => array(
			'nok' => 'Impossible de trobar una bibliotèca necessària per XML.',
			'ok' => 'Avètz la bibliotèca per percórrer los XML.',
		),
	),
	'conf' => array(
		'_' => 'Configuracion generala',
		'ok' => 'La configuracion generala es enregistrada.',
	),
	'congratulations' => 'Òsca !',
	'default_user' => 'Nom d’utilizaire per defaut <small>16 caractèrs alfanumerics maximum)</small>',
	'fix_errors_before' => 'Mercés de corregir las errors seguentas abans de contunhar.',
	'javascript_is_better' => 'FreshRSS es mai agradable amb lo JavaScript activat',
	'js' => array(
		'confirm_reinstall' => 'En reïnstallant FreshRSS perdretz la configuracion precedenta. Volètz vertadièrament contunhar ?',
	),
	'language' => array(
		'_' => 'Lenga',
		'choose' => 'Causissètz la lenga per FreshRSS',
		'defined' => 'La lenga es corrèctament definida.',
	),
	'missing_applied_migrations' => 'Something went wrong; you should create an empty file <em>%s</em> manually.',	// TODO - Translation
	'ok' => 'L’installacion s’es corrèctament passada.',
	'session' => array(
		'nok' => 'Sembla que lo servidor web siá pas corrèctament configurat pels cookies per las sessions PHP !',
	),
	'step' => 'etapa %d',
	'steps' => 'Etapas',
	'this_is_the_end' => 'Es la fin',
	'title' => 'Installacion · FreshRSS',
);
