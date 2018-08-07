<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * AttachedVolume describes a volume attached to a node
 */
class AttachedVolume extends \Kubernetes\AbstractModel
{

    /**
     * DevicePath represents the device path where the volume should be available
     *
     * @var string
     */
    public $devicePath = null;

    /**
     * Name of the attached volume
     *
     * @var string
     */
    public $name = null;


}

