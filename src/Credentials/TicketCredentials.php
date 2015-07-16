<?php

namespace Dragooon\Oz\Credentials;

use Dragooon\Hawk\Credentials\Credentials;
use Dragooon\Oz\Ticket\TicketInterface;

class TicketCredentials extends Credentials implements TicketCredentialsInterface
{
    protected $ticket;

    /**
     * Constructor, constructs a Ticket credentials object
     *
     * @param TicketInterface $ticket
     * @param string $key
     * @param string $algo
     * @param string $id
     */
    public function __construct(TicketInterface $ticket, $key, $algo, $id)
    {
        $this->ticket = $ticket;
        parent::__construct($key, $algo, $id);
    }

    /**
     * {@inheritdoc}
     */
    public function ticket()
    {
        return $this->ticket;
    }
}