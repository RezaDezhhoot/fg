<?php

namespace App\Http\Controllers\Site\Articles;

use App\Http\Controllers\Admin\Articles\CategoryArticles;
use App\Models\Article;
use App\Models\ArticleCategory;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class ArticlesComponent extends Component
{
    use WithPagination;
	//public $cat = 'بدون دسته بندی';
    public $perPage = 12;

    public $category , $categories = [];


    public function mount()
    {
        SEOMeta::setTitle('مقالات - فارس گیمر');
        SEOMeta::setDescription('مقالات فارس گیمر - آموزش بازی');

        OpenGraph::setTitle('مقالات - فارس گیمر');
        OpenGraph::setDescription('مقالات فارس گیمر - آموزش بازی');

        TwitterCard::setTitle('مقالات - فارس گیمر');
        TwitterCard::setDescription('مقالات فارس گیمر - آموزش بازی');

        JsonLd::setTitle('مقالات - فارس گیمر');
        JsonLd::setDescription('مقالات فارس گیمر - آموزش بازی');
        $this->categories = ArticleCategory::query()->pluck('title','id');

    }

    public function render()
    {
        $articles = Article::query()->latest()->when($this->category  ,function (Builder $builder){
            return $builder->whereHas('categories',function (Builder $builder) {
                return $builder->where('id',$this->category);
            });
        })->paginate($this->perPage);
        $LastArticles = Article::latest()->take(5)->get();
        return view('site.articles.articles-component', get_defined_vars())
            ->extends('site.layouts.site');
    }
}
