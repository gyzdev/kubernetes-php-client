<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * NamespaceSpec describes the attributes on a Namespace.
 */
class NamespaceSpec extends \Kubernetes\AbstractModel
{

    /**
     * Finalizers is an opaque list of values that must be empty to permanently remove
     * object from storage. More info:
     * https://git.k8s.io/community/contributors/design-proposals/namespaces.md#finalizers
     *
     * @var string[]
     */
    public $finalizers = null;


}

