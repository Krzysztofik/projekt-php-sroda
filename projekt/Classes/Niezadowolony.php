<?php
require_once("Classes/Opinie.php");

class Niezadowolony extends Opinie
{
    public $nazwaRecenzji;
    public $numerRecenzji;
    public $emotkaRecenzji;

    public function niezadowolony1()
    {
        $this->nazwaRecenzji = ' Niezadowolony';
        $this->numerRecenzji = '3.';
        $this->emotkaRecenzji = ' :(';
        print ('Dziękujemy za opinię! Cieszymy się, że wybrałeś opcję '. $this->numerRecenzji . $this->nazwaRecenzji . $this->emotkaRecenzji . PHP_EOL);
    }
}