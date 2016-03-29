<?php
namespace Nick\Flash;

class FlashMessage
{
    private $session;

    /**
     * FlashMessage constructor.
     *
     * @param \Nick\Flash\SessionStore $session
     */
    public function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param $message
     *
     * @return $this
     */
    public function info($message)
    {
        $this->message($message, 'info');

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param $message
     *
     * @return $this
     */
    public function success($message)
    {
        $this->message($message, 'success');

        return $this;
    }

    /**
     * Flash an error message.
     *
     * @param $message
     *
     * @return $this
     */
    public function error($message)
    {
        $this->message($message, 'danger');

        return $this;
    }

    /**
     * Flash an overlay modal.
     *
     * @param        $message
     * @param string $title
     * @param string $level
     *
     * @return $this
     */
    public function overlay($message, $title = 'Notice', $level = 'info')
    {
        $this->message($message, $level);

        $this->session->flash('flash_message.overlay', true);
        $this->session->flash('flash_message.title', $title);

        return $this;
    }

    /**
     * Flash a general message.
     *
     * @param        $message
     * @param string $level
     *
     * @return $this
     */
    public function message($message, $level = 'info')
    {
        $this->session->flash('flash_message.message', $message);
        $this->session->flash('flash_message.level', $level);

        return $this;
    }
}