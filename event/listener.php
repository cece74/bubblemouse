<?php
/**
*
* @package phpBB Extension - Bubble Mouse
* @copyright (c) 2015 Oliver Schramm
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\bubblemouse\event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class listener implements EventSubscriberInterface
{
	protected $request;
	protected $template;
	protected $user;
	public function __construct(\phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
	}
	
	static public function getSubscribedEvents()
	{
		return array(
			'core.ucp_prefs_view_data'			=> 'ucp_prefs_add',
			'core.ucp_prefs_view_update_data'	=> 'ucp_prefs_update',
		);
	}

	public function ucp_prefs_add($event)
	{
		$this->user->add_lang_ext('cece74/bubblemouse', 'ucp');

		$bubblemouse = $this->request->variable('bubblemouse', (bool) $this->user->data['user_bubblemouse']);
		$event['data'] = array_merge($event['data'], array(
			'bubblemouse'	=> $bubblemouse,
		));

		$this->template->assign_vars(array(
			'S_BUBBLEMOUSE'	=> $bubblemouse,
		));
	}

	public function ucp_prefs_update($event)
	{
		$event['sql_ary'] = array_merge($event['sql_ary'], array(
			'user_bubblemouse'		=> $event['data']['bubblemouse'],
		));
	}
}
