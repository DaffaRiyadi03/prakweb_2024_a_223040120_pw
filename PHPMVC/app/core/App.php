<?php

class App
{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); // Menghilangkan slash di akhir URL
            $url = filter_var($url, FILTER_SANITIZE_URL); // Sanitasi URL
            $url = explode('/', $url);
            return $url;
        }
    }
}

?>