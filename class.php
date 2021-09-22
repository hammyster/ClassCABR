<?php
/**
 *
 * Classe para obter dados de um jogador pelo nickname;
 * Compatível com o Combat Arms BR <combatarms.com.br>;
 * 
 * @author     Hammy
 * @version    1.0 $
 */

$CA = new CA();

class CA
{

    public static function SearchExpFromNickname($nickname)
    {
        $Web = "https://combatarms.com.br/perfil-de-combatente/" . $nickname . "";
        $dom = new DOMDocument();
        $dom->loadHTMLFile($Web);
        $xpath = new DomXPath($dom);
        $elements = $xpath->query('//dl[@class="status"]/div[1]/dd');
        libxml_use_internal_errors(true);
        if (!is_null($elements)) {
            foreach ($elements as $element) {
                $nodes = $element->childNodes;
                foreach ($nodes as $node) {

                    echo $node->nodeValue . "<br>";
                }
            }
        }
    }

    public static function SearchKillsFromNickname($nickname)
    {
        $Web = "https://combatarms.com.br/perfil-de-combatente/" . $nickname . "";
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile($Web);
        $xpath = new DomXPath($dom);
        $elements = $xpath->query('//ul[@class="deaths"]/li[1]/div[1]/p[2]');
        libxml_use_internal_errors(true);
        if (!is_null($elements)) {
            foreach ($elements as $element) {
                $nodes = $element->childNodes;
                foreach ($nodes as $node) {

                    echo $node->nodeValue . "<br>";
                }
            }
        }
    }

    public static function SearchDeathsFromNickname($nickname)
    {
        $Web = "https://combatarms.com.br/perfil-de-combatente/" . $nickname . "";
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile($Web);
        $xpath = new DomXPath($dom);
        $elements = $xpath->query('//ul[@class="deaths"]/li[2]/div[1]/p[2]');
        libxml_use_internal_errors(true);
        if (!is_null($elements)) {
            foreach ($elements as $element) {
                $nodes = $element->childNodes;
                foreach ($nodes as $node) {

                    echo $node->nodeValue . "<br>";
                }
            }
        }
    }

    public static function SearchHSFromNickname($nickname)
    {
        $Web = "https://combatarms.com.br/perfil-de-combatente/" . $nickname . "";
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile($Web);
        $xpath = new DomXPath($dom);
        $elements = $xpath->query('//ul[@class="deaths"]/li[3]/div[1]/p[2]');
        libxml_use_internal_errors(true);
        if (!is_null($elements)) {
            foreach ($elements as $element) {
                $nodes = $element->childNodes;
                foreach ($nodes as $node) {

                    echo $node->nodeValue . "<br>";
                }
            }
        }
    }

    public static function SearchCreatedInFromNickname($nickname)
    {
        $Web = "https://combatarms.com.br/perfil-de-combatente/" . $nickname . "";
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile($Web);
        $xpath = new DomXPath($dom);
        $elements = $xpath->query('//dl[@class="status"]/div[4]/dd[1]');
        libxml_use_internal_errors(true);
        if (!is_null($elements)) {
            foreach ($elements as $element) {
                $nodes = $element->childNodes;
                foreach ($nodes as $node) {

                    echo $node->nodeValue . "<br>";
                }
            }
        }
    }

    public static function SearchBanishmentFromNickname($nickname)
    {
        $Web = "https://combatarms.com.br/punidos?search%5BdatesPunishment%5D=&search%5BnameCharacter%5D=" . $nickname . "&search.infraction=&search%5BperiodDates%5D=";
        $dom = new DOMDocument();
        $dom->loadHTMLFile($Web);
        $xpath = new DomXPath($dom);
        $elements = $xpath->query('//table[@class="tabelas-equipamentos"]/tbody/tr[3]/td[2]');

        // Caso não consiga executar a query (Não encontrou os dados requisitados), ele retorna que não foi banida.
        if ($elements->length == 0)
            echo "Não";

        if (!is_null($elements)) {
            foreach ($elements as $element) {
                if ($element->textContent == $nickname)
                    echo "Sim";
                else
                    echo "Não";
            }
        }
    }
}
