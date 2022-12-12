<?php

namespace App\Models;
use App\Models\Article;

class ArticlesCollection {
    private array $articles = [];

    public function __construct(array $articles = []) {
        foreach ($articles as $article) {
            $this->add($article);
        }
    }
    public function add(Article $article): void {
        $this->articles []= $article;
    }

    public function get(): array
    {
        return $this->articles;
    }

    public function addArticles(\App\Models\Article $data)
    {
    }
}