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
		'ACP_AJAX_CHAT'								=> 'Ajax Chat',
		'ACP_AJAX_CHAT_EXPLAIN'						=> 'Aqui você pode ajustar as configurações do Ajax Chat.',
		'AJAX_CHAT_SETTINGS'						=> 'Configurações do Ajax Chat',
		'DISPLAY_AJAX_CHAT'							=> 'Ativar Ajax Chat',
		'INDEX_DISPLAY_AJAX_CHAT'					=> 'Ativar Ajax Chat na página de índice',
		'INDEX_DISPLAY_AJAX_CHAT_EXPLAIN'			=> 'Definir isso como "Desativado" só desligará o Ajax Chat no "Índice do Fórum".',
		'WHOIS_CHATTING'							=> 'Ativar a caixa Quem está conversando',
		'WHOIS_CHATTING_EXPLAIN'					=> 'Definir isso como "Desativado" desligará a caixa Quem está conversando no chat, independentemente das configurações dos usuários.',
		'AJAX_CHAT_POSTS'							=> 'Configurações de postagem do fórum',
		'FORUM_POSTS_AJAX_CHAT'						=> 'Ativar fórum para postar no chat',
		'FORUM_POSTS_AJAX_CHAT_TOPIC'				=> 'Ativar novos tópicos para exibir no chat',
		'FORUM_POSTS_AJAX_CHAT_REPLY'				=> 'Ativar respostas de tópicos para exibir no chat',
		'FORUM_POSTS_AJAX_CHAT_EDIT'				=> 'Ativar postagens editadss para exibir no chat',
		'FORUM_POSTS_AJAX_CHAT_QUOTE'				=> 'Ativar postagens citadas para exibir no bate-papo',
		'ARCHIVE_AMOUNT_AJAX_CHAT'					=> 'Arquivo de mensagens',
		'ARCHIVE_AMOUNT_AJAX_CHAT_EXPLAIN'			=> 'Quantidade de mensagens de arquivo para exibição. Entre 5 e 500. O padrão é 200.',
		'POPUP_AMOUNT_AJAX_CHAT'					=> 'Mensagens popup',
		'POPUP_AMOUNT_AJAX_CHAT_EXPLAIN'			=> 'Quantidade de mensagens popup a serem exibidas. Entre 5 e 150. O padrão é 60.',
		'INDEX_AMOUNT_AJAX_CHAT'					=> 'Mensagens do chat no índice',
		'INDEX_AMOUNT_AJAX_CHAT_EXPLAIN'			=> 'Quantidade de mensagens do chat a serem exibidas no índice. Entre 5 e 150. O padrão é 60.',
		'CHAT_AMOUNT_AJAX_CHAT'						=> 'Mensagens do chat',
		'CHAT_AMOUNT_AJAX_CHAT_EXPLAIN'				=> 'Quantidade de mensagens do chat a serem exibidas. Entre 5 e 150. O padrão é 60.',
		'AJAX_CHAT_RULES'							=> 'Regras do Chat',
		'RULES_AJAX_CHAT_EXPLAIN'					=> 'Você pode inserir as regras para o chat aqui. Ou você pode inserir um URL de uma page/post contendo suas regras de bate-papo.',
		'AJAX_CHAT_LOCATION'						=> 'Localização do Chat',
		'LOCATION_AJAX_CHAT_OVERRIDE'				=> 'Substituir a posição do chat do usuário',
		'LOCATION_AJAX_CHAT_OVERRIDE_EXPLAIN'		=> 'A ativação dessa configuração irá substituir a configuração da posição do chat na UCP, bem como remover a opção UCP.',
		'VIEWFORUM_AJAX_CHAT_OVERRIDE'				=> 'Substituir a configuração do viewforum do usuário',
		'VIEWFORUM_AJAX_CHAT_OVERRIDE_EXPLAIN'		=> 'A ativação dessa configuração substituirá a configuração do viewforum do chat na UCP, além de remover a opção UCP.',
		'VIEWTOPIC_AJAX_CHAT_OVERRIDE'				=> 'Substituir a configuração do viewtopic do usuário',
		'VIEWTOPIC_AJAX_CHAT_OVERRIDE_EXPLAIN'		=> 'A ativação dessa configuração irá substituir a configuração do viewtopic do chat na UCP, bem como remover a opção UCP.',
		'LOCATION_AJAX_CHAT'						=> 'Posição do chat na parte superior da página de índice',
		'LOCATION_AJAX_CHAT_EXPLAIN'				=> 'Definir isso como "Não" moverá o chat para a parte inferior da página de índice.',
		'TIME_SETTING_AJAX_CHAT'					=> 'Configuração do tempo',
		'TIME_SETTING_AJAX_CHAT_EXPLAIN'			=> 'Esta configuração substituirá a configuração do usuário no formato da data. Deixe em branco para usar as configurações do usuário.',
		'ACL_U_AJAXCHAT_BBCODE'						=> 'Pode usar bbcode no chat',
		'ACL_U_AJAXCHAT_POST'						=> 'Pode postar mensagens no chat',
		'ACL_U_AJAXCHAT_VIEW'						=> 'Pode ver o chat',
		'ACL_U_AJAXCHAT_EDIT'						=> 'Pode editar todas as mensagens do chat',
		'ACL_M_AJAXCHAT_DELETE'						=> 'Pode deletar postagens no chat',
		'STATUS_ONLINE_CHAT'						=> 'Status online ',
		'STATUS_ONLINE_CHAT_EXPLAIN'				=> 'Define o tempo de status online dos usuários em segundos. O padrão é 0.',
		'STATUS_IDLE_CHAT'							=> 'Status ocioso',
		'STATUS_IDLE_CHAT_EXPLAIN'					=> 'Define o tempo de status ocioso dos usuários em segundos. O padrão é 300.',
		'STATUS_OFFLINE_CHAT'						=> 'Status offline',
		'STATUS_OFFLINE_CHAT_EXPLAIN'				=> 'Define o tempo de status off-line dos usuários em segundos. O padrão é 1800.',
		'REFRESH_ONLINE_CHAT'						=> 'Taxa de atualização online',
		'REFRESH_ONLINE_CHAT_EXPLAIN'				=> 'Define a taxa de atualização online dos usuários em segundos. O padrão é 5.',
		'REFRESH_IDLE_CHAT'							=> 'Taxa de atualização ociosa',
		'REFRESH_IDLE_CHAT_EXPLAIN'					=> 'Define a taxa de atualização ociosa dos usuários em segundos. O padrão é 60.',
		'REFRESH_OFFLINE_CHAT'						=> 'Taxa de atualização offline',
		'REFRESH_OFFLINE_CHAT_EXPLAIN'				=> 'Define a taxa de atualização offline dos usuários em segundos. O padrão é 300.',
		'AJAX_CHAT_PRUNE'							=> 'Configurações de Limpeza',
		'PRUNE_AJAX_CHAT'							=> 'Auto-limpeza de menssagens',
		'PRUNE_AJAX_CHAT_EXPLAIN'					=> 'A desativação ajustará isso para o modo manual.',
		'PRUNE_KEEP_AJAX_CHAT'						=> 'Número de mensagens a manter',
		'PRUNE_NOW'									=> 'Limpar Agora',
		'PRUNE_LOG_AJAXCHAT'						=> 'Tabela do chat limpada',
		'PRUNE_LOG_AJAXCHAT_AUTO'					=> 'Limpeza automática da tabela do chat',
		'PRUNE_CHAT_SUCCESS'						=> 'Tabela do chat limpa com sucesso!',
		'CONFIRM_PRUNE_AJAXCHAT'					=> 'Confirme se realmente deseja limpar o banco de dados do chat.',
		'TRUNCATE_NOW'								=> 'Deletar Agora',
		'TRUNCATE_NOW_EXPLAIN'						=> 'Deleta todas as mensagens do chat da tabela do banco de dados.',
		'CONFIRM_TRUNCATE_AJAXCHAT'					=> 'Confirme se realmente deseja deletar o banco de dados do chat.',
		'TRUNCATE_CHAT_SUCCESS'						=> 'Tabela do Chat deletada',
		'CHAT_COUNTER'								=> 'Número de mensagens do chat no banco de dados',
		'ROLE_MOD_CHAT'								=> 'Moderador do Ajax Chat',
		'ROLE_MOD_CHAT_EXPLAIN'						=> 'Tarefas para os moderadores do Ajax Chat.',
		'AJAX_CHAT_NAV_LINK'						=> 'Exibir o link do Centro de bate-papo no menu',
		'AJAX_CHAT_NAV_LINK_EXPLAIN'				=> 'Exibir o link do Centro de bate-papo no menu depois do link de FAQ.',
		'AJAX_CHAT_QUICK_LINK'						=> 'Exibir o link do Centro de bate-papo nos Links rápidos',
		'AJAX_CHAT_QUICK_LINK_EXPLAIN'				=> 'Exibir o link do Centro de bate-papo no drop menu Links rápidos.',
		'AJAX_CHAT_UPDATED_SETTINGS'				=> 'Configurações do Ajax Chat atualizadas',
		'AJAX_CHAT_LAYOUT'							=> 'Layout do Chat',
		'AJAX_CHAT_INPUT_FULL'						=> 'Entrada do chat com todos os botões disponíveis',
		'AJAX_CHAT_INPUT_FULL_EXPLAIN'				=> 'Desativar isso deixará apenas o botão "Enviar" e a caixa de entrada de mensagens tornando-se uma entrada muito básica como um shoutbox.',
		'AJAX_CHAT_CHATROW_FULL'					=> 'Altura da mensagem curta',
		'AJAX_CHAT_CHATROW_FULL_EXPLAIN'			=> 'Desativá-lo irá definir a altura da mensagem do chat como altura original. A ativação deste terá a altura da mensagem tão curta quanto possível, enquanto se encaixam mais mensagens em exibição.',
		'VERSION'									=> 'Versão',
	)
);
