<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * Represents a host path mapped into a pod. Host path volumes do not support
 * ownership management or SELinux relabeling.
 */
class HostPathVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Path of the directory on the host. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @var string
     */
    public $path = null;


}

