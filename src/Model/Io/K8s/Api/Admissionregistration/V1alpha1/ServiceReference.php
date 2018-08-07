<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends \Kubernetes\AbstractModel
{

    /**
     * Name is the name of the service Required
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace is the namespace of the service Required
     *
     * @var string
     */
    public $namespace = null;


}

