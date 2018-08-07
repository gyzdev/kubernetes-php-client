<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * ResourceQuotaStatus defines the enforced hard limits and observed use.
 */
class ResourceQuotaStatus extends \Kubernetes\AbstractModel
{

    /**
     * Hard is the set of enforced hard limits for each named resource. More info:
     * https://git.k8s.io/community/contributors/design-proposals/admission_control_resource_quota.md
     *
     * @var object
     */
    public $hard = null;

    /**
     * Used is the current observed total usage of the resource in the namespace.
     *
     * @var object
     */
    public $used = null;


}

