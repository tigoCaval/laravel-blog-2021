<?php
namespace App\Http\Controllers;
  
use App\Http\Requests\ArticleRequest;
use App\Work\Blog\Access\ArticleAccess;
use App\Work\Video\VideoFormat;

class ArticleController extends Controller
{    
    /**
     * Get model.
     *
     * @var ArticleAccess
     */
    protected $model;
    
    /**
     * Get video format.
     *
     * @var VideoFormat
     */
    protected $video;

    public function __construct()
    {
       $this->model = new ArticleAccess();
       $this->video = new VideoFormat();         
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->model->model()->orderBy('created_at','desc')->paginate(5);
        return view('blog.article.index',['articles'=>$articles]);  
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ArticleRequest
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    { 
        $this->authorize('create', $this->model->model()); 
        $request['url_video'] = $this->video->youtube($request->url_video);

        $this->model->create($request->all());   
        return redirect()->route('articles.create')->withStatus(__('Salvo com sucesso!'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = $this->model->model()->find($id); 
        return view('blog.article.show',['article'=>$article]);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', $this->model->model()->find($id));

        $article = $this->model->model()->find($id);
        return view('blog.article.edit',['article'=>$article]);
    }
     
    /**
     * Update the specified resource in storage.
     *
     * @param App\Http\Requests\ArticleRequest  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $this->authorize('update', $this->model->model()->find($id));
        $request['url_video'] = $this->video->youtube($request->url_video);
 
        $this->model->update($id, $request->all());
        return redirect()->route('articles.edit',$id)->withStatus(__('Atualizado com sucesso!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $this->authorize('delete', $this->model->model()->find($id));
         
        $this->model->delete($id);
        return redirect()->route('articles.index');
    }
}
