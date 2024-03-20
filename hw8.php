switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        if ($_SERVER['REQUEST_URI'] == '/posts') {
            include('posts_controller.php');
            $postsController = new PostsController();
            $postsController->createPost($_POST);
        }
        break;
}
