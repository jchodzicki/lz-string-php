<?php
require_once '../src/LZString.new.php';
/**
 * Description of LZStringTest
 *
 * @author Tobias Seipke <tobias.seipke@gmail.com>
 */
class LZStringTest extends PHPUnit_Framework_TestCase {
    
//    public function testWords() {
//        foreach (new DirectoryIterator('assets/words') as $fileInfo) {
//            if($fileInfo->isDot()) {
//                continue;
//            }
//            $contents = file_get_contents('assets/words/'.$fileInfo->getFilename());
//            $encoded = mb_convert_encoding($contents, 'UTF-8', 'ASCII');
//            $words = explode("\n", $encoded);
//            foreach($words as $word) {
//                $compressed = LZString::compress($word);
//                $this->assertEquals($word, LZString::decompress($compressed));
//            }
//        }
//    }
    
    public function testCompress() {
        
        $test = json_decode(file_get_contents('assets/compare/generated.json'), TRUE);
        for($i=0; $i<count($test); $i++) {
            $this->assertEquals($test[$i]['compressed'], LZString::compress($test[$i]['value']));
        }
        
//        $str = 'Fön';
//        foreach (new DirectoryIterator('assets/words') as $fileInfo) {
//            if($fileInfo->isDot()) {
//                continue;
//            }
//            $contents = file_get_contents('assets/words/'.$fileInfo->getFilename());
//            $encoded = mb_convert_encoding($contents, 'UTF-8', 'ASCII');
//            $str = $encoded;
//        }
//        $compressed = LZString::compress($str);
//        $this->assertEquals($str, LZString::decompress($compressed));
    }
    
    public function testWords() {
        
        $test = json_decode(file_get_contents('assets/compare/generated.json'), TRUE);
        for($i=0; $i<count($test); $i++) {
            $this->assertEquals($test[$i]['compressed'], LZString::compress($test[$i]['value']));
        }
        
//        $str = 'Fön';
//        foreach (new DirectoryIterator('assets/words') as $fileInfo) {
//            if($fileInfo->isDot()) {
//                continue;
//            }
//            $contents = file_get_contents('assets/words/'.$fileInfo->getFilename());
//            $encoded = mb_convert_encoding($contents, 'UTF-8', 'ASCII');
//            $str = $encoded;
//        }
//        $compressed = LZString::compress($str);
//        $this->assertEquals($str, LZString::decompress($compressed));
    }
}