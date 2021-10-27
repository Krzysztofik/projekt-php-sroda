<?php
require_once("Classes/Opinie.php");

class Zadowolony extends Opinie
{
    /**
     * Funkcja tworząca printa dla danej opinii.
     */
    public function zadowolony1()
    {
        $this->nazwaRecenzji = ' Zadowolony';
        $this->numerRecenzji = '1.';
        $this->emotkaRecenzji = ' :)';
        print ('Dziękujemy za opinię! Cieszymy się, że wybrałeś opcję '. $this->numerRecenzji . $this->nazwaRecenzji . $this->emotkaRecenzji . PHP_EOL);
    }
}

