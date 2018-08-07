<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Storage\V1beta1;

/**
 * StorageClass describes the parameters for a class of storage for which
 * PersistentVolumes can be dynamically provisioned.
 *
 * StorageClasses are non-namespaced; the name of the storage class according to
 * etcd is in ObjectMeta.Name.
 */
class StorageClass extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'storage.k8s.io/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'StorageClass';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Parameters holds the parameters for the provisioner that should create volumes
     * of this storage class.
     *
     * @var object
     */
    public $parameters = null;

    /**
     * Provisioner indicates the type of the provisioner.
     *
     * @var string
     */
    public $provisioner = null;


}

