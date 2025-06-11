# Airtable PHP client 

**This is a third party [Airtable REST api](https://airtable.com/developers/) library with modification.**


## Why this project exist?

Since I couldn't find a well-structured PHP library for working with Airtable, I developed(generated) one myself for my projects.


## Installation & Usage

### Requirements

PHP 7.4 ~~8.1~~ and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ezghub1/airtable_php.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/airtable_php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ez128\Airtable\Api\RecordApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$base_id = '<base_id>'; // string
$table_id_or_name = '<table_id>'; // string
 

try {
    $offset = null;
    while (true) {
        $result = $apiInstance->listRecords($base_id, $table_id_or_name, offset: $offset);
        $records = $result->getRecords();
        foreach ($records as $record) {
            $fields = $record->getFields();
            //assume your record has field 'Nom complet' and 'Courriel'
            echo  "ID:[".$record->getId()."] Name:[".$fields['Nom complet']."] Email:[".$fields['Courriel']."] "  .PHP_EOL;
        }
        $offset = $result->getOffset();
        if (null == $offset){
            break;
        }
    }
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->listRecords: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.airtable.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuditLogsApi* | [**auditLogEvents**](docs/Api/AuditLogsApi.md#auditlogevents) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogEvents | Audit log events
*AuditingApi* | [**createAuditLogRequest**](docs/Api/AuditingApi.md#createauditlogrequest) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogs | Create audit log request
*AuditingApi* | [**getAuditLogRequest**](docs/Api/AuditingApi.md#getauditlogrequest) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogs/{enterpriseAuditLogTaskId} | Get audit log request
*AuditingApi* | [**listAuditLogRequests**](docs/Api/AuditingApi.md#listauditlogrequests) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogs | List audit log requests
*BaseApi* | [**createBase**](docs/Api/BaseApi.md#createbase) | **POST** /v0/meta/bases | Create base
*BaseApi* | [**getBaseSchema**](docs/Api/BaseApi.md#getbaseschema) | **GET** /v0/meta/bases/{baseId}/tables | Get base schema
*BaseApi* | [**listBases**](docs/Api/BaseApi.md#listbases) | **GET** /v0/meta/bases | List bases
*BlockApi* | [**deleteBlockInstallation**](docs/Api/BlockApi.md#deleteblockinstallation) | **DELETE** /v0/meta/bases/{baseId}/blockInstallations/{blockInstallationId} | Delete block installation
*BlockApi* | [**listBlockInstallations**](docs/Api/BlockApi.md#listblockinstallations) | **GET** /v0/meta/bases/{baseId}/blockInstallations | List block installations
*BlockApi* | [**manageBlockInstallation**](docs/Api/BlockApi.md#manageblockinstallation) | **PATCH** /v0/meta/bases/{baseId}/blockInstallations/{blockInstallationId} | Manage block installation
*ChangeEventsApi* | [**changeEvents**](docs/Api/ChangeEventsApi.md#changeevents) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/changeEvents | Change events
*ChangeEventsApi* | [**createEdiscoveryExport**](docs/Api/ChangeEventsApi.md#createediscoveryexport) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/exports | Create eDiscovery export
*ChangeEventsApi* | [**getEdiscoveryExport**](docs/Api/ChangeEventsApi.md#getediscoveryexport) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/exports/{enterpriseTaskId} | Get eDiscovery export
*ChangeEventsApi* | [**listEdiscoveryExport**](docs/Api/ChangeEventsApi.md#listediscoveryexport) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/exports | List eDiscovery exports
*CollaboratorsApi* | [**addBaseCollaborator**](docs/Api/CollaboratorsApi.md#addbasecollaborator) | **POST** /v0/meta/bases/{baseId}/collaborators | Add base collaborator
*CollaboratorsApi* | [**addInterfaceCollaborator**](docs/Api/CollaboratorsApi.md#addinterfacecollaborator) | **POST** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/collaborators | Add interface collaborator
*CollaboratorsApi* | [**addWorkspaceCollaborator**](docs/Api/CollaboratorsApi.md#addworkspacecollaborator) | **POST** /v0/meta/workspaces/{workspaceId}/collaborators | Add workspace collaborator
*CollaboratorsApi* | [**deleteBaseCollaborator**](docs/Api/CollaboratorsApi.md#deletebasecollaborator) | **DELETE** /v0/meta/bases/{baseId}/collaborators/{userOrGroupId} | Delete base collaborator
*CollaboratorsApi* | [**deleteInterfaceCollaborator**](docs/Api/CollaboratorsApi.md#deleteinterfacecollaborator) | **DELETE** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/collaborators/{userOrGroupId} | Delete interface collaborator
*CollaboratorsApi* | [**deleteWorkspaceCollaborator**](docs/Api/CollaboratorsApi.md#deleteworkspacecollaborator) | **DELETE** /v0/meta/workspaces/{workspaceId}/collaborators/{userOrGroupId} | Delete workspace collaborator
*CollaboratorsApi* | [**getBaseCollaborators**](docs/Api/CollaboratorsApi.md#getbasecollaborators) | **GET** /v0/meta/bases/{baseId} | Get base collaborators
*CollaboratorsApi* | [**getInterface**](docs/Api/CollaboratorsApi.md#getinterface) | **GET** /v0/meta/bases/{baseId}/interfaces/{pageBundleId} | Get interface
*CollaboratorsApi* | [**getWorkspaceCollaborators**](docs/Api/CollaboratorsApi.md#getworkspacecollaborators) | **GET** /v0/meta/workspaces/{workspaceId} | Get workspace collaborators
*CollaboratorsApi* | [**updateCollaboratorBasePermission**](docs/Api/CollaboratorsApi.md#updatecollaboratorbasepermission) | **PATCH** /v0/meta/bases/{baseId}/collaborators/{userOrGroupId} | Update collaborator base permission
*CollaboratorsApi* | [**updateInterfaceCollaborator**](docs/Api/CollaboratorsApi.md#updateinterfacecollaborator) | **PATCH** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/collaborators/{userOrGroupId} | Update interface collaborator
*CollaboratorsApi* | [**updateWorkspaceCollaborator**](docs/Api/CollaboratorsApi.md#updateworkspacecollaborator) | **PATCH** /v0/meta/workspaces/{workspaceId}/collaborators/{userOrGroupId} | Update workspace collaborator
*ColumnApi* | [**createField**](docs/Api/ColumnApi.md#createfield) | **POST** /v0/meta/bases/{baseId}/tables/{tableId}/fields | Create field
*ColumnApi* | [**updateField**](docs/Api/ColumnApi.md#updatefield) | **PATCH** /v0/meta/bases/{baseId}/tables/{tableId}/fields/{columnId} | Update field
*CommentApi* | [**createComment**](docs/Api/CommentApi.md#createcomment) | **POST** /v0/{baseId}/{tableIdOrName}/{recordId}/comments | Create comment
*CommentApi* | [**deleteComment**](docs/Api/CommentApi.md#deletecomment) | **DELETE** /v0/{baseId}/{tableIdOrName}/{recordId}/comments/{rowCommentId} | Delete comment
*CommentApi* | [**listComments**](docs/Api/CommentApi.md#listcomments) | **GET** /v0/{baseId}/{tableIdOrName}/{recordId}/comments | List comments
*CommentApi* | [**updateComment**](docs/Api/CommentApi.md#updatecomment) | **PATCH** /v0/{baseId}/{tableIdOrName}/{recordId}/comments/{rowCommentId} | Update comment
*DoNotRenderApi* | [**updateMultipleRecordsPut**](docs/Api/DoNotRenderApi.md#updatemultiplerecordsput) | **PUT** /v0/{baseId}/{tableIdOrName} | Update multiple records (put)
*DoNotRenderApi* | [**updateRecordPut**](docs/Api/DoNotRenderApi.md#updaterecordput) | **PUT** /v0/{baseId}/{tableIdOrName}/{recordId} | Update record (put)
*EnterpriseApi* | [**createDescendantEnterprise**](docs/Api/EnterpriseApi.md#createdescendantenterprise) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/descendants | Create descendant enterprise
*EnterpriseApi* | [**getEnterprise**](docs/Api/EnterpriseApi.md#getenterprise) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId} | Get enterprise
*EnterpriseApi* | [**hyperdbDeleteRecordsByPrimaryKeys**](docs/Api/EnterpriseApi.md#hyperdbdeleterecordsbyprimarykeys) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/deleteRecords | Delete records from a HyperDB table by primary keys
*EnterpriseApi* | [**hyperdbTableReadRecords**](docs/Api/EnterpriseApi.md#hyperdbtablereadrecords) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/getRecords | Read records from a HyperDB table
*EnterpriseApi* | [**hyperdbUpsertRecordsByPrimaryKeys**](docs/Api/EnterpriseApi.md#hyperdbupsertrecordsbyprimarykeys) | **PUT** /v0/{enterpriseAccountId}/{dataTableId}/upsertRecords | Update or insert records from a HyperDB table by primary keys
*EnterpriseApi* | [**removeUserFromEnterprise**](docs/Api/EnterpriseApi.md#removeuserfromenterprise) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId}/remove | Remove user from enterprise
*HyperDBApi* | [**hyperdbDeleteRecordsByPrimaryKeys**](docs/Api/HyperDBApi.md#hyperdbdeleterecordsbyprimarykeys) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/deleteRecords | Delete records from a HyperDB table by primary keys
*HyperDBApi* | [**hyperdbTableReadRecords**](docs/Api/HyperDBApi.md#hyperdbtablereadrecords) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/getRecords | Read records from a HyperDB table
*HyperDBApi* | [**hyperdbUpsertRecordsByPrimaryKeys**](docs/Api/HyperDBApi.md#hyperdbupsertrecordsbyprimarykeys) | **PUT** /v0/{enterpriseAccountId}/{dataTableId}/upsertRecords | Update or insert records from a HyperDB table by primary keys
*InvitesApi* | [**deleteBaseInvite**](docs/Api/InvitesApi.md#deletebaseinvite) | **DELETE** /v0/meta/bases/{baseId}/invites/{inviteId} | Delete base invite
*InvitesApi* | [**deleteInterfaceInvite**](docs/Api/InvitesApi.md#deleteinterfaceinvite) | **DELETE** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/invites/{inviteId} | Delete interface invite
*InvitesApi* | [**deleteWorkspaceInvite**](docs/Api/InvitesApi.md#deleteworkspaceinvite) | **DELETE** /v0/meta/workspaces/{workspaceId}/invites/{inviteId} | Delete workspace invite
*RecordApi* | [**createRecords**](docs/Api/RecordApi.md#createrecords) | **POST** /v0/{baseId}/{tableIdOrName} | Create records
*RecordApi* | [**deleteMultipleRecords**](docs/Api/RecordApi.md#deletemultiplerecords) | **DELETE** /v0/{baseId}/{tableIdOrName} | Delete multiple records
*RecordApi* | [**deleteRecord**](docs/Api/RecordApi.md#deleterecord) | **DELETE** /v0/{baseId}/{tableIdOrName}/{recordId} | Delete record
*RecordApi* | [**getRecord**](docs/Api/RecordApi.md#getrecord) | **GET** /v0/{baseId}/{tableIdOrName}/{recordId} | Get record
*RecordApi* | [**listRecords**](docs/Api/RecordApi.md#listrecords) | **GET** /v0/{baseId}/{tableIdOrName} | List records
*RecordApi* | [**postSyncApiEndpoint**](docs/Api/RecordApi.md#postsyncapiendpoint) | **POST** /v0/{baseId}/{tableIdOrName}/sync/{apiEndpointSyncId} | Sync CSV data
*RecordApi* | [**updateMultipleRecords**](docs/Api/RecordApi.md#updatemultiplerecords) | **PATCH** /v0/{baseId}/{tableIdOrName} | Update multiple records
*RecordApi* | [**updateRecord**](docs/Api/RecordApi.md#updaterecord) | **PATCH** /v0/{baseId}/{tableIdOrName}/{recordId} | Update record
*RecordApi* | [**uploadAttachment**](docs/Api/RecordApi.md#uploadattachment) | **POST** /v0/{baseId}/{recordId}/{attachmentFieldIdOrName}/uploadAttachment | Upload attachment
*ScimApi* | [**createScimGroup**](docs/Api/ScimApi.md#createscimgroup) | **POST** /scim/v2/Groups | Create group
*ScimApi* | [**createScimUser**](docs/Api/ScimApi.md#createscimuser) | **POST** /scim/v2/Users | Create user
*ScimApi* | [**deleteScimGroup**](docs/Api/ScimApi.md#deletescimgroup) | **DELETE** /scim/v2/Groups/{groupId} | Delete group
*ScimApi* | [**deleteScimUser**](docs/Api/ScimApi.md#deletescimuser) | **DELETE** /scim/v2/Users/{userId} | Delete user
*ScimApi* | [**getScimGroup**](docs/Api/ScimApi.md#getscimgroup) | **GET** /scim/v2/Groups/{groupId} | Get group
*ScimApi* | [**getScimUser**](docs/Api/ScimApi.md#getscimuser) | **GET** /scim/v2/Users/{userId} | Get user
*ScimApi* | [**listScimGroups**](docs/Api/ScimApi.md#listscimgroups) | **GET** /scim/v2/Groups | List groups
*ScimApi* | [**listScimUsers**](docs/Api/ScimApi.md#listscimusers) | **GET** /scim/v2/Users | List users
*ScimApi* | [**patchScimGroup**](docs/Api/ScimApi.md#patchscimgroup) | **PATCH** /scim/v2/Groups/{groupId} | Patch group
*ScimApi* | [**patchScimUser**](docs/Api/ScimApi.md#patchscimuser) | **PATCH** /scim/v2/Users/{userId} | Patch user
*ScimApi* | [**putScimGroup**](docs/Api/ScimApi.md#putscimgroup) | **PUT** /scim/v2/Groups/{groupId} | Put group
*ScimApi* | [**putScimUser**](docs/Api/ScimApi.md#putscimuser) | **PUT** /scim/v2/Users/{userId} | Put user
*SharesApi* | [**deleteShare**](docs/Api/SharesApi.md#deleteshare) | **DELETE** /v0/meta/bases/{baseId}/shares/{shareId} | Delete share
*SharesApi* | [**listShares**](docs/Api/SharesApi.md#listshares) | **GET** /v0/meta/bases/{baseId}/shares | List shares
*SharesApi* | [**manageShare**](docs/Api/SharesApi.md#manageshare) | **PATCH** /v0/meta/bases/{baseId}/shares/{shareId} | Manage share
*TableApi* | [**createTable**](docs/Api/TableApi.md#createtable) | **POST** /v0/meta/bases/{baseId}/tables | Create table
*TableApi* | [**updateTable**](docs/Api/TableApi.md#updatetable) | **PATCH** /v0/meta/bases/{baseId}/tables/{tableIdOrName} | Update table
*UserApi* | [**deleteUserById**](docs/Api/UserApi.md#deleteuserbyid) | **DELETE** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId} | Delete user by id
*UserApi* | [**deleteUsersByEmail**](docs/Api/UserApi.md#deleteusersbyemail) | **DELETE** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users | Delete users by email
*UserApi* | [**getUserById**](docs/Api/UserApi.md#getuserbyid) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId} | Get user by id
*UserApi* | [**getUsersByIdOrEmail**](docs/Api/UserApi.md#getusersbyidoremail) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users | Get users by id or email
*UserApi* | [**grantAdminAccess**](docs/Api/UserApi.md#grantadminaccess) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/grantAdminAccess | Grant admin access
*UserApi* | [**logoutUser**](docs/Api/UserApi.md#logoutuser) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId}/logout | Logout user
*UserApi* | [**manageUser**](docs/Api/UserApi.md#manageuser) | **PATCH** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId} | Manage user
*UserApi* | [**manageUserBatched**](docs/Api/UserApi.md#manageuserbatched) | **PATCH** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users | Manage user batched
*UserApi* | [**manageUserMembership**](docs/Api/UserApi.md#manageusermembership) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/claim | Manage user membership
*UserApi* | [**revokeAdminAccess**](docs/Api/UserApi.md#revokeadminaccess) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/revokeAdminAccess | Revoke admin access
*UserManagementApi* | [**getUserGroup**](docs/Api/UserManagementApi.md#getusergroup) | **GET** /v0/meta/groups/{groupId} | Get user group
*UserManagementApi* | [**moveUserGroups**](docs/Api/UserManagementApi.md#moveusergroups) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/moveGroups | Move user groups
*ViewApi* | [**deleteView**](docs/Api/ViewApi.md#deleteview) | **DELETE** /v0/meta/bases/{baseId}/views/{viewId} | Delete view
*ViewApi* | [**getViewMetadata**](docs/Api/ViewApi.md#getviewmetadata) | **GET** /v0/meta/bases/{baseId}/views/{viewId} | Get view metadata
*ViewApi* | [**listViews**](docs/Api/ViewApi.md#listviews) | **GET** /v0/meta/bases/{baseId}/views | List views
*WebhooksApi* | [**createAWebhook**](docs/Api/WebhooksApi.md#createawebhook) | **POST** /v0/bases/{baseId}/webhooks | Create a webhook
*WebhooksApi* | [**deleteAWebhook**](docs/Api/WebhooksApi.md#deleteawebhook) | **DELETE** /v0/bases/{baseId}/webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**enableDisableWebhookNotifications**](docs/Api/WebhooksApi.md#enabledisablewebhooknotifications) | **POST** /v0/bases/{baseId}/webhooks/{webhookId}/enableNotifications | Enable/disable webhook notifications
*WebhooksApi* | [**listWebhookPayloads**](docs/Api/WebhooksApi.md#listwebhookpayloads) | **GET** /v0/bases/{baseId}/webhooks/{webhookId}/payloads | List webhook payloads
*WebhooksApi* | [**listWebhooks**](docs/Api/WebhooksApi.md#listwebhooks) | **GET** /v0/bases/{baseId}/webhooks | List webhooks
*WebhooksApi* | [**refreshAWebhook**](docs/Api/WebhooksApi.md#refreshawebhook) | **POST** /v0/bases/{baseId}/webhooks/{webhookId}/refresh | Refresh a webhook
*WhoAmIApi* | [**getUserIdScopes**](docs/Api/WhoAmIApi.md#getuseridscopes) | **GET** /v0/meta/whoami | Get user info
*WorkspaceApi* | [**deleteBase**](docs/Api/WorkspaceApi.md#deletebase) | **DELETE** /v0/meta/bases/{baseId} | Delete base
*WorkspaceApi* | [**deleteWorkspace**](docs/Api/WorkspaceApi.md#deleteworkspace) | **DELETE** /v0/meta/workspaces/{workspaceId} | Delete workspace
*WorkspaceApi* | [**moveBase**](docs/Api/WorkspaceApi.md#movebase) | **POST** /v0/meta/workspaces/{workspaceId}/moveBase | Move base
*WorkspaceApi* | [**moveWorkspaces**](docs/Api/WorkspaceApi.md#moveworkspaces) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/moveWorkspaces | Move workspaces
*WorkspaceApi* | [**updateWorkspaceRestrictions**](docs/Api/WorkspaceApi.md#updateworkspacerestrictions) | **POST** /v0/meta/workspaces/{workspaceId}/updateRestrictions | Update workspace restrictions

## Models

- [AddBaseCollaboratorRequest](docs/Model/AddBaseCollaboratorRequest.md)
- [AddBaseCollaboratorRequestCollaboratorsInner](docs/Model/AddBaseCollaboratorRequestCollaboratorsInner.md)
- [AddBaseCollaboratorRequestCollaboratorsInnerAnyOf](docs/Model/AddBaseCollaboratorRequestCollaboratorsInnerAnyOf.md)
- [AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1](docs/Model/AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1.md)
- [AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1Group](docs/Model/AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1Group.md)
- [AddBaseCollaboratorRequestCollaboratorsInnerAnyOfUser](docs/Model/AddBaseCollaboratorRequestCollaboratorsInnerAnyOfUser.md)
- [AddInterfaceCollaboratorRequest](docs/Model/AddInterfaceCollaboratorRequest.md)
- [AddInterfaceCollaboratorRequestCollaboratorsInner](docs/Model/AddInterfaceCollaboratorRequestCollaboratorsInner.md)
- [AddInterfaceCollaboratorRequestCollaboratorsInnerAnyOf](docs/Model/AddInterfaceCollaboratorRequestCollaboratorsInnerAnyOf.md)
- [AddInterfaceCollaboratorRequestCollaboratorsInnerAnyOf1](docs/Model/AddInterfaceCollaboratorRequestCollaboratorsInnerAnyOf1.md)
- [AddInterfaceCollaboratorRequestCollaboratorsInnerAnyOfUser](docs/Model/AddInterfaceCollaboratorRequestCollaboratorsInnerAnyOfUser.md)
- [AddWorkspaceCollaboratorRequest](docs/Model/AddWorkspaceCollaboratorRequest.md)
- [AddWorkspaceCollaboratorRequestCollaboratorsInner](docs/Model/AddWorkspaceCollaboratorRequestCollaboratorsInner.md)
- [AddWorkspaceCollaboratorRequestCollaboratorsInnerAnyOf](docs/Model/AddWorkspaceCollaboratorRequestCollaboratorsInnerAnyOf.md)
- [AddWorkspaceCollaboratorRequestCollaboratorsInnerAnyOf1](docs/Model/AddWorkspaceCollaboratorRequestCollaboratorsInnerAnyOf1.md)
- [Alias695363324695363324](docs/Model/Alias695363324695363324.md)
- [ApplicationPermissionLevels](docs/Model/ApplicationPermissionLevels.md)
- [AuditLog](docs/Model/AuditLog.md)
- [AuditLogActor](docs/Model/AuditLogActor.md)
- [AuditLogActorAnyOf](docs/Model/AuditLogActorAnyOf.md)
- [AuditLogActorAnyOf1](docs/Model/AuditLogActorAnyOf1.md)
- [AuditLogActorAnyOf2](docs/Model/AuditLogActorAnyOf2.md)
- [AuditLogActorAnyOf3](docs/Model/AuditLogActorAnyOf3.md)
- [AuditLogActorAnyOf4](docs/Model/AuditLogActorAnyOf4.md)
- [AuditLogActorAnyOf5](docs/Model/AuditLogActorAnyOf5.md)
- [AuditLogActorAnyOf6](docs/Model/AuditLogActorAnyOf6.md)
- [AuditLogActorAnyOfUser](docs/Model/AuditLogActorAnyOfUser.md)
- [AuditLogAnyOf](docs/Model/AuditLogAnyOf.md)
- [AuditLogAnyOf1](docs/Model/AuditLogAnyOf1.md)
- [AuditLogAnyOf2](docs/Model/AuditLogAnyOf2.md)
- [AuditLogAnyOf2Data](docs/Model/AuditLogAnyOf2Data.md)
- [AuditLogEventTypes](docs/Model/AuditLogEventTypes.md)
- [AuditLogEvents200Response](docs/Model/AuditLogEvents200Response.md)
- [AuditLogEvents200ResponseEventsInner](docs/Model/AuditLogEvents200ResponseEventsInner.md)
- [AuditLogEvents200ResponseEventsInnerContext](docs/Model/AuditLogEvents200ResponseEventsInnerContext.md)
- [AuditLogEvents200ResponseEventsInnerOrigin](docs/Model/AuditLogEvents200ResponseEventsInnerOrigin.md)
- [AuditLogEvents200ResponsePagination](docs/Model/AuditLogEvents200ResponsePagination.md)
- [AuditLogEventsCategoryParameter](docs/Model/AuditLogEventsCategoryParameter.md)
- [AuditLogEventsEventTypeParameter](docs/Model/AuditLogEventsEventTypeParameter.md)
- [AuditLogEventsModelIdParameter](docs/Model/AuditLogEventsModelIdParameter.md)
- [AuditLogEventsOriginatingUserIdParameter](docs/Model/AuditLogEventsOriginatingUserIdParameter.md)
- [BaseGroupCollaborator](docs/Model/BaseGroupCollaborator.md)
- [BaseIndividualCollaborator](docs/Model/BaseIndividualCollaborator.md)
- [BaseInviteLink](docs/Model/BaseInviteLink.md)
- [CellValue](docs/Model/CellValue.md)
- [CellValueAnyOf](docs/Model/CellValueAnyOf.md)
- [CellValueAnyOf1](docs/Model/CellValueAnyOf1.md)
- [CellValueAnyOf2](docs/Model/CellValueAnyOf2.md)
- [CellValueAnyOf3](docs/Model/CellValueAnyOf3.md)
- [CellValueAnyOf4](docs/Model/CellValueAnyOf4.md)
- [CellValueAnyOf4AnyOfInner](docs/Model/CellValueAnyOf4AnyOfInner.md)
- [CellValueAnyOf5](docs/Model/CellValueAnyOf5.md)
- [CellValueAnyOf5Inner](docs/Model/CellValueAnyOf5Inner.md)
- [CellValueAnyOf5InnerThumbnails](docs/Model/CellValueAnyOf5InnerThumbnails.md)
- [CellValueAnyOf5InnerThumbnailsFull](docs/Model/CellValueAnyOf5InnerThumbnailsFull.md)
- [CellValueAnyOf6Inner](docs/Model/CellValueAnyOf6Inner.md)
- [ChangeEvents200Response](docs/Model/ChangeEvents200Response.md)
- [ChangeEvents200ResponseEventsInner](docs/Model/ChangeEvents200ResponseEventsInner.md)
- [ChangeEvents200ResponseEventsInnerContext](docs/Model/ChangeEvents200ResponseEventsInnerContext.md)
- [ChangeEvents200ResponseEventsInnerOrigin](docs/Model/ChangeEvents200ResponseEventsInnerOrigin.md)
- [ChangeEvents200ResponseEventsInnerPayload](docs/Model/ChangeEvents200ResponseEventsInnerPayload.md)
- [ChangeEventsActor](docs/Model/ChangeEventsActor.md)
- [ChangeEventsActorAnyOf](docs/Model/ChangeEventsActorAnyOf.md)
- [ChangeEventsData](docs/Model/ChangeEventsData.md)
- [ChangeEventsDataChangedTablesByIdValue](docs/Model/ChangeEventsDataChangedTablesByIdValue.md)
- [ChangeEventsDataCreatedTablesByIdValue](docs/Model/ChangeEventsDataCreatedTablesByIdValue.md)
- [ChangeEventsTableChange](docs/Model/ChangeEventsTableChange.md)
- [ChangeEventsTableChangeChangedRecordsMetadataByIdValue](docs/Model/ChangeEventsTableChangeChangedRecordsMetadataByIdValue.md)
- [ChangeEventsTableChangeChangedRecordsMetadataByIdValueChangedCommentsByIdValue](docs/Model/ChangeEventsTableChangeChangedRecordsMetadataByIdValueChangedCommentsByIdValue.md)
- [ChangeEventsTableChangeChangedRecordsMetadataByIdValueChangedCommentsByIdValueCurrent](docs/Model/ChangeEventsTableChangeChangedRecordsMetadataByIdValueChangedCommentsByIdValueCurrent.md)
- [ChangeEventsTableCreate](docs/Model/ChangeEventsTableCreate.md)
- [ChangeEventsTableCreateRecordsMetadataByIdValue](docs/Model/ChangeEventsTableCreateRecordsMetadataByIdValue.md)
- [Collaborations](docs/Model/Collaborations.md)
- [CollaborationsBaseCollaborationsInner](docs/Model/CollaborationsBaseCollaborationsInner.md)
- [CollaborationsInterfaceCollaborationsInner](docs/Model/CollaborationsInterfaceCollaborationsInner.md)
- [CollaborationsWorkspaceCollaborationsInner](docs/Model/CollaborationsWorkspaceCollaborationsInner.md)
- [CreateAWebhook200Response](docs/Model/CreateAWebhook200Response.md)
- [CreateAWebhookRequest](docs/Model/CreateAWebhookRequest.md)
- [CreateAWebhookRequestSpecification](docs/Model/CreateAWebhookRequestSpecification.md)
- [CreateAuditLogRequestRequest](docs/Model/CreateAuditLogRequestRequest.md)
- [CreateBase200Response](docs/Model/CreateBase200Response.md)
- [CreateBaseRequest](docs/Model/CreateBaseRequest.md)
- [CreateComment200Response](docs/Model/CreateComment200Response.md)
- [CreateComment200ResponseAuthor](docs/Model/CreateComment200ResponseAuthor.md)
- [CreateComment200ResponseReactionsInner](docs/Model/CreateComment200ResponseReactionsInner.md)
- [CreateComment200ResponseReactionsInnerReactingUser](docs/Model/CreateComment200ResponseReactionsInnerReactingUser.md)
- [CreateCommentRequest](docs/Model/CreateCommentRequest.md)
- [CreateDescendantEnterprise200Response](docs/Model/CreateDescendantEnterprise200Response.md)
- [CreateDescendantEnterpriseRequest](docs/Model/CreateDescendantEnterpriseRequest.md)
- [CreateEdiscoveryExport200Response](docs/Model/CreateEdiscoveryExport200Response.md)
- [CreateEdiscoveryExport200ResponseUser](docs/Model/CreateEdiscoveryExport200ResponseUser.md)
- [CreateEdiscoveryExportRequest](docs/Model/CreateEdiscoveryExportRequest.md)
- [CreateFieldRequest](docs/Model/CreateFieldRequest.md)
- [CreateFieldRequestAnyOf](docs/Model/CreateFieldRequestAnyOf.md)
- [CreateFieldRequestAnyOf1](docs/Model/CreateFieldRequestAnyOf1.md)
- [CreateFieldRequestAnyOf10](docs/Model/CreateFieldRequestAnyOf10.md)
- [CreateFieldRequestAnyOf10Options](docs/Model/CreateFieldRequestAnyOf10Options.md)
- [CreateFieldRequestAnyOf11](docs/Model/CreateFieldRequestAnyOf11.md)
- [CreateFieldRequestAnyOf11Options](docs/Model/CreateFieldRequestAnyOf11Options.md)
- [CreateFieldRequestAnyOf12](docs/Model/CreateFieldRequestAnyOf12.md)
- [CreateFieldRequestAnyOf13](docs/Model/CreateFieldRequestAnyOf13.md)
- [CreateFieldRequestAnyOf13Options](docs/Model/CreateFieldRequestAnyOf13Options.md)
- [CreateFieldRequestAnyOf14](docs/Model/CreateFieldRequestAnyOf14.md)
- [CreateFieldRequestAnyOf14Options](docs/Model/CreateFieldRequestAnyOf14Options.md)
- [CreateFieldRequestAnyOf15](docs/Model/CreateFieldRequestAnyOf15.md)
- [CreateFieldRequestAnyOf16](docs/Model/CreateFieldRequestAnyOf16.md)
- [CreateFieldRequestAnyOf17](docs/Model/CreateFieldRequestAnyOf17.md)
- [CreateFieldRequestAnyOf17Options](docs/Model/CreateFieldRequestAnyOf17Options.md)
- [CreateFieldRequestAnyOf18](docs/Model/CreateFieldRequestAnyOf18.md)
- [CreateFieldRequestAnyOf19](docs/Model/CreateFieldRequestAnyOf19.md)
- [CreateFieldRequestAnyOf19Options](docs/Model/CreateFieldRequestAnyOf19Options.md)
- [CreateFieldRequestAnyOf2](docs/Model/CreateFieldRequestAnyOf2.md)
- [CreateFieldRequestAnyOf20](docs/Model/CreateFieldRequestAnyOf20.md)
- [CreateFieldRequestAnyOf21](docs/Model/CreateFieldRequestAnyOf21.md)
- [CreateFieldRequestAnyOf22](docs/Model/CreateFieldRequestAnyOf22.md)
- [CreateFieldRequestAnyOf23](docs/Model/CreateFieldRequestAnyOf23.md)
- [CreateFieldRequestAnyOf23Options](docs/Model/CreateFieldRequestAnyOf23Options.md)
- [CreateFieldRequestAnyOf23OptionsChoicesInner](docs/Model/CreateFieldRequestAnyOf23OptionsChoicesInner.md)
- [CreateFieldRequestAnyOf24](docs/Model/CreateFieldRequestAnyOf24.md)
- [CreateFieldRequestAnyOf24Options](docs/Model/CreateFieldRequestAnyOf24Options.md)
- [CreateFieldRequestAnyOf24OptionsPromptInner](docs/Model/CreateFieldRequestAnyOf24OptionsPromptInner.md)
- [CreateFieldRequestAnyOf24OptionsPromptInnerAnyOf](docs/Model/CreateFieldRequestAnyOf24OptionsPromptInnerAnyOf.md)
- [CreateFieldRequestAnyOf24OptionsPromptInnerAnyOfField](docs/Model/CreateFieldRequestAnyOf24OptionsPromptInnerAnyOfField.md)
- [CreateFieldRequestAnyOf25](docs/Model/CreateFieldRequestAnyOf25.md)
- [CreateFieldRequestAnyOf25Options](docs/Model/CreateFieldRequestAnyOf25Options.md)
- [CreateFieldRequestAnyOf26](docs/Model/CreateFieldRequestAnyOf26.md)
- [CreateFieldRequestAnyOf26Options](docs/Model/CreateFieldRequestAnyOf26Options.md)
- [CreateFieldRequestAnyOf26OptionsChoicesInner](docs/Model/CreateFieldRequestAnyOf26OptionsChoicesInner.md)
- [CreateFieldRequestAnyOf27](docs/Model/CreateFieldRequestAnyOf27.md)
- [CreateFieldRequestAnyOf28](docs/Model/CreateFieldRequestAnyOf28.md)
- [CreateFieldRequestAnyOf29](docs/Model/CreateFieldRequestAnyOf29.md)
- [CreateFieldRequestAnyOf3](docs/Model/CreateFieldRequestAnyOf3.md)
- [CreateFieldRequestAnyOf30](docs/Model/CreateFieldRequestAnyOf30.md)
- [CreateFieldRequestAnyOf30Options](docs/Model/CreateFieldRequestAnyOf30Options.md)
- [CreateFieldRequestAnyOf30OptionsDateFormat](docs/Model/CreateFieldRequestAnyOf30OptionsDateFormat.md)
- [CreateFieldRequestAnyOf31](docs/Model/CreateFieldRequestAnyOf31.md)
- [CreateFieldRequestAnyOf31Options](docs/Model/CreateFieldRequestAnyOf31Options.md)
- [CreateFieldRequestAnyOf31OptionsTimeFormat](docs/Model/CreateFieldRequestAnyOf31OptionsTimeFormat.md)
- [CreateFieldRequestAnyOf32](docs/Model/CreateFieldRequestAnyOf32.md)
- [CreateFieldRequestAnyOf3Options](docs/Model/CreateFieldRequestAnyOf3Options.md)
- [CreateFieldRequestAnyOf4](docs/Model/CreateFieldRequestAnyOf4.md)
- [CreateFieldRequestAnyOf5](docs/Model/CreateFieldRequestAnyOf5.md)
- [CreateFieldRequestAnyOf5Options](docs/Model/CreateFieldRequestAnyOf5Options.md)
- [CreateFieldRequestAnyOf5OptionsResult](docs/Model/CreateFieldRequestAnyOf5OptionsResult.md)
- [CreateFieldRequestAnyOf5OptionsResultAnyOf](docs/Model/CreateFieldRequestAnyOf5OptionsResultAnyOf.md)
- [CreateFieldRequestAnyOf5OptionsResultAnyOf1](docs/Model/CreateFieldRequestAnyOf5OptionsResultAnyOf1.md)
- [CreateFieldRequestAnyOf5OptionsResultAnyOf1Options](docs/Model/CreateFieldRequestAnyOf5OptionsResultAnyOf1Options.md)
- [CreateFieldRequestAnyOf5OptionsResultAnyOf1OptionsTimeFormat](docs/Model/CreateFieldRequestAnyOf5OptionsResultAnyOf1OptionsTimeFormat.md)
- [CreateFieldRequestAnyOf5OptionsResultAnyOfOptions](docs/Model/CreateFieldRequestAnyOf5OptionsResultAnyOfOptions.md)
- [CreateFieldRequestAnyOf5OptionsResultAnyOfOptionsDateFormat](docs/Model/CreateFieldRequestAnyOf5OptionsResultAnyOfOptionsDateFormat.md)
- [CreateFieldRequestAnyOf6](docs/Model/CreateFieldRequestAnyOf6.md)
- [CreateFieldRequestAnyOf6Options](docs/Model/CreateFieldRequestAnyOf6Options.md)
- [CreateFieldRequestAnyOf7](docs/Model/CreateFieldRequestAnyOf7.md)
- [CreateFieldRequestAnyOf7Options](docs/Model/CreateFieldRequestAnyOf7Options.md)
- [CreateFieldRequestAnyOf8](docs/Model/CreateFieldRequestAnyOf8.md)
- [CreateFieldRequestAnyOf8Options](docs/Model/CreateFieldRequestAnyOf8Options.md)
- [CreateFieldRequestAnyOf8OptionsResult](docs/Model/CreateFieldRequestAnyOf8OptionsResult.md)
- [CreateFieldRequestAnyOf9](docs/Model/CreateFieldRequestAnyOf9.md)
- [CreateRecords200Response](docs/Model/CreateRecords200Response.md)
- [CreateRecords200ResponseAnyOf](docs/Model/CreateRecords200ResponseAnyOf.md)
- [CreateRecords200ResponseAnyOf1](docs/Model/CreateRecords200ResponseAnyOf1.md)
- [CreateRecordsRequest](docs/Model/CreateRecordsRequest.md)
- [CreateRecordsRequestRecordsInner](docs/Model/CreateRecordsRequestRecordsInner.md)
- [CreateScimGroupRequest](docs/Model/CreateScimGroupRequest.md)
- [CreateTableRequest](docs/Model/CreateTableRequest.md)
- [DateDependencySettings](docs/Model/DateDependencySettings.md)
- [DeleteBase200Response](docs/Model/DeleteBase200Response.md)
- [DeleteComment200Response](docs/Model/DeleteComment200Response.md)
- [DeleteMultipleRecords200Response](docs/Model/DeleteMultipleRecords200Response.md)
- [DeleteMultipleRecords200ResponseRecordsInner](docs/Model/DeleteMultipleRecords200ResponseRecordsInner.md)
- [DeleteUsersByEmail200Response](docs/Model/DeleteUsersByEmail200Response.md)
- [DeleteUsersByEmail200ResponseDeletedUsersInner](docs/Model/DeleteUsersByEmail200ResponseDeletedUsersInner.md)
- [DeleteUsersByEmail200ResponseErrorsInner](docs/Model/DeleteUsersByEmail200ResponseErrorsInner.md)
- [DeleteWorkspace200Response](docs/Model/DeleteWorkspace200Response.md)
- [EnableDisableWebhookNotificationsRequest](docs/Model/EnableDisableWebhookNotificationsRequest.md)
- [FieldConfig](docs/Model/FieldConfig.md)
- [FieldType](docs/Model/FieldType.md)
- [FieldTypeAndOptions](docs/Model/FieldTypeAndOptions.md)
- [FieldTypeAndOptionsAnyOf](docs/Model/FieldTypeAndOptionsAnyOf.md)
- [FieldTypeAndOptionsAnyOf1](docs/Model/FieldTypeAndOptionsAnyOf1.md)
- [FieldTypeAndOptionsAnyOf10](docs/Model/FieldTypeAndOptionsAnyOf10.md)
- [FieldTypeAndOptionsAnyOf11](docs/Model/FieldTypeAndOptionsAnyOf11.md)
- [FieldTypeAndOptionsAnyOf12](docs/Model/FieldTypeAndOptionsAnyOf12.md)
- [FieldTypeAndOptionsAnyOf13](docs/Model/FieldTypeAndOptionsAnyOf13.md)
- [FieldTypeAndOptionsAnyOf14](docs/Model/FieldTypeAndOptionsAnyOf14.md)
- [FieldTypeAndOptionsAnyOf15](docs/Model/FieldTypeAndOptionsAnyOf15.md)
- [FieldTypeAndOptionsAnyOf16](docs/Model/FieldTypeAndOptionsAnyOf16.md)
- [FieldTypeAndOptionsAnyOf17](docs/Model/FieldTypeAndOptionsAnyOf17.md)
- [FieldTypeAndOptionsAnyOf18](docs/Model/FieldTypeAndOptionsAnyOf18.md)
- [FieldTypeAndOptionsAnyOf19](docs/Model/FieldTypeAndOptionsAnyOf19.md)
- [FieldTypeAndOptionsAnyOf2](docs/Model/FieldTypeAndOptionsAnyOf2.md)
- [FieldTypeAndOptionsAnyOf20](docs/Model/FieldTypeAndOptionsAnyOf20.md)
- [FieldTypeAndOptionsAnyOf21](docs/Model/FieldTypeAndOptionsAnyOf21.md)
- [FieldTypeAndOptionsAnyOf22](docs/Model/FieldTypeAndOptionsAnyOf22.md)
- [FieldTypeAndOptionsAnyOf23](docs/Model/FieldTypeAndOptionsAnyOf23.md)
- [FieldTypeAndOptionsAnyOf24](docs/Model/FieldTypeAndOptionsAnyOf24.md)
- [FieldTypeAndOptionsAnyOf25](docs/Model/FieldTypeAndOptionsAnyOf25.md)
- [FieldTypeAndOptionsAnyOf26](docs/Model/FieldTypeAndOptionsAnyOf26.md)
- [FieldTypeAndOptionsAnyOf27](docs/Model/FieldTypeAndOptionsAnyOf27.md)
- [FieldTypeAndOptionsAnyOf28](docs/Model/FieldTypeAndOptionsAnyOf28.md)
- [FieldTypeAndOptionsAnyOf29](docs/Model/FieldTypeAndOptionsAnyOf29.md)
- [FieldTypeAndOptionsAnyOf3](docs/Model/FieldTypeAndOptionsAnyOf3.md)
- [FieldTypeAndOptionsAnyOf30](docs/Model/FieldTypeAndOptionsAnyOf30.md)
- [FieldTypeAndOptionsAnyOf31](docs/Model/FieldTypeAndOptionsAnyOf31.md)
- [FieldTypeAndOptionsAnyOf4](docs/Model/FieldTypeAndOptionsAnyOf4.md)
- [FieldTypeAndOptionsAnyOf5](docs/Model/FieldTypeAndOptionsAnyOf5.md)
- [FieldTypeAndOptionsAnyOf6](docs/Model/FieldTypeAndOptionsAnyOf6.md)
- [FieldTypeAndOptionsAnyOf7](docs/Model/FieldTypeAndOptionsAnyOf7.md)
- [FieldTypeAndOptionsAnyOf8](docs/Model/FieldTypeAndOptionsAnyOf8.md)
- [FieldTypeAndOptionsAnyOf9](docs/Model/FieldTypeAndOptionsAnyOf9.md)
- [GetBaseCollaborators200Response](docs/Model/GetBaseCollaborators200Response.md)
- [GetBaseCollaborators200ResponseCollaborators](docs/Model/GetBaseCollaborators200ResponseCollaborators.md)
- [GetBaseCollaborators200ResponseGroupCollaborators](docs/Model/GetBaseCollaborators200ResponseGroupCollaborators.md)
- [GetBaseCollaborators200ResponseIndividualCollaborators](docs/Model/GetBaseCollaborators200ResponseIndividualCollaborators.md)
- [GetBaseCollaborators200ResponseInterfacesValue](docs/Model/GetBaseCollaborators200ResponseInterfacesValue.md)
- [GetBaseCollaborators200ResponseInviteLinks](docs/Model/GetBaseCollaborators200ResponseInviteLinks.md)
- [GetBaseSchema200Response](docs/Model/GetBaseSchema200Response.md)
- [GetEnterprise200Response](docs/Model/GetEnterprise200Response.md)
- [GetEnterprise200ResponseAggregated](docs/Model/GetEnterprise200ResponseAggregated.md)
- [GetEnterprise200ResponseDescendantsValue](docs/Model/GetEnterprise200ResponseDescendantsValue.md)
- [GetEnterprise200ResponseEmailDomainsInner](docs/Model/GetEnterprise200ResponseEmailDomainsInner.md)
- [GetInterface200Response](docs/Model/GetInterface200Response.md)
- [GetInterface200ResponseGroupCollaborators](docs/Model/GetInterface200ResponseGroupCollaborators.md)
- [GetInterface200ResponseIndividualCollaborators](docs/Model/GetInterface200ResponseIndividualCollaborators.md)
- [GetScimGroup200Response](docs/Model/GetScimGroup200Response.md)
- [GetScimGroup200ResponseMembersInner](docs/Model/GetScimGroup200ResponseMembersInner.md)
- [GetUserById200Response](docs/Model/GetUserById200Response.md)
- [GetUserGroup200Response](docs/Model/GetUserGroup200Response.md)
- [GetUserGroup200ResponseMembersInner](docs/Model/GetUserGroup200ResponseMembersInner.md)
- [GetUserIdScopes200Response](docs/Model/GetUserIdScopes200Response.md)
- [GetUsersByIdOrEmail200Response](docs/Model/GetUsersByIdOrEmail200Response.md)
- [GetUsersByIdOrEmail200ResponseUsersInner](docs/Model/GetUsersByIdOrEmail200ResponseUsersInner.md)
- [GetUsersByIdOrEmail200ResponseUsersInnerAggregated](docs/Model/GetUsersByIdOrEmail200ResponseUsersInnerAggregated.md)
- [GetUsersByIdOrEmail200ResponseUsersInnerDescendantsValue](docs/Model/GetUsersByIdOrEmail200ResponseUsersInnerDescendantsValue.md)
- [GetWorkspaceCollaborators200Response](docs/Model/GetWorkspaceCollaborators200Response.md)
- [GetWorkspaceCollaborators200ResponseCollaborators](docs/Model/GetWorkspaceCollaborators200ResponseCollaborators.md)
- [GetWorkspaceCollaborators200ResponseGroupCollaborators](docs/Model/GetWorkspaceCollaborators200ResponseGroupCollaborators.md)
- [GetWorkspaceCollaborators200ResponseIndividualCollaborators](docs/Model/GetWorkspaceCollaborators200ResponseIndividualCollaborators.md)
- [GetWorkspaceCollaborators200ResponseInviteLinks](docs/Model/GetWorkspaceCollaborators200ResponseInviteLinks.md)
- [GetWorkspaceCollaborators200ResponseWorkspaceRestrictions](docs/Model/GetWorkspaceCollaborators200ResponseWorkspaceRestrictions.md)
- [GrantAdminAccess200Response](docs/Model/GrantAdminAccess200Response.md)
- [GrantAdminAccess200ResponseErrorsInner](docs/Model/GrantAdminAccess200ResponseErrorsInner.md)
- [GrantAdminAccessRequest](docs/Model/GrantAdminAccessRequest.md)
- [GrantAdminAccessRequestUsersInner](docs/Model/GrantAdminAccessRequestUsersInner.md)
- [GroupCollaborator](docs/Model/GroupCollaborator.md)
- [HyperdbDeleteRecordsByPrimaryKeysRequest](docs/Model/HyperdbDeleteRecordsByPrimaryKeysRequest.md)
- [HyperdbTableReadRecords200Response](docs/Model/HyperdbTableReadRecords200Response.md)
- [HyperdbTableReadRecords200ResponseRecordsInner](docs/Model/HyperdbTableReadRecords200ResponseRecordsInner.md)
- [HyperdbTableReadRecords200ResponseRecordsInnerFieldsValue](docs/Model/HyperdbTableReadRecords200ResponseRecordsInnerFieldsValue.md)
- [HyperdbTableReadRecordsRequest](docs/Model/HyperdbTableReadRecordsRequest.md)
- [HyperdbUpsertRecordsByPrimaryKeys200Response](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200Response.md)
- [HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromise](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromise.md)
- [HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOf](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOf.md)
- [HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOf1](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOf1.md)
- [HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOf1Err](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOf1Err.md)
- [HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOfValue](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOfValue.md)
- [HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOfValueCompressedResponse](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOfValueCompressedResponse.md)
- [HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOfValueCompressedResponseBuffer](docs/Model/HyperdbUpsertRecordsByPrimaryKeys200ResponseCompressedResponseDataResultPromiseAnyOfValueCompressedResponseBuffer.md)
- [HyperdbUpsertRecordsByPrimaryKeysRequest](docs/Model/HyperdbUpsertRecordsByPrimaryKeysRequest.md)
- [HyperdbUpsertRecordsByPrimaryKeysRequestRecordsInner](docs/Model/HyperdbUpsertRecordsByPrimaryKeysRequestRecordsInner.md)
- [HyperdbUpsertRecordsByPrimaryKeysRequestRecordsInnerFieldsValue](docs/Model/HyperdbUpsertRecordsByPrimaryKeysRequestRecordsInnerFieldsValue.md)
- [IndividualCollaborator](docs/Model/IndividualCollaborator.md)
- [InviteLink](docs/Model/InviteLink.md)
- [ListAuditLogRequests200Response](docs/Model/ListAuditLogRequests200Response.md)
- [ListBases200Response](docs/Model/ListBases200Response.md)
- [ListBases200ResponseBasesInner](docs/Model/ListBases200ResponseBasesInner.md)
- [ListBlockInstallations200ResponseInner](docs/Model/ListBlockInstallations200ResponseInner.md)
- [ListComments200Response](docs/Model/ListComments200Response.md)
- [ListComments200ResponseCommentsInner](docs/Model/ListComments200ResponseCommentsInner.md)
- [ListComments200ResponseCommentsInnerAuthor](docs/Model/ListComments200ResponseCommentsInnerAuthor.md)
- [ListComments200ResponseCommentsInnerReactionsInner](docs/Model/ListComments200ResponseCommentsInnerReactionsInner.md)
- [ListComments200ResponseCommentsInnerReactionsInnerEmoji](docs/Model/ListComments200ResponseCommentsInnerReactionsInnerEmoji.md)
- [ListComments200ResponseCommentsInnerReactionsInnerReactingUser](docs/Model/ListComments200ResponseCommentsInnerReactionsInnerReactingUser.md)
- [ListEdiscoveryExport200Response](docs/Model/ListEdiscoveryExport200Response.md)
- [ListEdiscoveryExport200ResponseExportsInner](docs/Model/ListEdiscoveryExport200ResponseExportsInner.md)
- [ListEdiscoveryExport200ResponseExportsInnerData](docs/Model/ListEdiscoveryExport200ResponseExportsInnerData.md)
- [ListEdiscoveryExport200ResponseExportsInnerRequest](docs/Model/ListEdiscoveryExport200ResponseExportsInnerRequest.md)
- [ListEdiscoveryExport200ResponseExportsInnerUser](docs/Model/ListEdiscoveryExport200ResponseExportsInnerUser.md)
- [ListRecords200Response](docs/Model/ListRecords200Response.md)
- [ListRecords200ResponseRecordsInner](docs/Model/ListRecords200ResponseRecordsInner.md)
- [ListRecordsSortParameterInner](docs/Model/ListRecordsSortParameterInner.md)
- [ListRecordsViewParameter](docs/Model/ListRecordsViewParameter.md)
- [ListScimGroups200Response](docs/Model/ListScimGroups200Response.md)
- [ListScimGroups200ResponseResourcesInner](docs/Model/ListScimGroups200ResponseResourcesInner.md)
- [ListScimUsers200Response](docs/Model/ListScimUsers200Response.md)
- [ListShares200Response](docs/Model/ListShares200Response.md)
- [ListShares200ResponseSharesInner](docs/Model/ListShares200ResponseSharesInner.md)
- [ListViews200Response](docs/Model/ListViews200Response.md)
- [ListViews200ResponseViewsInner](docs/Model/ListViews200ResponseViewsInner.md)
- [ListWebhookPayloads200Response](docs/Model/ListWebhookPayloads200Response.md)
- [ListWebhooks200Response](docs/Model/ListWebhooks200Response.md)
- [ListWebhooks200ResponseWebhooksInner](docs/Model/ListWebhooks200ResponseWebhooksInner.md)
- [ListWebhooks200ResponseWebhooksInnerSpecification](docs/Model/ListWebhooks200ResponseWebhooksInnerSpecification.md)
- [ManageBlockInstallationRequest](docs/Model/ManageBlockInstallationRequest.md)
- [ManageShareRequest](docs/Model/ManageShareRequest.md)
- [ManageUserBatched200Response](docs/Model/ManageUserBatched200Response.md)
- [ManageUserBatched200ResponseErrorsInner](docs/Model/ManageUserBatched200ResponseErrorsInner.md)
- [ManageUserBatched200ResponseUpdatedUsersInner](docs/Model/ManageUserBatched200ResponseUpdatedUsersInner.md)
- [ManageUserBatchedRequest](docs/Model/ManageUserBatchedRequest.md)
- [ManageUserBatchedRequestUsersInner](docs/Model/ManageUserBatchedRequestUsersInner.md)
- [ManageUserMembership200Response](docs/Model/ManageUserMembership200Response.md)
- [ManageUserMembership200ResponseErrorsInner](docs/Model/ManageUserMembership200ResponseErrorsInner.md)
- [ManageUserMembershipRequest](docs/Model/ManageUserMembershipRequest.md)
- [ManageUserMembershipRequestUsersInner](docs/Model/ManageUserMembershipRequestUsersInner.md)
- [ManageUserRequest](docs/Model/ManageUserRequest.md)
- [MoveBaseRequest](docs/Model/MoveBaseRequest.md)
- [MoveUserGroups200Response](docs/Model/MoveUserGroups200Response.md)
- [MoveUserGroups200ResponseErrorsInner](docs/Model/MoveUserGroups200ResponseErrorsInner.md)
- [MoveUserGroups200ResponseMovedGroupsInner](docs/Model/MoveUserGroups200ResponseMovedGroupsInner.md)
- [MoveUserGroupsRequest](docs/Model/MoveUserGroupsRequest.md)
- [MoveWorkspaces200Response](docs/Model/MoveWorkspaces200Response.md)
- [MoveWorkspaces200ResponseErrorsInner](docs/Model/MoveWorkspaces200ResponseErrorsInner.md)
- [MoveWorkspacesRequest](docs/Model/MoveWorkspacesRequest.md)
- [PatchScimGroupRequest](docs/Model/PatchScimGroupRequest.md)
- [PatchScimGroupRequestOperationsInner](docs/Model/PatchScimGroupRequestOperationsInner.md)
- [PatchScimUserRequest](docs/Model/PatchScimUserRequest.md)
- [PatchScimUserRequestOperationsInner](docs/Model/PatchScimUserRequestOperationsInner.md)
- [PostSyncApiEndpoint200Response](docs/Model/PostSyncApiEndpoint200Response.md)
- [PutScimGroupRequest](docs/Model/PutScimGroupRequest.md)
- [RefreshAWebhook200Response](docs/Model/RefreshAWebhook200Response.md)
- [RemoveUserFromEnterprise200Response](docs/Model/RemoveUserFromEnterprise200Response.md)
- [RemoveUserFromEnterprise200ResponseShared](docs/Model/RemoveUserFromEnterprise200ResponseShared.md)
- [RemoveUserFromEnterprise200ResponseSharedWorkspacesInner](docs/Model/RemoveUserFromEnterprise200ResponseSharedWorkspacesInner.md)
- [RemoveUserFromEnterprise200ResponseUnshared](docs/Model/RemoveUserFromEnterprise200ResponseUnshared.md)
- [RemoveUserFromEnterprise200ResponseUnsharedBasesInner](docs/Model/RemoveUserFromEnterprise200ResponseUnsharedBasesInner.md)
- [RemoveUserFromEnterprise200ResponseUnsharedInterfacesInner](docs/Model/RemoveUserFromEnterprise200ResponseUnsharedInterfacesInner.md)
- [RemoveUserFromEnterprise200ResponseUnsharedWorkspacesInner](docs/Model/RemoveUserFromEnterprise200ResponseUnsharedWorkspacesInner.md)
- [RemoveUserFromEnterpriseRequest](docs/Model/RemoveUserFromEnterpriseRequest.md)
- [RevokeAdminAccess200Response](docs/Model/RevokeAdminAccess200Response.md)
- [RevokeAdminAccess200ResponseErrorsInner](docs/Model/RevokeAdminAccess200ResponseErrorsInner.md)
- [RevokeAdminAccessRequest](docs/Model/RevokeAdminAccessRequest.md)
- [RevokeAdminAccessRequestUsersInner](docs/Model/RevokeAdminAccessRequestUsersInner.md)
- [SCIMUserSchema](docs/Model/SCIMUserSchema.md)
- [SCIMUserSchemaAddressesInner](docs/Model/SCIMUserSchemaAddressesInner.md)
- [SCIMUserSchemaEmailsInner](docs/Model/SCIMUserSchemaEmailsInner.md)
- [SCIMUserSchemaGroupsInner](docs/Model/SCIMUserSchemaGroupsInner.md)
- [SCIMUserSchemaName](docs/Model/SCIMUserSchemaName.md)
- [SCIMUserSchemaPhotosInner](docs/Model/SCIMUserSchemaPhotosInner.md)
- [SCIMUserSchemaUrnIetfParamsScimSchemasExtensionEnterprise20User](docs/Model/SCIMUserSchemaUrnIetfParamsScimSchemasExtensionEnterprise20User.md)
- [SCIMUserSchemaUrnIetfParamsScimSchemasExtensionEnterprise20UserManager](docs/Model/SCIMUserSchemaUrnIetfParamsScimSchemasExtensionEnterprise20UserManager.md)
- [Scope](docs/Model/Scope.md)
- [TableConfig](docs/Model/TableConfig.md)
- [TableModel](docs/Model/TableModel.md)
- [Timezone](docs/Model/Timezone.md)
- [UpdateCollaboratorBasePermissionRequest](docs/Model/UpdateCollaboratorBasePermissionRequest.md)
- [UpdateCommentRequest](docs/Model/UpdateCommentRequest.md)
- [UpdateFieldRequest](docs/Model/UpdateFieldRequest.md)
- [UpdateInterfaceCollaboratorRequest](docs/Model/UpdateInterfaceCollaboratorRequest.md)
- [UpdateMultipleRecords200Response](docs/Model/UpdateMultipleRecords200Response.md)
- [UpdateMultipleRecordsPut200Response](docs/Model/UpdateMultipleRecordsPut200Response.md)
- [UpdateMultipleRecordsPut200ResponseAnyOf](docs/Model/UpdateMultipleRecordsPut200ResponseAnyOf.md)
- [UpdateMultipleRecordsPut200ResponseAnyOf1](docs/Model/UpdateMultipleRecordsPut200ResponseAnyOf1.md)
- [UpdateMultipleRecordsPut200ResponseAnyOf1RecordsInner](docs/Model/UpdateMultipleRecordsPut200ResponseAnyOf1RecordsInner.md)
- [UpdateMultipleRecordsPut200ResponseAnyOfDetails](docs/Model/UpdateMultipleRecordsPut200ResponseAnyOfDetails.md)
- [UpdateMultipleRecordsPut200ResponseAnyOfRecordsInner](docs/Model/UpdateMultipleRecordsPut200ResponseAnyOfRecordsInner.md)
- [UpdateMultipleRecordsPutRequest](docs/Model/UpdateMultipleRecordsPutRequest.md)
- [UpdateMultipleRecordsPutRequestPerformUpsert](docs/Model/UpdateMultipleRecordsPutRequestPerformUpsert.md)
- [UpdateMultipleRecordsPutRequestRecordsInner](docs/Model/UpdateMultipleRecordsPutRequestRecordsInner.md)
- [UpdateRecordPut200Response](docs/Model/UpdateRecordPut200Response.md)
- [UpdateRecordPutRequest](docs/Model/UpdateRecordPutRequest.md)
- [UpdateTable200Response](docs/Model/UpdateTable200Response.md)
- [UpdateTable200ResponseFieldsInner](docs/Model/UpdateTable200ResponseFieldsInner.md)
- [UpdateTable200ResponseViewsInner](docs/Model/UpdateTable200ResponseViewsInner.md)
- [UpdateTableRequest](docs/Model/UpdateTableRequest.md)
- [UpdateWorkspaceCollaboratorRequest](docs/Model/UpdateWorkspaceCollaboratorRequest.md)
- [UpdateWorkspaceRestrictionsRequest](docs/Model/UpdateWorkspaceRestrictionsRequest.md)
- [UploadAttachment200Response](docs/Model/UploadAttachment200Response.md)
- [UploadAttachmentRequest](docs/Model/UploadAttachmentRequest.md)
- [UserMentioned](docs/Model/UserMentioned.md)
- [UserMentionedAnyOf](docs/Model/UserMentionedAnyOf.md)
- [UserMentionedAnyOf1](docs/Model/UserMentionedAnyOf1.md)
- [WebhooksAction](docs/Model/WebhooksAction.md)
- [WebhooksActionAnyOf](docs/Model/WebhooksActionAnyOf.md)
- [WebhooksActionAnyOf1](docs/Model/WebhooksActionAnyOf1.md)
- [WebhooksActionAnyOf2](docs/Model/WebhooksActionAnyOf2.md)
- [WebhooksActionAnyOf2SourceMetadata](docs/Model/WebhooksActionAnyOf2SourceMetadata.md)
- [WebhooksActionAnyOf3](docs/Model/WebhooksActionAnyOf3.md)
- [WebhooksActionAnyOf3SourceMetadata](docs/Model/WebhooksActionAnyOf3SourceMetadata.md)
- [WebhooksActionAnyOf4](docs/Model/WebhooksActionAnyOf4.md)
- [WebhooksActionAnyOf4SourceMetadata](docs/Model/WebhooksActionAnyOf4SourceMetadata.md)
- [WebhooksActionAnyOf5](docs/Model/WebhooksActionAnyOf5.md)
- [WebhooksActionAnyOf6](docs/Model/WebhooksActionAnyOf6.md)
- [WebhooksActionAnyOf7](docs/Model/WebhooksActionAnyOf7.md)
- [WebhooksActionAnyOfSourceMetadata](docs/Model/WebhooksActionAnyOfSourceMetadata.md)
- [WebhooksChangedRecordValue](docs/Model/WebhooksChangedRecordValue.md)
- [WebhooksChangedRecordValueCurrent](docs/Model/WebhooksChangedRecordValueCurrent.md)
- [WebhooksCreatedRecordValue](docs/Model/WebhooksCreatedRecordValue.md)
- [WebhooksNotification](docs/Model/WebhooksNotification.md)
- [WebhooksNotificationAnyOf](docs/Model/WebhooksNotificationAnyOf.md)
- [WebhooksNotificationAnyOf1](docs/Model/WebhooksNotificationAnyOf1.md)
- [WebhooksNotificationAnyOfError](docs/Model/WebhooksNotificationAnyOfError.md)
- [WebhooksPayload](docs/Model/WebhooksPayload.md)
- [WebhooksPayloadAnyOf](docs/Model/WebhooksPayloadAnyOf.md)
- [WebhooksPayloadAnyOf1](docs/Model/WebhooksPayloadAnyOf1.md)
- [WebhooksSpecification](docs/Model/WebhooksSpecification.md)
- [WebhooksSpecificationFilters](docs/Model/WebhooksSpecificationFilters.md)
- [WebhooksSpecificationFiltersSourceOptions](docs/Model/WebhooksSpecificationFiltersSourceOptions.md)
- [WebhooksSpecificationFiltersSourceOptionsFormPageSubmission](docs/Model/WebhooksSpecificationFiltersSourceOptionsFormPageSubmission.md)
- [WebhooksSpecificationFiltersSourceOptionsFormSubmission](docs/Model/WebhooksSpecificationFiltersSourceOptionsFormSubmission.md)
- [WebhooksSpecificationIncludes](docs/Model/WebhooksSpecificationIncludes.md)
- [WebhooksSpecificationIncludesIncludeCellValuesInFieldIds](docs/Model/WebhooksSpecificationIncludesIncludeCellValuesInFieldIds.md)
- [WebhooksTableChanged](docs/Model/WebhooksTableChanged.md)
- [WebhooksTableChangedChangedFieldsByIdValue](docs/Model/WebhooksTableChangedChangedFieldsByIdValue.md)
- [WebhooksTableChangedChangedFieldsByIdValueCurrent](docs/Model/WebhooksTableChangedChangedFieldsByIdValueCurrent.md)
- [WebhooksTableChangedChangedMetadata](docs/Model/WebhooksTableChangedChangedMetadata.md)
- [WebhooksTableChangedChangedMetadataCurrent](docs/Model/WebhooksTableChangedChangedMetadataCurrent.md)
- [WebhooksTableChangedChangedViewsByIdValue](docs/Model/WebhooksTableChangedChangedViewsByIdValue.md)
- [WebhooksTableChangedCreatedFieldsByIdValue](docs/Model/WebhooksTableChangedCreatedFieldsByIdValue.md)
- [WebhooksTableCreated](docs/Model/WebhooksTableCreated.md)
- [WebhooksTableCreatedMetadata](docs/Model/WebhooksTableCreatedMetadata.md)
- [WebhooksUser](docs/Model/WebhooksUser.md)
- [WorkspacePermissionLevels](docs/Model/WorkspacePermissionLevels.md)

## Authorization

Authentication schemes defined for the API:
### oauth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://airtable.com/oauth2/v1/authorize`
- **Scopes**: 
    - **block:manage**: Create new releases and submissions for custom extensions via the Blocks CLI.
    - **data.recordComments:read**: See comments in records
    - **data.recordComments:write**: Create, edit, and delete record comments
    - **data.records:manage**: Permanently delete records
    - **data.records:read**: See the data in records
    - **data.records:write**: Create, edit, and delete records
    - **enterprise.account:read**: View data about the enterprise account, including workspaces ids, users, groups and email domains
    - **enterprise.account:write**: Edit data about the enterprise account, including creating descendant enterprise accounts
    - **enterprise.auditLogs:read**: View the organization's audit logs
    - **enterprise.changeEvents:read**: View the organization's change events
    - **enterprise.exports:manage**: Manage the organization's data exports, including eDiscovery exports
    - **enterprise.groups:manage**: Manage user groups under the enterprise, including moving them
    - **enterprise.groups:read**: View information about user groups under the enterprise, their access, and their members
    - **enterprise.scim.usersAndGroups:manage**: Manage the organization's users and groups via SCIM APIs, including provisioning and deprovisioning them.
    - **enterprise.user:read**: View account information of users under the enterprise, including user id, name, email and bases user has access to
    - **enterprise.user:write**: Manage users under the enterprise account, including provisioning, deactivating and deleting users
    - **hyperDB.records:read**: Read records in the user's HyperDB tables
    - **hyperDB.records:write**: Write records to the user's HyperDB tables
    - **schema.bases:read**: See the structure of a base, like table names or field types
    - **schema.bases:write**: Edit the structure of a base, like adding new fields or tables
    - **user.email:read**: See the user's email address
    - **webhook:manage**: View, create, delete webhooks for a base, as well as fetch webhook payloads.
    - **workspacesAndBases.shares:manage**: View, enable, disable and delete share links for bases. Note: Share links can be used to view the data in the base.
    - **workspacesAndBases:manage**: Manage workspaces and bases under the enterprise, including moving them
    - **workspacesAndBases:read**: View metadata about workspaces, bases, and views including collaborators
    - **workspacesAndBases:write**: Edit metadata of workspaces and bases, including collaborators, invites, views, and extensions

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## License

Creative Commons Non-Commercial (CC BY-NC)
