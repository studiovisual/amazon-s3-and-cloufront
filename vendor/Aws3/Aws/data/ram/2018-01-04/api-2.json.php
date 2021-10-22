<?php

// This file was auto-generated from sdk-root/src/data/ram/2018-01-04/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-01-04', 'endpointPrefix' => 'ram', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'RAM', 'serviceFullName' => 'AWS Resource Access Manager', 'serviceId' => 'RAM', 'signatureVersion' => 'v4', 'uid' => 'ram-2018-01-04'], 'operations' => ['AcceptResourceShareInvitation' => ['name' => 'AcceptResourceShareInvitation', 'http' => ['method' => 'POST', 'requestUri' => '/acceptresourceshareinvitation'], 'input' => ['shape' => 'AcceptResourceShareInvitationRequest'], 'output' => ['shape' => 'AcceptResourceShareInvitationResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ResourceShareInvitationArnNotFoundException'], ['shape' => 'ResourceShareInvitationAlreadyAcceptedException'], ['shape' => 'ResourceShareInvitationAlreadyRejectedException'], ['shape' => 'ResourceShareInvitationExpiredException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'IdempotentParameterMismatchException']]], 'AssociateResourceShare' => ['name' => 'AssociateResourceShare', 'http' => ['method' => 'POST', 'requestUri' => '/associateresourceshare'], 'input' => ['shape' => 'AssociateResourceShareRequest'], 'output' => ['shape' => 'AssociateResourceShareResponse'], 'errors' => [['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'UnknownResourceException'], ['shape' => 'InvalidStateTransitionException'], ['shape' => 'ResourceShareLimitExceededException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidStateTransitionException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'UnknownResourceException']]], 'AssociateResourceSharePermission' => ['name' => 'AssociateResourceSharePermission', 'http' => ['method' => 'POST', 'requestUri' => '/associateresourcesharepermission'], 'input' => ['shape' => 'AssociateResourceSharePermissionRequest'], 'output' => ['shape' => 'AssociateResourceSharePermissionResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'UnknownResourceException'], ['shape' => 'InvalidParameterException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'OperationNotPermittedException']]], 'CreateResourceShare' => ['name' => 'CreateResourceShare', 'http' => ['method' => 'POST', 'requestUri' => '/createresourceshare'], 'input' => ['shape' => 'CreateResourceShareRequest'], 'output' => ['shape' => 'CreateResourceShareResponse'], 'errors' => [['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'InvalidStateTransitionException'], ['shape' => 'UnknownResourceException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ResourceShareLimitExceededException'], ['shape' => 'TagPolicyViolationException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'DeleteResourceShare' => ['name' => 'DeleteResourceShare', 'http' => ['method' => 'DELETE', 'requestUri' => '/deleteresourceshare'], 'input' => ['shape' => 'DeleteResourceShareRequest'], 'output' => ['shape' => 'DeleteResourceShareResponse'], 'errors' => [['shape' => 'OperationNotPermittedException'], ['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'InvalidStateTransitionException'], ['shape' => 'UnknownResourceException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'DisassociateResourceShare' => ['name' => 'DisassociateResourceShare', 'http' => ['method' => 'POST', 'requestUri' => '/disassociateresourceshare'], 'input' => ['shape' => 'DisassociateResourceShareRequest'], 'output' => ['shape' => 'DisassociateResourceShareResponse'], 'errors' => [['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'ResourceShareLimitExceededException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidStateTransitionException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'UnknownResourceException']]], 'DisassociateResourceSharePermission' => ['name' => 'DisassociateResourceSharePermission', 'http' => ['method' => 'POST', 'requestUri' => '/disassociateresourcesharepermission'], 'input' => ['shape' => 'DisassociateResourceSharePermissionRequest'], 'output' => ['shape' => 'DisassociateResourceSharePermissionResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'UnknownResourceException'], ['shape' => 'InvalidParameterException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'OperationNotPermittedException']]], 'EnableSharingWithAwsOrganization' => ['name' => 'EnableSharingWithAwsOrganization', 'http' => ['method' => 'POST', 'requestUri' => '/enablesharingwithawsorganization'], 'input' => ['shape' => 'EnableSharingWithAwsOrganizationRequest'], 'output' => ['shape' => 'EnableSharingWithAwsOrganizationResponse'], 'errors' => [['shape' => 'OperationNotPermittedException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'GetPermission' => ['name' => 'GetPermission', 'http' => ['method' => 'POST', 'requestUri' => '/getpermission'], 'input' => ['shape' => 'GetPermissionRequest'], 'output' => ['shape' => 'GetPermissionResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MalformedArnException'], ['shape' => 'UnknownResourceException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'OperationNotPermittedException']]], 'GetResourcePolicies' => ['name' => 'GetResourcePolicies', 'http' => ['method' => 'POST', 'requestUri' => '/getresourcepolicies'], 'input' => ['shape' => 'GetResourcePoliciesRequest'], 'output' => ['shape' => 'GetResourcePoliciesResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ResourceArnNotFoundException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'GetResourceShareAssociations' => ['name' => 'GetResourceShareAssociations', 'http' => ['method' => 'POST', 'requestUri' => '/getresourceshareassociations'], 'input' => ['shape' => 'GetResourceShareAssociationsRequest'], 'output' => ['shape' => 'GetResourceShareAssociationsResponse'], 'errors' => [['shape' => 'UnknownResourceException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'GetResourceShareInvitations' => ['name' => 'GetResourceShareInvitations', 'http' => ['method' => 'POST', 'requestUri' => '/getresourceshareinvitations'], 'input' => ['shape' => 'GetResourceShareInvitationsRequest'], 'output' => ['shape' => 'GetResourceShareInvitationsResponse'], 'errors' => [['shape' => 'ResourceShareInvitationArnNotFoundException'], ['shape' => 'InvalidMaxResultsException'], ['shape' => 'MalformedArnException'], ['shape' => 'UnknownResourceException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'GetResourceShares' => ['name' => 'GetResourceShares', 'http' => ['method' => 'POST', 'requestUri' => '/getresourceshares'], 'input' => ['shape' => 'GetResourceSharesRequest'], 'output' => ['shape' => 'GetResourceSharesResponse'], 'errors' => [['shape' => 'UnknownResourceException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'ListPendingInvitationResources' => ['name' => 'ListPendingInvitationResources', 'http' => ['method' => 'POST', 'requestUri' => '/listpendinginvitationresources'], 'input' => ['shape' => 'ListPendingInvitationResourcesRequest'], 'output' => ['shape' => 'ListPendingInvitationResourcesResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ResourceShareInvitationArnNotFoundException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'ResourceShareInvitationAlreadyRejectedException'], ['shape' => 'ResourceShareInvitationExpiredException']]], 'ListPermissions' => ['name' => 'ListPermissions', 'http' => ['method' => 'POST', 'requestUri' => '/listpermissions'], 'input' => ['shape' => 'ListPermissionsRequest'], 'output' => ['shape' => 'ListPermissionsResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'OperationNotPermittedException']]], 'ListPrincipals' => ['name' => 'ListPrincipals', 'http' => ['method' => 'POST', 'requestUri' => '/listprincipals'], 'input' => ['shape' => 'ListPrincipalsRequest'], 'output' => ['shape' => 'ListPrincipalsResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'UnknownResourceException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'ListResourceSharePermissions' => ['name' => 'ListResourceSharePermissions', 'http' => ['method' => 'POST', 'requestUri' => '/listresourcesharepermissions'], 'input' => ['shape' => 'ListResourceSharePermissionsRequest'], 'output' => ['shape' => 'ListResourceSharePermissionsResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MalformedArnException'], ['shape' => 'UnknownResourceException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'OperationNotPermittedException']]], 'ListResourceTypes' => ['name' => 'ListResourceTypes', 'http' => ['method' => 'POST', 'requestUri' => '/listresourcetypes'], 'input' => ['shape' => 'ListResourceTypesRequest'], 'output' => ['shape' => 'ListResourceTypesResponse'], 'errors' => [['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'ListResources' => ['name' => 'ListResources', 'http' => ['method' => 'POST', 'requestUri' => '/listresources'], 'input' => ['shape' => 'ListResourcesRequest'], 'output' => ['shape' => 'ListResourcesResponse'], 'errors' => [['shape' => 'InvalidResourceTypeException'], ['shape' => 'UnknownResourceException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'PromoteResourceShareCreatedFromPolicy' => ['name' => 'PromoteResourceShareCreatedFromPolicy', 'http' => ['method' => 'POST', 'requestUri' => '/promoteresourcesharecreatedfrompolicy'], 'input' => ['shape' => 'PromoteResourceShareCreatedFromPolicyRequest'], 'output' => ['shape' => 'PromoteResourceShareCreatedFromPolicyResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'UnknownResourceException']]], 'RejectResourceShareInvitation' => ['name' => 'RejectResourceShareInvitation', 'http' => ['method' => 'POST', 'requestUri' => '/rejectresourceshareinvitation'], 'input' => ['shape' => 'RejectResourceShareInvitationRequest'], 'output' => ['shape' => 'RejectResourceShareInvitationResponse'], 'errors' => [['shape' => 'MalformedArnException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ResourceShareInvitationArnNotFoundException'], ['shape' => 'ResourceShareInvitationAlreadyAcceptedException'], ['shape' => 'ResourceShareInvitationAlreadyRejectedException'], ['shape' => 'ResourceShareInvitationExpiredException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'IdempotentParameterMismatchException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/tagresource'], 'input' => ['shape' => 'TagResourceRequest'], 'output' => ['shape' => 'TagResourceResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MalformedArnException'], ['shape' => 'TagLimitExceededException'], ['shape' => 'ResourceArnNotFoundException'], ['shape' => 'TagPolicyViolationException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'POST', 'requestUri' => '/untagresource'], 'input' => ['shape' => 'UntagResourceRequest'], 'output' => ['shape' => 'UntagResourceResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]], 'UpdateResourceShare' => ['name' => 'UpdateResourceShare', 'http' => ['method' => 'POST', 'requestUri' => '/updateresourceshare'], 'input' => ['shape' => 'UpdateResourceShareRequest'], 'output' => ['shape' => 'UpdateResourceShareResponse'], 'errors' => [['shape' => 'IdempotentParameterMismatchException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'UnknownResourceException'], ['shape' => 'MalformedArnException'], ['shape' => 'InvalidClientTokenException'], ['shape' => 'InvalidParameterException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ServerInternalException'], ['shape' => 'ServiceUnavailableException']]]], 'shapes' => ['AcceptResourceShareInvitationRequest' => ['type' => 'structure', 'required' => ['resourceShareInvitationArn'], 'members' => ['resourceShareInvitationArn' => ['shape' => 'String'], 'clientToken' => ['shape' => 'String']]], 'AcceptResourceShareInvitationResponse' => ['type' => 'structure', 'members' => ['resourceShareInvitation' => ['shape' => 'ResourceShareInvitation'], 'clientToken' => ['shape' => 'String']]], 'AssociateResourceSharePermissionRequest' => ['type' => 'structure', 'required' => ['resourceShareArn', 'permissionArn'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'permissionArn' => ['shape' => 'String'], 'replace' => ['shape' => 'Boolean'], 'clientToken' => ['shape' => 'String']]], 'AssociateResourceSharePermissionResponse' => ['type' => 'structure', 'members' => ['returnValue' => ['shape' => 'Boolean'], 'clientToken' => ['shape' => 'String']]], 'AssociateResourceShareRequest' => ['type' => 'structure', 'required' => ['resourceShareArn'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'resourceArns' => ['shape' => 'ResourceArnList'], 'principals' => ['shape' => 'PrincipalArnOrIdList'], 'clientToken' => ['shape' => 'String']]], 'AssociateResourceShareResponse' => ['type' => 'structure', 'members' => ['resourceShareAssociations' => ['shape' => 'ResourceShareAssociationList'], 'clientToken' => ['shape' => 'String']]], 'Boolean' => ['type' => 'boolean'], 'CreateResourceShareRequest' => ['type' => 'structure', 'required' => ['name'], 'members' => ['name' => ['shape' => 'String'], 'resourceArns' => ['shape' => 'ResourceArnList'], 'principals' => ['shape' => 'PrincipalArnOrIdList'], 'tags' => ['shape' => 'TagList'], 'allowExternalPrincipals' => ['shape' => 'Boolean'], 'clientToken' => ['shape' => 'String'], 'permissionArns' => ['shape' => 'PermissionArnList']]], 'CreateResourceShareResponse' => ['type' => 'structure', 'members' => ['resourceShare' => ['shape' => 'ResourceShare'], 'clientToken' => ['shape' => 'String']]], 'DateTime' => ['type' => 'timestamp'], 'DeleteResourceShareRequest' => ['type' => 'structure', 'required' => ['resourceShareArn'], 'members' => ['resourceShareArn' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'resourceShareArn'], 'clientToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'clientToken']]], 'DeleteResourceShareResponse' => ['type' => 'structure', 'members' => ['returnValue' => ['shape' => 'Boolean'], 'clientToken' => ['shape' => 'String']]], 'DisassociateResourceSharePermissionRequest' => ['type' => 'structure', 'required' => ['resourceShareArn', 'permissionArn'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'permissionArn' => ['shape' => 'String'], 'clientToken' => ['shape' => 'String']]], 'DisassociateResourceSharePermissionResponse' => ['type' => 'structure', 'members' => ['returnValue' => ['shape' => 'Boolean'], 'clientToken' => ['shape' => 'String']]], 'DisassociateResourceShareRequest' => ['type' => 'structure', 'required' => ['resourceShareArn'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'resourceArns' => ['shape' => 'ResourceArnList'], 'principals' => ['shape' => 'PrincipalArnOrIdList'], 'clientToken' => ['shape' => 'String']]], 'DisassociateResourceShareResponse' => ['type' => 'structure', 'members' => ['resourceShareAssociations' => ['shape' => 'ResourceShareAssociationList'], 'clientToken' => ['shape' => 'String']]], 'EnableSharingWithAwsOrganizationRequest' => ['type' => 'structure', 'members' => []], 'EnableSharingWithAwsOrganizationResponse' => ['type' => 'structure', 'members' => ['returnValue' => ['shape' => 'Boolean']]], 'GetPermissionRequest' => ['type' => 'structure', 'required' => ['permissionArn'], 'members' => ['permissionArn' => ['shape' => 'String'], 'permissionVersion' => ['shape' => 'Integer']]], 'GetPermissionResponse' => ['type' => 'structure', 'members' => ['permission' => ['shape' => 'ResourceSharePermissionDetail']]], 'GetResourcePoliciesRequest' => ['type' => 'structure', 'required' => ['resourceArns'], 'members' => ['resourceArns' => ['shape' => 'ResourceArnList'], 'principal' => ['shape' => 'String'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetResourcePoliciesResponse' => ['type' => 'structure', 'members' => ['policies' => ['shape' => 'PolicyList'], 'nextToken' => ['shape' => 'String']]], 'GetResourceShareAssociationsRequest' => ['type' => 'structure', 'required' => ['associationType'], 'members' => ['associationType' => ['shape' => 'ResourceShareAssociationType'], 'resourceShareArns' => ['shape' => 'ResourceShareArnList'], 'resourceArn' => ['shape' => 'String'], 'principal' => ['shape' => 'String'], 'associationStatus' => ['shape' => 'ResourceShareAssociationStatus'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetResourceShareAssociationsResponse' => ['type' => 'structure', 'members' => ['resourceShareAssociations' => ['shape' => 'ResourceShareAssociationList'], 'nextToken' => ['shape' => 'String']]], 'GetResourceShareInvitationsRequest' => ['type' => 'structure', 'members' => ['resourceShareInvitationArns' => ['shape' => 'ResourceShareInvitationArnList'], 'resourceShareArns' => ['shape' => 'ResourceShareArnList'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetResourceShareInvitationsResponse' => ['type' => 'structure', 'members' => ['resourceShareInvitations' => ['shape' => 'ResourceShareInvitationList'], 'nextToken' => ['shape' => 'String']]], 'GetResourceSharesRequest' => ['type' => 'structure', 'required' => ['resourceOwner'], 'members' => ['resourceShareArns' => ['shape' => 'ResourceShareArnList'], 'resourceShareStatus' => ['shape' => 'ResourceShareStatus'], 'resourceOwner' => ['shape' => 'ResourceOwner'], 'name' => ['shape' => 'String'], 'tagFilters' => ['shape' => 'TagFilters'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetResourceSharesResponse' => ['type' => 'structure', 'members' => ['resourceShares' => ['shape' => 'ResourceShareList'], 'nextToken' => ['shape' => 'String']]], 'IdempotentParameterMismatchException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'Integer' => ['type' => 'integer'], 'InvalidClientTokenException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'InvalidMaxResultsException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'InvalidNextTokenException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'InvalidParameterException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'InvalidResourceTypeException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'InvalidStateTransitionException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ListPendingInvitationResourcesRequest' => ['type' => 'structure', 'required' => ['resourceShareInvitationArn'], 'members' => ['resourceShareInvitationArn' => ['shape' => 'String'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'ListPendingInvitationResourcesResponse' => ['type' => 'structure', 'members' => ['resources' => ['shape' => 'ResourceList'], 'nextToken' => ['shape' => 'String']]], 'ListPermissionsRequest' => ['type' => 'structure', 'members' => ['resourceType' => ['shape' => 'String'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'ListPermissionsResponse' => ['type' => 'structure', 'members' => ['permissions' => ['shape' => 'ResourceSharePermissionList'], 'nextToken' => ['shape' => 'String']]], 'ListPrincipalsRequest' => ['type' => 'structure', 'required' => ['resourceOwner'], 'members' => ['resourceOwner' => ['shape' => 'ResourceOwner'], 'resourceArn' => ['shape' => 'String'], 'principals' => ['shape' => 'PrincipalArnOrIdList'], 'resourceType' => ['shape' => 'String'], 'resourceShareArns' => ['shape' => 'ResourceShareArnList'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'ListPrincipalsResponse' => ['type' => 'structure', 'members' => ['principals' => ['shape' => 'PrincipalList'], 'nextToken' => ['shape' => 'String']]], 'ListResourceSharePermissionsRequest' => ['type' => 'structure', 'required' => ['resourceShareArn'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'ListResourceSharePermissionsResponse' => ['type' => 'structure', 'members' => ['permissions' => ['shape' => 'ResourceSharePermissionList'], 'nextToken' => ['shape' => 'String']]], 'ListResourceTypesRequest' => ['type' => 'structure', 'members' => ['nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'ListResourceTypesResponse' => ['type' => 'structure', 'members' => ['resourceTypes' => ['shape' => 'ServiceNameAndResourceTypeList'], 'nextToken' => ['shape' => 'String']]], 'ListResourcesRequest' => ['type' => 'structure', 'required' => ['resourceOwner'], 'members' => ['resourceOwner' => ['shape' => 'ResourceOwner'], 'principal' => ['shape' => 'String'], 'resourceType' => ['shape' => 'String'], 'resourceArns' => ['shape' => 'ResourceArnList'], 'resourceShareArns' => ['shape' => 'ResourceShareArnList'], 'nextToken' => ['shape' => 'String'], 'maxResults' => ['shape' => 'MaxResults']]], 'ListResourcesResponse' => ['type' => 'structure', 'members' => ['resources' => ['shape' => 'ResourceList'], 'nextToken' => ['shape' => 'String']]], 'MalformedArnException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'MaxResults' => ['type' => 'integer', 'max' => 500, 'min' => 1], 'MissingRequiredParameterException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'OperationNotPermittedException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'PermissionArnList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'Policy' => ['type' => 'string'], 'PolicyList' => ['type' => 'list', 'member' => ['shape' => 'Policy']], 'Principal' => ['type' => 'structure', 'members' => ['id' => ['shape' => 'String'], 'resourceShareArn' => ['shape' => 'String'], 'creationTime' => ['shape' => 'DateTime'], 'lastUpdatedTime' => ['shape' => 'DateTime'], 'external' => ['shape' => 'Boolean']]], 'PrincipalArnOrIdList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'PrincipalList' => ['type' => 'list', 'member' => ['shape' => 'Principal']], 'PromoteResourceShareCreatedFromPolicyRequest' => ['type' => 'structure', 'required' => ['resourceShareArn'], 'members' => ['resourceShareArn' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'resourceShareArn']]], 'PromoteResourceShareCreatedFromPolicyResponse' => ['type' => 'structure', 'members' => ['returnValue' => ['shape' => 'Boolean']]], 'RejectResourceShareInvitationRequest' => ['type' => 'structure', 'required' => ['resourceShareInvitationArn'], 'members' => ['resourceShareInvitationArn' => ['shape' => 'String'], 'clientToken' => ['shape' => 'String']]], 'RejectResourceShareInvitationResponse' => ['type' => 'structure', 'members' => ['resourceShareInvitation' => ['shape' => 'ResourceShareInvitation'], 'clientToken' => ['shape' => 'String']]], 'Resource' => ['type' => 'structure', 'members' => ['arn' => ['shape' => 'String'], 'type' => ['shape' => 'String'], 'resourceShareArn' => ['shape' => 'String'], 'resourceGroupArn' => ['shape' => 'String'], 'status' => ['shape' => 'ResourceStatus'], 'statusMessage' => ['shape' => 'String'], 'creationTime' => ['shape' => 'DateTime'], 'lastUpdatedTime' => ['shape' => 'DateTime']]], 'ResourceArnList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'ResourceArnNotFoundException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceList' => ['type' => 'list', 'member' => ['shape' => 'Resource']], 'ResourceOwner' => ['type' => 'string', 'enum' => ['SELF', 'OTHER-ACCOUNTS']], 'ResourceShare' => ['type' => 'structure', 'members' => ['resourceShareArn' => ['shape' => 'String'], 'name' => ['shape' => 'String'], 'owningAccountId' => ['shape' => 'String'], 'allowExternalPrincipals' => ['shape' => 'Boolean'], 'status' => ['shape' => 'ResourceShareStatus'], 'statusMessage' => ['shape' => 'String'], 'tags' => ['shape' => 'TagList'], 'creationTime' => ['shape' => 'DateTime'], 'lastUpdatedTime' => ['shape' => 'DateTime'], 'featureSet' => ['shape' => 'ResourceShareFeatureSet']]], 'ResourceShareArnList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'ResourceShareAssociation' => ['type' => 'structure', 'members' => ['resourceShareArn' => ['shape' => 'String'], 'resourceShareName' => ['shape' => 'String'], 'associatedEntity' => ['shape' => 'String'], 'associationType' => ['shape' => 'ResourceShareAssociationType'], 'status' => ['shape' => 'ResourceShareAssociationStatus'], 'statusMessage' => ['shape' => 'String'], 'creationTime' => ['shape' => 'DateTime'], 'lastUpdatedTime' => ['shape' => 'DateTime'], 'external' => ['shape' => 'Boolean']]], 'ResourceShareAssociationList' => ['type' => 'list', 'member' => ['shape' => 'ResourceShareAssociation']], 'ResourceShareAssociationStatus' => ['type' => 'string', 'enum' => ['ASSOCIATING', 'ASSOCIATED', 'FAILED', 'DISASSOCIATING', 'DISASSOCIATED']], 'ResourceShareAssociationType' => ['type' => 'string', 'enum' => ['PRINCIPAL', 'RESOURCE']], 'ResourceShareFeatureSet' => ['type' => 'string', 'enum' => ['CREATED_FROM_POLICY', 'PROMOTING_TO_STANDARD', 'STANDARD']], 'ResourceShareInvitation' => ['type' => 'structure', 'members' => ['resourceShareInvitationArn' => ['shape' => 'String'], 'resourceShareName' => ['shape' => 'String'], 'resourceShareArn' => ['shape' => 'String'], 'senderAccountId' => ['shape' => 'String'], 'receiverAccountId' => ['shape' => 'String'], 'invitationTimestamp' => ['shape' => 'DateTime'], 'status' => ['shape' => 'ResourceShareInvitationStatus'], 'resourceShareAssociations' => ['shape' => 'ResourceShareAssociationList', 'deprecated' => \true, 'deprecatedMessage' => 'This member has been deprecated. Use ListPendingInvitationResources.']]], 'ResourceShareInvitationAlreadyAcceptedException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceShareInvitationAlreadyRejectedException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceShareInvitationArnList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'ResourceShareInvitationArnNotFoundException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceShareInvitationExpiredException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceShareInvitationList' => ['type' => 'list', 'member' => ['shape' => 'ResourceShareInvitation']], 'ResourceShareInvitationStatus' => ['type' => 'string', 'enum' => ['PENDING', 'ACCEPTED', 'REJECTED', 'EXPIRED']], 'ResourceShareLimitExceededException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceShareList' => ['type' => 'list', 'member' => ['shape' => 'ResourceShare']], 'ResourceSharePermissionDetail' => ['type' => 'structure', 'members' => ['arn' => ['shape' => 'String'], 'version' => ['shape' => 'String'], 'defaultVersion' => ['shape' => 'Boolean'], 'name' => ['shape' => 'String'], 'resourceType' => ['shape' => 'String'], 'permission' => ['shape' => 'String'], 'creationTime' => ['shape' => 'DateTime'], 'lastUpdatedTime' => ['shape' => 'DateTime']]], 'ResourceSharePermissionList' => ['type' => 'list', 'member' => ['shape' => 'ResourceSharePermissionSummary']], 'ResourceSharePermissionSummary' => ['type' => 'structure', 'members' => ['arn' => ['shape' => 'String'], 'version' => ['shape' => 'String'], 'defaultVersion' => ['shape' => 'Boolean'], 'name' => ['shape' => 'String'], 'resourceType' => ['shape' => 'String'], 'status' => ['shape' => 'String'], 'creationTime' => ['shape' => 'DateTime'], 'lastUpdatedTime' => ['shape' => 'DateTime']]], 'ResourceShareStatus' => ['type' => 'string', 'enum' => ['PENDING', 'ACTIVE', 'FAILED', 'DELETING', 'DELETED']], 'ResourceStatus' => ['type' => 'string', 'enum' => ['AVAILABLE', 'ZONAL_RESOURCE_INACCESSIBLE', 'LIMIT_EXCEEDED', 'UNAVAILABLE', 'PENDING']], 'ServerInternalException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 500], 'exception' => \true], 'ServiceNameAndResourceType' => ['type' => 'structure', 'members' => ['resourceType' => ['shape' => 'String'], 'serviceName' => ['shape' => 'String']]], 'ServiceNameAndResourceTypeList' => ['type' => 'list', 'member' => ['shape' => 'ServiceNameAndResourceType']], 'ServiceUnavailableException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 503], 'exception' => \true], 'String' => ['type' => 'string'], 'Tag' => ['type' => 'structure', 'members' => ['key' => ['shape' => 'TagKey'], 'value' => ['shape' => 'TagValue']]], 'TagFilter' => ['type' => 'structure', 'members' => ['tagKey' => ['shape' => 'TagKey'], 'tagValues' => ['shape' => 'TagValueList']]], 'TagFilters' => ['type' => 'list', 'member' => ['shape' => 'TagFilter']], 'TagKey' => ['type' => 'string'], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey']], 'TagLimitExceededException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag']], 'TagPolicyViolationException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['resourceShareArn', 'tags'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'tags' => ['shape' => 'TagList']]], 'TagResourceResponse' => ['type' => 'structure', 'members' => []], 'TagValue' => ['type' => 'string'], 'TagValueList' => ['type' => 'list', 'member' => ['shape' => 'TagValue']], 'UnknownResourceException' => ['type' => 'structure', 'required' => ['message'], 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['resourceShareArn', 'tagKeys'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'tagKeys' => ['shape' => 'TagKeyList']]], 'UntagResourceResponse' => ['type' => 'structure', 'members' => []], 'UpdateResourceShareRequest' => ['type' => 'structure', 'required' => ['resourceShareArn'], 'members' => ['resourceShareArn' => ['shape' => 'String'], 'name' => ['shape' => 'String'], 'allowExternalPrincipals' => ['shape' => 'Boolean'], 'clientToken' => ['shape' => 'String']]], 'UpdateResourceShareResponse' => ['type' => 'structure', 'members' => ['resourceShare' => ['shape' => 'ResourceShare'], 'clientToken' => ['shape' => 'String']]]]];
