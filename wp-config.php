<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'docker' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'tiger' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'database' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JB1R>cmp=hv_ll~ZXI]h|w9uIvRfi-A/>g]+FS_;9MDs|ep(vq%G!Ne1~C{I1xr-' );
define( 'SECURE_AUTH_KEY',  '^SWGKZ?S>UHo`7L3.A>kEBq3Ltna>1lrgH87stc3{Tsk{j|tOd]!NaT*YF6%SlU5' );
define( 'LOGGED_IN_KEY',    '`=oDr7d@?{:H)%hSefcX[z7 J](6=dzHKJ,1%&wUbRV7&}[73]4>4U2@`X<O#gE2' );
define( 'NONCE_KEY',        'Gm=+X**@v85`>qwn%bCk![W[E}yG;uA61 _s=Nb`zWXLEd|F~*KN[vvlnO?/-J]s' );
define( 'AUTH_SALT',        'SKTR1wN0+4<5Y3-?M3%P5MZRel#;@Vr8)8DTLYW54i8p1B@=r{?YNdS{ h%%8,kv' );
define( 'SECURE_AUTH_SALT', 'mr+nfvF=>0T=@2wWz%8J?+Q,/e&~^7J])^@]U>~3MfVvH-; v#2aD/JmOn}ZO`A7' );
define( 'LOGGED_IN_SALT',   '{*y8uj#0>0Y;QiN>(2s8~^q$n%WE]p.PmJv4pw:%@y@0Si*W$Z&%C.S*fPPrj@Ds' );
define( 'NONCE_SALT',       'qhFFsXk(B(dkN53]75>B&$86)OFW%_.X,L&(%sSiVdz$DyK6;nrrAmIKc4C<SO6Z' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

/** Permite instalar plugins e atualizar sem necessidade do FTP */
define('FS_METHOD','direct');

//FTP
// define('FTP_HOST', 'localhost');
// define('FTP_USER', 'wpfilipe');
// define('FTP_PASS', '');
//define('FTP_SSL', false); // If you can use a SSL connection set this to true