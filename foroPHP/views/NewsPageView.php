<?php
class NewsPageView extends APage {
    use Layout;
    const CATEGORIES=[
        'hardware'=> ['title'=>'hardware','description'=>'La descripcion de la Zona Hardware'],
        'games'=> ['title'=>'juegos y entretenimiento','description'=>'La descripcion de la Zona de Juegos'],
        'films'=> ['title'=>'series y peliculas','description'=>'La descripcion de la zona de cine y televiasion'],
        'default'=> ['title'=>'Todos los temas','description'=>'La descripcion de la zona de todos los temas'],
    ];
    private $category;
    function __construct($data,$category=''){
        parent::__construct($data);
        $this->category = $category;
    }
    function getPage(){
        if($this->isValidCategory()){
            $data = $this->getData();
            $page = "<div class='elements' id='topic'><h1>".strtoupper(self::CATEGORIES[$this->category]['title'])."</h1><p>". self::CATEGORIES[$this->category]['description'] . "</p></div><div class='elements' id='topics'>";
            foreach ($data as $value) {
                $page .= <<<EOF
                            <div class='tcard' postId='$value[id]'>
                                <img src='/img/$value[image].webp' class='tcardImg'>
                                <div class='tcardTitle'>$value[title]</div>
                                <div class='tcardResum'>$value[resume]</div>
                                <div class='tcardFooter'>
                                <div class='tcardComments'> $value[creationdate]</div>
                                    <button class='tcardButton'>ver</button>
                                </div>
                            </div>
                        EOF;
            }
            $page .= "</div>";
            return $page;
        } else return '404';
    }
    function isValidCategory(){
        return in_array($this->category, ['hardware','games','films','default']);
    }
}

?>