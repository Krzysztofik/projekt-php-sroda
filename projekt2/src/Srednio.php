<?php
namespace src;

class Srednio extends Opinie
{
    /**
     * Funkcja tworząca printa dla danej opinii.
     */
    public function srednio1()
    {
        $this->nazwaRecenzji = ' Średnio zadowolony';
        $this->numerRecenzji = '2.';
        $this->emotkaRecenzji = ' :|';
        print ('Dziękujemy za opinię! Cieszymy się, że wybrałeś opcję '. $this->numerRecenzji . $this->nazwaRecenzji . $this->emotkaRecenzji . PHP_EOL);
    }
}