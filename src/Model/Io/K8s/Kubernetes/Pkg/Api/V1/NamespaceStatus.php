<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * NamespaceStatus is information about the current status of a Namespace.
 */
class NamespaceStatus extends \Kubernetes\AbstractModel
{

    /**
     * Phase is the current lifecycle phase of the namespace. More info:
     * https://git.k8s.io/community/contributors/design-proposals/namespaces.md#phases
     *
     * @var string
     */
    public $phase = null;


}

