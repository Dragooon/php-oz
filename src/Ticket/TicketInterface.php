<?php

namespace Dragooon\Oz\Ticket;

interface TicketInterface
{
    /**
     * Application ID for this ticket
     *
     * @return string
     */
    public function appId();

    /**
     * Returns the timestamp this ticket expires
     *
     * @return int
     */
    public function expires();

    /**
     * Returns the scope of this ticket
     *
     * @return array
     */
    public function scope();

    /**
     * Returns special application data associated with this ticket
     *
     * @return array
     */
    public function ext();

    /**
     * Returns the grant's ID
     *
     * @return string
     */
    public function grantId();

    /**
     * Returns the user's ID
     *
     * @return string
     */
    public function userId();

    /**
     * Returns the ID of delegating party
     *
     * @return string
     */
    public function dlg();
}