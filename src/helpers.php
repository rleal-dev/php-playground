<?php

if (! function_exists('dd')) {
    function dd($data): void
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        exit();
    }
}

if (! function_exists('array_to_xml')) {
    function array_to_xml(array $array, ?string $rootElement = null): string|bool
    {
        $xml = new SimpleXMLElement($rootElement ?? '<root/>');

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                array_to_xml($value, $key, $xml->addChild($key));

                continue;
            }

            $xml->addChild($key, $value);
        }

        return $xml->asXML();
    }
}
