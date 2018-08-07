<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1;

/**
 * A ThirdPartyResource is a generic representation of a resource, it is used by
 * add-ons and plugins to add new resource types to the API.  It consists of one or
 * more Versions of the api.
 */
class ThirdPartyResource extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'extensions/v1beta1';

    /**
     * Description is the description of this object.
     *
     * @var string
     */
    public $description = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ThirdPartyResource';

    /**
     * Standard object metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Versions are versions for this third party object
     *
     * @var APIVersion[]
     */
    public $versions = null;


}

