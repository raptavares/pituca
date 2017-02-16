<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'pituca');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'pituca');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'pituca2017');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ycjw$ogs?j9Gn6fGuvRnCv1xvbCN*:8}[mn{BK|;r8o%,Hk8WkT`5-[wTl7I8rj+');
define('SECURE_AUTH_KEY',  '%C/qM/KmscDd-;f{-aW{}?(#5(r&SqF|0S]`f330GrL7|`ZsZvK8&[[)/LayAB&-');
define('LOGGED_IN_KEY',    'KGoz.]n*O%!zOX7tE/Ow;wVmAT+iX2}9K*XIz2:/-gHi5c=_nd?ma_`)qc-:$6p7');
define('NONCE_KEY',        '8ef._d{g]`+V]_}eBN@,wQFr.uZ}0W3p!`4d-q!wN<!*DThiw@B0ni*[rSt/mk<O');
define('AUTH_SALT',        'w&Ws.D~:5jECajR#>2kSMD}Vv/B|7t_PWzhI%ND=W,v])x8tf{xp*:1z9NLBS]AU');
define('SECURE_AUTH_SALT', '*iAGTc9o^6/H&9zHuAz9W|ii6mtaz6kG|qqx_7NKhVkt[=q?Z.NyH5w;_Ca/:3pi');
define('LOGGED_IN_SALT',   ':)8eEicA.#A[{:R#$L&uYLQk:J*;KSlP%W*)Z_NUp}qK:|W(f_]b68C:[(ue+ci?');
define('NONCE_SALT',       '>R<e4GA2XUb:d95+JoTfg=_ddDI/u%I>ftU.6TDX[6q!:J<r7*-LJ,_bkwC|}XJO');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'pi_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
