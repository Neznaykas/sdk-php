<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace GPBMetadata\Temporal\Api\Workflowservice\V1;

class RequestResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\Enums\V1\Workflow::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\PBNamespace::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\FailedCause::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Common::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Query::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Reset::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\TaskQueue::initOnce();
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Filter\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\PBNamespace\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Query\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Replication\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Version\V1\Message::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Dependencies\Gogoproto\Gogo::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
6temporal/api/workflowservice/v1/request_response.prototemporal.api.workflowservice.v1%temporal/api/enums/v1/namespace.proto(temporal/api/enums/v1/failed_cause.proto"temporal/api/enums/v1/common.proto!temporal/api/enums/v1/query.proto!temporal/api/enums/v1/reset.proto&temporal/api/enums/v1/task_queue.proto$temporal/api/common/v1/message.proto%temporal/api/history/v1/message.proto&temporal/api/workflow/v1/message.proto%temporal/api/command/v1/message.proto%temporal/api/failure/v1/message.proto$temporal/api/filter/v1/message.proto\'temporal/api/namespace/v1/message.proto#temporal/api/query/v1/message.proto)temporal/api/replication/v1/message.proto\'temporal/api/taskqueue/v1/message.proto%temporal/api/version/v1/message.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto!dependencies/gogoproto/gogo.proto"�
RegisterNamespaceRequest
	namespace (	
description (	
owner_email (	L
#workflow_execution_retention_period (2.google.protobuf.DurationB��G
clusters (25.temporal.api.replication.v1.ClusterReplicationConfig
active_cluster_name (	Q
data (2C.temporal.api.workflowservice.v1.RegisterNamespaceRequest.DataEntry
security_token (	
is_global_namespace	 (D
history_archival_state
 (2$.temporal.api.enums.v1.ArchivalState
history_archival_uri (	G
visibility_archival_state (2$.temporal.api.enums.v1.ArchivalState
visibility_archival_uri
	DataEntry
key (	
value (	:8"
RegisterNamespaceResponse"C
ListNamespacesRequest
	page_size (
next_page_token ("�
ListNamespacesResponseN

namespaces (2:.temporal.api.workflowservice.v1.DescribeNamespaceResponse
next_page_token ("9
DescribeNamespaceRequest
	namespace (	

id (	"�
DescribeNamespaceResponse@
namespace_info (2(.temporal.api.namespace.v1.NamespaceInfo:
config (2*.temporal.api.namespace.v1.NamespaceConfigS
replication_config (27.temporal.api.replication.v1.NamespaceReplicationConfig
failover_version (
is_global_namespace ("�
UpdateNamespaceRequest
	namespace (	C
update_info (2..temporal.api.namespace.v1.UpdateNamespaceInfo:
config (2*.temporal.api.namespace.v1.NamespaceConfigS
replication_config (27.temporal.api.replication.v1.NamespaceReplicationConfig
security_token (	
delete_bad_binary (	
promote_namespace ("�
UpdateNamespaceResponse@
namespace_info (2(.temporal.api.namespace.v1.NamespaceInfo:
config (2*.temporal.api.namespace.v1.NamespaceConfigS
replication_config (27.temporal.api.replication.v1.NamespaceReplicationConfig
failover_version (
is_global_namespace ("F
DeprecateNamespaceRequest
	namespace (	
security_token (	"
DeprecateNamespaceResponse"�
StartWorkflowExecutionRequest
	namespace (	
workflow_id (	;


task_queue (2$.temporal.api.taskqueue.v1.TaskQueue/
input (2 .temporal.api.common.v1.PayloadsC
workflow_execution_timeout (2.google.protobuf.DurationB��=
workflow_run_timeout (2.google.protobuf.DurationB��>
workflow_task_timeout (2.google.protobuf.DurationB��
identity	 (	

request_id
 (	N
workflow_id_reuse_policy (2,.temporal.api.enums.v1.WorkflowIdReusePolicy9
retry_policy (2#.temporal.api.common.v1.RetryPolicy

memo (2.temporal.api.common.v1.MemoC
search_attributes (2(.temporal.api.common.v1.SearchAttributes.
header (2.temporal.api.common.v1.Header"0
StartWorkflowExecutionResponse
run_id (	"�
"GetWorkflowExecutionHistoryRequest
	namespace (	<
	execution (2).temporal.api.common.v1.WorkflowExecution
maximum_page_size (
next_page_token (
wait_new_event (P
history_event_filter_type (2-.temporal.api.enums.v1.HistoryEventFilterType

#GetWorkflowExecutionHistoryResponse1
history (2 .temporal.api.history.v1.History5
raw_history (2 .temporal.api.common.v1.DataBlob
next_page_token (
archived ("�
)GetWorkflowExecutionHistoryReverseRequest
	namespace (	<
	execution (2).temporal.api.common.v1.WorkflowExecution
maximum_page_size (
next_page_token ("x
*GetWorkflowExecutionHistoryReverseResponse1
history (2 .temporal.api.history.v1.History
next_page_token ("�
PollWorkflowTaskQueueRequest
	namespace (	8

task_queue (2$.temporal.api.taskqueue.v1.TaskQueue
identity (	
binary_checksum (	"�
PollWorkflowTaskQueueResponse

task_token (E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

previous_started_event_id (
started_event_id (
attempt (
backlog_count_hint (1
history (2 .temporal.api.history.v1.History
next_page_token	 (3
query
 (2$.temporal.api.query.v1.WorkflowQueryK
workflow_execution_task_queue (2$.temporal.api.taskqueue.v1.TaskQueue8
scheduled_time (2.google.protobuf.TimestampB��6
started_time
queries (2K.temporal.api.workflowservice.v1.PollWorkflowTaskQueueResponse.QueriesEntryT
QueriesEntry
key (	3
value (2$.temporal.api.query.v1.WorkflowQuery:8"�
#RespondWorkflowTaskCompletedRequest

task_token (2
commands (2 .temporal.api.command.v1.Command
identity (	O
sticky_attributes (24.temporal.api.taskqueue.v1.StickyExecutionAttributes 
return_new_workflow_task (&
force_create_new_workflow_task (
binary_checksum (	m

	namespace	 (	_
QueryResultsEntry
key (	9
value (2*.temporal.api.query.v1.WorkflowQueryResult:8"}
$RespondWorkflowTaskCompletedResponseU

 RespondWorkflowTaskFailedRequest

task_token (=
cause (2..temporal.api.enums.v1.WorkflowTaskFailedCause1
failure (2 .temporal.api.failure.v1.Failure
identity (	
binary_checksum (	
	namespace (	"#
!RespondWorkflowTaskFailedResponse"�
PollActivityTaskQueueRequest
	namespace (	8

task_queue (2$.temporal.api.taskqueue.v1.TaskQueue
identity (	I
task_queue_metadata (2,.temporal.api.taskqueue.v1.TaskQueueMetadata"�
PollActivityTaskQueueResponse

task_token (
workflow_namespace (	;

workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

activity_id (	.
header (2.temporal.api.common.v1.Header/
input (2 .temporal.api.common.v1.Payloads;
heartbeat_details	 (2 .temporal.api.common.v1.Payloads8
scheduled_time
 (2.google.protobuf.TimestampB��H
current_attempt_scheduled_time (2.google.protobuf.TimestampB��6
started_time (2.google.protobuf.TimestampB��
attempt
schedule_to_close_timeout (2.google.protobuf.DurationB��?
start_to_close_timeout (2.google.protobuf.DurationB��:
heartbeat_timeout (2.google.protobuf.DurationB��9
retry_policy (2#.temporal.api.common.v1.RetryPolicy"�
"RecordActivityTaskHeartbeatRequest

task_token (1
details (2 .temporal.api.common.v1.Payloads
identity (	
	namespace (	"?
#RecordActivityTaskHeartbeatResponse
cancel_requested ("�
&RecordActivityTaskHeartbeatByIdRequest
	namespace (	
workflow_id (	
run_id (	
activity_id (	1
details (2 .temporal.api.common.v1.Payloads
identity (	"C
\'RecordActivityTaskHeartbeatByIdResponse
cancel_requested ("�
#RespondActivityTaskCompletedRequest

task_token (0
result (2 .temporal.api.common.v1.Payloads
identity (	
	namespace (	"&
$RespondActivityTaskCompletedResponse"�
\'RespondActivityTaskCompletedByIdRequest
	namespace (	
workflow_id (	
run_id (	
activity_id (	0
result (2 .temporal.api.common.v1.Payloads
identity (	"*
(RespondActivityTaskCompletedByIdResponse"�
 RespondActivityTaskFailedRequest

task_token (1
failure (2 .temporal.api.failure.v1.Failure
identity (	
	namespace (	@
last_heartbeat_details (2 .temporal.api.common.v1.Payloads"W
!RespondActivityTaskFailedResponse2
failures (2 .temporal.api.failure.v1.Failure"�
$RespondActivityTaskFailedByIdRequest
	namespace (	
workflow_id (	
run_id (	
activity_id (	1
failure (2 .temporal.api.failure.v1.Failure
identity (	@
last_heartbeat_details (2 .temporal.api.common.v1.Payloads"[
%RespondActivityTaskFailedByIdResponse2
failures (2 .temporal.api.failure.v1.Failure"�
"RespondActivityTaskCanceledRequest

task_token (1
details (2 .temporal.api.common.v1.Payloads
identity (	
	namespace (	"%
#RespondActivityTaskCanceledResponse"�
&RespondActivityTaskCanceledByIdRequest
	namespace (	
workflow_id (	
run_id (	
activity_id (	1
details (2 .temporal.api.common.v1.Payloads
identity (	")
\'RespondActivityTaskCanceledByIdResponse"�
%RequestCancelWorkflowExecutionRequest
	namespace (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
identity (	

request_id (	
first_execution_run_id (	"(
&RequestCancelWorkflowExecutionResponse"�
SignalWorkflowExecutionRequest
	namespace (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
signal_name (	/
input (2 .temporal.api.common.v1.Payloads
identity (	

request_id (	
control (	.
header (2.temporal.api.common.v1.Header"!
SignalWorkflowExecutionResponse"�
\'SignalWithStartWorkflowExecutionRequest
	namespace (	
workflow_id (	;


task_queue (2$.temporal.api.taskqueue.v1.TaskQueue/
input (2 .temporal.api.common.v1.PayloadsC
workflow_execution_timeout (2.google.protobuf.DurationB��=
workflow_run_timeout (2.google.protobuf.DurationB��>
workflow_task_timeout (2.google.protobuf.DurationB��
identity	 (	

request_id
 (	N
workflow_id_reuse_policy (2,.temporal.api.enums.v1.WorkflowIdReusePolicy
signal_name (	6
signal_input
control (	9
retry_policy (2#.temporal.api.common.v1.RetryPolicy

memo (2.temporal.api.common.v1.MemoC
search_attributes (2(.temporal.api.common.v1.SearchAttributes.
header (2.temporal.api.common.v1.Header":
(SignalWithStartWorkflowExecutionResponse
run_id (	"�
ResetWorkflowExecutionRequest
	namespace (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
reason (	%
workflow_task_finish_event_id (

request_id (	C
reset_reapply_type (2\'.temporal.api.enums.v1.ResetReapplyType"0
ResetWorkflowExecutionResponse
run_id (	"�
!TerminateWorkflowExecutionRequest
	namespace (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
reason (	1
details (2 .temporal.api.common.v1.Payloads
identity (	
first_execution_run_id (	"$
"TerminateWorkflowExecutionResponse"�
!ListOpenWorkflowExecutionsRequest
	namespace (	
maximum_page_size (
next_page_token (B
start_time_filter (2\'.temporal.api.filter.v1.StartTimeFilterK
execution_filter (2/.temporal.api.filter.v1.WorkflowExecutionFilterH A
type_filter (2*.temporal.api.filter.v1.WorkflowTypeFilterH B	
filters"�
"ListOpenWorkflowExecutionsResponseC

executions (2/.temporal.api.workflow.v1.WorkflowExecutionInfo
next_page_token ("�
#ListClosedWorkflowExecutionsRequest
	namespace (	
maximum_page_size (
next_page_token (B
start_time_filter (2\'.temporal.api.filter.v1.StartTimeFilterK
execution_filter (2/.temporal.api.filter.v1.WorkflowExecutionFilterH A
type_filter (2*.temporal.api.filter.v1.WorkflowTypeFilterH =

filters"�
$ListClosedWorkflowExecutionsResponseC

executions (2/.temporal.api.workflow.v1.WorkflowExecutionInfo
next_page_token ("m
ListWorkflowExecutionsRequest
	namespace (	
	page_size (
next_page_token (
query (	"~
ListWorkflowExecutionsResponseC

executions (2/.temporal.api.workflow.v1.WorkflowExecutionInfo
next_page_token ("u
%ListArchivedWorkflowExecutionsRequest
	namespace (	
	page_size (
next_page_token (
query (	"�
&ListArchivedWorkflowExecutionsResponseC

executions (2/.temporal.api.workflow.v1.WorkflowExecutionInfo
next_page_token ("m
ScanWorkflowExecutionsRequest
	namespace (	
	page_size (
next_page_token (
query (	"~
ScanWorkflowExecutionsResponseC

executions (2/.temporal.api.workflow.v1.WorkflowExecutionInfo
next_page_token ("B
CountWorkflowExecutionsRequest
	namespace (	
query (	"0
CountWorkflowExecutionsResponse
count ("
GetSearchAttributesRequest"�
GetSearchAttributesResponseT
keys (2F.temporal.api.workflowservice.v1.GetSearchAttributesResponse.KeysEntryT
	KeysEntry
key (	6
value (2\'.temporal.api.enums.v1.IndexedValueType:8"�
 RespondQueryTaskCompletedRequest

task_token (>
completed_type (2&.temporal.api.enums.v1.QueryResultType6
query_result (2 .temporal.api.common.v1.Payloads

	namespace (	J"#
!RespondQueryTaskCompletedResponse"n
ResetStickyTaskQueueRequest
	namespace (	<
	execution (2).temporal.api.common.v1.WorkflowExecution"
ResetStickyTaskQueueResponse"�
QueryWorkflowRequest
	namespace (	<
	execution (2).temporal.api.common.v1.WorkflowExecution3
query (2$.temporal.api.query.v1.WorkflowQueryK
query_reject_condition (2+.temporal.api.enums.v1.QueryRejectCondition"�
QueryWorkflowResponse6
query_result (2 .temporal.api.common.v1.Payloads<
query_rejected (2$.temporal.api.query.v1.QueryRejected"s
 DescribeWorkflowExecutionRequest
	namespace (	<
	execution (2).temporal.api.common.v1.WorkflowExecution"�
!DescribeWorkflowExecutionResponseK
execution_config (21.temporal.api.workflow.v1.WorkflowExecutionConfigP
workflow_execution_info (2/.temporal.api.workflow.v1.WorkflowExecutionInfoI
pending_activities (2-.temporal.api.workflow.v1.PendingActivityInfoM
pending_children (23.temporal.api.workflow.v1.PendingChildExecutionInfoP
pending_workflow_task (21.temporal.api.workflow.v1.PendingWorkflowTaskInfo"�
DescribeTaskQueueRequest
	namespace (	8

task_queue (2$.temporal.api.taskqueue.v1.TaskQueue=
task_queue_type (2$.temporal.api.enums.v1.TaskQueueType!
include_task_queue_status ("�
DescribeTaskQueueResponse6
pollers (2%.temporal.api.taskqueue.v1.PollerInfoE
task_queue_status (2*.temporal.api.taskqueue.v1.TaskQueueStatus"
GetClusterInfoRequest"�
GetClusterInfoResponseh
supported_clients (2M.temporal.api.workflowservice.v1.GetClusterInfoResponse.SupportedClientsEntry
server_version (	

cluster_id (	:
version_info (2$.temporal.api.version.v1.VersionInfo
cluster_name (	
history_shard_count (
persistence_store (	
visibility_store (	7
SupportedClientsEntry
key (	
value (	:8"
GetSystemInfoRequest"�
GetSystemInfoResponse
server_version (	Y
capabilities (2C.temporal.api.workflowservice.v1.GetSystemInfoResponse.CapabilitiesW
Capabilities
signal_and_query_header (&
internal_error_differentiation ("m
ListTaskQueuePartitionsRequest
	namespace (	8

task_queue (2$.temporal.api.taskqueue.v1.TaskQueue"�
ListTaskQueuePartitionsResponse]
activity_task_queue_partitions (25.temporal.api.taskqueue.v1.TaskQueuePartitionMetadata]
workflow_task_queue_partitions (25.temporal.api.taskqueue.v1.TaskQueuePartitionMetadataB�
"io.temporal.api.workflowservice.v1BRequestResponseProtoPZ5go.temporal.io/api/workflowservice/v1;workflowservice�Temporal.Api.WorkflowService.V1�"Temporal::Api::WorkflowService::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
