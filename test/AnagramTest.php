<?php
require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__) . '/../lib/Anagram.php';

class AnagramTest extends PHPUnit_Framework_TestCase
{
    public function testShouldGetAnagramsForSilo()
    {
        $anagram = new Anagram();
        $this->assertEquals($anagram->anagramFor('silo'), array('oils', 'soil', 'soli'));
    }
}

?>