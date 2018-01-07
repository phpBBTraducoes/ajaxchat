<?php

/**
 *
 * Ajax Chat extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 3.0.26] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2015 spaceace <http://www.livemembersonly.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
/**
 * DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge(
	$lang, array(
		'CHAT_ARCHIVE'					=> 'Arquivo',
		'CHAT_ARCHIVE_EXPLAIN'			=> 'Arquivo do chat',
		'CHAT_POPUP'					=> 'Popup',
		'CHAT_POPUP_EXPLAIN'			=> 'Chat em Popup',
		'CHAT_RULE'						=> 'Regras do chat',
		'CHAT_RULE_EXPLAIN'				=> 'Mantém isso limpo. Sem palavrões, por favor.',
		'CHAT_NEW_POST'					=> 'respondeu a: %s',
		'CHAT_NEW_TOPIC'				=> 'começou um novo tópico: %s',
		'CHAT_POST_EDIT'				=> 'editou: %s',
		'CHAT_NEW_QUOTE'				=> 'respondeu com uma citação para: %s',
		'CHAT_EDIT'						=> 'Editar mensagem do chat',
		'CHAT_QUOTE'					=> 'Citar mensagem do chat',
		'EMPTY'							=> 'Erro: você deve inserir uma mensagem.',
		'GUEST_MESSAGE'					=> '<strong>Você deve ser um usuário registrado para usar o chat.</strong>',
		'MESSAGE'						=> 'Mensagem',
		'PAGE_TITLE'					=> 'Fórum Chat',
		'RESPOND'						=> 'Responda ao usuário',
		'UNIT'							=> 'Segundos',
		'UPDATES'						=> 'Atualizações a cada',
		'CHAT'							=> 'Chat',
		'CHAT_EXPLAIN'					=> 'Centro de bate-papo',
		'WHOIS_CHATTING'				=> 'Quem está conversando',
		'CHAT_FONT_COLOR'				=> 'Cor da fonte do chat',
		'SELECT_COLOR'					=> 'Selecione a cor da fonte do seu chat',
		'CHAT_SUBMIT_MESSAGE'			=> 'Enviar mensagem',
		'DELETE_CHAT_MESSAGE'			=> 'Deletar mensagem do chat',
		'BBCODES'			 			=> 'BBCodes',
		'IE_NO_AJAX'					=> 'Sua versão do Internet Explorer não suporta AJAX.',
		'UPGRADE_BROWSER'				=> 'Status: Não foi possível criar o objeto XmlHttpRequest. Considere atualizar seu navegador.',
		'NO_POST_IN_CHAT'				=> 'Você não tem permissão para postar no chat.',
		'NO_DEL_PERMISSION'				=> 'Você não tem permissão para deletar mensagem.',
		'NO_EDIT_PERMISSION'			=> 'Você não tem permissão para editar esta mensagem.',
		'NO_VIEW_PERMISSION'			=> 'Você não tem permissão para ver o chat.',
		'DELETE_CHAT_COOKIE'			=> 'Deletar cookie',
		'DELETE_CHAT_COOKIE_EXPLAIN'	=> 'Este botão deleta o cookie de preensão da cor da fonte.',
		// @copyright line. No translations below this line.
		// Removing this from the template files will result in support no longer given.
		'DETAILS'				=> '<a href="http://www.livemembersonly.com" style="font-weight: bold;">AJAX Chat &copy; 2015</a> <strong style="color: #AA0000;">Live Members Only</strong>',
	)
);
