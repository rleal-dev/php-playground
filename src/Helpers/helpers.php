<?php

use Rleal\Playground\Collections\Collection;

if (! function_exists('dd')) {
    function dd(...$data): void
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        exit();
    }
}

if (! function_exists('array_to_xml')) {
    function array_to_xml(array $array, ?string $rootElement = null, $xml = null): string|bool
    {
        $_xml = $xml ?? new SimpleXMLElement($rootElement ?? '<root/>');

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                array_to_xml($value, $key, $_xml->addChild($key));

                continue;
            }

            $_xml->addChild($key, $value);
        }

        return $_xml->asXML();
    }
}

if (! function_exists('collect')) {
    function collect(array $array): Collection
    {
        return new Collection($array);
    }
}
