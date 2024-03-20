class PostsController {
    public function createPost($postData) {
        if (empty($postData['post_name']) || empty($postData['post_description'])) {
            http_response_code(400);
            echo "Error: Please provide both name and description.";
            return;
        }

        $postName = htmlspecialchars($postData['post_name']);
        $postDescription = htmlspecialchars($postData['post_description']);

        echo "Post created successfully.";
    }
}
