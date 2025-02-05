# TransactionHistoryBuyerDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer_names** | [**\Swagger\Client\Model\TransactionHistoryBuyerName[]**](TransactionHistoryBuyerName.md) |  | [optional] 
**relationship_type_code** | **string** | Relationship between multiple owners or marital status. | [optional] 
**relationship_type_code_description** | **string** | Described value of relationshipTypeCode. | [optional] 
**etal_code** | **string** | A code appearing in this field indicates additional ownership, whose name(s) were not provided by our sources. Values are: A &#x3D; ET AL - AND OTHERS C &#x3D; ET CON - AND HUSBAND U &#x3D; ET UX - AND WIFE V &#x3D; ET VIR - AND HUSBAND. | [optional] 
**occupancy_code** | **string** | CoreLogic derived code that indicates if the property buyer intends to reside  at the situs (property site). Values of M, O, and S indicate buyer occupied (A and T reflect absentee buyers). | [optional] 
**ownership_rights_code** | **string** | Form or method of property ownership (e.g., Joint Tenants, Living Trust). | [optional] 
**ownership_rights_code_description** | **string** | CoreLogic standardized description that indicates the type of vesting for current borrower or borrowers.). | [optional] 
**mailing_address** | [**\Swagger\Client\Model\MailingPropertyAddress**](MailingPropertyAddress.md) |  | [optional] 
**has_partial_interest** | **string** | An indicator showing the Owner/Buyer has a partial interest in the property. | [optional] 
**mailing_opt_out_indicator** | **string** | A \&quot;Y\&quot; represents a record where buyer has contacted the DMA (i.e., Direct Marketing Association) and has asked not to be contacted by mail for solicitation. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

