<?php

class Opinie
{
    public $wpisUzytkownika;

    public function run()
    {
        $opin = new Opinie();
        $opin->odczyt();
        $opin->sprawdzWpis();
    }

    public function odczyt()
    {
        print 'Proszę przekazać nam swoją opinię na temat naszej usługi! Zakres [1-3].' . PHP_EOL .
            '1. Zadowolony! :)' . PHP_EOL .
            '2. Średnio zadowolony! :|' . PHP_EOL .
            '3. Niezadowolony! :(' . PHP_EOL;

        $this->wpisUzytkownika = readline();
    }

    public function sprawdzWpis()
    {
        switch($this->wpisUzytkownika)
        {
            case 1: $zadowolony = new Zadowolony();
                $zadowolony->zadowolony1();
                break;

            case 2: $srednio = new Srednio();
                $srednio->srednio1();
                break;

            case 3: $niezadowolony = new Niezadowolony();
                $niezadowolony->niezadowolony1();
                break;

                default: exit($this->run());
        }

    }

}