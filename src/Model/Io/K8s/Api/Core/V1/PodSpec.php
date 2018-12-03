<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PodSpec is a description of a pod.
 */
class PodSpec extends \Kubernetes\AbstractModel
{

    /**
     * Optional duration in seconds the pod may be active on the node relative to
     * StartTime before the system will actively try to mark it failed and kill
     * associated containers. Value must be a positive integer.
     *
     * @var integer
     */
    public $activeDeadlineSeconds = null;

    /**
     * If specified, the pod's scheduling constraints
     *
     * @var Affinity
     */
    public $affinity = null;

    /**
     * AutomountServiceAccountToken indicates whether a service account token should be
     * automatically mounted.
     *
     * @var boolean
     */
    public $automountServiceAccountToken = null;

    /**
     * List of containers belonging to the pod. Containers cannot currently be added or
     * removed. There must be at least one container in a Pod. Cannot be updated.
     *
     * @var Container[]
     */
    public $containers = null;

    /**
     * Specifies the DNS parameters of a pod. Parameters specified here will be merged
     * to the generated DNS configuration based on DNSPolicy.
     *
     * @var PodDNSConfig
     */
    public $dnsConfig = null;

    /**
     * Set DNS policy for the pod. Defaults to "ClusterFirst". Valid values are
     * 'ClusterFirstWithHostNet', 'ClusterFirst', 'Default' or 'None'. DNS parameters
     * given in DNSConfig will be merged with the policy selected with DNSPolicy. To
     * have DNS options set along with hostNetwork, you have to specify DNS policy
     * explicitly to 'ClusterFirstWithHostNet'.
     *
     * @var string
     */
    public $dnsPolicy = null;

    /**
     * HostAliases is an optional list of hosts and IPs that will be injected into the
     * pod's hosts file if specified. This is only valid for non-hostNetwork pods.
     *
     * @var HostAlias[]
     */
    public $hostAliases = null;

    /**
     * Use the host's ipc namespace. Optional: Default to false.
     *
     * @var boolean
     */
    public $hostIPC = null;

    /**
     * Host networking requested for this pod. Use the host's network namespace. If
     * this option is set, the ports that will be used must be specified. Default to
     * false.
     *
     * @var boolean
     */
    public $hostNetwork = null;

    /**
     * Use the host's pid namespace. Optional: Default to false.
     *
     * @var boolean
     */
    public $hostPID = null;

    /**
     * Specifies the hostname of the Pod If not specified, the pod's hostname will be
     * set to a system-defined value.
     *
     * @var string
     */
    public $hostname = null;

    /**
     * ImagePullSecrets is an optional list of references to secrets in the same
     * namespace to use for pulling any of the images used by this PodSpec. If
     * specified, these secrets will be passed to individual puller implementations for
     * them to use. For example, in the case of docker, only DockerConfig type secrets
     * are honored. More info:
     * https://kubernetes.io/docs/concepts/containers/images#specifying-imagepullsecrets-on-a-pod
     *
     * @var LocalObjectReference[]
     */
    public $imagePullSecrets = null;

    /**
     * List of initialization containers belonging to the pod. Init containers are
     * executed in order prior to containers being started. If any init container
     * fails, the pod is considered to have failed and is handled according to its
     * restartPolicy. The name for an init container or normal container must be unique
     * among all containers. Init containers may not have Lifecycle actions, Readiness
     * probes, or Liveness probes. The resourceRequirements of an init container are
     * taken into account during scheduling by finding the highest request/limit for
     * each resource type, and then using the max of of that value or the sum of the
     * normal containers. Limits are applied to init containers in a similar fashion.
     * Init containers cannot currently be added or removed. Cannot be updated. More
     * info: https://kubernetes.io/docs/concepts/workloads/pods/init-containers/
     *
     * @var Container[]
     */
    public $initContainers = null;

    /**
     * NodeName is a request to schedule this pod onto a specific node. If it is
     * non-empty, the scheduler simply schedules this pod onto that node, assuming that
     * it fits resource requirements.
     *
     * @var string
     */
    public $nodeName = null;

    /**
     * NodeSelector is a selector which must be true for the pod to fit on a node.
     * Selector which must match a node's labels for the pod to be scheduled on that
     * node. More info:
     * https://kubernetes.io/docs/concepts/configuration/assign-pod-node/
     *
     * @var object
     */
    public $nodeSelector = null;

    /**
     * The priority value. Various system components use this field to find the
     * priority of the pod. When Priority Admission Controller is enabled, it prevents
     * users from setting this field. The admission controller populates this field
     * from PriorityClassName. The higher the value, the higher the priority.
     *
     * @var integer
     */
    public $priority = null;

    /**
     * If specified, indicates the pod's priority. "system-node-critical" and
     * "system-cluster-critical" are two special keywords which indicate the highest
     * priorities with the former being the highest priority. Any other name must be
     * defined by creating a PriorityClass object with that name. If not specified, the
     * pod priority will be default or zero if there is no default.
     *
     * @var string
     */
    public $priorityClassName = null;

    /**
     * Restart policy for all containers within the pod. One of Always, OnFailure,
     * Never. Default to Always. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle/#restart-policy
     *
     * @var string
     */
    public $restartPolicy = null;

    /**
     * If specified, the pod will be dispatched by specified scheduler. If not
     * specified, the pod will be dispatched by default scheduler.
     *
     * @var string
     */
    public $schedulerName = null;

    /**
     * SecurityContext holds pod-level security attributes and common container
     * settings. Optional: Defaults to empty.  See type description for default values
     * of each field.
     *
     * @var PodSecurityContext
     */
    public $securityContext = null;

    /**
     * DeprecatedServiceAccount is a depreciated alias for ServiceAccountName.
     * Deprecated: Use serviceAccountName instead.
     *
     * @var string
     */
    public $serviceAccount = null;

    /**
     * ServiceAccountName is the name of the ServiceAccount to use to run this pod.
     * More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/configure-service-account/
     *
     * @var string
     */
    public $serviceAccountName = null;

    /**
     * Share a single process namespace between all of the containers in a pod. When
     * this is set containers will be able to view and signal processes from other
     * containers in the same pod, and the first process in each container will not be
     * assigned PID 1. HostPID and ShareProcessNamespace cannot both be set. Optional:
     * Default to false. This field is alpha-level and is honored only by servers that
     * enable the PodShareProcessNamespace feature.
     *
     * @var boolean
     */
    public $shareProcessNamespace = null;

    /**
     * If specified, the fully qualified Pod hostname will be
     * "<hostname>.<subdomain>.<pod namespace>.svc.<cluster domain>". If not specified,
     * the pod will not have a domainname at all.
     *
     * @var string
     */
    public $subdomain = null;

    /**
     * Optional duration in seconds the pod needs to terminate gracefully. May be
     * decreased in delete request. Value must be non-negative integer. The value zero
     * indicates delete immediately. If this value is nil, the default grace period
     * will be used instead. The grace period is the duration in seconds after the
     * processes running in the pod are sent a termination signal and the time when the
     * processes are forcibly halted with a kill signal. Set this value longer than the
     * expected cleanup time for your process. Defaults to 30 seconds.
     *
     * @var integer
     */
    public $terminationGracePeriodSeconds = null;

    /**
     * If specified, the pod's tolerations.
     *
     * @var Toleration[]
     */
    public $tolerations = null;

    /**
     * List of volumes that can be mounted by containers belonging to the pod. More
     * info: https://kubernetes.io/docs/concepts/storage/volumes
     *
     * @var Volume[]
     */
    public $volumes = null;


}
