<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * EventSource contains information for an event.
 */
class EventSource extends \Kubernetes\AbstractModel
{

    /**
     * Component from which the event is generated.
     *
     * @var string
     */
    public $component = null;

    /**
     * Node name on which the event is generated.
     *
     * @var string
     */
    public $host = null;


}

