<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents an ISCSI disk. ISCSI volumes can only be mounted as read/write once.
 * ISCSI volumes support ownership management and SELinux relabeling.
 */
class ISCSIVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * whether support iSCSI Discovery CHAP authentication
     *
     * @var boolean
     */
    public $chapAuthDiscovery = null;

    /**
     * whether support iSCSI Session CHAP authentication
     *
     * @var boolean
     */
    public $chapAuthSession = null;

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the
     * filesystem type is supported by the host operating system. Examples: "ext4",
     * "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#iscsi
     *
     * @var string
     */
    public $fsType = null;

    /**
     * Custom iSCSI initiator name. If initiatorName is specified with iscsiInterface
     * simultaneously, new iSCSI interface <target portal>:<volume name> will be
     * created for the connection.
     *
     * @var string
     */
    public $initiatorName = null;

    /**
     * Target iSCSI Qualified Name.
     *
     * @var string
     */
    public $iqn = null;

    /**
     * Optional: Defaults to 'default' (tcp). iSCSI interface name that uses an iSCSI
     * transport.
     *
     * @var string
     */
    public $iscsiInterface = null;

    /**
     * iSCSI target lun number.
     *
     * @var integer
     */
    public $lun = null;

    /**
     * iSCSI target portal List. The portal is either an IP or ip_addr:port if the port
     * is other than default (typically TCP ports 860 and 3260).
     *
     * @var string[]
     */
    public $portals = null;

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to
     * false.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * CHAP secret for iSCSI target and initiator authentication
     *
     * @var LocalObjectReference
     */
    public $secretRef = null;

    /**
     * iSCSI target portal. The portal is either an IP or ip_addr:port if the port is
     * other than default (typically TCP ports 860 and 3260).
     *
     * @var string
     */
    public $targetPortal = null;


}

