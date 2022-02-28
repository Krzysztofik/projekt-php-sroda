<?php
namespace src;

class Niezadowolony extends Opinie
{
    /**
     * Funkcja tworząca printa dla danej opinii.
     */
    public function niezadowolony1()
    {
        $this->nazwaRecenzji = ' Niezadowolony';
        $this->numerRecenzji = '3.';
        $this->emotkaRecenzji = ' :(';
        print ('Dziękujemy za opinię! Przykro nam, że wybrałeś opcję '. $this->numerRecenzji . $this->nazwaRecenzji . $this->emotkaRecenzji . PHP_EOL);
    }
}