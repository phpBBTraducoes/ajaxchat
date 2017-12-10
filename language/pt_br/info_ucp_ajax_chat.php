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
		'CHAT_BOTTOM'					=> 'Inferior',
		'CHAT_TOP'						=> 'Superior',
		'USER_AJAX_CHAT_VIEW'			=> 'Ver chat na página ínicial',
		'USER_AJAX_CHAT_POSITION'		=> 'Posição nao página ínicial para exibir o chat',
		'USER_AJAX_CHAT_VIEWFORUM'		=> 'Exibir chat nos fóruns',
		'USER_AJAX_CHAT_VIEWTOPIC'		=> 'Exibir chat nos topics',
		'USER_AJAX_CHAT_AVATARS'		=> 'Exibir avatares no chat',
		'USER_AJAX_CHAT_SOUND'			=> 'Ouvir sons no chat',
		'USER_AJAX_CHAT_AVATAR_HOVER'	=> 'Exibir a imagem do avatar completo em hover',
		'USER_AJAX_CHAT_ONLINELIST'		=> 'Ver lista online no chat',
		'USER_AJAX_CHAT_AUTOCOMPLETE'	=> 'Caixa de entrada do chat preenchida automaticamente',
		'USER_AJAXCHAT'					=> 'Ajax Chat',
		'USER_AJAXCHAT_SETTINGS'		=> 'Configurações do Ajax Chat',
		'NO_VIEW_CHAT'					=> 'Você não tem permissão para ver o chat.',
		'AJAX_CHAT_MESSAGES_DOWN'		=> 'Exibir as novas mensagens do chat na parte superior ou inferior do chat. Também move a caixa de entrada para a parte superior ou inferior',
	)
);
