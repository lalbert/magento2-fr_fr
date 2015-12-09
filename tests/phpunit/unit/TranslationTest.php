<?php
namespace Lalbert\fr_fr\Tests;

require __DIR__ . '/../CsvFileIterator.php';

class TranslationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider readSourceCsv
     */
    public function testTranslations($en, $fr)
    {
        // Teste si la traduction est bien fournie
        $this->_testTranslationExists($en, $fr);

        // Teste les espaces en début et fin de chaîne
        $this->_testSpaceBeforeAfter($en, $fr);

        // Teste la case de la 1ère lettre
        $this->_testFirstLettreCase($en, $fr);

        // Test la ponctuation
        $this->_testFinalPunctuation($en, $fr);
    }

    /**
     * Teste si la traduction française est bien fournie
     *
     * @param string $fr
     */
    protected function _testTranslationExists($en, $fr)
    {
        $message = "La traduction de ''$en'' n'est pas fournie.";
        $this->assertNotNull(trim($fr), $message);
        $this->assertNotEmpty($fr, $message);
    }

    /**
     * Teste la présence des espaces en début et fin de chaîne
     *
     * @param string $en
     * @param string $fr
     */
    protected function _testSpaceBeforeAfter($en, $fr)
    {
        // Before
        if(\strlen($en) !== \strlen(\ltrim($en))) {
            // Ignore si le premier caractère est "\n"
            if(10 != \ord($en)) {
                $this->assertNotEquals($fr, \ltrim($fr), "Un espace en début de chaîne n'est pas respecté dans la traduction.");
            }
        } else {
            $this->assertEquals($fr, \ltrim($fr), "Un espace en début de chaîne semble avoir été ajouté dans la traduction.");
        }

        // After
        if(\strlen($en) !== \strlen(\rtrim($en))) {
            // Ignore si le premier caractère est "\n"
            if(10 != \ord($en)) {
                $this->assertNotEquals($fr, \rtrim($fr), "Un espace en fin de chaîne n'est pas respecté dans la traduction.");
            }
        }
    }

    /**
     * Teste si la case de la première lettre est bien respectée.
     *
     * Cela ne teste que les caractères [a-zA-Z] (les caractères accentués ne
     * sont pas testés.
     *
     * @param string $en
     * @param string $fr
     */
    protected function _testFirstLettreCase($en, $fr)
    {
        $ignoreBeginBy = ['eBay', 'entity_type'];

        // Supprime les espaces du début
        $en = \ltrim($en);
        $fr = \ltrim($fr);

        $firstWordEn = current(explode(' ', $en));
        $firstWordFr = current(explode(' ', $fr));

        $isIgnored = \in_array($firstWordEn, $ignoreBeginBy) || \in_array($firstWordFr, $ignoreBeginBy);

        if(!$isIgnored) {
            $firstLetterEn = \substr($en, 0, 1);
            $firstLetterFr = \substr($fr, 0, 1);

            if(\ctype_alpha($firstLetterEn) && \ctype_alpha($firstLetterFr)) {
                if(\ctype_upper($firstLetterEn)) {
                    $this->assertTrue(\ctype_upper($firstLetterFr), 'La 1ère lettre de la traduction devrait être en majuscule.');
                } elseif(\ctype_lower($firstLetterEn)) {
                    $this->assertTrue(\ctype_lower($firstLetterFr), 'La 1ère lettre de la traduction devrait être en minuscule.');
                }
            }
        }
    }

    public function _testFinalPunctuation($en, $fr)
    {
        $ignoredPunctuation = ['#', '°', ')', '"', '>'];

        // Supprime les espaces de fin
        $en = \rtrim($en);
        $fr = \rtrim($fr);

        $lastLetterEn = \substr($en, -1);
        $lastLetterFr = \substr($fr, -1);

        if(!\in_array($lastLetterEn, $ignoredPunctuation) && \ctype_punct($lastLetterEn)) {
            if(!\in_array($lastLetterFr, $ignoredPunctuation)) {
                $this->assertTrue(\ctype_punct($lastLetterFr), "Il semble qu'il manque la ponctuation de la fin de chaîne.");
            }
        }
    }

    public function readSourceCsv()
    {
        $sourcePath = LALBERT_FR_FR_ROOT . '/fr_fr.csv';
        return new \CsvFileIterator($sourcePath);
    }
}