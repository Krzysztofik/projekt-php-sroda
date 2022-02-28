<?php
namespace src;
use \PDO;

class Opinie
{
    /**
     * @var string
     */
    public $wpisUzytkownika;

    /**
     * @var string
     */
    public $nazwaRecenzji;

    /**
     * @var string
     */
    public $numerRecenzji;

    /**
     * @var string
     */
    public $emotkaRecenzji;

    /**
     * Uruchamia aplikację.
     */
    public function run()
    {
        $opin = new Opinie();
        $opin->odczyt();
        $opin->sprawdzWpis();
        $opin->insertToDatabase();
    }

    /**
     * Funkcja zajmująca się odczytem.
     */
    public function odczyt()
    {
        print 'Proszę przekazać nam swoją opinię na temat naszej usługi! Zakres [1-3].' . PHP_EOL .
            '1. Zadowolony! :)' . PHP_EOL .
            '2. Średnio zadowolony! :|' . PHP_EOL .
            '3. Niezadowolony! :(' . PHP_EOL;

        $this->wpisUzytkownika = readline();
    }

    /**
     * Funkcja sprawdzająca wpis.
     */
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

    public function insertToDatabase()
    {
        $host = 'localhost';
        $user = 'root';
        $pwd = '';
        $dbName = 'opinie';

        try {
            $pdo = new PDO("mysql:host=$host; dbname=$dbName", $user, $pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Łączenie nie powiodło się : " . $e->getMessage();
        }

        $idOpinii = '';
        $stopienZadowolenia = $this->wpisUzytkownika;
        $dataOpinii = date('Y-m-d');

        $data = [
            'idOpinii' => $idOpinii,
            'stopienZadowolenia' => $stopienZadowolenia,
            'dataOpinii' => $dataOpinii,
        ];

        $sql = "INSERT INTO listaopinii (idOpinii, stopienZadowolenia, dataOpinii) VALUES ('', $stopienZadowolenia,'$dataOpinii')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$data]);
    }

}