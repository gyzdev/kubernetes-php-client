<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\DaemonSetList as DaemonSetList;
use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\DaemonSet as TheDaemonSet;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class DaemonSet extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind DaemonSet
     *
     * @return DaemonSetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/daemonsets"
        		,[
        		]
        	)
        	, 'listExtensionsV1beta1DaemonSetForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind DaemonSet
     *
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return DaemonSetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * create a DaemonSet
     *
     * @param $namespace
     * @param TheDaemonSet $Model
     * @return TheDaemonSet|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * delete collection of DaemonSet
     *
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionNamespacedDaemonSet'
        );
    }

    /**
     * read the specified DaemonSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheDaemonSet|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * replace the specified DaemonSet
     *
     * @param $namespace
     * @param $name
     * @param TheDaemonSet $Model
     * @return TheDaemonSet|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * delete a DaemonSet
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * partially update the specified DaemonSet
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSet|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedDaemonSet'
        );
    }

    /**
     * read status of the specified DaemonSet
     *
     * @param $namespace
     * @param $name
     * @return TheDaemonSet|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedDaemonSetStatus'
        );
    }

    /**
     * replace status of the specified DaemonSet
     *
     * @param $namespace
     * @param $name
     * @param TheDaemonSet $Model
     * @return TheDaemonSet|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\DaemonSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedDaemonSetStatus'
        );
    }

    /**
     * partially update status of the specified DaemonSet
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheDaemonSet|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/daemonsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedDaemonSetStatus'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/daemonsets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1DaemonSetListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of DaemonSet
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/daemonsets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedDaemonSetList'
        );
    }

    /**
     * watch changes to an object of kind DaemonSet
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/daemonsets/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedDaemonSet'
        );
    }


}

