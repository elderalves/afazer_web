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
define('DB_NAME', 'wp_afazer');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'YTKp9GoQTM?]kmZ&B9 ~m6W8cVu&svmi]fddb-h(jUd7AonAoDgLVlmdB8%|8j|g');
define('SECURE_AUTH_KEY',  '[+cyX0:abEv?UGfLkv7rXcE+:(}1]g6AT_$^q{.OlF9dSKuGR03l]C2YK/{d83q]');
define('LOGGED_IN_KEY',    'qQfp:cq-7DazV>{E{(kp&-$c?N?.!J[$sUkt_0#_u;lR:9,A?u oqk+TKpv5LTp0');
define('NONCE_KEY',        'IXPzj^CJz*i.[d61gwUKV[v3jJ>R& t?,~T,3w8z^g+:F`>bgW&pMp%mnr@9M%v*');
define('AUTH_SALT',        '9sWW-S!^W-lX#ow#s+yy`}N+vz;{ZcDJVait|oW< [jhG>e{sY,C}2RcNYgoD9<T');
define('SECURE_AUTH_SALT', '&G[vt,`+_m1IJUA;SswT.MIIb2za9Yt,Kdj|.3y152u,znSP)<X0Y$mC.CK,ywgY');
define('LOGGED_IN_SALT',   'qp+cPs}s7}l:p~P@&Ki{6]uL(|4V>XB?G#B9LSyDbV#!m}tq-bWavWn(2C|(U(#^');
define('NONCE_SALT',       'km/*7TYoY>&ajvr7Ex|WHgf=5Sc`=e-5C-Pq0LV)>yvb4,|K-Y]6pK|Lv=q6grKj');

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

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
       $_SERVER['HTTPS']='on';

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
