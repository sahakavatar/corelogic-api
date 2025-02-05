# PaceBuyerMailingAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer_mailing_house_number** | **string** | The digits found to the left of a street name, representing the house number for the mailing address. | [optional] 
**buyer_mailing_house_number_suffix** | **string** | The characters found to the immediate right of a house number (e.g., 202B Jones Rd). | [optional] 
**buyer_mailing_house_number2** | **string** | The second set of numbers in an address range. | [optional] 
**buyer_mailing_direction** | **string** | This field represents the direction found to the left of the street name (e.g., 9340 N Dunhill Dr). AKA Directional Abbreviations, Pre-Directional. | [optional] 
**buyer_mailing_street_name** | **string** | The name or number of the street of the mailing address. | [optional] 
**buyer_mailing_mode** | **string** | The Mode or Type of street found to the right of the street name (e.g., 9340 N Dunhill Dr). AKA Street Designators / Street Suffixes. | [optional] 
**buyer_mailing_quadrant** | **string** | The quadrant is found to the right of Mailing Mode (e.g., 2040 NW 100 ST SW). AKA Post-Directional. | [optional] 
**buyer_mailing_unit_number** | **string** | The unit or suite number of the mailing address (e.g., 649 Lake Shore Dr #1400). | [optional] 
**buyer_mailing_city** | **string** | The city associated with the mailing address. | [optional] 
**buyer_mailing_state** | **string** | The two-letter USPS postal abbreviation associated with the state / protectorates / commonwealth (e.g., CA, VI, PR). | [optional] 
**buyer_mailing_zip_code** | **string** | Code assigned by the USPS. This is populated by various source files and other proprietary and non-proprietary processes. Data may be the 5-digit zip or 9-digit Zip+4 (e.g., 00501 or 954630042). | [optional] 
**buyer_mailing_carrier_route** | **string** | This is the four digit code used by the local mail carrier to identify the delivery path. | [optional] 
**buyer_mailing_street_address** | **string** | Full mail address (not including City/St/Zip) (e.g. 123 N Main St).  This also contains unparsed foreign mailing address. | [optional] 
**buyer_mailing_opt_out_indicator** | **string** | A \&quot;Y\&quot; represents a record where buyer has contacted the DMA (i.e., Direct Marketing Association) and has asked not to be contacted by mail for solicitation. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

