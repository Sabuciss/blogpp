<?php

require "models/Blog.php";

class BlogController {
  
    public function index() {
        $posts = Blog::all();
        require "views/blog/index.view.php";
      }

      public function show($id) {
        $post = Blog::find($id);
        if (!$post) {
            http_response_code(404);
            echo "Ieraksts nav atrasts!";
            return;
        }
        require "views/blog/show.view.php";
    }
}
  