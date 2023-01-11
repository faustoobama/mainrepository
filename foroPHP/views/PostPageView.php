<?php
class PostPageView extends APage {
    use Layout;
    function getPage(){
        $data = $this->getData();
            $page = <<<EOF
                    <div id='PostCont' class='elements'>
                        <div id='PostElement' PostId='$data[id]'>
                            <div class='PostAuthor'>$data[author]</div>
                            <div class='PostTitle'>$data[title]</div>
                            <div class='PostDate'>Publicado el: $data[creationdate]</div>
                            <div class='PostContent'>$data[content]</div>
                        </div>

                        <div id='commentsSection'></div>

                        <form id='commentForm' class='elements'>
                        <textarea id='commentField' name='commentField'></textarea>
                        <input type='submit' value='comentar' id='commentButton' name='commentButton'>
                        </form>
                    </div>
                    EOF;
        return $page;
    }
}

?>