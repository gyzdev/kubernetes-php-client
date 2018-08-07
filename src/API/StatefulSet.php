<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\StatefulSetList as StatefulSetList;
use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\StatefulSet as TheStatefulSet;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class StatefulSet extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind StatefulSet
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
     * @return StatefulSetList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * create a StatefulSet
     *
     * @param $namespace
     * @param TheStatefulSet $Model
     * @return TheStatefulSet|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * delete collection of StatefulSet
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
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1CollectionNamespacedStatefulSet'
        );
    }

    /**
     * read the specified StatefulSet
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheStatefulSet|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * replace the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @param TheStatefulSet $Model
     * @return TheStatefulSet|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * delete a StatefulSet
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
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * partially update the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheStatefulSet|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * read status of the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @return TheStatefulSet|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        		]
        	)
        	, 'readAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * replace status of the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @param TheStatefulSet $Model
     * @return TheStatefulSet|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\StatefulSet $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * partially update status of the specified StatefulSet
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheStatefulSet|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/statefulsets/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedStatefulSetStatus'
        );
    }

    /**
     * list or watch objects of kind StatefulSet
     *
     * @return StatefulSetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/statefulsets"
        		,[
        		]
        	)
        	, 'listAppsV1beta1StatefulSetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedStatefulSetList'
        );
    }

    /**
     * watch changes to an object of kind StatefulSet
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/statefulsets/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedStatefulSet'
        );
    }

    /**
     * watch individual changes to a list of StatefulSet
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/statefulsets"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1StatefulSetListForAllNamespaces'
        );
    }


}

