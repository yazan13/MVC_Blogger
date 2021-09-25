
<?php


class Post
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPost($id)
    {
        $this->db->query("SELECT * FROM posts where id=:id");
        $this->db->bind(":id", $id);
        $post = $this->db->fetch();
        if ($post) return $post;
        else return false;
    }
    public function getPosts()
    {

        $this->db->query("SELECT * FROM posts");
        $posts = $this->db->fetchAll();
        if ($posts) return $posts;
        else return false;
    }


    public function updatePost($post)
    {

        $this->db->query('UPDATE posts set postTitle=:title, postContent=:content where id=:id');
        $this->db->bind(":title", $post['title']);
        $this->db->bind(":content", $post['body']);
        $this->db->bind(":id", $post['id']);

        if ($this->db->execute()) return true;
        else return false;
    }


    public function addPost($post)
    {
        $this->db->query("INSERT INTO posts (postTitle, postContent, userId) values(:title, :body, :userId)");
        $this->db->bind(":title", $post['title']);
        $this->db->bind(":body", $post['body']);
        $this->db->bind(":userId", $post['userId']);

        if ($this->db->execute()) return true;
        else return false;
    }

    public function deletePost($id)
    {

        $this->db->query("DELETE from posts where id=:id");
        $this->db->bind(":id", $id);

        if ($this->db->execute()) return true;
        else return false;
    }
}
