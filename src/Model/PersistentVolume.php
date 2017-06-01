<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


use Kubernetes\Model\Tag\Version;

class PersistentVolume extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Version::V1;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'PersistentVolume';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var PersistentVolumeSpec
     * Spec defines the specification of the desired behavior of the ReplicaSet. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
     */
    public $spec;

    /**
     * @var PersistentVolumeStatus
     * Status is the most recently observed status of the ReplicaSet. This data may be out of date by some window of
     * time. Populated by the system. Read-only. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
     */
    public $status;

    /**
     * @param ObjectMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $this->_createPropertyValue($metadata, ObjectMeta::class, false);

        return $this;
    }

    /**
     * @param PersistentVolumeSpec $spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        $this->spec = $this->_createPropertyValue($spec, PersistentVolumeSpec::class, false);

        return $this;
    }

    /**
     * @param PersistentVolumeStatus $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $this->_createPropertyValue($status, PersistentVolumeStatus::class, false);

        return $this;
    }

}