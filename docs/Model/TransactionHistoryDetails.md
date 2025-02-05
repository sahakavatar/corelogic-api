# TransactionHistoryDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primary_category_code** | **string** | CoreLogic proprietary transaction classification code that identifies the type of transaction. | [optional] 
**primary_category_code_description** | **string** | Described value of the primaryCategoryCode. | [optional] 
**deed_category_code** | **string** | CoreLogic proprietary deed category type code that identifies the class of recorded legal document. | [optional] 
**deed_category_code_description** | **string** | Described value of the deedCategoryCode. | [optional] 
**sale_date_derived** | **string** | CoreLogic proprietary sale date derived from the original public record filing, representing the date that the Deed was prepared in advance of being notarized and prior to being recorded. Format: YYYYMMDD. | [optional] 
**sale_recording_date_derived** | **string** | CoreLogic proprietary sale recording date derived from the original public record filing, representing the date the sales transaction was recorded at the county. This date is generally considered the transfer of ownership date. Format: YYYYMMDD. | [optional] 
**sale_amount** | **float** | Dollar amount of the most recent sale of the property. | [optional] 
**sale_type_code** | **string** | This field indicates what the financial consideration is - if a Deed record represents a change of ownership (Sale). | [optional] 
**sale_type_code_description** | **string** | Described value of the saleTypeCode. | [optional] 
**sale_document_type_code** | **string** | The type of deed used to record the sales transaction (e.g., Grant, Quit, Foreclosure). | [optional] 
**sale_document_type_code_description** | **string** | Described value of the saleDocumentTypeCode. | [optional] 
**sale_document_number** | **string** | The document number used by some counties to record sales transactions - typically a Grant or Warranty Deed. | [optional] 
**sale_book_number** | **string** | The Book number used by some counties to catalog their sales recordings. | [optional] 
**sale_page_number** | **string** | The Page number used by some counties to catalog their sales recordings. | [optional] 
**ownership_transfer_percent** | **int** | A percentile showing the percentage of ownership transferred. | [optional] 
**multi_or_split_parcel_code** | **string** | CoreLogic standardized code that identifies which parcel is being referenced in a multiple or split parcel sale. Values: EMPTY/NULL &#x3D; Not applicable, M &#x3D; First parcel of a multiple parcel transaction, D &#x3D; Subsequent parcel of a multiple parcel transaction, S &#x3D; Single parcel transaction where parcel is annotated as a portion of or with other property, Z &#x3D; Multiple parcel transaction where parcel is annotated as a portion of or with other property. | [optional] 
**is_cash_purchase** | **int** | CoreLogic proprietary value that identifies if the property was a cash-based arms-length transaction. 0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**is_mortgage_purchase** | **int** | CoreLogic proprietary value that identifies if the property has a mortgage.0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**is_interfamily_related** | **int** | CoreLogic proprietary value that indicates if a potential relationship between the seller and the buyer of the property exists. This could be interfamily, intercompany, or trust transfer (non-arms length transaction).0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**is_investor_purchase** | **int** | CoreLogic proprietary value that indicates if the buyer bought the property for investment purposes. 0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**is_resale** | **int** | CoreLogic standardized value that indicates whether the transaction is considered a resale of an existing property. 0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**is_short_sale** | **int** | CoreLogic proprietary indicator that identifies if the property sale is considered a short sale.  0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**is_foreclosure_reo** | **int** | CoreLogic proprietary value that indicates whether the transaction was a completed foreclosure where the bank took back ownership of the property (REO).  0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 
**is_foreclosure_reo_sale** | **int** | CoreLogic proprietary value that indicates that the bank sold the REO to a third party. 0 &#x3D; not applicable, 1&#x3D; applicable. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

