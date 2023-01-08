<?php
class PostCommentsView extends APage {
    function getPage(){
        $result = "";
        if($this->getData()){
            foreach ($this->getData() as $key => $value) {
                $result .= <<<EOF
                            <div class='comment' commentId='$value[id]'>
                                <div class='cauthor'>$value[author]</div>
                                <div class='cdate'>$value[creationdate]</div>
                                <div class='ccontent'>$value[content]</div>                        
                            </div>
                            EOF;
            }

        } else $result .= 'Sin comentarios de momento';
        return  json_encode($result);
    }

}

?>