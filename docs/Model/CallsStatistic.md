# CallsStatistic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_publisher_id** | **string** | ID of the account in the publisher network system | 
**calls** | **int** | Number of calls | [optional] [default to 0]
**calls_cost** | **double** | Total external cost of calls. Does NOT include network cost. | [optional] [default to 0.0]
**calls_duration** | **int** | Total duration of the calls, in seconds. | [optional] [default to 0]
**campaign_publisher_id** | **string** | ID of the campaign in the publisher network system. If provided, stats will also be linked to this campaign. | [optional] 
**date** | [**\DateTime**](Date.md) | Date of the statistic. Recommanded format is &#39;YYYY-MM-DD&#39; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


