<?php namespace App\Http\Middleware;

use Closure;
use App;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Models\Article;
use App\Models\Category;
use App\Models\Text;
use App\Models\Lang;
use League\Flysystem\Config;
//use DB;

class FrontendInit {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Get current lang object from db
		$currentLang = Lang::where('lang',"=", $request->lang)
			->first();

		if (!$currentLang){
			abort('404');
		}

		// Locale setting
		App::setLocale($request->lang);
		$main = Category::where('link','=', 'main')
			->first()
			->articles
			->first();
		$company = Category::where('link','=', 'company')
			->first()
			->articles()
			->where('active','=', '1')
			->orderBy("priority", 'desc')
			->get();
		$last_news = Category::where('link','=', 'news')
			->first()
			->articles()
			->where('active','=', '1')
			->orderBy("priority", 'desc')
			->take(2)
			->get();
		$news = Category::where('link','=', 'news')
			->first()
			->articles()
			->where('active','=', '1')
			->orderBy("priority", 'desc')
			->paginate(5);
		$works = Category::where('link','=', 'works')
			->first()
			->articles()
			->where('active','=', '1')
			->orderBy("priority", 'desc')
			->paginate(5);
		$last_works = Category::where('link','=', 'works')
			->first()
			->articles()
			->where('active','=', '1')
			->orderBy("priority", 'desc')
			->take(2)
			->get();
		$gallery = Category::where('link','=', 'gallery')
			->first()
			->articles()
			->where('active','=', 1)
			->get()
			->sortByDesc("priority");

		//dd($gallery);
		$texts = new Text();

		// Share to views global template variables
		view()->share('langs', Lang::all());
		view()->share('company', $company);
		view()->share('last_news', $last_news);
		view()->share('news', $news);
		view()->share('works', $works);
		view()->share('last_works', $last_works);
		view()->share('texts', $texts->init());
		view()->share('version', config('app.version'));
		view()->share('main', $main);
		view()->share('gallery', $gallery);

		return $next($request);
	}

}
