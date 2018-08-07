<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * PersistentVolumeClaimStatus is the current status of a persistent volume claim.
 */
class PersistentVolumeClaimStatus extends \Kubernetes\AbstractModel
{

    /**
     * AccessModes contains the actual access modes the volume backing the PVC has.
     * More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @var string[]
     */
    public $accessModes = null;

    /**
     * Represents the actual resources of the underlying volume.
     *
     * @var object
     */
    public $capacity = null;

    /**
     * Phase represents the current phase of PersistentVolumeClaim.
     *
     * @var string
     */
    public $phase = null;


}

