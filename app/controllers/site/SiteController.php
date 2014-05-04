<?php 
namespace site;
use BaseController;
use DB;
use Illuminate\Support\Facades\Cache;
/**
*  Todo lo relacionado al manejo del sitio web
*/
class SiteController extends BaseController
{
	
	/**
	* The layout that should be used for responses.
	*/
	protected $layout = 'layouts.site';

	##---------------- index page --------------- ##
	public function index()
	{
		# Return response
		$this->layout->with('title', "Te Traigo de Todo - Bienvenidos");
		$this->layout->content = \View::make('site.index');
								#->with('Products', $products)
				                
	}
}