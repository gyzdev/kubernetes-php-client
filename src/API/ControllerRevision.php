<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\ControllerRevisionList as ControllerRevisionList;
use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\ControllerRevision as TheControllerRevision;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ControllerRevision extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ControllerRevision
     *
     * @return ControllerRevisionList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/controllerrevisions"
        		,[
        		]
        	)
        	, 'listAppsV1beta1ControllerRevisionForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind ControllerRevision
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
     * @return ControllerRevisionList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * create a ControllerRevision
     *
     * @param $namespace
     * @param TheControllerRevision $Model
     * @return TheControllerRevision|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * delete collection of ControllerRevision
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
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1CollectionNamespacedControllerRevision'
        );
    }

    /**
     * read the specified ControllerRevision
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return TheControllerRevision|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * replace the specified ControllerRevision
     *
     * @param $namespace
     * @param $name
     * @param TheControllerRevision $Model
     * @return TheControllerRevision|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Apps\V1beta1\ControllerRevision $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * delete a ControllerRevision
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
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * partially update the specified ControllerRevision
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return TheControllerRevision|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/apps/v1beta1/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAppsV1beta1NamespacedControllerRevision'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1ControllerRevisionListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ControllerRevision
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/controllerrevisions"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedControllerRevisionList'
        );
    }

    /**
     * watch changes to an object of kind ControllerRevision
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/apps/v1beta1/watch/namespaces/{$namespace}/controllerrevisions/{$name}"
        		,[
        		]
        	)
        	, 'watchAppsV1beta1NamespacedControllerRevision'
        );
    }


}

