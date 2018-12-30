<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ResourceRequirements describes the compute resource requirements.
 */
class ResourceRequirements extends \Kubernetes\AbstractModel
{

    /**
     * Limits describes the maximum amount of compute resources allowed. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-compute-resources-container/
     *
     * @var object
     */
    public $limits = null;

    /**
     * Requests describes the minimum amount of compute resources required. If Requests
     * is omitted for a container, it defaults to Limits if that is explicitly
     * specified, otherwise to an implementation-defined value. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-compute-resources-container/
     *
     * @var object
     */
    public $requests = null;


}

