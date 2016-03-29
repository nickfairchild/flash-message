<?php
namespace Nick\Flash;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore
{
    private $session;
    
    public function __construct(Store $session)
    {
        $this->session = $session;
    }
    /**
     * Flash a message to the session
     *
     * @param $name
     * @param $data
     */
    public function flash($name, $data)
    {
        $this->session->flash($name, $data);
    }
}