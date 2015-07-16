<?php

namespace Dragooon\Oz\Credentials;

use Dragooon\Hawk\Credentials\CredentialsInterface;
use Dragooon\Oz\Ticket\TicketInterface;

interface TicketCredentialsInterface extends CredentialsInterface
{
    /**
     * Return the ticket this credentials object belongs to
     *
     * @return TicketInterface
     */
    public function ticket();
}