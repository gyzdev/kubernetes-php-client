<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ReplicaSetList as ReplicaSetList;
use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ReplicaSet as TheReplicaSet;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ReplicaSet extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ReplicaSet
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
     * @return ReplicaSetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * create a ReplicaSet
     *
     * @param $namespace
     * @param TheReplicaSet $Model
     * @return TheReplicaSet|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * delete collection of ReplicaSet
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionNamespacedReplicaSet'
        );
    }

    /**
     * read the specified ReplicaSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheReplicaSet|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * replace the specified ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @param TheReplicaSet $Model
     * @return TheReplicaSet|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * delete a ReplicaSet
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
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * partially update the specified ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheReplicaSet|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * read status of the specified ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @return TheReplicaSet|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        		]
        	)
        	, 'readExtensionsV1beta1NamespacedReplicaSetStatus'
        );
    }

    /**
     * replace status of the specified ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @param TheReplicaSet $Model
     * @return TheReplicaSet|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Extensions\V1beta1\ReplicaSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1NamespacedReplicaSetStatus'
        );
    }

    /**
     * partially update status of the specified ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheReplicaSet|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/namespaces/{$namespace}/replicasets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1NamespacedReplicaSetStatus'
        );
    }

    /**
     * list or watch objects of kind ReplicaSet
     *
     * @return ReplicaSetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/replicasets"
        		,[
        		]
        	)
        	, 'listExtensionsV1beta1ReplicaSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/replicasets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedReplicaSetList'
        );
    }

    /**
     * watch changes to an object of kind ReplicaSet
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/namespaces/{$namespace}/replicasets/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1NamespacedReplicaSet'
        );
    }

    /**
     * watch individual changes to a list of ReplicaSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/replicasets"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1ReplicaSetListForAllNamespaces'
        );
    }


}

