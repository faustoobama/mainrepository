<?php
class PostsPageView extends APage {
    function getPage(){
        $data = $this->getData();
        $page = "<div class='elements' id='postsCont'>";
        foreach ($data as $key => $value) {
            $page .= <<<EOF
                        <div class='postElement' postId='$value[id]'>
                            <div class='postHeader'>
                                <div class='postAuthor'>$value[author]</div>
                                <div class='postDate'> $value[creationdate]</div>
                            </div>
                            <div class='postTitle'>$value[title]</div>
                            <div class='postContent'>$value[content]</div>
                            <div class='postComents'>
                                Comentarios: $value[numcomments] 
                                <span class='comment-icon'></span>
                            </div>
                        </div>
                    EOF;
            $page .= ($key < count($data) -1)?"<span class='postsSeparator'></span>":"";
        }
        $page .= "</div>";
        return json_encode($page);
    }
}

?>