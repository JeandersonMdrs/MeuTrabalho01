<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

	
class BlogController extends controller
{
	/**
	 * @Route("/blog", name="index")
	 */
	public function indexAction(Request $request)
	{

		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');


		if($nome == 'Jeanderson' && $senha == '123')
		{
			return $this->redirectToRoute('home_page', array('request' => $request), 307);
		}

		return $this->render('default/index_login.html.php', array());
	}

	/**
	 * @Route("/blog/home", name="home_page")
	 */
	public function homeAction()
	{
		
		$request = request::createFromGlobals();
		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');
	
		return $this->render('default/home_user.html.php', array("nome"=>$nome, "senha"=>$senha));
	}
}

?>