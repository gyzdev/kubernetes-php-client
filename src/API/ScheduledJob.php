<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJobList as CronJobList;
use \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob as CronJob;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ScheduledJob extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ScheduledJob
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
     * @return CronJobList|mixed
     */
    public function list($namespace = 'default', array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listBatchV2alpha1NamespacedScheduledJob'
        );
    }

    /**
     * create a ScheduledJob
     *
     * @param $namespace
     * @param CronJob $Model
     * @return CronJob|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createBatchV2alpha1NamespacedScheduledJob'
        );
    }

    /**
     * delete collection of ScheduledJob
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
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV2alpha1CollectionNamespacedScheduledJob'
        );
    }

    /**
     * read the specified ScheduledJob
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $namespace
     * @param $name
     * @param array $queries
     * @return CronJob|mixed
     */
    public function read($namespace = 'default', $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readBatchV2alpha1NamespacedScheduledJob'
        );
    }

    /**
     * replace the specified ScheduledJob
     *
     * @param $namespace
     * @param $name
     * @param CronJob $Model
     * @return CronJob|mixed
     */
    public function replace($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceBatchV2alpha1NamespacedScheduledJob'
        );
    }

    /**
     * delete a ScheduledJob
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
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteBatchV2alpha1NamespacedScheduledJob'
        );
    }

    /**
     * partially update the specified ScheduledJob
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return CronJob|mixed
     */
    public function patch($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchBatchV2alpha1NamespacedScheduledJob'
        );
    }

    /**
     * read status of the specified ScheduledJob
     *
     * @param $namespace
     * @param $name
     * @return CronJob|mixed
     */
    public function readStatus($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs/{$name}/status"
        		,[
        		]
        	)
        	, 'readBatchV2alpha1NamespacedScheduledJobStatus'
        );
    }

    /**
     * replace status of the specified ScheduledJob
     *
     * @param $namespace
     * @param $name
     * @param CronJob $Model
     * @return CronJob|mixed
     */
    public function replaceStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Kubernetes\Pkg\Apis\Batch\V2alpha1\CronJob $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceBatchV2alpha1NamespacedScheduledJobStatus'
        );
    }

    /**
     * partially update status of the specified ScheduledJob
     *
     * @param $namespace
     * @param $name
     * @param Patch $Model
     * @return CronJob|mixed
     */
    public function patchStatus($namespace = 'default', $name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/batch/v2alpha1/namespaces/{$namespace}/scheduledjobs/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchBatchV2alpha1NamespacedScheduledJobStatus'
        );
    }

    /**
     * list or watch objects of kind ScheduledJob
     *
     * @return CronJobList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/scheduledjobs"
        		,[
        		]
        	)
        	, 'listBatchV2alpha1ScheduledJobForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ScheduledJob
     *
     * @param $namespace
     * @return WatchEvent|mixed
     */
    public function watchList($namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/namespaces/{$namespace}/scheduledjobs"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1NamespacedScheduledJobList'
        );
    }

    /**
     * watch changes to an object of kind ScheduledJob
     *
     * @param $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/namespaces/{$namespace}/scheduledjobs/{$name}"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1NamespacedScheduledJob'
        );
    }

    /**
     * watch individual changes to a list of ScheduledJob
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/batch/v2alpha1/watch/scheduledjobs"
        		,[
        		]
        	)
        	, 'watchBatchV2alpha1ScheduledJobListForAllNamespaces'
        );
    }


}

