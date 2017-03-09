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
define('DB_NAME', 'fipe');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wknd_wp1');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'P^vX&6jUbBcQ[ILlPX&13~@9');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'w*[-u$x!skD~v;d:.gSH`UInn7WH;i=gqbsFWR?w+IncalJNe(Y2jv57`ByNOJ.I');
define('SECURE_AUTH_KEY',  '2L<LmwhMf{Sc=6z]trICF3f6%7o6G2 iiu<a3NC8h|mrn$(}6%;n`h~&ZIzKLez~');
define('LOGGED_IN_KEY',    'F*6%ea4~<R9hw/xd{8)nH<10.qu_:pcCgf4O=3k+:7%G`UJfU:Oyw8splt)p[5qL');
define('NONCE_KEY',        'nZc?L4En|M4sdy@/u0Pt6tm[n:mORn6F=q/2:yvRf.X7c2rqN0mQ 0P+z/h7]Z:6');
define('AUTH_SALT',        'FTan?SQ^IpNWX!qe|Plm]0`asIa$-hpfMNaQ9<4`/I_ef-!zgv/X5<wnW>b$#ld*');
define('SECURE_AUTH_SALT', 'K*Ut5G?4K#-7i50)rG#_AuJm=ZrIRb<1n}{pQf]!  |l:r9pZC(sgX;d62x|T (X');
define('LOGGED_IN_SALT',   'e%`I8|@,`F`SVgsN)IE^w*3}I54>06Q}D NCBkwY<=6%(/C3_`@u<o3&k6iS)4k1');
define('NONCE_SALT',       '|;%;Ur5~TsJB+e[WF?{6hs7@ZIK|$4QIueK9cna#o+Atyk-CE(rbqN84i+@aGB;a');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
