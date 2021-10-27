<?php
require_once("Classes/Opinie.php");

class Srednio extends Opinie
{
    public $nazwaRecenzji;
    public $numerRecenzji;
    public $emotkaRecenzji;

    public function srednio1()
    {
        $this->nazwaRecenzji = ' Średnio zadowolony';
        $this->numerRecenzji = '2.';
        $this->emotkaRecenzji = ' :|';
        print ('Dziękujemy za opinię! Cieszymy się, że wybrałeś opcję '. $this->numerRecenzji . $this->nazwaRecenzji . $this->emotkaRecenzji . PHP_EOL);
    }
}