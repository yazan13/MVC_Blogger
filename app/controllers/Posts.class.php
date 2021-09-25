<?php

class Posts extends Controller
{

    public function __construct()
    {
        $this->postModel = $this->model('Post'); //new Post
    }

    public function index()
    {
        //get the posts
        $posts = $this->postModel->getPosts();
        if ($posts) {
            $data = [
                'posts' => $posts
            ];
            $this->view('posts/index', $data);
        } else {
            die("something went wrong!!");
        }
    }
    public function show($id)
    {
        $post = $this->postModel->getPost($id);

        if ($post) {
            $data = [
                'post' => $post
            ];
            $this->view('posts/show', $data);
        } else {
            die("Something went wrong!!");
        }
    }

    public function add()
    {
        if (isset($_SESSION['user_id'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'title' => $_POST['title'],
                    'body' => $_POST['body'],
                    'userId' => $_SESSION['user_id'],
                    'title_err' => '',
                    'body_err' => ''
                ];
                if (empty($data['title'])) $data['title_err'] = 'Please fill your title';
                if (empty($data['body'])) $data['body_err'] = 'Please fill your post body';


                if (empty($data['title_err']) && empty($data['body_err'])) {
                    if ($this->postModel->addPost($data)) {
                        //add post success 
                        redirect('posts');
                    } else {
                        die("something went wrong!!");
                    }
                } else {
                    //user register faild
                    $this->view("posts/add", $data);
                }
            } else {

                $data = [
                    'title' => '',
                    'body' => '',
                    'title_err' => '',
                    'body_err' => '',
                ];

                //load the register
                $this->view("posts/add", $data);
            }
        } else {
            redirect("posts");
        }
    }

    public function edit($id)
    {
        $post = $this->postModel->getPost($id);
        if ($_SESSION['user_id'] == $post->userId) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'title' => $_POST['title'],
                    'body' => $_POST['body'],
                    'id' => $post->id,
                    'title_err' => '',
                    'body_err' => ''
                ];
                if (empty($data['title'])) $data['title_err'] = 'Please fill your title';
                if (empty($data['body'])) $data['body_err'] = 'Please fill your post body';


                if (empty($data['title_err']) && empty($data['body_err'])) {
                    if ($this->postModel->updatePost($data)) {
                        //add post success 
                        redirect('posts');
                    } else {
                        die("something went wrong!!");
                    }
                } else {
                    //user register faild
                    $this->view("posts/edit", $data);
                }
            } else {

                //load the register
                $data = [
                    'title' => $post->postTitle,
                    'body' => $post->postContent,
                    'id' => $post->id,
                    'title_err' => '',
                    'body_err' => ''
                ];
                $this->view("posts/edit", $data);
            }
        } else {
            redirect("posts");
        }
    }

    public function delete($id)
    {
        $post = $this->postModel->getPost($id);

        if ($_SESSION['user_id'] == $post->userId) {

            if ($this->postModel->deletePost($id)) {
                //post deleted
                redirect('posts');
            } else {
                die("something went wrong!!");
            }
        }
    }
}
