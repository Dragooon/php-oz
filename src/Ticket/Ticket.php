<?php

namespace Dragooon\Oz\Ticket;

class Ticket implements TicketInterface
{
    protected $appId;
    protected $expires;
    protected $scope;
    protected $ext;
    protected $grantId;
    protected $userId;
    protected $dlg;

    /**
     * Constructor, constructs the Ticket object
     *
     * @param string $appId
     * @param int $expires
     * @param array $scope
     * @param array $ext
     * @param string $grantId
     * @param string $userId
     * @param string $dlg
     */
    public function __construct($appId, $expires, array $scope, array $ext, $grantId, $userId, $dlg)
    {
        $this->appId = $appId;
        $this->expires = $expires;
        $this->scope = $scope;
        $this->ext = $ext;
        $this->grantId = $grantId;
        $this->userId = $userId;
        $this->dlg = $dlg;
    }

    /**
     * {@inheritdoc}
     */
    public function appId()
    {
        return $this->appId;
    }

    /**
     * {@inheritdoc}
     */
    public function expires()
    {
        return $this->expires;
    }

    /**
     * {@inheritdoc}
     */
    public function scope()
    {
        return $this->scope;
    }

    /**
     * {@inheritdoc}
     */
    public function ext()
    {
        return $this->ext;
    }

    /**
     * {@inheritdoc}
     */
    public function grantId()
    {
        return $this->grantId;
    }

    /**
     * {@inheritdoc}
     */
    public function userId()
    {
        return $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function dlg()
    {
        return $this->dlg;
    }
}