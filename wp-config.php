<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpteste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wpteste');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'wpteste');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p@</Dpc1hNej.GI(A]t-=WR;qJNPOqtLeX$nEaG&4lAJw1p}w*>>Ox-ObTjJ|JlB');
define('SECURE_AUTH_KEY',  'W8d|}!&Hy9zm6|bqp^>|@6pk[VI[Z0ooK(krof{#^v1y*atspE]L6ZKZ!r,9h<l(');
define('LOGGED_IN_KEY',    '%UvqSJg>~kL:8m@[&R_de_NIT&R$k-G<L$4{1f upuR{mnYOeXr74B+IeE]agIRF');
define('NONCE_KEY',        'd%re)*?+ 68:kR]3-8TK[)+Mc<b8t0*lt?f+%$!v+F|A/75^?vq`k$]n8sBi|Oon');
define('AUTH_SALT',        ',#%s[4s eZ3r.>tynz_E+.|pRies*bJg2Sy%m ~L-D,+/>hc<AZ*R6}??||#tT&>');
define('SECURE_AUTH_SALT', '{d0eU;.<VB]s?6mK5bE|W.C;yHTvXK]tN3v{86]AG9.g6P#WlCxNpmyv^OXRn#Z=');
define('LOGGED_IN_SALT',   '2{QL06,vz-vmq>!dcS,X(a@ci|Dj}wG)k|Fv#~W&k}Ql|9qz^vH/(]qJmgzgT747');
define('NONCE_SALT',       'w2NEi`g-$>!tg?emdzHR(u`Gdkn*iz)Mfs?p*n0jP;fwmj3iOz2yFf-:->nGELN-');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
