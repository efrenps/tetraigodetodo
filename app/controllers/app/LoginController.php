<?php 
namespace app;
use BaseController;
use DB;
use Illuminate\Support\Facades\Cache;
/**
*  Todo lo relacionado al manejo del sitio web
*/
class LoginController extends BaseController
{
	
	/**
	* The layout that should be used for responses.
	*/
	protected $layout = 'layouts.login';

	##---------------- index page --------------- ##
	public function index()
	{
		
		# Return response
		$this->layout->with('title', "Tetraigodetodo - Login");
		$this->layout->content = \View::make('app.login');
				                
	}

}