<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

/**
 * ExternalAdmissionHookConfiguration describes the configuration of initializers.
 */
class ExternalAdmissionHookConfiguration extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'admissionregistration.k8s.io/v1alpha1';

    /**
     * ExternalAdmissionHooks is a list of external admission webhooks and the affected
     * resources and operations.
     *
     * @var ExternalAdmissionHook[]
     */
    public $externalAdmissionHooks = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ExternalAdmissionHookConfiguration';

    /**
     * Standard object metadata; More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;


}

