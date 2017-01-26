<?php

/**
 * Class MainController
 * Resolves all requests from user's route [http://localhost/{route}/action/....]
 * Runs the {route}() method
 */
class MainController
{

    /** @var $smarty Smarty */
    private $smarty;

    public function __construct()
    {
        global $smarty;
        $this->smarty = $smarty;
    }

    /**
     * Shows the home page
     */
    public function home()
    {
        $this->showHTML();
    }

    /**
     * Shows the announcements page
     */
    public function announcements()
    {
        $this->showHTML();
    }

    /**
     * Shows the program page
     */
    public function program()
    {
        $this->showHTML();
    }

    /**
     * Shows the contacts page
     */
    public function contacts()
    {
        $this->showHTML();
    }

    /**
     * Shows the photos page
     */
    public function photos()
    {
        $this->showHTML();
    }

    /**
     * Shows the registration page
     */
    public function registration()
    {
        $this->showHTML();
    }

    /**
     * Shows the local info page
     */
    public function info()
    {
        $this->showHTML();
    }

    /**
     * Shows 404 page if request is invalid
     */
    public function not_found()
    {
        $this->showHTML();
    }

    /**
     * Builds template filename from called method name
     * if method name is "info", method will try to load /views/info.tpl
     * file.
     */
    private function showHTML()
    {
        $template_name = debug_backtrace()[1]['function'].".tpl";
        $this->smarty->display($template_name);
    }
}