<?php

namespace Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Api\V1;

/**
 * DownwardAPIVolumeSource represents a volume containing downward API info.
 * Downward API volumes support ownership management and SELinux relabeling.
 */
class DownwardAPIVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Optional: mode bits to use on created files by default. Must be a value between
     * 0 and 0777. Defaults to 0644. Directories within the path are not affected by
     * this setting. This might be in conflict with other options that affect the file
     * mode, like fsGroup, and the result can be other mode bits set.
     *
     * @var integer
     */
    public $defaultMode = null;

    /**
     * Items is a list of downward API volume file
     *
     * @var DownwardAPIVolumeFile[]
     */
    public $items = null;


}

