# PropertyAddressMatchInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_match_score** | **int** | Score ranging from 0 to 10 indicating the quality of the match between the request information and the found property information. Refer to Property Search User Guide for additional information. | [optional] 
**result_code** | **string** | CoreLogic standardized result of the lookup match based on the input property address information. Refer to Property Search User Guide Appendix B for additional information. | [optional] 
**match_code** | **string** | CoreLogic standardized code detailing how the provided property information (Address, APN, CLIP, Geocode) matched the found property. Refer to Property Search User Guide Appendix C for additional information. | [optional] 
**address_type** | **string** | The type of address identified by the CLIP system. Refer to Property Search User Guide for additional information. | [optional] 
**address_match_code** | **string** | CoreLogic standardized code defining the parameters of the address and latitude/longitude for the property found based on the customer input. | [optional] 
**address_match_code_description** | **string** | Textual description of the CoreLogic standardized address match code. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

