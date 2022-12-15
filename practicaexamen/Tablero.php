<?php

class Tablero {
    private $turno;
    private $jugadas=[['','',''],['','',''],['','','']];

    public function __construct($jugadas=''){
         
    }
    public function printTablero(){
        for($i = 0; $i < count($this->jugadas); $i++){
            foreach ($this->jugadas[$i] as $key => $valor) {
                print "<input type='text' style='width:30px';height='30px;text-align='center' value='".$valor."' disabled>";
            }
        print('<br>');
        }
        $this->printForm();
    }

    public function printForm(){
        $html =<<< EOF
        <br>
        <form method='post'>
            <select name='turno'>
                <option value='x'>X</option>
                <option value='o'>O</option>
            </select>
            <br>
            <label>X:<label><input type='number' style='width:50px';height='20px' name='x'>
            <br>
            <label>Y:<label><input type='number' style='width:50px';height='20px' name='y'>
        </form>
        <br>
        <input type='submit' value='jugar' name='jugar'>
        EOF;
        print($html);
    }
}

?>